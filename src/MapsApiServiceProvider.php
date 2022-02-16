<?php

namespace Abbas-bz\MapsApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Abbas-bz\MapsApi\Commands\MapsApiCommand;

class MapsApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('maps-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_maps-api_table')
            ->hasCommand(MapsApiCommand::class);
    }
}
