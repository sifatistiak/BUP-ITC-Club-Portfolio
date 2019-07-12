<?php

namespace App\Jobs;

use App\Notifications\SendMeetingEmailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMeetingEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user;
    private $meeting;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user,$meeting)
    {
        $this->user = $user;
        $this->meeting = $meeting;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->user->notify(new SendMeetingEmailNotification($this->meeting));
    }
}
