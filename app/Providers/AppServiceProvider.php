<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Debugbar is registered automatically in dev environments
        // No need to manually register if not using dont-discover
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Force HTTPS in production
        if ($this->app->environment('production') || env('FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }
    }
}
