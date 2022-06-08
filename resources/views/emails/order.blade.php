@component('mail::message')
# {{$name}}

{{$message}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
