<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's scheduled tasks.
     */
    protected function schedule(Schedule $schedule): void
    {
        // You can add scheduler tasks here
        // For example: $schedule->command('inspire')->hourly();
    }

    /**
     * Register the application's console commands.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
