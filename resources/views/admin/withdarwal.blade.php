@extends('_layouts._admin')

@section('content')


   
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Demande de retrait Aujourd'hui</p>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID utilisateur</th>
                                                <th>ID campagne-Nom campagne</th>
                                                <th>Montant</th>
                                                <th>Montant à récévoir(-{{$last_pourcentage->pourcentage}}%)</th>
                                                <th>%{{$last_pourcentage->pourcentage}} bénéfices</th>
                                                <th>Date</th>
                                                
                                                <th>Etat </th>
                                                <th>Valider</th>
                                                <th>Voir</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw_per_day as $item)
                                          <tr>
                                            <td>{{$item->id_user}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
                                            {{-- if montant is null then 0 else montant $item->montant --}}
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                               <td>{{$item->montant}}XOF</td> 
                                            @endif
                                            
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{$item->montant-($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->statut ==1)
                                            <td class="font-weight-medium text-success">Déja soldé</td>
                                            @elseif($item->statut ==0)
                                            
                                            <td class="font-weight-medium text-warning">Pending</td>
                                            @elseif($item->statut == 2)
                                            <td class="font-weight-medium text-danger">Cancelled</td>
                                            @endif
                                            @if ($item->statut ==0)
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Cliquer pour valider">
                                                <a onclick="return confirm('Voulez vous vraiment confirmer le paiement?')" href="{{ url('pay/'.$item->id) }}" class="btn btn-danger rounded-0 text-white"><i class="ti-close"></i></a>
                                                </p>
                                            </td>
                                            @endif

                                            @if ($item->statut ==1)
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Paiement valider aujourd'hui">
                                                <a onclick="return confirm('Voulez vous vraiment annuler le paiement?')" href="{{ url('unpay/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-check"></i></a>
                                                </p>
                                            </td>
                                            @endif
                                           
                                            <td>
                                                
                                                <p data-placement="top" data-toggle="tooltip" title="voir plus sur l'utilisateur"><a href="{{ url('see-more/' . $item->id_user) }}" class="btn btn-primary btn-lg" data-title="Voir"  data-target="#edit" ><span class="ti-eye"></span></a></p>
                                            </td>
                                            
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                  {{--<div class="d-flex justify-content-center">{!! $all_withdraw->links() !!}</div>--}}

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Demande de retrait en attente</p>
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID utilisateur</th>
                                                <th>ID campagne-Nom campagne</th>
                                                <th>Montant</th>
                                                <th>Montant à récévoir(-{{$last_pourcentage->pourcentage}}%)</th>
                                                <th>%{{$last_pourcentage->pourcentage}} bénéfices</th>
                                                <th>Date</th>
                                                
                                                <th>Etat </th>
                                                <th>Valider </th>
                                                <th>Voir </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw as $item)
                                          <tr>
                                            <td>{{$item->id_user}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
                                            {{-- if montant is null then 0 else montant $item->montant --}}
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                               <td>{{$item->montant}}XOF</td> 
                                            @endif
                                            {{-- calcul redux 20% of montant --}}
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{$item->montant-($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            {{-- end calcul redux 20% of montant --}}
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->statut ==1)
                                            <td class="font-weight-medium text-success">Déja soldé</td>
                                            @elseif($item->statut ==0)
                                            
                                            <td class="font-weight-medium text-warning">Pending</td>
                                            @elseif($item->statut == 2)
                                            <td class="font-weight-medium text-danger">Cancelled</td>
                                            @endif
                                            @if ($item->statut ==0)
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Cliquer pour valider">
                                                <a onclick="return confirm('Voulez vous vraiment confirmer le paiement?')" href="{{ url('pay/'.$item->id) }}" class="btn btn-danger rounded-0 text-white"><i class="ti-close"></i></a>
                                                </p>
                                            </td>
                                            @endif

                                            @if ($item->statut ==1)
                                            <td>
                                               <p data-placement="top" data-toggle="tooltip" title="voir plus sur l'utilisateur">
                                                <a data-title="Voir"  data-target="#edit" onclick="return confirm('Voulez vous vraiment annuler le paiement?')" href="{{ url('unpay/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-check"></i></a>
                                                </p>
                                            </td>
                                            @endif
                                            {{-- see more button --}}
                                            <td>
                                                
                                                <p data-placement="top" data-toggle="tooltip" title="voir plus sur l'utilisateur"><a href="{{ url('see-more/' . $item->id_user) }}" class="btn btn-primary btn-lg" data-title="Voir"  data-target="#edit" ><span class="ti-eye"></span></a></p>
                                            </td>
                                           
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            {{--<div class="d-flex justify-content-center">{!! $all_withdraw->links() !!}</div>--}}

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Demande de retrait approuvée</p>
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID utilisateur</th>
                                                <th>ID campagne-Nom campagne</th>
                                                <th>Montant</th>
                                                <th>Montant à récévoir(-{{$last_pourcentage->pourcentage}}%)</th>
                                                <th>%{{$last_pourcentage->pourcentage}} bénéfices</th>
                                                <th>Date</th>
                                                
                                                <th>Etat </th>
                                                <th>Action </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw_approved as $item)
                                          <tr>
                                            <td>{{$item->id_user}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
                                            {{-- if montant is null then 0 else montant $item->montant --}}
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                               <td>{{$item->montant}}XOF</td> 
                                            @endif
                                            {{-- calcul redux 20% of montant --}}
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{$item->montant-($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            @if ($item->montant == null)
                                            <td>0XOF</td>
                                                
                                            @else
                                              {{-- redux 20% of montant --}}
                                              <td>{{($item->montant*$last_pourcentage->pourcentage/100)}}XOF</td> 
                                              
                                            @endif
                                            {{-- end calcul redux 20% of montant --}}
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->statut ==1)
                                            <td class="font-weight-medium text-success">Déja soldé</td>
                                            @elseif($item->statut ==0)
                                            
                                            <td class="font-weight-medium text-warning">Pending</td>
                                            @elseif($item->statut == 2)
                                            <td class="font-weight-medium text-danger">Cancelled</td>
                                            @endif
                                            @if ($item->statut ==0)
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Paiement valider">
                                                <a onclick="return confirm('Voulez vous vraiment confirmer le paiement?')" href="{{ url('pay/'.$item->id) }}" class="btn btn-danger rounded-0 text-white"><i class="ti-close"></i></a>
                                                </p>
                                            </td>
                                            @endif

                                            @if ($item->statut ==1)
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Paiement valider déja">
                                                <a onclick="return confirm('Voulez vous vraiment annuler le paiement?')" href="{{ url('unpay/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-check"></i></a>
                                                </p>
                                            </td>
                                            @endif
                                           
                                            
                                            
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            {{--<div class="d-flex justify-content-center">{!! $all_withdraw->links() !!}</div>--}}

                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection
