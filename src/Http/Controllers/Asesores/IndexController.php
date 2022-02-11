<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Controllers\Asesores;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index()
	{
		return view('module-asesores::dashboard.asesores.indexwrapper');
	}

	public function create()
    {
        return view('module-asesores::dashboard.asesores.editwrapper', ['asesor'=>new asesor()]);
    }

    public function edit(Asesor $asesor)
    {
        return view('module-asesores::dashboard.asesores.editwrapper', ['asesor'=>$asesor]);
    }
}