@component('mail::message')
# Votre code de vérification

{{$message}}


Mserci,<br>
{{ config('app.name') }}
@endcomponent
