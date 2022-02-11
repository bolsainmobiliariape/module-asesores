<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Asesores;

use Livewire\Component;
use Bolsainmobiliariape\ModuleAsesores\Models\Asesor;
use Livewire\WithPagination;
use App\Traits\WithSorting;

class Index extends Component
{
	use WithPagination;
    use WithSorting;

    public $idDelete;

    public function delete()
    {
        Asesor::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Asesor eliminado con exito!']);
    }


	public function render()
	{
		return view('module-asesores::asesores.index', [
			'asesores' => Asesor::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
		]);
	}

}