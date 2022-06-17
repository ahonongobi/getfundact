@component('mail::message')
# {{$name}}
Votre inscription a été enregistrée avec succès. Nous vous remercions d'avoir choisi Getfund Action pour votre collecte de fonds.
Mettez à jour votre profil en ajoutant les informations au niveau de votre profil pour que le compte soit actif. \
{{$message}}

@component('mail::button', ['url' => 'https://getfundact.com/login'])
Se connecter
@endcomponent

Cordialement Merci,<br>
{{ config('app.name') }}
@endcomponent
