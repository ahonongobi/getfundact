@extends('_layouts._invest')


@section('content')
<div class="donation-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-img"> 
                        <img src="{{asset('storage/UserDocument/'.$details->file_vignette)}}" style="width: 100%; height:550px; oject-fit:cover; object-position: 50% 50%;" alt="Details">
                        <h2>{{$details->name}}</h2>
                        <p>
                            @php
                                echo htmlspecialchars_decode($details->details_ojectifs);
                            @endphp
                        </p>
                        <blockquote>
                            <i class="icofont-quote-left"></i>
                            @php
                                echo htmlspecialchars_decode($details->detail_budget);
                            @endphp
                        </blockquote>
                        <p>@php
                            echo htmlspecialchars_decode($details->Details_budget_en);
                        @endphp</p>
                    </div>
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
                                        <i class="icofont-dollar"></i>
                                    </label>
                                    <input onInput="edValueKeyPress()" id="invest" type="number" min="0" name="montant" class="form-control" placeholder="$100.00">
                                    <span class="text-danger">
                                        @if ($errors->has('montant'))
                                            {{$errors->first('montant')}}
                                        @endif
                                    </span>
                                </div>
                                <div class="calculatrice">
                                    <span>Equivalent en FCFA:</span> <span id="for_th_day">0FCFA</span>
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
                    @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                         Actif {{$details->created_at->diffForHumans()}}
                    <div class="search widget-item d-none">
                       
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
                        <ul>
                            <li><a href="#">Education (10)</a></li>
                            <li><a href="#">Medical (25)</a></li>
                            <li><a href="#">Food & Water (14)</a></li>
                            <li><a href="#">National Charity (2)</a></li>
                            <li><a href="#">Cloth (4)</a></li>
                        </ul>
                    </div>
                    <div class="instagram widget-item">
                        <h3>ont contribués</h3>
                        <div class="row m-0">
                            @foreach ($contributeur as $contribuable)
                            <div style="margin-right: 2%;" class="col-2 col-sm-2 col-lg-2 p-0 mr-2 d-none">
                                <div class="instagram-item">
                                    <img src="{{ asset('/storage/UserPhoto/'.$contribuable->photo) }}" alt="Instagram">
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
                                    <td>{{$contribuable->name}}</td>
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

                   {{-- <div class="instagram widget-item">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/MNX7HgcWqHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function edValueKeyPress() {
			var x = document.getElementById("invest").value;
            
            document.getElementById("for_th_day").innerHTML =   (x*584.87) +"FCFA";
            
            
            
           
            
		}
</script>
@stop