<?php

namespace Blijnder\LaravelAtlas\Tests;

use Orchestra\Testbench\TestCase;
use Blijnder\LaravelAtlas\LaravelAtlasServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAtlasServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
