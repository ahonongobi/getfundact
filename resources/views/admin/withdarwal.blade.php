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
                                                <th>ID utilisateur</th>
                                                <th>Nom campagne</th>
                                                <th>Date</th>
                                                
                                                <th>Décision 1 </th>
                                                <th>Décision 2 </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_withdraw as $item)
                                          <tr>
                                            <td>{{$item->id}}</td>
                                            <td class="font-weight-bold">{{$item->nom_campagne}}</td>
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->statut ==1)
                                            <td class="font-weight-medium text-success">Déja soldé</td>
                                            @elseif($item->states ==0)
                                            
                                            <td class="font-weight-medium text-warning">Pending</td>
                                            @elseif($item->states == 2)
                                            <td class="font-weight-medium text-danger">Cancelled</td>
                                            @endif
                                            <td>

                                                <button class="btn btn-warning rounded-0 text-white"><i class="ti-eye"></i></button>

                                            </td>
                                           
                                            
                                            
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
