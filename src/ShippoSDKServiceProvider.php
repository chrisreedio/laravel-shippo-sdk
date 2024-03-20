<?php

namespace ChrisReedIO\ShippoSDK;

use ChrisReedIO\ShippoSDK\Commands\ShippoSDKCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShippoSDKServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shippo-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-shippo-sdk_table')
            ->hasCommand(ShippoSDKCommand::class);
    }
}
