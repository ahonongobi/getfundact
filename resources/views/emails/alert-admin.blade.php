@component('mail::message')
# Alert de demande de retrait de {{$email}}
{{$message}}
Montant: {{$amount}} FCFA

Merci,<br>
{{ config('app.name') }}
@endcomponent
