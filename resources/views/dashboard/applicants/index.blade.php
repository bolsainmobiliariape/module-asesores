<div x-data="{openModal: false}" class="dark:bg-gray-800">

    <div class="">

        <button wire:click="export">Exportar</button>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <x-table.table>
                    <x-slot name="head">                        
                        <x-table.heading>#</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('contacted')" :direction="$sortField === 'contacted' ? $sortDirection : null">Contactado</x-table.heading>
                        <x-table.heading>Nombre</x-table.heading>
                        <x-table.heading>Telefono</x-table.heading>
                        <x-table.heading>Email</x-table.heading>
                        <x-table.heading>Fecha / Hora</x-table.heading>
                        <x-table.heading>Acciones</x-table.heading>
                    </x-slot>

                    <x-slot name="body">
                        @forelse($applicants as $key => $applicant)
                            <x-table.row wire:loading.class="opacity-50">
                                <x-table.cell>
                                    {{$applicant->id}}
                                </x-table.cell>
                                <x-table.cell>
                                    <input wire:click="markAsContacted({{$applicant->id}})" type="checkbox" name="contacted"  {{ $applicant->contacted ? 'checked': ''}}>
                                </x-table.cell>
                                 <x-table.cell>
                                    {{ $applicant->name }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $applicant->phone }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $applicant->email }}
                                </x-table.cell>
                               
                                <x-table.cell>
                                    {{ $applicant->created_at->format('d-m-Y / H:i') }}
                                </x-table.cell>
                                <x-table.cell>
                                    <a href="{{ route('dashboard.applicants.show', $applicant->id) }}" class="px-4 py-2 text-md bg-blue-500 text-white rounded-md hover:bg-green-700">Ver</a>

                                    <button wire:click="$set('idDelete', {{$applicant->id}})" x-on:click="openModal = true" class="appearance-none text-md px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button>
                                    
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="7">
                                    <div class="flex justify-center items-center text-xl font-bold text-gray-500">No hay
                                        resultados...
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table.table>

                <x-modal />
            </div>
        </div>
    </div>
</div>