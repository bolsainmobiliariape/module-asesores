<div>
    <x-details title="Detalles de Aplicante" description="Muestra los detalles que el cliente llenó en el formulario">
        <x-slot name="action">
            <input wire:click="markAsContacted({{$applicant->id}})" type="checkbox" name="contacted"  {{ $applicant->contacted ? 'checked': ''}}> Contactado
        </x-slot>
        @foreach(config('module-asesores.applicants.fields') as $key => $item)
        <x-details.item :title="$names[$item]" :description="$applicant->{$item}" :gray="$key%2!==0?true:false" />
        @endforeach

        <x-details.item title="Fecha / Hora" :description="$applicant->created_at->format('d-m-Y / H:i')" />
    </x-details>
</div>