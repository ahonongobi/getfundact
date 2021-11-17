@component('mail::message')



Bonjour {{$name}},

{{$message}}



L'équipe getfund-act,<br>
{{ config('app.name') }}
@endcomponent
