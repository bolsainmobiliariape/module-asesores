<?php

namespace Bolsainmobiliariape\ModuleAsesores\Commands;

use Illuminate\Console\Command;

class ModuleAsesoresCommand extends Command
{
    public $signature = 'module:asesores';

    public $description = 'Publish config and migration';

    public function handle(): int
    {
        $this->callSilent('vendor:publish', ['--tag'=>'module-asesores-config']);
        $this->callSilent('vendor:publish', ['--tag'=>'module-asesores-migrations']);

        $this->comment('Published module-asesores config file and migration');

        return self::SUCCESS;
    }
}
