<?php

namespace Bolsainmobiliariape\ModuleAsesores;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleAsesores\Commands\ModuleAsesoresCommand;
use Livewire\Livewire;

use Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Asesores\Index;
use Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Asesores\Edit;
use Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Applicants\Index as ApplicantsIndex;
use Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Applicants\Show as ApplicantsShow;



class ModuleAsesoresServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        Livewire::component('dashboard.asesores.index', Index::class);
        Livewire::component('dashboard.asesores.edit', Edit::class);

        Livewire::component('dashboard.applicants.index', ApplicantsIndex::class);
        Livewire::component('dashboard.applicants.show', ApplicantsShow::class);

    }

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
