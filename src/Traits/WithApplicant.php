<?php

namespace Bolsainmobiliariape\ModuleAsesores\Traits;

trait WithApplicant
{
	public $applicant;

	public function mount (Applicant $applicant)
	{
		$this->applicant = $applicant;
	}

	public function rules()
	{
		return config('module-asesores.applicants.fields');
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