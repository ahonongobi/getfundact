@extends('_layouts._invest')

@section('content')
<div class="about-area two pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE ENTIER PUIS DEPENSEZ</span>
                        <h2>We're for social causes</h2>
                    </div>
                    <p>GETFUND ACT, la plateforme de campagne en ligne gratuite, a décidé de créer une campagne en ligne qui brise les barrières des devises. De ce fait, il vous sera possible de créer ou de participer à une campagne en ligne, quelque soit votre devise. Vous pouvez créer, gratuitement, une campagne.</p>
                    <ul>
                        <li>
                            <span>01</span>
                           Créez gratuitement et facilement une cagnotte.
                        </li>
                        <li>
                            <span>02</span>
                            Partagez la cagnotte avec vos amis, vos proches etc.
                        </li>
                        <li>
                            <span>03</span>
                            Collectez l’argent des participants par carte bancaire.
                        </li>
                        <li>
                            <span>04</span>
                            Dépensez ou transférez les fonds partout dans le monde.
                        </li>
                    </ul>
                    <div class="about-btn-area">
                        <a class="common-btn about-btn" href="#">Get Start A Fundraising</a>
                        <a class="common-btn" href="#">COMMENT ÇA MARCHE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/img/about/about-main2.jpg" alt="About">
                    <div class="video-wrap">
                        <button class="js-modal-btn" data-video-id="uemObN8_dcw">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<section class="donations-area two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">GETFUND ACTION</span>
            <h2>Campagnes publics</h2>
   
        </div>
        <div class="row">

            @foreach ($all_campagnes as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{asset('storage/UserDocument/'.$item->file_vignette)}}" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details-org/'.$item->id.'/'.$item->name_b) }}">Contribuer</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#{{$item->categories}}</a>
                            <h3>
                                <a href="{{ url('donation-details-org/'.$item->id.'/'.$item->name_b) }}">{{$item->name}}</a>
                            </h3>
                            <p>
                                @php
                                echo substr($item->details,0,75).'...'
                                @endphp
                                
                            </p>
                        </div>
                        <div class="bottom">
                            
                             
                            @if ($item->montant_cotise==0)
                             <div class="skill">
                                <div class="skill-bar skill0 wow fadeInLeftBig">

                                    
                                    <span class="skill-count0">0%</span>
                                </div>
                            </div>
                             @endif
                            
                            @if ($item->montant_cotise==(1/10)*$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill10 wow fadeInLeftBig">

                                    
                                    <span class="skill-count10">10%</span>
                                </div>
                            </div>
                            @endif
                            
                            @if ($item->montant_cotise==(1/20)*$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill20 wow fadeInLeftBig">

                                    
                                    <span class="skill-count20">20%</span>
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise==(1/50)*$item->montant_v)
                            <div class="skill">
                               
                                <div class="skill-bar skill50 wow fadeInLeftBig">

                                    <span class="skill-count50">50%</span>
                                </div>
                            </div>     
                            @endif
                            
                            @if ($item->montant_cotise==(1/75)*$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill75 wow fadeInLeftBig">

                                    
                                    <span class="skill-count75">75%</span>
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise==(1/85)*$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill1 wow fadeInLeftBig">

                                    <span class="skill-count1">85%</span>
                                    
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise==(1/95)*$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill95 wow fadeInLeftBig">

                                    <span class="skill-count95">95%</span>
                                    
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise==$item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill100 wow fadeInLeftBig">

                                    <span class="skill-count100">100%</span>
                                    
                                </div>
                            </div>
                            @endif

                            
                            <ul>
                                <li>Montant contribué:  @php
                                    if($item->montant_cotise==NULL)
                                    echo "0 FCFA";

                                    else {
                                        echo $item->montant_cotise.' FCFA';
                                    }
                                @endphp</li>
                                <li>Montant visé: {{$item->montant_v}} FCFA</li>
                            </ul>
                            <h4>Contributions: 
                                <span>60 personnes</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation2.jpg" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Education</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">Education for poor children</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill2 wow fadeInLeftBig">
                                    <span class="skill-count2">95%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $6,500.00</li>
                                <li>Goal: $8,050.00</li>
                            </ul>
                            <h4>Donated by
                                <span>50 people</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-none">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation3.jpg" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Family</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">Financial help for poor</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill3 wow fadeInLeftBig">
                                    <span class="skill-count3">90%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,540.00</li>
                                <li>Goal: $6,055.00</li>
                            </ul>
                            <h4>Donated by
                                <span>40 people</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-none">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation4.jpg" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Funding</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">Funding for family</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill4 wow fadeInLeftBig">
                                    <span class="skill-count4">80%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,56.00</li>
                                <li>Goal: $6,85.00</li>
                            </ul>
                            <h4>Donated by
                                <span>30 people</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-none">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation5.jpg" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Relief</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">Relief for cyclone-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill5 wow fadeInLeftBig">
                                    <span class="skill-count5">75%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,5.00</li>
                                <li>Goal: $3,85.00</li>
                            </ul>
                            <h4>Donated by
                                <span>20 people</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation6.jpg" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Drought</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">Relief for drought-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill6 wow fadeInLeftBig">
                                    <span class="skill-count6">70%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $9,5.00</li>
                                <li>Goal: $3,84.00</li>
                            </ul>
                            <h4>Donated by
                                <span>10 people</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection