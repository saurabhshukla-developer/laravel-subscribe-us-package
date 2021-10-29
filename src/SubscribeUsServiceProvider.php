<?php

namespace SaurabhshuklaDeveloper\LaravelSubscribeUs;

use Illuminate\Support\ServiceProvider;

class SubscribeUsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'laravel-subscribe-us');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/laravel-subscribe-us'),
        ]);
    }

    public function register()
    {
        # code...
    }
}