@extends('_layouts._user')


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
                                            <a href="#" target="_blank">
                                                <i class="icofont-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="icofont-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="icofont-youtube-play"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="icofont-instagram"></i>
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
                                    <input type="number" min="0" name="montant" class="form-control" placeholder="$100.00">
                                    <span class="text-danger">
                                        @if ($errors->has('montant'))
                                            {{$errors->first('montant')}}
                                        @endif
                                    </span>
                                </div>
                                <div class="text-center">
                                    
                                    <button type="submit" class="btn common-btn">Faire un don maintenant</button>

                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="search widget-item">
                        <form>
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
                            <div style="margin-right: 2%;" class="col-2 col-sm-2 col-lg-2 p-0 mr-2">
                                <div class="instagram-item">
                                    <img src="{{ asset('/storage/UserPhoto/'.$contribuable->photo) }}" alt="">
                                    <a href="{{ url('/contributions') }}">
                                        
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                            
                            
                            
                            
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
@stop