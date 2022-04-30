{{--@extends('_layouts._admin')

@section('content')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Bootstrap alerts in fill colors</h4>
      
      <div class="alert alert-fill-primary" role="alert">
        <i class="mdi mdi-alert-circle"></i> There! This is a primary alert. </div>
      <div class="alert alert-fill-success" role="alert">
        <i class="mdi mdi-alert-circle"></i> Well done! You successfully read this important alert message. </div>
      <div class="alert alert-fill-info" role="alert">
        <i class="mdi mdi-alert-circle"></i> Heads up! This alert needs your attention, but it's not super important. </div>
      <div class="alert alert-fill-warning" role="alert">
        <i class="mdi mdi-alert-circle"></i> Warning! Better check yourself, you're not looking too good. </div>
      <div class="alert alert-fill-danger" role="alert">
        <i class="mdi mdi-alert-circle"></i> Oh snap! Change a few things up and try submitting again. </div>
    </div>
  </div>
</div>

 @if (Session::has('success'))
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      
      <div class="alert alert-fill-success" role="alert">
        <i class="mdi mdi-alert-circle"></i> {{Session::get('success')}} </div>
    
    </div>
  </div>
</div>
@endif
@endsection --}}

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
                                                <th>E-mail</th>
                                                <th>Date</th>
                                                <th>Statut</th>
                                                
                                                <th>Décision Jury 1 </th>
                                                <th>Décision Jury 2 </th>
                                                <th>Voir </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($searchs as $item)
                                          <tr>
                                            <td>{{$item->name }} {{ $item->surname}}</td>
                                            <td class="font-weight-bold">{{$item->email}}</td>
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
                                   {{-- <div class="d-flex justify-content">{!! $all_users->links() !!}</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection
