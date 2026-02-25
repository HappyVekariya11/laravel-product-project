<?php

namespace App\Listeners;

use App\Events\SomeoneCheckedProfile;
use App\Jobs\SendProfileCheckedMailJob;
use App\Models\Dosa;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendProfileCheckedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct(public Dosa $user)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SomeoneCheckedProfile $event): void
    {
        $delay=now()->addSeconds(6);
        //Log::info('Event dispatching...');
        SendProfileCheckedMailJob::dispatch($event->user)->delay($delay);
    }
}
