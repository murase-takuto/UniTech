<?php

namespace App\Services\Slack;

use Illuminate\Notifications\Notifiable;
use App\Notifications\SlackNotification;

class SlackService {
    use Notifiable;

    public function send($channel = null, $message = null, $attatchment = null) {
        $this->notify(new SlackNotification($channel, $message, $attatchment));
    }

    public function routeNotificationForSlack() {
        return config('app.slack_url');
    }
}