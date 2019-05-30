<?php

namespace Jrb\RoleManager;

use Illuminate\Support\ServiceProvider;

class RoleManagerServiceProvider extends ServiceProvider{

    public function boot()
    {
        // publish configuration
        $this->publishes([
            __DIR__.'/config/roles.php' => config_path('roles.php'),
        ]);
    }

    public function register()
    {
        //
    }
}