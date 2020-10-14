<?php

namespace rckildea\BetterDebug\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use rckildea\BetterDebug\TabServiceProvider;

abstract class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [
            TabServiceProvider::class,
        ];
    }
}
