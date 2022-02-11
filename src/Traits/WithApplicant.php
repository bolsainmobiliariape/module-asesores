<?php

namespace Bolsainmobiliariape\ModuleAsesores\Traits;

use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;

trait WithApplicant
{
	public $applicant;

	public function mount (Applicant $applicant)
	{
		$this->applicant = $applicant;
	}

	public function rules()
	{
		return config('module-asesores.applicants.rules');
	}

	public function store()
	{
		$this->validate();

		$this->applicant->save();

		$this->doingAfter();
	}

	public function doingAfter()
	{

	}
}