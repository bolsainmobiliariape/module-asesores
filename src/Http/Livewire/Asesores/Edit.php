<?php

namespace Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Asesores;

use Bolsainmobiliariape\ModuleAsesores\Models\Asesor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    public Asesor $asesor;

    public $picture;

    public function mount($asesor)
    {
        $this->asesor = $asesor;
    }

    public function rules()
    {
        return config('module-asesores.asesores.rules');
    }

    public function store()
    {
        $this->validate();

        if($this->picture){
            if($this->asesor->picture){
                Storage::delete($this->asesor->picture);
            }
            $this->asesor->picture = $this->picture->store('public/asesores');
        }

        if($this->asesor->isDirty()){
            $this->asesor->save();

            $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Se ha guardado con exito!']);
            return ;
        }

        $this->dispatchBrowserEvent('notice', ['type'=>'info','text'=> 'No hay nada que guardar']);
    }

    public function render()
    {
        return view('module-Asesores::dashboard.asesores.edit')->layoutData(['header' => "Asesores / Form"]);
    }
}