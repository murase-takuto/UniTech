<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;

class SlackNotification extends Notification
{
    use Queueable;

    protected $channel;
    protected $message;
    protected $attachment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($channel = null, $message = null, $attachment = null)
    {
        $this->channel = $channel;
        $this->message = $message;
        $this->attachment = $attachment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toSlack($notifiable)
    {
        $message = (new SlackMessage)
            ->to($this->channel)
            ->content($this->message);

        if (!is_null($this->attachment) && is_array($this->attachment)) {
            $message->attachment(function ($attachment) {
                if (isset($this->attachment['title']))      $attachment->title($this->attachment['title'], $this->attachment['url']);
                if (isset($this->attachment['pretext']))    $attachment->pretext($this->attachment['pretext']);
                if (isset($this->attachment['content']))    $attachment->content($this->attachment['content']);
                if (isset($this->attachment['fallback']))   $attachment->fallback($this->attachment['fallback']);
                if (isset($this->attachment['color']))      $attachment->color($this->attachment['color']);
                if (isset($this->attachment['markdown']))   $attachment->markdown($this->attachment['markdown']);
                if (isset($this->attachment['imageUrl']))   $attachment->image($this->attachment['imageUrl']);
                if (isset($this->attachment['thumbUrl']))   $attachment->thumb($this->attachment['thumbUrl']);
                if (isset($this->attachment['footer']))     $attachment->footer($this->attachment['footer']);
                if (isset($this->attachment['footerIcon'])) $attachment->footerIcon($this->attachment['footerIcon']);
                if (isset($this->attachment['callbackId'])) $attachment->callbackId($this->attachment['callbackId']);
                if (isset($this->attachment['field']) && is_array($this->attachment['field'])) {
                    foreach($this->attachment['field'] as $k => $v) {
                        $attachment->field($k, $v);
                    }
                }
                if (isset($this->attachment['action']) && is_array($this->attachment['action'])) {
                    $attachment->action($this->attachment['action']['title'], $this->attachment['action']['url'], $this->attachment['action']['style']);
                }
                if (isset($this->attachment['author']) && is_array($this->attachment['author'])) {
                    $attachment->author($this->attachment['author']['name'], $this->attachment['author']['url'], $this->attachment['author']['icon']);
                }
            });
        }
        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
