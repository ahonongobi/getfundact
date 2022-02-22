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
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID utilisateur</th>
                                                <th>ID campagne-Nom campagne</th>
                                                <th>Date</th>
                                                
                                                <th>Etat </th>
                                                <th>Action </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw_per_day as $item)
                                          <tr>
                                            <td>{{$item->id_user}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
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

                                                <a onclick="return confirm('Voulez vous vraiment confirmer le paiement?')" href="{{ url('pay/'.$item->id) }}" class="btn btn-danger rounded-0 text-white"><i class="ti-close"></i></a>

                                            </td>
                                            @endif

                                            @if ($item->statut ==1)
                                            <td>

                                                <a onclick="return confirm('Voulez vous vraiment annuler le paiement?')" href="{{ url('unpay/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-check"></i></a>

                                            </td>
                                            @endif
                                           
                                            
                                            
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="d-flex justify-content-center">{!! $all_withdraw->links() !!}</div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Demande de retrait</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID utilisateur</th>
                                                <th>ID campagne-Nom campagne</th>
                                                <th>Date</th>
                                                
                                                <th>Etat </th>
                                                <th>Action </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw as $item)
                                          <tr>
                                            <td>{{$item->id_user}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
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

                                                <a onclick="return confirm('Voulez vous vraiment confirmer le paiement?')" href="{{ url('pay/'.$item->id) }}" class="btn btn-danger rounded-0 text-white"><i class="ti-close"></i></a>

                                            </td>
                                            @endif

                                            @if ($item->statut ==1)
                                            <td>

                                                <a onclick="return confirm('Voulez vous vraiment annuler le paiement?')" href="{{ url('unpay/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-check"></i></a>

                                            </td>
                                            @endif
                                           
                                            
                                            
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="d-flex justify-content-center">{!! $all_withdraw->links() !!}</div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection
