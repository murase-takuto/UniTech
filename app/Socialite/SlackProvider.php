<?php

namespace App\Socialite;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Arr;
use Nette\InvalidStateException;
use Psr\Http\Message\ResponseInterface;

class SlackProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * Unique Provider Identifier.
     */
    public const IDENTIFIER = 'SLACK';

    public function getScopes()
    {
        if (count($this->scopes) > 0) return $this->scopes;
        // Provide some default scopes if the user didn't define some.
        // See: https://github.com/SocialiteProviders/Providers/pull/53
        return ['identity.basic', 'identity.email', 'identity.team', 'identity.avatar'];
    }

    /**
     * Middleware that throws exceptions for non successful slack api calls
     * "http_error" request option is set to true.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    private function getSlackApiErrorMiddleware()
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options['http_errors'])) return $handler($request, $options);
                return $handler($request, $options)->then(
                    function (ResponseInterface $response) use ($request) {
                        $body = json_decode((string) $response->getBody(), true);
                        $response->getBody()->rewind();
                        if ($body['ok']) return $response;
                        throw RequestException::create($request, $response);
                    }
                );
            };
        };
    }

    public function user()
    {
        if ($this->user) return $this->user;
        if ($this->hasInvalidState()) throw new InvalidStateException();

        $response = $this->getAccessTokenResponse($this->getCode());

        $this->user = $this->mapUserToObject($this->getUserByToken(
            $token = Arr::get($response, 'authed_user.access_token')
        ));

        return $this->user->setToken($token)
                    ->setRefreshToken(Arr::get($response, 'refresh_token'))
                    ->setExpiresIn(Arr::get($response, 'expires_in'));
    }

    protected function getHttpClient()
    {
        $handler = HandlerStack::create();
        $handler->push($this->getSlackApiErrorMiddleware(), 'slack_api_errors');
        if (is_null($this->httpClient)) $this->httpClient = new Client(['handler' => $handler]);
        return $this->httpClient;
    }

    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase(
            'https://slack.com/oauth/authorize',
            $state
        );
    }

    protected function getTokenUrl()
    {
        return 'https://slack.com/api/oauth.v2.access';
    }

    protected function getUserByToken($token)
    {
        try {
            $response = $this->getHttpClient()->get(
                'https://slack.com/api/users.identity',
                [
                    RequestOptions::HEADERS => [
                        'Authorization' => 'Bearer ' . $token,
                    ],
                ]
            );
        } catch (RequestException $exception) {
            // Getting user informations requires the "identity.*" scopes, however we might want to not add them to the
            // scope list for various reasons. Instead of throwing an exception on this error, we return an empty user.
            if ($exception->hasResponse()) {
                $data = json_decode((string) $exception->getResponse()->getBody(), true);

                if (Arr::get($data, 'error') === 'missing_scope') return [];
            }
            throw $exception;
        }

        return json_decode((string) $response->getBody(), true);
    }

    protected function mapUserToObject(array $user)
    {
        return (new User())->setRaw($user)->map([
            'id'              => Arr::get($user, 'user.id'),
            'name'            => Arr::get($user, 'user.name'),
            'email'           => Arr::get($user, 'user.email'),
            'avatar'          => Arr::get($user, 'user.image_192'),
            'organization_id' => Arr::get($user, 'team.id'),
        ]);
    }
}
