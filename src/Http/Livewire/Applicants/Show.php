<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Applicants;

use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;
use Livewire\Component;

class Show extends Component
{

    public Applicant $applicant;

    public $names;


    public function markAsContacted($id)
    {
        $applicant = Applicant::find($id);

        $applicant->contacted = !$applicant->contacted;

        $applicant->save();
    }

    public  function mount()
    {
        $this->names = config('module-asesores.applicants.names');
    }

    public function render()
    {
        return view('module-asesores::dashboard.applicants.show')
            ->layoutData(['header' => 'Aplicantes / Detalle']);
    }
}