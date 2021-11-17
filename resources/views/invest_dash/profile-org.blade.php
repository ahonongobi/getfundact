@extends('_layouts._invest')
<style>
    .tabset>input[type="radio"] {
        position: absolute;
        left: -200vw;
    }

    .tabset .tab-panel {
        display: none;
    }

    .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
    .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
    .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
    .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
    .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
    .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
        display: block;
    }

    /*
 Styling
*/


    .tabset>label {
        position: relative;
        display: inline-block;
        padding: 15px 15px 25px;
        border: 1px solid transparent;
        border-bottom: 0;
        cursor: pointer;
        font-weight: 600;
    }

    .tabset>label::after {
        content: "";
        position: absolute;
        left: 15px;
        bottom: 10px;
        width: 22px;
        height: 4px;
        background: #8d8d8d;
    }

    .tabset>label:hover,
    .tabset>input:focus+label {
        color: #06c;
    }

    .tabset>label:hover::after,
    .tabset>input:focus+label::after,
    .tabset>input:checked+label::after {
        background: #06c;
    }

    .tabset>input:checked+label {
        border-color: #ccc;
        border-bottom: 1px solid #fff;
        margin-bottom: -1px;
    }

    .tab-panel {
        padding: 30px 0;
        border-top: 1px solid #ccc;
    }

    /*
 Demo purposes only
*/
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }



    .tabset {
        max-width: 65em;
    }

</style>
@section('content') 
    <div class="container">
        <div class="tabset">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
            <label for="tab1">PROFIL</label>
            <!-- Tab 2 -->
            
            <!-- Tab 3 -->
            <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
            <label for="tab3">MOT DE PASSE</label>
            <!-- Tab 4 -->
            <input type="radio" name="tabset" id="tab4" aria-controls="rauchbiers">
            <label for="tab4">Mon Identité</label>
            <!-- Tab 4-->
            <div class="tab-panels">
                <section id="marzen" class="tab-panel">
                    <div class="row align-items-center">
            
                        <form method="POST" enctype="multipart/form-data" action="{{ url('addProfile') }}">
                            @csrf
                            <div class="row">
                                <container class="col-md-6">
                                    
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required value="{{ old('nom_prenoms') }}" name="nom_prenoms" class="form-control" placeholder="** Nom complet (prénom nom)">
                                            <span class="text-danger">
                                                @if ($errors->has('nom_prenoms'))
                                                    {{$errors->first('nom_prenoms')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="date" required value="{{ old('date_naissance') }}" name="date_naissance" class="form-control" placeholder="** Date de naissance">
                                            <span class="text-danger">
                                                @if ($errors->has('date_naissance'))
                                                    {{$errors->first('date_naissance')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required value="{{ old('nationanlite') }}" name="nationanlite" class="form-control" placeholder="** Nationalité">
                                            <span class="text-danger">
                                                @if ($errors->has('nationalite'))
                                                    {{$errors->first('nationalite')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required name="pays" value="{{ old('pays') }}" class="form-control" placeholder="** Pays de résidence">
                                            <span class="text-danger">
                                                @if ($errors->has('pays'))
                                                    {{$errors->first('pays')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="email" required name="email" value="{{ old('email') }}" class="form-control" placeholder="* Email">
                                            <span class="text-danger">
                                                @if ($errors->has('email'))
                                                    {{$errors->first('email')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="number" required name="tel" value="{{ old('tel') }}" class="form-control" placeholder="Numéro de téléphone">
                                            <span class="text-danger">
                                                @if ($errors->has('tel'))
                                                    {{$errors->first('tel')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn common-btn">SE CONNECTER</button>
                                    </div>
                                </container>
            
                                <container class="col-md-6">
                                    <center>
                                        <img src="{{asset('assets/avatar7.png')}}" class="mb-2" width="150" height="150" alt="" srcset="">
                                         <span class="text-success">Uploader photo</span>
                                    </center>                                   
                                     <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="file" required name="file" class="form-control">
                                            <span class="text-danger">
                                                @if ($errors->has('file'))
                                                    {{$errors->first('file')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                
                                </container>
                            </div>
                        </form>
                    </div>
                </section>
                
                <section id="dunkles" class="tab-panel">
                    <div class="row align-items-center">
                       
                    <form method="POST" action="{{ url('changePassword') }}">
                        @csrf
                        <div class="row">
                            <container class="col-md-6">
                                <h5 class="text-success">Changer Le Mot de Passe</h5>
                                <div class="col-lg-12 mb-4">
                                    <div class="form-group">
                                        <label for="">* Mot de passe actuel</label>
                                        <input type="password" required name="password" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Nouveau mot de passe</label>
                                        <input type="text" required name="new_password" class="form-control" placeholder="">
                                    </div>
                                </div>
                
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="btn common-btn">Sauvegarder mon nouveau mot de passse</button>
                                </div>
                            </container>
        
                        
                        </div>
                    </form>
                </div>
                </section>

                <section id="rauchbiers" class="tab-panel">
                    <div class="row align-items-center">
                       
                        <form method="POST" enctype="multipart/form-data" action="{{ url('cni') }}">
                            @csrf
                            <div class="row">
                                <container class="col-md-6">
                                    
                                    <div class="col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label for="">* Document officiel (CNI ou Justificatif de domicile)
                                            </label>
                                            <input type="file"  name="file" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('file'))
                                                {{$errors->first('file')}}
                                            @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label for="">Document officiel secondaire (Verso de la CNI, le cas échéant)</label>
                                            <input type="file"  name="file2" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('file2'))
                                                {{$errors->first('file2')}}
                                            @endif
                                            </span>
                                        </div>
                                    </div>
                    
                                    
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn common-btn">Sauvegarder les modifications</button>
                                    </div>
                                </container>
            
                            
                            </div>
                        </form>
                    </div>
                </section>
            </div>

        </div>


    </div>

@endsection
