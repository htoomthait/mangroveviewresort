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
        // Force HTTPS when explicitly enabled via FORCE_HTTPS env variable
        if (env('FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }
    }
}
