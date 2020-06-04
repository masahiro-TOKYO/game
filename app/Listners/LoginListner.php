<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use App\Notifications\Slack;
use App\Notification\Slack\SlackRepository;
use Illuminate\Support\Facades\Notification as FacNotification;

class LoginListener
{
    protected $slackRepository;

    /**
     * Create the event listener.
     *
     * @param Request $request
     * @param SlackRepository $slackRepository
     */
    public function __construct(Request $request, SlackRepository $slackRepository)
    {
        $this->request = $request;
        $this->slackRepository = $slackRepository;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //ログイン成功時の処理

        // リポジトリで通知を送信します。
        $this->slackRepository->notify(new Slack("リポジトリ:{$event->user->name}"));

        // ファサードで通知を送信します。
        FacNotification::route('slack', env('SLACK_WEBHOOK_URL'))
            ->notify(new Slack("ファサード:{$event->user->name}"));

        // モデルで通知を送信します。
        $event->user->notify(new Slack("モデル:{$event->user->name}"));
    }
}