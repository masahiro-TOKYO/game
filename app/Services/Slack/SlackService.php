<?php
namespace App\Services\Slack;

use Illuminate\Notifications\Notifiable;
use App\Notifications\Slack;

use Config;

class SlackService
{
    use Notifiable;

    public function send($message = null, $attachment = null)
    {
        $this->notify(new Slack($message, $attachment));
    }

    protected function routeNotificationForSlack()
    {
        return Config::get('slack.webhook_url');
    }
}