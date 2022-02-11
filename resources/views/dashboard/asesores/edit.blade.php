<x-panel title="Informacion del articulo" description="Llene todos los campos">
    <div class="col-span-6">
        <x-form.image-field wire:model="picture" name="picture" :path="isset($asesor->picture) ? (string) url(Storage::url($asesor->picture)) : 'null'" :required="empty($asesor->id)"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="text" label="Nombre" identifier="asesor.name" name="asesor.name" wire:model="asesor.name"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="email" label="Email" identifier="asesor.email" name="asesor.email" wire:model="asesor.email"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="text" label="Telefono" identifier="asesor.phone" name="asesor.phone" wire:model="asesor.phone"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="text" label="Whatsapp" identifier="asesor.whatsapp" name="asesor.whatsapp" wire:model="asesor.whatsapp"/>
    </div>
</x-panel>