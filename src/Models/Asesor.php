<?php

namespace Bolsainmobiliariape\ModuleAsesores\Models;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
	protected $table = "asesors";

    public function getFillable()
    {
        return config('module-asesores.asesores.fields');
    }
}