<?php

namespace Bolsainmobiliariape\ModuleAsesores\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;

class ApplicantsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicant;

    public function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    public function build()
    {
        return $this->markdown('module-asesores::mails.applicants-mail');
    }
}
