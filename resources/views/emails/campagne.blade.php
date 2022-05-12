@component('mail::message')
# CAMPAGNE DE FONDS

La cagnotte {{$name}} est désormais en ligne sur www.getfund-act.com. Vous pouvez d'ores et déjà envoyer le lien ci-après à vos contributeurs.

Quelques astuces pour réussir votre cagnotte \
**J'explique clairement les objectifs** \
Il est important pour vos contributeurs de comprendre la cause pour laquelle ils sont emmenés à participer.

**Je précise l'usage des fonds** \
Dire comment vous allez dépenser la collecte est primordial.

**Je relance mes contributeurs**
Renvoyer des rappels à ceux qui n'ont pas encore contribué permet de maximiser sa collecte. Évidemment, cela dépend de la cause. Pour un mariage, il vaut mieux ne pas être trop insistant par exemple.


**J'embarque un Widget sur mon site** \
Si l'événement, la cause ou le projet pour lequel vous faites une cagnotte dispose d'un site, vous obtiendrez sur la page de votre cagnotte, le code que vous devez le copier-coller sur votre site pour que la cagnotte y soit accessible directement.

**Je fais un partage sur les réseaux sociaux** \
Les boutons de réseaux sociaux sur votre page Getfund action permettent à toute personne de partager la cagnotte sur Facebook et Twitter. Ne vous arrêtez pas à cela. Vous pourrez également tweeter ou écrire des messages avec le lien vers votre campagne. Vous devez encourager vos soutiens et contributeurs à faire de même.

**J'agrémente la page de la cagnotte** \
Ajouter une photo de profil sur votre page de cagnotte la rendra plus dynamique (se rendre à la page et cliquer sur modifier la cagnotte). Si vous disposez d'une vidéo fun, amusant ou émouvant, insérez son lien YouTube ou vidéo dans le formulaire de modification de votre cagnotte. Notez que vous devrez être connecté à votre compte Getfund Action pour effectuer toutes ces modifications.

Nous vous remercions d'avoir choisi Getfund Action pour votre campagne. Lien de votre campagne :<a style='cursor:pointer;' target='_blank' href='https://getfundact.com/getfund-donation-details/{{$id}}/{{$name}}'>https://getfundact.com/getfund-donation-details/{{$id}}/{{$name}}</a> \
C'est à vous! Bonne chance!

L'équipe Getfundact



Merci,<br>
{{ config('app.name') }}
@endcomponent
