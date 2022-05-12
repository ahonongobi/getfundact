@component('mail::message')
#{{$subject}}

{{$message}}

Email : {{$email}}

Merci,{{$name}}<br>
{{ config('app.name') }}
@endcomponent
