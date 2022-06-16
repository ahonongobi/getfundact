@component('mail::message')
# Message alerte

{{$message}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
