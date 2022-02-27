<?php

namespace Bolsainmobiliariape\ModuleAsesores\Traits;

use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;
use Bolsainmobiliariape\ModuleAsesores\Mail\ApplicantsMail;
use App\Traits\WithSendMails;

trait WithApplicant
{
	use WithSendMails;

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

		if(env('MAIL', false)){
			$this->sendMail('Nuevo aplicante - '. config('app.name'), $this->applicant, ApplicantsMail::class);
		}

		$this->doingAfter();
	}

	public function doingAfter()
	{

	}
}