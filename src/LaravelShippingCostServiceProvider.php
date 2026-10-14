<?php

namespace Edwinpeligro85\LaravelShippingCost;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Edwinpeligro85\LaravelShippingCost\Commands\LaravelShippingCostCommand;

class LaravelShippingCostServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shipping-cost')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_shipping-cost_table')
            ->hasCommand(LaravelShippingCostCommand::class);
    }
}
