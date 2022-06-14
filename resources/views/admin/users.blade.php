@extends('_layouts._admin')
<style>
    a{
        text-decoration: none !important;
        
    }
    .text-black{
        color: #000 !important;
    }
</style>
@section('content')
    @if (Session::has('success'))
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-fill-success" role="alert">
                        <i class="mdi mdi-alert-circle"></i> {{ Session::get('success') }}
                    </div>

                </div>
            </div>
        </div>
    @endif
    {{-- display  today user registration--}}
       <h2 style="color:#302c51">Aujourd'hui</h2>
        <table id="example_today" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Date</th>
                    <th>Solde</th>
                    <th>Last session</th>
                    <th>Statut</th>
                    <th>Voir</th>
                    <th>Suppr.</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_users_today as $item)
                <tr>
                    <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->name }} {{ $item->surname }}</a></td>
                    <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->email }}</a></td>
                    <td>{{ $item->created_at }}</td>
                    <!-- if solde is null 0  -->
                    @if ($item->solde==null)
                    <td>0.00 XOF</td>
                    @else
                    <td>{{ $item->solde }}XOF</td>
                    @endif
                    @php
                     \Carbon\Carbon::setLocale('fr');
                    @endphp
                    <td>{{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</td>
                    
                    @if ($item->states == 1)
                    <td class="font-weight-medium text-success">Actif</td>
                    @elseif($item->states == 0)
                        <td class="font-weight-medium text-warning">Inactif</td>
                    @elseif($item->states == 2)
                        <td class="font-weight-medium text-danger">Supprimer</td>
                    @endif
                    <td><p data-placement="top" data-toggle="tooltip" title="voir plus"><a href="{{ url('see-more/' . $item->id) }}" class="btn btn-primary btn-lg" data-title="voir"  data-target="#edit" ><span class="ti-eye"></span></a></p></td>
                    @if (Auth::user()->user_type == "Admin")
                    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="return confirm('Cette action est irreversible')" href="{{ url('delete/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>

                    @elseif(Auth::user()->user_type == "manager")
                    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="noRightToDeleteUser()" href="" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>

                    @endif
                    
    
                    <!-- if states = 0 and else -->
                    @if ($item->states == 0)
                    <td><p data-placement="top" data-toggle="tooltip" title="Invalide"><a href="{{ url('valider/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="invalide"  data-target="#delete" ><span class="ti-close"></span></a></p></td>
                    @else
                    <td><p data-placement="top" data-toggle="tooltip" title="Valide"><a href="{{ url('unvalider/' . $item->id) }}" class="btn btn-success btn-lg" data-title="Valide"  data-target="#delete" ><span class="ti-check"></span></a></p></td>
                    @endif
                    
    
                </tr>
                @endforeach
                
            </tbody>
            
        </table>
    

    {{-- display  latest 1 months registration--}}
     <h2> 1 weeks</h2>
    <table id="example_1months" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Date</th>
                <th>Solde</th>
                <th>Last session</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Suppr.</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_users_1weeks as $item)
            <tr>
                <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->name }} {{ $item->surname }}</a></td>
                <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->email }}</a></td>
                <td>{{ $item->created_at }}</td>
                <!-- if solde is null 0  -->
                @if ($item->solde==null)
                <td>0.00 XOF</td>
                @else
                <td>{{ $item->solde }}XOF</td>
                @endif
                @php
                 \Carbon\Carbon::setLocale('fr');
                @endphp
                <td>{{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</td>
                
                @if ($item->states == 1)
                <td class="font-weight-medium text-success">Actif</td>
                @elseif($item->states == 0)
                    <td class="font-weight-medium text-warning">Inactif</td>
                @elseif($item->states == 2)
                    <td class="font-weight-medium text-danger">Supprimer</td>
                @endif
                <td><p data-placement="top" data-toggle="tooltip" title="voir plus"><a href="{{ url('see-more/' . $item->id) }}" class="btn btn-primary btn-lg" data-title="voir"  data-target="#edit" ><span class="ti-eye"></span></a></p></td>
                @if (Auth::user()->user_type == "Admin")
                <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="return confirm('Cette action est irreversible')" href="{{ url('delete/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>
                @elseif(Auth::user()->user_type == "manager")
                <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="return confirm('Vous n\'avez pas ce droit')" href="" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>
                @endif

                <!-- if states = 0 and else -->
                @if ($item->states == 0)
                <td><p data-placement="top" data-toggle="tooltip" title="Invalide"><a href="{{ url('valider/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="invalide"  data-target="#delete" ><span class="ti-close"></span></a></p></td>
                @else
                <td><p data-placement="top" data-toggle="tooltip" title="Valide"><a href="{{ url('unvalider/' . $item->id) }}" class="btn btn-success btn-lg" data-title="Valide"  data-target="#delete" ><span class="ti-check"></span></a></p></td>
                @endif
                

            </tr>
            @endforeach
            
        </tbody>
        
    </table>

    <h2 style="color:#302c51">Tous</h2>
    {{--  end today user registration--}}
    <table id="example" class="display nowrap mt-3" style="width:100%;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Date</th>
                <th>Solde</th>
                <th>Last session</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Suppr.</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_users as $item)
            <tr>
                <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->name }} {{ $item->surname }}</a></td>
                <td><a class="text-black" href="{{ url('see-more/' . $item->id) }}">{{ $item->email }}</a></td>
                <td>{{ $item->created_at }}</td>
                <!-- if solde is null 0  -->
                @if ($item->solde==null)
                <td>0.00 XOF</td>
                @else
                <td>{{ $item->solde }}XOF</td>
                @endif
                @php
                 \Carbon\Carbon::setLocale('fr');
                @endphp
                <td>{{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</td>
                
                @if ($item->states == 1)
                <td class="font-weight-medium text-success">Actif</td>
                @elseif($item->states == 0)
                    <td class="font-weight-medium text-warning">Inactif</td>
                @elseif($item->states == 2)
                    <td class="font-weight-medium text-danger">Supprimer</td>
                @endif
                <td><p data-placement="top" data-toggle="tooltip" title="voir plus"><a href="{{ url('see-more/' . $item->id) }}" class="btn btn-primary btn-lg" data-title="voir"  data-target="#edit" ><span class="ti-eye"></span></a></p></td>
                @if (Auth::user()->user_type == "Admin")
                <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="return confirm('Cette action est irreversible')" href="{{ url('delete/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>
                @elseif(Auth::user()->user_type == "manager")
                <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><a onclick="return confirm('Vous n\'avez pas ce droit')" href="" class="btn btn-danger btn-lg" data-title="Supprimer"  data-target="#delete" ><span class="ti-trash"></span></a></p></td>
                @endif

                <!-- if states = 0 and else -->
                @if ($item->states == 0)
                <td><p data-placement="top" data-toggle="tooltip" title="Invalide"><a href="{{ url('valider/' . $item->id) }}" class="btn btn-danger btn-lg" data-title="invalide"  data-target="#delete" ><span class="ti-close"></span></a></p></td>
                @else
                <td><p data-placement="top" data-toggle="tooltip" title="Valide"><a href="{{ url('unvalider/' . $item->id) }}" class="btn btn-success btn-lg" data-title="Valide"  data-target="#delete" ><span class="ti-check"></span></a></p></td>
                @endif
                

            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Date</th>
                <th>Solde</th>
                <th>Last session</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Suppr.</th>
                <th>Etat</th>
            </tr>
        </tfoot>
    </table>
    <div class="row">

    </div>
    {{--<div class="row">

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
                                @foreach ($all_users as $item)
                                    <tr>
                                        <td>{{ $item->name }} {{ $item->surname }}</td>
                                        <td class="font-weight-bold">{{ $item->email }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        @if ($item->states == 1)
                                            <td class="font-weight-medium text-success">Actif</td>
                                        @elseif($item->states == 0)
                                            <td class="font-weight-medium text-warning">Inactif</td>
                                        @elseif($item->states == 2)
                                            <td class="font-weight-medium text-danger">Supprimer</td>
                                        @endif

                                        <td class="d-flex justify-content-evenly">
                                            <a onclick="return confirm('Cette action est irreversible')"
                                                href="{{ url('delete/' . $item->id) }}"
                                                class="btn btn-danger rounded-0 text-white mr-3"><i
                                                    class="ti-trash"></i></a>

                                        </td>
                                        @if ($item->states == 0)
                                            <td>
                                                <a href="{{ url('valider/' . $item->id) }}"
                                                    class="btn btn-success rounded-0 text-white mr-3"><i
                                                        class="ti-check"></i></a>

                                            </td>
                                        @else
                                            <td>
                                                <a href="{{ url('unvalider/' . $item->id) }}"
                                                    class="btn btn-danger rounded-0 text-white mr-3"><i
                                                        class="ti-close"></i></a>

                                            </td>
                                        @endif
                                        <td>

                                            <a href="{{ url('see-more/' . $item->id) }}"
                                                class="btn btn-warning rounded-0 text-white"><i
                                                    class="ti-eye"></i></a>

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

    </div> --}}


    </div>
    </div>


@endsection
