<?php

namespace App\Providers;

use App\Models\ReadingLog;
use App\Observers\ReadingLogObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ReadingLog::observe(ReadingLogObserver::class);
    }
}
