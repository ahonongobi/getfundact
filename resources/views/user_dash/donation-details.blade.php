{{-- get real value of dollar and Xof online --}}
{{-- i'm power abyssinie[gobi]stack --}}
@php 
$dollar = file_get_contents('https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=USD&to_currency=XOF&apikey=ZQJXQZQJXQZQJXQZ') ?? '';
$dollar = json_decode($dollar, true) ?? '';
$dollar = $dollar['Realtime Currency Exchange Rate']['5. Exchange Rate'] ?? '';
$dollar = round($dollar, 2) ?? '';
$xof = file_get_contents('https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=XOF&to_currency=USD&apikey=ZQJXQZQJXQZQJXQZ') ?? '';
$xof = json_decode($xof, true) ?? '';
$xof = $xof['Realtime Currency Exchange Rate']['5. Exchange Rate'] ?? '';
$xof = round($xof, 2) ?? '';
@endphp

@extends('_layouts._user')

<style>
    .moretext{
        display: none;
    }
    @media (max-width: 810px) {
        #mobile_img {
            height: auto !important;
        }
    }

    #mobile_img {
        width: 800px;
        height: 600px;
        /**oject-fit:cover; object-position: bottom; **/
    }

    .box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 40px;
        margin: 50px auto;
        border: 2px solid #EFEFEF;
        /** padding element to center of the div **/

        padding: 10px 15px;
        border-radius: 4px;
    }

    .box button {
        padding: 0;
        background-color: transparent;
        border: none;
        cursor: pointer
    }

    .box button:focus {
        outline: none;
    }

    .box button img {
        width: 25px;
    }

</style>

