<?php

namespace Jrb\RoleManager;

use Illuminate\Support\ServiceProvider;

class RoleManagerServiceProvider extends ServiceProvider{

    public function boot()
    {
        // publish configuration
        // publish configuration
        $this->publishes([
            __DIR__.'/config/roles.php' => config_path('roles.php'),
        ], 'roles');

        // migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
        //
    }
}