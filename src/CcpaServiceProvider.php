<?php

namespace JeffersonGoncalves\Ccpa;

use JeffersonGoncalves\Ccpa\Commands\InventoryCommand;
use JeffersonGoncalves\Ccpa\Commands\KAnonymityCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('ccpa')
            ->hasConfigFile()
            ->hasCommands([InventoryCommand::class, KAnonymityCommand::class]);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(Ccpa::class);
    }
}
