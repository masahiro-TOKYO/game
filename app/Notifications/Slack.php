<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;

use Config;

class Slack extends Notification
{
    use Queueable;

    protected $content;
    protected $channel;
    protected $name;

    /**
     * Create a new notification instance.
     * @param string $message
     * @return void
     */
    public function __construct(string $message='no message')
    {
        $this->channel  = Config::get('slack.channel');
        $this->name     = Config::get('slack.name');
        $this->content  = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return \App::environment('local') ? ['slack'] : ['mail'];
        return ['slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
  
        return (new SlackMessage)
            ->from($this->name, ':ghost:')
            ->to($this->channel)
            ->content($this->content);
    }

}