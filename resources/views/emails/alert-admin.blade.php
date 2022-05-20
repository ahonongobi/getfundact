@component('mail::message')
# Alert de demande de rétrait de {{$email}}
{{$message}}
Montant: {{$amount}} FCFA

Merci,<br>
{{ config('app.name') }}
@endcomponent
