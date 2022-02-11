<?php

namespace Bolsainmobiliariape\ModuleAsesores;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleAsesores\Commands\ModuleAsesoresCommand;

class ModuleAsesoresServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('module-asesores')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module_asesores_table')
            ->hasRoute('asesores');
    }
}
