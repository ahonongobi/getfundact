@extends('_layouts._user')
{{--link css fileinput file --}}
<link rel="stylesheet" href="{{asset('assets/css/fileinput.css')}}">
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
        color: #E15C1b;
    }

    .tabset>label:hover::after,
    .tabset>input:focus+label::after,
    .tabset>input:checked+label::after {
        background: #E15C1b;
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
    /** design input css **/
                :root {
            --primary: #191919;
            --secondary: #f26db6;
            --ternary: #310273;
            --background: #f1f1f1;
            --gray: #e1eeff7f;
            --white: #fff;
            }

            input {
            outline-style: none;
            box-shadow: none;
            border-color: transparent;
            border-radius: 8px;
            filter: drop-shadow(5px 5px 1px #E15C1b);
            height: 52px;
            font-size: 32px;
            }

            input:invalid {
            animation: shake 300ms;
            border: solid 1px red;
            filter: drop-shadow(5px 5px 1px red);
            }

            input:invalid::after {
            content: "Error text input";
            font-size: 28px;
            color: red;
            }

            input:invalid + span::after {
            content: "Rensigner le champ";
            color: red;
            position: relative;
            top: 8px;
            }

            .box {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            }

            @keyframes shake {
            25% {
                transform: translateX(4px);
            }
            50% {
                transform: translateX(-4px);
            }
            75% {
                transform: translateX(4px);
            }
            }
            /**style file input **/
            .file-input {
            box-sizing: border-box;
            display: inline-block;
            text-align: left;
            background: #E15C1b;
            padding: 16px;
            width: 100%;
            position: relative;
            border-radius: 3px;
            }

            .file-input > [type='file'] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 10;
            cursor: pointer;
            }

            .file-input > .button {
            display: inline-block;
            cursor: pointer;
            background: #fff;
            padding: 8px 16px;
            border-radius: 2px;
            margin-right: 8px;
            }

            .file-input:hover > .button {
            background: dodgerblue;
            color: white;
            }

            .file-input > .label {
            color: #fff;
            white-space: nowrap;
            opacity: .8;
            }

            .file-input.-chosen > .label {
            opacity: 1;
            }

</style>
@section('content') 
    <div class="container">
        <div class="tabset">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
            <label for="tab1">PROFIL</label>
            <!-- Tab 2 -->
            <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
            <label for="tab2">COORDONNÉES BANCAIRES</label>
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
            
                        <form  method="POST" enctype="multipart/form-data" action="{{ url('addProfile') }}">
                            @csrf
                            <div class="row">
                                <container class="col-md-6">
                                    {{--<div class="box">
                                        <input type="text" pattern="[A-z]*" title="So digite string">
                                        <span></span>
                                        </input>
                                    </div>--}}
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required value="{{ $profile_data->nom_prenoms ?? '' }}" name="nom_prenoms" id="nom_prenoms" class="form-control" placeholder="** Nom complet (prénom nom)">
                                            <span class="text-danger">
                                                @if ($errors->has('nom_prenoms'))
                                                    {{$errors->first('nom_prenoms')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            @if (isset($profile_data->date_naissance))
                                            <input type="text" required value="{{ substr($profile_data->date_naissance,0,10) ?? '' }}" name="date_naissance" id="date_naissance" class="form-control" placeholder="** Date de naissance">

                                            @else
                                            <input type="date" required value="" name="date_naissance" class="form-control" placeholder="** Date de naissance" title="Date de naissance">
                                            @endif
                                            
                                            <span class="text-danger">
                                                @if ($errors->has('date_naissance'))
                                                    {{$errors->first('date_naissance')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required value="{{ $profile_data->nationanlite ?? '' }}" name="nationanlite" id="nationanlite" class="form-control" placeholder="** Nationalité">
                                            <span class="text-danger">
                                                @if ($errors->has('nationalite'))
                                                    {{$errors->first('nationalite')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="text" required name="pays" id="pays" value="{{ $profile_data->pays ?? '' }}" class="form-control" placeholder="** Pays de résidence">
                                            <span class="text-danger">
                                                @if ($errors->has('pays'))
                                                    {{$errors->first('pays')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="email" required name="email" id="email" readonly value="{{ Auth::user()->email ?? '' }}" class="form-control" placeholder="* Email">
                                            <span class="text-danger">
                                                @if ($errors->has('email'))
                                                    {{$errors->first('email')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="number" required name="tel" id="tel" value="{{ $profile_data->tel ?? '' }}" class="form-control" placeholder="Numéro de téléphone">
                                            <span class="text-danger">
                                                @if ($errors->has('tel'))
                                                    {{$errors->first('tel')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" id="" class="btn common-btn">Enregistrer</button>
                                    </div>
                                </container>
            
                                <container class="col-md-6">
                                    <div class="">
                                        @if (isset($profile_data->photo))
                                        <div class="col-lg-12 mb-2">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('storage/UserDocument/'.$profile_data->photo) }}" alt="" width="200" height="200" class="img-fluid">
                                            </div>
                                        </div>
                                        @else
                                        <img src="{{asset('assets/avatar7.png')}}" class="mb-2" width="150" height="150" alt="" srcset="">
                                         <span class="text-success">Uploader photo</span>
                                        @endif
                                        
                                        
                                    </div>                                   
                                     {{--<div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <input type="file" name="file" class="form-control">
                                            <span class="text-danger">
                                                @if ($errors->has('file'))
                                                    {{$errors->first('file')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>--}}
                                    <div class='file-input'>
                                        <input accept="" name="file" type='file'>
                                        <span class='button'>Chosir la photo (profile) en image</span>
                                        <span class='label' data-js-label>Aucun fichier sélectionner</label>
                                            <span class="text-danger">
                                                @if ($errors->has('file'))
                                                    {{$errors->first('file')}}
                                                @endif
                                            </span>
                                    </div>
                                
                                </container>
                            </div>
                        </form>
                    </div>
                </section>
                <section id="rauchbier" class="tab-panel">
                    <div class="row align-items-center">
                            <p>
                                Ce formulaire peut être rempli à tout moment après le début de votre collecte. Renseigner ici les informations bancaires telles que présentes par exemple sur votre RIB (Relevé d'Identité Bancaire), votre spécimen de chèque (Canada)... Ils serviront à vous payer le montant collecté. Renseignez-vous auprès de votre banque pour obtenir ces informations le cas échéant.
                            </p>
                        <form method="POST"  action="{{ url('addBancaire') }}">
                            @csrf
                            <div class="row">
                                <container class="col-md-6">
                                    
                                    <div class="col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label for="">* Votre addresse telle que connue à votre Banque</label>
                                            <input type="text" value="{{ $profile_data->votre_addresse  ?? ''}}"  name="votre_addresse" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('votre_addresse'))
                                                    {{$errors->first('votre_addresse')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label for="">Ville</label>
                                            <input type="text" value="{{ $profile_data->ville ?? '' }}"  name="ville"  class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('ville'))
                                                    {{$errors->first('ville')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label for="">Region</label>
                                            <input type="text" value="{{ $profile_data->region ?? '' }}"  name="region" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('region'))
                                                    {{$errors->first('region')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label for="">Code postal</label>
                                            <input type="text" value="{{ $profile_data->code_postal ?? '' }}" name="code_postal" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('code_postal'))
                                                    {{$errors->first('code_postal')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                      <h5 class="text-success d-none">Coordonnées bancaires (FR)</h5>
                                    <div class="col-lg-12 mb-2 d-none">
                                        <div class="form-group">
                                            <label for="">Numéro du compte</label>
                                            <input type="text" value="neant" name="numero_compte" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('numero_compte'))
                                                    {{$errors->first('numero_compte')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12 mb-2 d-none">
                                        <div class="form-group">
                                            <label for="">Numéro de l'institution
                                            </label>
                                            <input type="text" value="neant122"  name="numero_institution" class="form-control" placeholder="">
                                            <span class="text-danger">
                                                @if ($errors->has('numero_institution'))
                                                    {{$errors->first('numero_institution')}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn common-btn">Sauvegarder les informations bancaires</button>
                                    </div>
                                </container>
            
                                <container class="col-md-6">
                                    
                                    <div class="form-group mb-4">
                                        <label for="">Iban</label>
                                        <input type="text" value="{{ $profile_data->iban ?? '' }}"  name="iban" class="form-control">
                                        <span class="text-danger">
                                            @if ($errors->has('iban'))
                                                {{$errors->first('iban')}}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="">BIC</label>
                                        <input type="text" value="{{ $profile_data->bic ?? '' }}"  name="bic" class="form-control">
                                        <span class="text-danger">
                                            @if ($errors->has('bic'))
                                                {{$errors->first('bic')}}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nom de la banque</label>
                                        <input type="text" value="{{ $profile_data->nom_banque ?? ''}}"  name="nom_banque" class="form-control">
                                        <span class="text-danger">
                                            @if ($errors->has('nom_banque'))
                                                {{$errors->first('nom_banque')}}
                                            @endif
                                        </span>
                                    </div>                                 
                                     <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label for="">Code de l'agence</label>
                                            <input type="text" value="{{ $profile_data->code_agence ?? ''}}"  name="code_agence" class="form-control">
                                            <span class="text-danger">
                                                @if ($errors->has('code_agence'))
                                                    {{$errors->first('code_agence')}}
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
                                <container class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <img  src="{{asset('assets/img/kyc.png')}}" height="200" alt="" srcset="">
                                    </div>
                                    
                                    {{--<div class="col-lg-12 mb-4">
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
                                    </div>--}}
                    
                                    {{--start here another aspct of file input for the same form--}}
                        <div class="file-upload col-lg-12 mb-2">
                            <button  class="file-upload-btn text-uppercase" type="button" onclick="$('.file-upload-input').trigger( 'click' )">AJOUTER Document officiel (CNI ou Justificatif de domicile)</button>
                          
                            <div class="image-upload-wrap">
                              <input class="file-upload-input" type='file' name="file" onchange="readURL(this);" accept="image/*" />
                              <div class="drag-text">
                                <h3>glisser et déposez ou sélectionnez ajouter une image</h3>
                              </div>
                            </div>
                            <div class="file-upload-content">
                              <img class="file-upload-image" src="#" alt="your image" />
                              <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Supprimer <span class="image-title">L'mage</span></button>
                              </div>
                            </div>
                            <span class="text-danger">
                                @if ($errors->has('file'))
                                {{$errors->first('file')}}
                            @endif
                            </span>
                        </div>

                          {{-- do the same thing but change attribute --}}
                            <div class="file-upload col-lg-12 mb-2">
                                <button  class="file-upload-btn text-uppercase" type="button" onclick="$('.file-upload-input2').trigger( 'click' )">AJOUTER Document officiel secondaire (Verso de la CNI, le cas échéant)</button>
                            
                                <div class="image-upload-wrap2">
                                <input class="file-upload-input2" type='file' name="file2" onchange="readURL2(this);" accept="image/*" />
                                <div class="drag-text2">
                                    <h3>glisser et déposez ou sélectionnez ajouter une image</h3>
                                </div>
                                </div>
                                <div class="file-upload-content2">
                                <img class="file-upload-image2" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload2()" class="remove-image">Supprimer <span class="image-title2">L'image</span></button>
                                </div>
                                </div>
                                <span class="text-danger">
                                    @if ($errors->has('file2'))
                                    {{$errors->first('file2')}}
                                @endif
                                </span>
                            </div>
                            {{-- end here --}}
                          
                         {{--end here another aspct of file input for the same form--}}
                                   
                                </container>
                                
            
                                
                            </div>
                            
                            <div class="col-lg-12">
                                <button type="submit" class="btn common-btn">Sauvegarder les modifications</button>
                            </div>
                        </form>

                                              
                    </div>
                </section>
            </div>

        </div>


    </div>
   
@endsection
