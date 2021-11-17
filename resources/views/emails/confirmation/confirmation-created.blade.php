@component('mail::message')
# {{$name}}

{{$message}}

@component('mail::button', ['url' => ''])
Se conncter
@endcomponent

Cordialement Merci,<br>
{{ config('app.name') }}
@endcomponent
