<?php

namespace Bolsainmobiliariape\ModuleAsesores\Commands;

use Illuminate\Console\Command;

class ModuleAsesoresCommand extends Command
{
    public $signature = 'module-asesores';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
