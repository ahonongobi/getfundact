@component('mail::message')
# Message alerte

{{$message2}}

@component('mail::button', ['url' => 'https://getfundact.com/login'])
Se connecter pour valider
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
