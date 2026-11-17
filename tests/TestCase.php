<?php

namespace JeffersonGoncalves\Ccpa\Tests;

use JeffersonGoncalves\Ccpa\CcpaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CcpaServiceProvider::class,
        ];
    }
}
