<?php

namespace Module\Demo\Providers;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'module-demo');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

    }
}