<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Applicants;

use Bolsainmobiliariape\ModuleAsesores\Models\Applicant;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;
use Maatwebsite\Excel\Facades\Excel;
use Bolsainmobiliariape\ModuleAsesores\Exports\ApplicantsExport;

class Index extends Component
{
    use WithPagination;
    use WithSorting;

    public $idDelete;

    public function mount()
    {
        $this->sortField = "contacted";
    }

    public function markAsContacted($id)
    {
        $applicant = Applicant::find($id);

        $applicant->contacted = !$applicant->contacted;

        $applicant->save();

    }
    
    public function delete()
    {
        Applicant::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Aplicante ha eliminado con exito!']);
    }

    public function render()
    {
        return view('module-asesores::dashboard.applicants.index', [
            'applicants' => Applicant::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ])->layoutData(['header'=>'Proyectos']);
    }


    public function export()
    {
        return Excel::download(new ApplicantsExport, 'Aplicantes.xlsx');
    }
}