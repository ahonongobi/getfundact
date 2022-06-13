@component('mail::message')
# Mot de passe 

{{$message}}

@component('mail::button', ['url' => ''])
Se connecter
@endcomponent
si vous n'êtes pas {{$name}} , veuillez contacter l'administrateur du site immediatement par mail : abyssiniea@gmail.com
Merci,<br>
{{ config('app.name') }}
@endcomponent
