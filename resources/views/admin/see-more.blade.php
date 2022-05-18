@extends('_layouts._admin')
<style>
    tr,
    td {
        text-align: justify;
        width: 50%;
    }

    td:first-child {
        font-weight: bold;
    }

    header {
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        margin: 25px auto 50px;
        height: 300px;
        position: relative;
        width: 100%;
    }

    figure.profile-banner {
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;


    }

    figure.profile-picture {
        background-position: center center;
        background-size: cover;
        border: 5px #efefef solid;
        border-radius: 50%;
        bottom: -50px;
        box-shadow: inset 1px 1px 3px rgba(0, 0, 0, 0.2), 1px 1px 4px rgba(0, 0, 0, 0.3);
        height: 148px;
        left: 150px;
        position: absolute;
        width: 148px;
        z-index: 3;
    }

    div.profile-stats {
        bottom: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.5);
        left: 0;
        padding: 15px 15px 15px 350px;
        position: absolute;
        right: 0;
        z-index: 2;

        /* Generated Gradient */
        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0.51) 3%, rgba(0, 0, 0, 0.75) 61%, rgba(0, 0, 0, 0.5) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 0.5)), color-stop(3%, rgba(0, 0, 0, 0.51)), color-stop(61%, rgba(0, 0, 0, 0.75)), color-stop(100%, rgba(0, 0, 0, 0.5)));
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0.51) 3%, rgba(0, 0, 0, 0.75) 61%, rgba(0, 0, 0, 0.5) 100%);
        background: -o-linear-gradient(top, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0.51) 3%, rgba(0, 0, 0, 0.75) 61%, rgba(0, 0, 0, 0.5) 100%);
        background: -ms-linear-gradient(top, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0.51) 3%, rgba(0, 0, 0, 0.75) 61%, rgba(0, 0, 0, 0.5) 100%);
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0.51) 3%, rgba(0, 0, 0, 0.75) 61%, rgba(0, 0, 0, 0.5) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80ffffff', endColorstr='#80000000', GradientType=0);

    }

    div.profile-stats ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    div.profile-stats ul li {
        color: #efefef;
        display: block;
        float: left;
        font-size: 24px;
        font-weight: bold;
        margin-right: 50px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7)
    }

    div.profile-stats li span {
        display: block;
        font-size: 16px;
        font-weight: normal;
    }

    div.profile-stats a.follow {
        display: block;
        float: right;
        color: #ffffff;
        margin-top: 5px;
        text-decoration: none;

        /* This is a copy and paste from Bootstrap */
        background-color: red;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        background-color: rgb(206, 7, 7);
        background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
        background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
        background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
        background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
        background-repeat: repeat-x;
        border-color: #2f96b4 #2f96b4 #1f6377;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        display: inline-block;
        padding: 4px 12px;
        margin-bottom: 0;
        font-size: 14px;
        line-height: 20px;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        border-radius: 4px;
    }

    div.profile-stats a.follow.followed {

        /* Once again copied from Boostrap */
        color: #ffffff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        /*background-color: #5bb75b;
        background-image: -moz-linear-gradient(top, #62c462, #51a351);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
        background-image: -webkit-linear-gradient(top, #62c462, #51a351);
        background-image: -o-linear-gradient(top, #62c462, #51a351);
        background-image: linear-gradient(to bottom, #62c462, #51a351);
        background-repeat: repeat-x;
        */
        border-color: #51a351 #51a351 #387038;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    }

    header>h1 {
        bottom: -50px;
        color: #354B63;
        font-size: 40px;
        left: 350px;
        position: absolute;
        z-index: 5;
    }

    .profile-banner img {

        max-width: 100%;
        max-height: 120%;

    }

</style>
@section('content')
    <header>
        <figure class="profile-banner">
            <!-- <img style="width: 1429px !important; height:300px" src="https://unsplash.it/975/300" alt="Profile banner" /> -->
            <a data-fancybox="gallery" data-caption="Bannière" href="{{ asset('assets/img/banner/ban.jpg') }}">
                <img styles="width: 1429px !important; height:300px" src="{{ asset('assets/img/banner/ban.jpg') }}"
                    alt="Profile banner" />
            </a>
        </figure>
        @if ($usersCount != 0 and $users->photo != null)
            <img class="profile-photo" src="{{ asset('assets/img/profile/' . $users->photo) }}" alt="Profile Photo" />
            <a data-fancybox="gallery" data-caption="Profile" href="{{ asset('storage/UserDocument/' . $users->photo) }}">
                <figure class="profile-picture"
                    style="background-image: url('{{ asset('storage/UserDocument/' . $users->photo) }}')">
                </figure>
            </a>
        @else
            <a data-fancybox="gallery" data-caption="Profile" href="{{ asset('assets/gobi_avatar.png') }}">
                <figure class="profile-picture" style="background-image: url('{{ asset('assets/gobi_avatar.png') }}')">
                </figure>
            </a>
        @endif
        <div style="background-color: #e15b1b" class="profile-stats">
            <ul>
                <li>{{ $hisCampagnes->count() }} <span>Campagnes</span></li>
                <li>{{ $user_solde ?? '0' }}XOF <span>Soldes</span></li>
                <li>{{ $lastLogin ?? '' }}<span>Dernière session</span></li>

            </ul>
            <a style="background-color:red !important" href="javascript:void(0);" class="follow btn btn-danger">
                Suspendre
            </a>
        </div>
        <h1>{{ $users->nom_prenoms ?? 'non rensigné' }} <small> memebre depuis
                {{ $users->created_at ?? 'non rensigné' }}</small></h1>
    </header>
    <div class="row">

    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Utilisateurs</p>
                    <table class="table">

                        <tr>
                            <td>Nom et Prénoms</td>
                            <td>{{ $users->nom_prenoms ?? 'non rensigné' }}</td>
                        </tr>

                        <tr>
                            <td>Date de naissance</td>
                            <td>{{ $users->date_naissance ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Nationalité</td>
                            <td>{{ $users->nationanlite ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Pays</td>
                            <td>{{ $users->pays ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $users->email ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td>{{ $users->tel ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td>{{ $users->votre_adresse ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Region</td>
                            <td>{{ $users->region ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Code postal</td>
                            <td>{{ $users->code_postal ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Numero de compte</td>
                            <td>{{ $users->numero_compte ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Numero institution</td>
                            <td>{{ $users->numero_institution ?? 'non rensigné' }}</td>
                        </tr>
                        <tr>
                            <td>Iban</td>
                            <td>{{ $users->iban ?? 'non rensigné' }}
                                {{-- copy icon to copy to clipboard --}}
                                <a href="javascript:void(0);" class="copy-to-clipboard"
                                    data-clipboard-text="{{ $users->iban ?? 'non rensigné' }}" data-toggle="tooltip"
                                    data-placement="top" title="Copier">
                                    <i class="ti-clipboard"></i>

                                </a>
                                <input type="hidden" name="copyIban" id="copyIban" value="{{ $users->iban ?? 'non rensigné' }}">
                            </td>

                        </tr>
                        
                        <tr>
                            <td>Bic</td>
                            <td>
                                {{ $users->bic ?? 'non rensigné' }}
                                {{-- copy icon to copy to clipboard --}}
                                <a href="javascript:void(0);" class="copy-to-clipboard2"
                                    data-clipboard-text="{{ $users->bic ?? 'non rensigné' }}" data-toggle="tooltip"
                                    data-placement="top" title="Copier">
                                    <i class="ti-clipboard"></i>

                                </a>
                               
                                <input type="hidden" name="copyIban" id="copyBic" value="{{ $users->bic ?? 'non rensigné' }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Nom de banque</td>
                            <td>{{ $users->nom_banque ?? 'non rensigné' }}
                                {{-- copy icon to copy to clipboard --}}
                                <a href="javascript:void(0);" class="copy-to-clipboard3"
                                    data-clipboard-text="{{ $users->nom_banque ?? 'non rensigné' }}"
                                    data-toggle="tooltip" data-placement="top" title="Copier">
                                    <i class="ti-clipboard"></i>
                                </a>
                                <input type="hidden" name="copyIban" id="copyBanque" value="{{ $users->nom_banque ?? 'non rensigné' }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Code agence</td>
                            <td>{{ $users->code_agence ?? 'non rensigné' }}</td>
                        </tr>
                    </table>

                    <div class="d-flex justify-content-between">
                        @if ($usersCount != 0)
                            {{-- <a href="{{ asset('storage/UserDocument/' . $users->photo) }}">

                                <img style="width: 200px; height:200px;"
                                    src="{{ asset('storage/UserDocument/' . $users->photo) }}" alt="" srcset="">
                            </a> --}}
                            <a data-fancybox="gallery" data-caption="Carte nationale d'identité face"
                                href="{{ asset('storage/UserDocument/' . $users->cni) }}">
                                <img width="600" height="300" src="{{ asset('storage/UserDocument/' . $users->cni) }}"
                                    alt="" srcset="">
                            </a>
                            <a data-fancybox="gallery" data-caption="Carte nationale d'identité arrière"
                                href="{{ asset('storage/UserDocument/' . $users->s_cni) }}">
                                <img width="600" height="300" src="{{ asset('storage/UserDocument/' . $users->s_cni) }}"
                                    alt="" srcset="">
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Ses campagnes</p>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Categories</th>
                                    <th>Durée</th>
                                    <th>Montant visé</th>
                                    <th>Montant Cotisé</th>
                                    <th>Name bénéf.</th>
                                    <th>Hashtag</th>
                                    <th>Mots clés</th>
                                    <th>Statut</th>
                                    <th>Voir</th>
                                    <th>Desactivé</th>
                                    <th>Etat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hisCampagnes as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->categories }}</td>
                                        <td>{{ $item->duree }}</td>
                                        <td>{{ $item->montant_v }}XOF</td>
                                        <td>{{ $item->montant_cotise }}XOF</td>

                                        <td>{{ $item->name_b }}</td>
                                        <td>{{ $item->hashtag }}</td>
                                        <td>{{ $item->keys_word }}</td>
                                        @if ($item->statut == 1)
                                            <td class="font-weight-medium text-success">Actif</td>
                                        @elseif($item->statut == 0)
                                            <td class="font-weight-medium text-warning">Inactif</td>
                                        @elseif($item->statut == 2)
                                            <td class="font-weight-medium text-danger">Supprimer</td>
                                        @endif
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="voir plus"><a
                                                    href="{{ url('see-more-campagne/' . $item->id) }}"
                                                    class="btn btn-primary btn-lg" data-title="Voir"
                                                    data-target="#edit"><span class="ti-eye"></span></a></p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Supprimer"><button
                                                    class="btn btn-danger btn-lg" data-title="Supprimer" data-toggle="modal"
                                                    data-target="#delete"><span class="ti-trash"></span></button></p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="campagne actif"><button
                                                    class="btn btn-success btn-lg" data-title="Valider" data-toggle="modal"
                                                    data-target="#delete"><span class="ti-check"></span></button></p>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="d-flex justify-content-center"> {!! $hisCampagnes->links() !!}</div> --}}

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
