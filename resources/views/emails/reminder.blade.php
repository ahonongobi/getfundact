@component('mail::message')
# Compte encore inactif
Le texte pour rappeler a l'Utilisateur après 2 jours dès que son inscription est toujours inactif.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias adipisci voluptatibus laudantium omnis quaerat similique corporis repellat. Vero laborum laudantium voluptatibus unde error adipisci a praesentium, expedita perspiciatis, hic id!

@component('mail::button', ['url' => 'https://getfund-act.com/login'])
Aller sur le site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
