@extends('_layouts._admin')

@section('content')
    <table id="example" class="display nowrap table-responsive" style="width:100%">
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
                <th>Etat</th>
                <th>Voir</th>
                <th>Desactivé</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin_all_campagne_inactif as $item)
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
                    {{-- etat --}}
                    @if ($item->etat == 1)
                        <td class="font-weight-medium text-warning">Brouillon</td>
                    @elseif($item->etat == 0)
                        <td class="font-weight-medium text-success">Terminé</td>
                   
                    @endif
                    <td>
                        <p data-placement="top" data-toggle="tooltip" title="voir plus"><a
                                href="{{ url('see-more-campagne/' . $item->id) }}" class="btn btn-primary btn-lg"
                                data-title="Voir" data-target="#edit"><span class="ti-eye"></span></a></p>
                    </td>
                    <td>
                        <p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-lg"
                                data-title="Supprimer" data-toggle="modal" data-target="#delete"><span
                                    class="ti-trash"></span></button></p>
                    </td>
                    {{-- return  ti-close where statut 0 and ti-check if statut 1 --}}
                    @if ($item->statut == 1)
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Desactivé"><button
                                    class="btn btn-warning btn-lg" data-title="Desactivé" data-toggle="modal"
                                    data-target="#desactive"><span class="ti-close"></span></button></p>
                        </td>
                    @elseif($item->statut == 0)
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Campagne inactive"><button
                                    class="btn btn-danger btn-lg" data-title="Activé" data-toggle="modal"
                                    data-target="#active"><span class="ti-close"></span></button></p>
                        </td>
                    @elseif($item->statut == 2)
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Campagne suspendue"><button
                                    class="btn btn-warning btn-lg" data-title="Supprimer" data-toggle="modal"
                                    data-target="#delete"><span class="ti-trash"></span></button></p>
                        </td>
                    @endif


                </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Categories</th>
                <th>Durée</th>
                <th>Montant visé</th>
                <th>Montant Cotisé</th>
                <th>Name bénéf.</th>
                <th>Ou depensé</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Desactivé</th>
                <th>Etat</th>
            </tr>
        </tfoot>
    </table>

    <div class="row">

    </div>

    {{-- <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Utilisateurs</p>
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
                                          @foreach ($admin_all_campagne_inactif as $item)
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
                                            @if ($item->statut == 1)
                                            <td class="font-weight-medium text-success">Actif</td>
                                            @elseif($item->states ==0)
                                            
                                            <td class="font-weight-medium text-warning">En attente</td>
                                            @elseif($item->states == 2)
                                            <td class="font-weight-medium text-danger">Inactif</td>
                                            @endif
                                            <td>

                                                <a href="{{ url('see-more-campagne/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-eye menu-icon"></i></a>

                                            </td>
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>

                                   <div class="d-flex justify-content-center"> {!! $admin_all_campagne_inactif->links() !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}


    </div>
    </div>
@endsection
