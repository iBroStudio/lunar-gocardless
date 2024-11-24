<?php

namespace IBroStudio\GoCardless;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IBroStudio\GoCardless\Commands\GoCardlessCommand;

class GoCardlessServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lunar-gocardless')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lunar_gocardless_table')
            ->hasCommand(GoCardlessCommand::class);
    }
}
