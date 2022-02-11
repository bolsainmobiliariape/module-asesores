<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Asesores;

use Livewire\Component;
use Bolsainmobiliariape\ModuleAsesores\Models\Asesor;
use Livewire\WithPagination;
use App\Traits\WithSorting;
use Maatwebsite\Excel\Facades\Excel;
use Bolsainmobiliariape\ModuleAsesores\Exports\AsoresExport;

class Index extends Component
{
	use WithPagination;
    use WithSorting;

    public $idDelete;

    public function markAsContacted($id)
    {
        $asesor = Asesor::find($id);

        $asesor->contacted = !$asesor->contacted;

        $asesor->save();

    }

    public function delete()
    {
        Asesor::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Asesor eliminado con exito!']);
    }


	public function render()
	{
		return view('module-asesores::asesores.index', [
			'asesores' => Asesor::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
		])->layout('');
	}

    public function export()
    {
        return Excel::download(new AsesoresExport, 'Asesores.xlsx');
    }
}