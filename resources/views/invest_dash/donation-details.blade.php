{{-- get real value of dollar and Xof online --}}
{{-- i'm power abyssinie[gobi]stack --}}
@php 
$dollar = file_get_contents('https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=USD&to_currency=XOF&apikey=ZQJXQZQJXQZQJXQZ');
$dollar = json_decode($dollar, true);
$dollar = $dollar['Realtime Currency Exchange Rate']['5. Exchange Rate'];
$dollar = round($dollar, 2);
$xof = file_get_contents('https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=XOF&to_currency=USD&apikey=ZQJXQZQJXQZQJXQZ');
$xof = json_decode($xof, true);
$xof = $xof['Realtime Currency Exchange Rate']['5. Exchange Rate'];
$xof = round($xof, 2);
@endphp
@extends('_layouts._invest')


@section('content')
<div class="donation-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-img"> 
                        <h3 style="text-transform: uppercase; font-family:montserrat;">A Propos et description</h3>
                        <div style="height: 550px; class="">
                            <img id="mobile_img" src="{{asset('storage/UserDocument/'.$details->file_vignette)}}" style="width: 100%; height:550px; oject-fit:cover; object-position: bottom;" alt="Details">
                        </div>
                        <h2 style="text-transform: uppercase; font-family:montserrat;">{{$details->name}}</h2>
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
                          echo  htmlspecialchars_decode($details->video);
                        @endphp
                       {{-- <iframe width="420" height="315" src="https://www.youtube.com/embed/MNX7HgcWqHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                    </div>  
                    @endif
                    <div class="details-share">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="left">
                                    <ul>
                                        <li>
                                            <span>Paratger:</span>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/donation-details/{{ url('donation-details/'.$details->id.'/'.$details->name_b) }}&display=popup">
                                                <i class="icofont-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?text={{ url('donation-details/'.$details->id.'/'.$details->name_b) }}" target="_blank">
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
                                        @for ($i=0; $i < count($all_tags); $i++)
                                        <li>
                                            <a href="#">#{{ $all_tags[$i] }}</a>
                                        </li>
                                        @endfor
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-payment">
                        <h3>Contribution</h3>
                        
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
                                        <i class="icofont-money"></i>
                                    </label>
                                    <input onInput="edValueKeyPress()" id="invest" type="number" min="0" name="montant" class="form-control" placeholder="FCFA 100.00">
                                    <span class="text-danger">
                                        @if ($errors->has('montant'))
                                            {{$errors->first('montant')}}
                                        @endif
                                    </span>
                                </div>
                                <div class="calculatrice mb-3">
                                    {{-- i accept and agree policy and privacy checkbox --}}
                                    <div class="form-check">
                                        <input required type="checkbox" class="form-check-input" id="exampleCheck1" name="accept">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <a style="text-decoration: none; color: #979797;" href="#">
                                                J'accepte les <a href="/cgu" style="color: #ff6015;">conditions d'utilisation</a> et la <a href="/termes" style="color: #ff6015;">politique de confidentialité</a>
                                            </a>
                                        </label>

                                    </div>
                                </div>
                                <div class="calculatrice">
                                    {{-- i accept and agree policy and privacy checkbox --}}
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="accept">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <a href="#">I accept and agree policy and privacy checkbox</a>
                                        </label>

                                    </div>
                                </div>
                                <div class="calculatrice">
                                    <span>1 USD = {{ $dollar ?? "" }} XOF </span>
                                    <span>Equivalent en $ (dollar):</span> <span id="for_th_day">$0</span>
                                </div>
                                <div class="text-center">
                                    @if ($check_if_user_complete_profile!=0)
                                    <button type="submit" class="btn common-btn">Faire un don maintenant</button>

                                    @else
                                    <a onclick="return confirm('Vous devez completer votre profile avant de contribuer.')" class="btn common-btn">Faire un don maintenant</a>

                                    @endif
                                </div>
                            </div>
                        </form>
                              
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="search widget-item">
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                        <span>Actif {{$details->created_at->diffForHumans()}} </span>
                        <form class="d-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn">
                                <i class="icofont-search-1"></i>
                            </button>
                        </form>
                    </div>
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
                                <li><a href="{{url('compagnes-org/Anniversaire')}}">Anniversaire</a></li>
                                <li><a href="{{url('compagnes-org/Associatif')}}">Associatif</a></li>
                                <li><a href="{{url('compagnes-org/Entertainment')}}">Divertissement</a></li>
                                <li><a href="{{url('compagnes-org/Evènement')}}">Evénément</a></li>
                                <li><a href="{{url('compagnes-org/Environnement')}}">Environnement</a></li>
                                <li><a href="{{url('compagnes-org/Sports')}}">Sports</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{url('compagnes-org/Humanitaire')}}">Humanitaire</a></li>
                                <li><a href="{{url('compagnes-org/Mariage')}}">Mariage</a></li>
                                <li><a href="{{url('compagnes-org/Mobility')}}">Mobilité</a></li>
                                <li><a href="{{url('compagnes-org/Schools')}}">Ecole</a></li>
                                <li><a href="{{url('compagnes-org/Soutien pour proche')}}">Soutien pour proche</a></li>
                                <li><a href="{{url('compagnes-org/Voyage')}}">Voyage</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="instagram widget-item">
                        <h3>{{$contributeur_count ?? '0' }} ont contribués</h3>
                        <div class="row m-0">

                            @foreach ($contributeur as $contribuable)
                            <div style="margin-right: 2%;" class="col-2 col-sm-2 col-lg-2 p-0 mr-2 d-none">
                                
                                <div class="instagram-item">
                                    <img src="{{ asset('/storage/UserPhoto/'.$contribuable->photo) }}" alt="">
                                    <a href="{{ url('/contributions') }}">
                                        
                                    </a>
                                </div>
                            </div>
                            @endforeach
                           
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>NOM CONTRIBUTEUR</th>
                                        <th>MONTANT</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contributeur as $contribuable)
                                   <tr>
                                    <td>{{$contribuable->name}} {{$contribuable->surname}} </td>
                                    <td class="font-weight-bold">{{$contribuable->montant}} FCFA</td>
                                    
                                    </tr>  
                                    @endforeach                                 
                                                                         
                                    
                                </tbody>
                            </table>
                            
                            <div class="d-flex justify-content-center">
                                {!! $contributeur->links() !!}
                            </div>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                   {{-- @if ($details->video != null)
                    <div class="instagram widget-item">  
                        @php
                          echo  htmlspecialchars_decode($details->video);
                        @endphp
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/MNX7HgcWqHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>  
                    @endif
                     --}}
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function edValueKeyPress() {
			var x = document.getElementById("invest").value;
            document.getElementById("for_th_day").innerHTML =   (x*{{$dollar}}) +"FCFA";        
		}
</script>
@stop