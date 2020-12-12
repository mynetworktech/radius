<?php

namespace MyNetworkTech\Radius;

use Illuminate\Support\ServiceProvider;

class RadiusServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/radius.php.php', 'radius'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/radius.php' => config_path('radius.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}