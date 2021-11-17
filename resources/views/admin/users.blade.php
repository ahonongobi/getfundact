@extends('_layouts._admin')

@section('content')


   
                <div class="row">
                    
                </div>
                <div class="row">
                    @if (Session::has('success'))
                    <span class="btn btn-success rounded-0 text-white mr-3">
           
                {{Session::get('success')}}
                    </span>
                    
                    @endif
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
                                                <th>Surname</th>
                                                <th>Date</th>
                                                <th>Statut</th>
                                                
                                                <th>Décision Jury 1 </th>
                                                <th>Décision Jury 2 </th>
                                                <th>Voir </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_users as $item)
                                          <tr>
                                            <td>{{$item->name}}</td>
                                            <td class="font-weight-bold">{{$item->surname}}</td>
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->states ==1)
                                            <td class="font-weight-medium text-success">Actif</td>
                                            @elseif($item->states ==0)
                                            
                                            <td class="font-weight-medium text-warning">Inactif</td>
                                            @elseif($item->states == 2)
                                            <td class="font-weight-medium text-danger">Supprimer</td>
                                            @endif
                                            
                                            <td class="d-flex justify-content-evenly">
                                                <a onclick="return confirm('Cette action est irreversible')" href="{{ url('delete/'.$item->id) }}"
                                                    class="btn btn-danger rounded-0 text-white mr-3"><i class="ti-trash"></i></a>

                                            </td>
                                            @if ($item->states ==0)
                                            <td>
                                                <a href="{{ url('valider/'.$item->id) }}"
                                                    class="btn btn-success rounded-0 text-white mr-3"><i class="ti-check"></i></a>

                                            </td>
                                            @else
                                            <td>
                                                <a href="{{ url('unvalider/'.$item->id) }}"
                                                    class="btn btn-danger rounded-0 text-white mr-3"><i class="ti-close"></i></a>

                                            </td>
                                            @endif
                                            <td>

                                                <a href="{{ url('see-more/'.$item->id) }}" class="btn btn-warning rounded-0 text-white"><i class="ti-eye"></i></a>

                                            </td>
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content">{!! $all_users->links() !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection
