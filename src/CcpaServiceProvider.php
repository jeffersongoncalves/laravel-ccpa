<?php

namespace JeffersonGoncalves\Ccpa;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-ccpa')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
