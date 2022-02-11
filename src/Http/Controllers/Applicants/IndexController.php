<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;

use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;

class IndexController extends Controller
{
	public function index()
	{
		return view('module-asesores::dashboard.applicants.indexwrapper');
	}
}