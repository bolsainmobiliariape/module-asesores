@component('mail::message')
# Nuevos datos desde el formulario de Asesores - {{ config('app.name') }}

@component('mail::panel')

@foreach(config('module-asesores.applicants.names') as  $key => $name)
- {{ $name }}: {{ $applicant->{$key} }}
@endforeach

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
