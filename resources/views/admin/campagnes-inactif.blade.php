@extends('_layouts._admin')

@section('content')


   
                <div class="row">
                    
                </div>

                <div class="row">
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
                                            @if ($item->statut ==1)
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

                </div>


            </div>
        </div>
    @endsection
