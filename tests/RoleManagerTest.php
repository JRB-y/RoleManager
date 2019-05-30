<?php
namespace Jrb\RoleManager\Test;
use Jrb\RoleManager\RoleManagerServiceProvider;
use Orchestra\Testbench\TestCase;

class RoleManagerTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function startThePakage()
    {
        $this->assertSame(RoleManagerServiceProvider::class, 'Jrb\RoleManager\RoleManagerServiceProvider');
        
    }
}