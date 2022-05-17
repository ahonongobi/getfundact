@component('mail::message')
# Votre campagne a été activé

{{$message}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
