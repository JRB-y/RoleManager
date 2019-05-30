<?php
namespace Jrb\RoleManager\Test;

use Jrb\RoleManager\RoleManagerServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Jrb\RoleManager\RoleManagerServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [RoleManagerServiceProvider::class];
    }
}