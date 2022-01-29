<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create()
    {
        return view('user.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('users')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('slack')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('slack')->stateless()->user();

        $id     = $user->getId();
        $email  = $user->getEmail();
        $name   = $user->getName();
        $avatar = $user->getAvatar();

        if (is_null($user->email)) throw new Exception("Slackアカウントからメールアドレスを取得できませんでした。");

        $user = User::updateOrCreate([
            'email' => $email
        ], [
            'slack_id' => $id,
            'email'    => $email,
            'name'     => $name,
            'avatar'   => $avatar,
            'password' => Hash::make(Str::random())
        ]);
        auth()->login($user);
        session()->flash('ログインしました。');

        return redirect()->route('user.dashboard');
    }
}
