<?php

namespace Jrb\RoleManager;

use Illuminate\Support\ServiceProvider;

/**
 * Class RoleManagerServiceProvider
 * @package Jrb\RoleManager
 */
class RoleManagerServiceProvider extends ServiceProvider{

    /**
     * Boot the Service.
     *
     * Publish the Configuration and the Migrations
     */
    public function boot()
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    /**
     * Register the Service.
     *
     * Load the Helpers.
     */
    public function register()
    {
        $this->loadHelpers();
    }

    /**
     * Publish the configuration file (roles.php)
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/config/roles.php' => config_path('roles.php'),
        ], 'roles');
    }

    /**
     * Publish the migrations.
     *
     * Roles table and Role User pivot table.
     */
    protected function publishMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     *  Load all the helper functions files from the Helper dir.
     */
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename)
        {
            require_once $filename;
        }
    }

}