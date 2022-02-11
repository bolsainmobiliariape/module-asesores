<?php

namespace Bolsainmobiliariape\ModuleAsesores\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
	protected $table = "applicants";

    public function getFillable()
    {
        return config('module-asesores.applicants.fields');
    }
}