@section('content')
    <div class="donation-details-area blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <h3 style="text-transform: uppercase; font-family:montserrat;">A Propos et description</h3>
                            <div>
                                @if ($item->file_vignette==null)
                                <img id="mobile_img" src="{{ asset('assets/img/banniere.jpg') }}"
                                alt="Details">
                                @else
                                <img id="mobile_img" src="{{ asset('storage/UserDocument/'.$details->file_vignette) }}"
                                alt="Details">
                                @endif
                                
                            </div>
                            <h2 style="text-transform: uppercase; font-family:montserrat;">{{ $details->name }}</h2>
                            <p>
                                @php
                                    echo htmlspecialchars_decode($details->details_ojectifs);
                                @endphp
                            </p>
                            <h3 style="text-transform: uppercase; font-family:montserrat;">Details du budget</h3>
                            <blockquote>
                                <i class="icofont-quote-left"></i>
                                @php
                                    echo htmlspecialchars_decode($details->detail_budget);
                                @endphp
                            </blockquote>
                            <h3 style="text-transform: uppercase; font-family:montserrat;">Details rédigé en anglais</h3>
                            <p>@php
                                echo htmlspecialchars_decode($details->Details_budget_en);
                            @endphp</p>
                        </div>
                        @if ($details->video != null)
                            <div style="width: 100%; max-width:100%" class="instagram widget-item">
                                @php
                                    echo htmlspecialchars_decode($details->video);
                                @endphp
                                {{-- <iframe width="420" height="315" src="https://www.youtube.com/embed/MNX7HgcWqHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            </div>
                        @endif
                        <div class="details-share mt-3">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="left">
                                        <ul>
                                            <li>
                                                <span style="font-family:montserrat;">Paratger:</span>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.facebook.com/sharer/sharer.php?u=https://getfundact.com/donation-details/{{ url('donation-details/' . $details->id . '/' . $details->name_b) }}&display=popup">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?text={{ url('donation-details/' . $details->id . '/' . $details->name_b) }}"
                                                    target="_blank">
                                                    <i class="icofont-whatsapp"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="right">
                                        <ul>
                                            <li>
                                                <span>HashTags:</span>
                                            </li>
                                            @php
                                                $hash = $details->hashtag;
                                                $all_tags = explode(',', $hash);
                                            @endphp
                                            @for ($i = 0; $i < count($all_tags); $i++)
                                                <li>
                                                    <a href="#">#{{ $all_tags[$i] }}</a>
                                                </li>
                                            @endfor

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- message de soutien --}}
                        <div class="details-comment">
                            @if ((count($contributeur_message))!=0)
                            <h3>Messages de soutien ({{$contributeur_message->count() ?? '0'}})</h3>
                            @endif
                            
                            <ul>
                                 @foreach ($contributeur_message as $item)
                                 {{-- display only 4 first --}}
                                    @if ($loop->iteration < 4)
                                    <li>
                                        <img style="width:80px;height:80px" src="{{asset('assets/user.png')}}" alt="Details">
                                        <h4>{{$item->name.' '.$item->surname}}</h4>
                                        {{-- carbon diffForHumas in french --}}
                                        <span>{{$item->created_at->diffForHumans()}}</span>             
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, saepe veniam id quo repellat consectetur architecto iste eius, voluptas ad velit atque. Voluptate quas labore sapiente praesentium, autem ullam esse.</p>
                                        <a href="#"></a>
                                    </li>
                                    @endif
                                 {{--<li>
                                    <img style="width:100px;height:100px" src="{{asset('assets/user.png')}}" alt="Details">
                                    <h4>{{$item->name.''.$item->surname}}</h4>
                                    {{-- carbon diffForHumas in french 
                                    <span>{{$item->created_at->diffForHumans()}}</span>             
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, saepe veniam id quo repellat consectetur architecto iste eius, voluptas ad velit atque. Voluptate quas labore sapiente praesentium, autem ullam esse.</p>
                                    <a href="#"></a>
                                </li>--}}
                                 @endforeach
                                 {{-- foreacl latest except 4 first --}}
                                    @foreach ($contributeur_message as $item)
                                    {{-- display only 4 first --}}
                                        @if ($loop->iteration > 3)
                                        <li style="display: none" class="moretext">
                                            <img style="width:80px;height:80px;" src="{{asset('assets/user.png')}}" alt="Details">
                                            <h4>{{$item->name.' '.$item->surname}}</h4>
                                            {{-- carbon diffForHumas in french --}}
                                            <span>{{$item->created_at->diffForHumans()}}</span>             
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, saepe veniam id quo repellat consectetur architecto iste eius, voluptas ad velit atque. Voluptate quas labore sapiente praesentium, autem ullam esse.</p>
                                            <a href="#"></a>
                                        </li>
                                        @endif
                                    
                                    @endforeach      
                            </ul>
                            @if ((count($contributeur_message))>3)
                            <a style="text-decoration:underline;color:#ff6015; cursor: pointer; font-weight:bold" class="moreless-button">Lire plus</a>
                            @endif
                        </div>
                        {{-- message de soutien --}}
                        <div class="details-payment">
                            <h3>Contribution</h3> 
                            @if (Auth::check() and $details->user_id !== Auth::user()->id)
                                <form method="POST" action="{{ url('contribution') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $details->id }}" name="id_campagne">
                                    <input type="hidden" value="{{ $details->user_id }}" name="id_author">
                                    <input type="hidden" value="{{ $details->name }}" name="nom_du_porteur">
                                    <input type="hidden" value="{{ $details->id_secret_campagne }}"
                                        name="id_secret_campagne">
                                    <div class="form-radio-area">


                                    </div>
                                    <span class="text-danger">
                                        @if ($errors->has('inlineRadioOptions'))
                                            {{ $errors->first('inlineRadioOptions') }}
                                        @endif
                                    </span>
                                    <div class="form-input-area">
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-user-alt-3"></i>
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Nom">
                                            <span class="text-danger">
                                                @if ($errors->has('name'))
                                                    {{ $errors->first('name') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-user-alt-3"></i>
                                            </label>
                                            <input type="text" class="form-control" name="surname" placeholder="Prénoms">
                                            <span class="text-danger">
                                                @if ($errors->has('surname'))
                                                    {{ $errors->first('surname') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-email"></i>
                                            </label>
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                            <span class="text-danger">
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-call"></i>
                                            </label>
                                            <input type="text" name="numero" class="form-control"
                                                placeholder="Numero de téléphone">
                                            <span class="text-danger">
                                                @if ($errors->has('numero'))
                                                    {{ $errors->first('numero') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-money"></i>
                                            </label>
                                            <input onInput="edValueKeyPress()" type="number" id="invest" min="0"
                                                name="montant" class="form-control" placeholder="FCFA 100.00">
                                            <span class="text-danger">
                                                @if ($errors->has('montant'))
                                                    {{ $errors->first('montant') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-message"></i>
                                            </label>
                                            <textarea name="message" class="form-control"
                                                placeholder="Message de soutien (facultatif)"></textarea>
                                            <span class="text-danger">
                                                @if ($errors->has('message'))
                                                    {{ $errors->first('message') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="calculatrice">
                                            <span>1 USD = {{ $dollar }} XOF </span>
                                            <span>Equivalent en $ (dollar):</span> <span id="for_th_day">$0</span>
                                        </div>
                                        <div class="text-center">

                                            <button type="submit" class="btn common-btn">Contribuer</button>


                                        </div>
                                    </div>

                                </form>
                            @endif

                            @if (!Auth::check())
                                <form method="POST" action="{{ url('contribution') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $details->id }}" name="id_campagne">
                                    <input type="hidden" value="{{ $details->user_id }}" name="id_author">
                                    <input type="hidden" value="{{ $details->name }}" name="nom_du_porteur">
                                    <input type="hidden" value="{{ $details->id_secret_campagne }}"
                                        name="id_secret_campagne">
                                    <div class="form-radio-area">


                                    </div>
                                    <span class="text-danger">
                                        @if ($errors->has('inlineRadioOptions'))
                                            {{ $errors->first('inlineRadioOptions') }}
                                        @endif
                                    </span>
                                    <div class="form-input-area">
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-user-alt-3"></i>
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Nom">
                                            <span class="text-danger">
                                                @if ($errors->has('name'))
                                                    {{ $errors->first('name') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-user-alt-3"></i>
                                            </label>
                                            <input type="text" class="form-control" name="surname" placeholder="Prénoms">
                                            <span class="text-danger">
                                                @if ($errors->has('surname'))
                                                    {{ $errors->first('surname') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-email"></i>
                                            </label>
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                            <span class="text-danger">
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-call"></i>
                                            </label>
                                            <input type="text" name="numero" class="form-control"
                                                placeholder="Numero de téléphone">
                                            <span class="text-danger">
                                                @if ($errors->has('numero'))
                                                    {{ $errors->first('numero') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-money"></i>
                                            </label>
                                            <input onInput="edValueKeyPress()" type="number" id="invest" min="0"
                                                name="montant" class="form-control" placeholder="FCFA 100.00">
                                            <span class="text-danger">
                                                @if ($errors->has('montant'))
                                                    {{ $errors->first('montant') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class="icofont-ui-message"></i>
                                            </label>
                                            <textarea name="message" class="form-control"
                                                placeholder="Message de soutien (facultatif)"></textarea>
                                            <span class="text-danger">
                                                @if ($errors->has('message'))
                                                    {{ $errors->first('message') }}
                                                @endif
                                            </span>
                                        <div class="calculatrice">
                                            <span>1 USD = {{ $dollar }} XOF </span>
                                            <span>Equivalent en $ (dollar):</span> <span id="for_th_day">$0</span>
                                        </div>
                                        <div class="text-center">

                                            <button type="submit" class="btn common-btn">Faire un don maintenant</button>


                                        </div>
                                    </div>

                                </form>
                            @endif
                            {{-- @elseif($email_value->email != $auth_id)
                    
                    <form method="POST" action="{{ url('contribution') }}">
                        @csrf
                        <input type="hidden" value="{{ $details->id }}" name="id_campagne">
                        <input type="hidden" value="{{ $details->user_id }}" name="id_author">
                        <input type="hidden" value="{{ $details->name }}" name="nom_du_porteur">
                        <div class="form-radio-area">
                            

                        </div>
                        <span class="text-danger">
                            @if ($errors->has('inlineRadioOptions'))
                                {{$errors->first('inlineRadioOptions')}}
                            @endif
                        </span>
                        <div class="form-input-area">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-user-alt-3"></i>
                                </label>
                                <input type="text" name="name" class="form-control" placeholder="Nom">
                                <span class="text-danger">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label>
                                    <i class="icofont-user-alt-3"></i>
                                </label>
                                <input type="text" class="form-control" name="surname" placeholder="Prénoms">
                                <span class="text-danger">
                                    @if ($errors->has('surname'))
                                        {{$errors->first('surname')}}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-email"></i>
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <span class="text-danger">
                                    @if ($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-call"></i>
                                </label>
                                <input type="text" name="numero" class="form-control" placeholder="Numero de téléphone">
                                <span class="text-danger">
                                    @if ($errors->has('numero'))
                                        {{$errors->first('numero')}}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label>
                                    <i class="icofont-dollar"></i>
                                </label>
                                <input onInput="edValueKeyPress()" id="invest" type="number" min="0" name="montant" class="form-control" placeholder="FCFA 100.00">
                                <span class="text-danger">
                                    @if ($errors->has('montant'))
                                        {{$errors->first('montant')}}
                                    @endif
                                </span>
                            </div>
                            <div class="calculatrice">
                                <span>Equivalent en $ (dollar):</span> <span id="for_th_day">$0</span>
                            </div>
                            <div class="text-center">
                                
                                <button type="submit" class="btn common-btn">Faire un don maintenant</button>

                            
                            </div>
                        </div>
                        
                    </form>
                    
                       
                    @else --}}
                            @if (Auth::check() and $details->user_id == Auth::user()->id)
                                Vous ne pouvez pas contribur a votre propre offre.
                            @endif


                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="search widget-item">
                            @php
                                \Carbon\Carbon::setLocale('fr');
                            @endphp
                            <span>Actif {{ $details->created_at->diffForHumans() }} </span>
                            <form class="d-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn">
                                    <i class="icofont-search-1"></i>
                                </button>
                            </form>
                        </div>
                        {{--  admin info comming soon---}}
                        <div class="admin widget-item">
                            @if ($profile_count > 0)
                                <img style="width: 100px; height:100px;" src="{{ asset('storage/UserDocument/'.$profile->photo) }}" alt="admin">
                                
                            @else
                            <img src="{{asset('assets/avatar7.png')}}" alt="Admin">
                            @endif
                            
                            <h4>{{$profile->nom_prenoms ?? ''}}</h4>
                            <span>Autheur</span>
                            
                        </div>
                       {{--  admin info comming soon---}}
                        <div class="post widget-item d-none">
                            <h3>Popular Post</h3>
                            <div class="post-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/img/blog/blog-details1.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Donate for nutrition less poor people</a>
                                        </h4>
                                        <p>By -
                                            <a href="#">Admin</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/img/blog/blog-details2.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Charity meetup in Berlin next year</a>
                                        </h4>
                                        <p>By -
                                            <a href="#">Admin</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/img/blog/blog-details3.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Donate for poor people for food & water</a>
                                        </h4>
                                        <p>By -
                                            <a href="#">Admin</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/img/blog/blog-details4.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Little Sanjana joined in a charity to help people</a>
                                        </h4>
                                        <p>By -
                                            <a href="#">Admin</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>

                        <div class="common-right-content widget-item">
                            <h3>Categories</h3>
                            <div class="d-flex justify-content-between">
                                <ul class="mx-2">
                                    <li><a href="{{ url('campagnes/Anniversaire') }}">Anniversaire</a></li>
                                    <li><a href="{{ url('campagnes/Associatif') }}">Associatif</a></li>
                                    <li><a href="{{ url('campagnes/Entertainment') }}">Divertissement</a></li>
                                    <li><a href="{{ url('campagnes/Evènement') }}">Evénément</a></li>
                                    <li><a href="{{ url('campagnes/Environnement') }}">Environnement</a></li>
                                    <li><a href="{{ url('campagnes/Sports') }}">Sports</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ url('campagnes/Humanitaire') }}">Humanitaire</a></li>
                                    <li><a href="{{ url('campagnes/Mariage') }}">Mariage</a></li>
                                    <li><a href="{{ url('campagnes/Mobility') }}">Mobilité</a></li>
                                    <li><a href="{{ url('campagnes/Schools') }}">Ecole</a></li>
                                    <li><a href="{{ url('campagnes/Soutien pour proche') }}">Soutien pour proche</a></li>
                                    <li><a href="{{ url('campagnes/Voyage') }}">Voyage</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        {{--  display dollar equivalent then based on xof 
                        <div class="common-right-content widget-item">
                            <h3>Dollar Equivalent</h3>
                            <div class="d-flex justify-content-between">
                                <ul class="mx-2">
                                    <li>
                                        <span>1 USD = {{ $dollar }} XOF</span>
                                    </li>
                                    <li>
                                        <span>1 XOF = {{ $xof }} USD</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      echo real value of dollar and Xof function api --}}
                        <div class="instagram widget-item">
                            @if ($contributeur_count == 0)
                                <h3>Aucunes contributions</h3>
                            @else
                                <h3 class="animate-contribution">{{ $contributeur_count }} personnes ont contribués</h3>
                                <h6 class="animate-contribution2"> <i style="font-size: 50px" class="icofont-map-pins"></i> Cagnotte organiséé près de chez vous</h6>
                            @endif

                            <div class="row m-0">

                                @foreach ($contributeur as $contribuable)
                                    <div style="margin-right: 2%;" class="col-2 col-sm-2 col-lg-2 p-0 mr-2 d-none">

                                        <div class="instagram-item">
                                            <img src="{{ asset('/storage/UserPhoto/' . $contribuable->photo) }}" alt="">
                                            <a href="{{ url('/contributions') }}">

                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                <table class="table table-striped table-borderless">
                                    <thead>
                                        @if ($contributeur_count > 0)
                                            <tr>
                                                <th>NOM CONTRIBUTEUR</th>
                                                <th>MONTANT</th>

                                            </tr>
                                        @endif
                                    </thead>
                                    <tbody>
                                        @foreach ($contributeur as $contribuable)
                                            <tr>
                                                <td>{{ $contribuable->name }} {{ $contribuable->surname }} </td>
                                                <td class="font-weight-bold">{{ $contribuable->montant }} FCFA</td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    {!! $contributeur->links() !!}
                                </div>

                            </div>

                           
                        </div>

                        <div class="">
                            
                            <section>
                                
                                <div class="box">
                                    <p class="text mt-3">
                                        {{-- env url / collecte/ id-secret --}}
                                        {{ config('app.url') }}/collecte/{{ $details->id_secret }}


                                    </p>
                                    <button class="button" type="button">
                                        <img src="https://s2.svgbox.net/octicons.svg?ic=copy" alt="Icon">
                                    </button>
                                </div>
                            </section>

                             
                            

                        </div>
                        {{-- @if ($details->video != null)
                    <div class="instagram widget-item">  
                        @php
                          echo  htmlspecialchars_decode($details->video);
                        @endphp
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/MNX7HgcWqHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>  
                    @endif --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function edValueKeyPress() {
            var x = document.getElementById("invest").value;

            document.getElementById("for_th_day").innerHTML = (x / {{$dollar}}) + "Dollar";

        }

        //get real value of dollar and Xof function api
        function getRealValue() {
            var x = document.getElementById("invest").value;
            var url = "https://api.exchangeratesapi.io/latest?base=USD";
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onload = function() {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    var x = document.getElementById("invest").value;
                    var realValue = (x / data.rates.XOF);
                    document.getElementById("for_th_day").innerHTML = realValue + "FCFA";
                }
            }
            xhr.send();
        }
        //return real value of dollar and Xof function api without refresh page


        

    </script>
    <script>
        //copy to clipboard .text class value
        
        // Text in an element
        function copyToClipboard(textSelector) {
        const textToCopy = document.querySelector(textSelector);
        const selection = window.getSelection();
        const range = document.createRange();
        
        range.selectNodeContents(textToCopy);
        selection.removeAllRanges();
        selection.addRange(range);
        
        document.execCommand('copy');
        selection.removeAllRanges();

        // Custom feedback
       // alert('Text copied: ' + textToCopy.textContent);
        //}
        swal("Copié!", "Votre lien a été copié dans le presse-papiers.", "success");
        }
        
        // USAGE
        document.querySelector('.button').addEventListener('click', function() {
        copyToClipboard('.text');
        });

    </script>
@stop
