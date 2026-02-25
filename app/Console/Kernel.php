<?php

namespace App\Console;

use App\Jobs\SendProfileCheckedMailJob;
use App\Models\Dosa;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $user=Dosa::inRandomOrder()->first();
        $schedule->job(new SendProfileCheckedMailJob($user))->everyminute();
        $schedule->command("queue:work --stop-when-empty")->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
