@component('mail::message')
# Votre code de vérification

{{$message}}


Merci,<br>
{{ config('app.name') }}
@endcomponent
