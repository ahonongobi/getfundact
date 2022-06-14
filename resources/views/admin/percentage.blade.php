{{-- extend _admin layouts --}}
@extends('_layouts._admin')
@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
        {{-- show success message and desappear in after a few secondes --}}
        @if (session('sending'))
        <div class="alert alert-success" role="alert">
            {{ session('sending') }}
        </div>
        @endif
      <div class="card-body">
    
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Autheur</th>
                <th> Message</th>
                <th> % Applicable </th>
                <th> Date d'application </th>
                <th> Date de mise à jour </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pourcentages as $percentage)
                <tr>
                    <td>{{ $percentage->email }}</td>
                    <td>{{ $percentage->message }}</td>
                    <td>{{ $percentage->pourcentage	 }}</td>
                    <td>{{ $percentage->created_at }}</td>
                    <td>{{ $percentage->updated_at }}</td>
                    <td>
                    
                        <a href="{{ route('admin.percentage.delete', $percentage->id) }}" class="btn btn-danger btn-sm">
                            <i class="ti-trash"></i>
                        </a>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<div  class="container-scroller">
    <div class="">
      <div class="auth multi-step-login">
  <div class="row w-100">
    <div class="col-md-5 mx-auto">
      
      <form class="step-form" method="POST" action="{{url('percentage')}}" id="msform">
       @csrf
        <fieldset>
          <div class="form-group">
            <input required class="form-control" value="{{$percentage->pourcentage}}" type="text" name="pourcentage" placeholder="Ajouter la valeur pourcentage ex: 10" />
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="messagae" placeholder="Message spécifique ? ecrivez ici" />
          </div>
          
          <button style='background-color:#302c51 !important' class="btn btn-primary next action-button float-left" type="submit" name="next" value="Next" />Mettre en application</button>
        </fieldset>
        
        
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
@endsection
