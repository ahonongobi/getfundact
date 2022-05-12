@component('mail::message')
# {{$name}}
Votre inscription a été enregistrée avec succès. Nous vous remercions d'avoir choisi Getfund Action pour votre campagne.
Mettre à jour votre profil en ajoutant les information au niveau de votre profil et carte \
{{$message}}

@component('mail::button', ['url' => 'https://getfundact.com/login'])
Se connecter
@endcomponent

Cordialement Merci,<br>
{{ config('app.name') }}
@endcomponent
