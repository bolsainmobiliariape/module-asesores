<?php

namespace Bolsainmobiliariape\ModuleAsesores\Exports;

use Bolsainmobiliariape\ModuleAsesores\Models\Asesor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AsesoresExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $arra = config('module-asesores.asesores.fields');

        $merge = array_merge(array('id'), $arra);
        $merge = array_merge($merge, array('created_at'));
        return Asesor::select($merge)->get();
    }

    public function headings() : array
    {
        $arra = config('module-asesores.asesores.fields');

        $merge = array_merge(array('id'), $arra);
        $merge = array_merge($merge, array('Hora / Fecha'));
        return $merge;
    }
}
