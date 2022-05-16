@extends('_layouts._admin')
<style>
    tr,td {
        text-align: justify;
        width: 50%;
    }
    td:first-child{
        font-weight: bold;
    }

</style>
@section('content')


   
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
                                    </tr><tr>
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
                                    </tr><tr>
                                        <td>Adresse</td>
                                        <td>{{ $users->votre_adresse ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Region</td>
                                        <td>{{ $users->region ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Code postal</td>
                                        <td>{{ $users->code_postal ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Numero de compte</td>
                                        <td>{{ $users->numero_compte ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Numero institution</td>
                                        <td>{{ $users->numero_institution ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Iban</td>
                                        <td>{{ $users->iban ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Bic</td>
                                        <td>{{ $users->bic ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Nom de banque</td>
                                        <td>{{ $users->nom_banque ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Code agence</td>
                                        <td>{{ $users->code_agence ?? 'non rensigné' }}</td>
                                    </tr>
                                </table>

                                <div class="d-flex justify-content-between">
                                    @if ($usersCount !=0)
                                    <a href="{{ asset('storage/UserPhoto/'.$users->photo) }}">

                                        <img style="width: 200px; height:200px;" src="{{ asset('storage/UserPhoto/'.$users->photo) }}" alt="" srcset="">
                                    </a>
                                    <a href="{{ asset('storage/UserPhoto/'.$users->cni) }}">
                                        <img width="400" height="300" src="{{ asset('storage/UserPhoto/'.$users->cni) }}" alt="" srcset="">
                                    </a>
                                    <a href="{{ asset('storage/UserPhoto/'.$users->s_cni) }}">
                                        <img width="400" height="300" src="{{ asset('storage/UserPhoto/'.$users->s_cni) }}" alt="" srcset="">
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
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Categories</th>
                                                <th>Duree</th>
                                                <th>Montant visé</th>
                                                <th>Name bénéficiaire </th>
                                                <th>Montant cotisés </th>
                                                <th>Ou l'argent sera depensé </th>
                                                <th>Statut </th>
                                                <th>Décision du Jury</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($hisCampagnes as $item)
                                          <tr>
                                            <td>{{$item->name}}</td>
                                            <td class="font-weight-bold">{{$item->categories}}</td>
                                            <td>{{$item->duree}}</td>
                                            
                                            <td>

                                                <button class="btn btn-warning rounded-0 text-white">${{$item->montant_v}}</button>

                                            </td>
                                            <td class="d-flex justify-content-evenly">
                                                
                                                   {{ $item->name_b }}
                                            </td>
                                            <td>
                                                ${{ $item->montant_cotise ?? '0' }}

                                            </td>
                                            <td>

                                                {{ $item->where}}

                                            </td>
                                            @if ($item->statut ==1)
                                            <td class="font-weight-medium text-success">Actif</td>
                                            @elseif($item->statut ==0)
                                            
                                            <td class="font-weight-medium text-warning">En attente</td>
                                            @elseif($item->statut == 2)
                                            <td class="font-weight-medium text-danger">Inactif</td>
                                            @endif
                                            <td>

                                                <a href="{{ url('see-more-campagne/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-eye menu-icon"></i></a>

                                            </td>
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center"> {!! $hisCampagnes->links() !!}</div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection
