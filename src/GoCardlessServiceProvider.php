<?php

namespace IBroStudio\GoCardless;

use IBroStudio\GoCardless\Models\BankWire;
use IBroStudio\GoCardless\Models\DirectDebit;
use IBroStudio\GoCardless\Models\GoCardless;
use IBroStudio\PaymentMethodManager\Facades\PaymentMethodRegistry;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IBroStudio\GoCardless\Commands\GoCardlessCommand;

class GoCardlessServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('lunar-gocardless')
            ->hasConfigFile()
            ->hasViews()
            //->hasMigration('create_lunar_gocardless_table')
            ->hasCommand(GoCardlessCommand::class);
    }

    public function packageBooted()
    {
        PaymentMethodRegistry::register(
            gateway: GoCardless::class,
            methods: [
                DirectDebit::class,
                BankWire::class,
            ]
        );
    }
}
