@extends('_layouts._head')

@section('content')



<div class="banner-area-two">
    <div class="banner-slider owl-theme owl-carousel">
        <div class="banner-slider-item banner-img-one">
            <div class="banner-shape">
                <img src="assets/img/banner/banner-shape1.png" alt="Shape">
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <span>COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE</span>
                            <h1>Une collecte de fonds de confiance pour tous les moments de vie.</h1>
                            <p>Faites-vous aider. Exprimez votre générosité. Démarrez en à peine 5 minutes</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="#">Démarrer un campagne</a>
                                <a class="common-btn" href="#">Comment ça marche ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-item banner-img-two">
            <div class="banner-shape">
                <img src="assets/img/banner/banner-shape1.png" alt="Shape">
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <span>COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE</span>
                            <h1>Une collecte de fonds de confiance pour tous les moments de vie.</h1>
                            <p>Faites-vous aider. Exprimez votre générosité. Démarrez en à peine 5 minutes</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="#">Démarrer un campagne</a>
                                <a class="common-btn" href="#">Comment ça marche ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-item banner-img-three">
            <div class="banner-shape">
                <img src="assets/img/banner/banner-shape1.png" alt="Shape">
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <span>COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE</span>
                            <h1>Une collecte de fonds de confiance pour tous les moments de vie.</h1>
                            <p>Faites-vous aider. Exprimez votre générosité. Démarrez en à peine 5 minutes</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="#">Démarrer un campagne</a>
                                <a class="common-btn" href="#">Comment ça marche ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="feature-area two pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-item">
                    <i class="flaticon-solidarity"></i>
                    <h3>
                        <a href="#">Be a volunteer</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-item two">
                    <i class="flaticon-donation"></i>
                    <h3>
                        <a href="#">Donate now</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="feature-item three">
                    <i class="flaticon-love"></i>
                    <h3>
                        <a href="#">Show your love</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-area two pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        
                        <h2>GETFUND ACTION</h2>
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
                        <a class="common-btn about-btn" href="#">Lancer une campapagne</a>
                        <a class="common-btn" href="#">En savoir plus</a>
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
                        <a class="common-btn" href="{{ url('getfund-donation-details/'.$item->id.'/'.$item->name_b) }}">Contribuer</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#{{$item->categories}}</a>
                            <h3>
                                <a href="{{ url('getfund-donation-details/'.$item->id.'/'.$item->name_b) }}">{{$item->name}}</a>
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
            <div class="d-flex justify-content-center">
                {!! $all_campagnes->links() !!}
            </div>
        </div>
    </div>
</section>


<section class="gallery-area two pt-100 pb-70">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Our gallery</span>
            <h2>Discover the best things we do</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
        </div>
        <div class="gallery-slider owl-theme owl-carousel">

            @foreach ($gallery as $item)
            <div class="gallery-item">
                <a href="{{ asset('/storage/UserDocument/'.$item->file_vignette) }}" data-lightbox="roadtrip">
                    <img src="{{ asset('/storage/UserDocument/'.$item->file_vignette) }}" alt="Gallery">
                    <i class="icofont-eye"></i>
                </a>
            </div>
            @endforeach
            
            
            
            
            
            <div class="gallery-item d-none">
                <a href="assets/img/gallery/gallery6.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery6.jpg" alt="Gallery">
                    <i class="icofont-eye"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="dream-area pt-100 pb-70 d-none">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Fulfill our dream</span>
            <h2>Let's make a change</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Over 20M+ people around the world is having good life because of Findo</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*50</span>country served world wide</h4>
                    <span class="sub-span">01</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">We are supporting the poor and homeless people by providing food</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*Food</span>served world wide</h4>
                    <span class="sub-span">02</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">First time a non- profitable organization is fighting against the poverty</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*Finance</span>collecting & donating</h4>
                    <span class="sub-span">03</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Over 1200+ volunteer working for Findo around the world</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*Volunteer</span>in every Country</h4>
                    <span class="sub-span">04</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Hands move to support in Yemen combat covid-19 by donating face masks</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*Lockdown</span>covid-19 helping</h4>
                    <span class="sub-span">05</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">This project seeks to build houses for reduce their suffering allow them to live</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4>
                        <span>*150</span>house project</h4>
                    <span class="sub-span">06</span>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="benefit-area two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="benefit-img">
                    <img src="assets/img/benefit-main1.jpg" alt="Benefit">
                    <img src="assets/img/benefit-shape1.png" alt="Benefit">
                    <div class="video-wrap">
                        <button class="js-modal-btn" data-video-id="uemObN8_dcw">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <span class="sub-title">Core features</span>
                    <h2>Mission to make a smile</h2>
                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item">
                            <i class="flaticon-house"></i>
                            <h3>Build home</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item two">
                            <i class="flaticon-hospital"></i>
                            <h3>Medical facilities</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item three">
                            <i class="flaticon-fast-food"></i>
                            <h3>Food & water</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item four">
                            <i class="flaticon-graduation-cap"></i>
                            <h3>Education facilities</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="event-area pt-100 pb-70 d-none">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our events</span>
            <h2>Upcoming events near you</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event1.jpg" alt="Event">
                    <div class="inner">
                        <h4>04
                            <span>Jan</span>
                        </h4>
                        <h3>
                            <a href="event-details.html">Fundraising for MQ</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>2.00pm - 5.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Australia</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event2.jpg" alt="Event">
                    <div class="inner">
                        <h4>05
                            <span>Jan</span>
                        </h4>
                        <h3>
                            <a href="event-details.html">Shout about it with us</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>1.00pm - 2.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Canada</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event3.jpg" alt="Event">
                    <div class="inner">
                        <h4>10
                            <span>Jan</span>
                        </h4>
                        <h3>
                            <a href="event-details.html">Relief giving - Providing relief</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.00pm - 4.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>USA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item-right">
                    <h4>06
                        <span>Jan</span>
                    </h4>
                    <h3>
                        <a href="event-details.html">Challenge is right for you</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>10.00am - 11.00am</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>UK</span>
                        </li>
                    </ul>
                </div>
                <div class="event-item-right">
                    <h4>07
                        <span>Jan</span>
                    </h4>
                    <h3>
                        <a href="event-details.html">Fundraising is going</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>11.00am - 12.00pm</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>France</span>
                        </li>
                    </ul>
                </div>
                <div class="event-item-right">
                    <h4>08
                        <span>Jan</span>
                    </h4>
                    <h3>
                        <a href="event-details.html">Bowling for a cause</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>1.00pm - 1.30pm</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>Spain</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-area pt-100 pb-70 d-none">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Volunteer</span>
            <h2>Meet our excellent volunteers</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="assets/img/team/team1.jpg" alt="Team">
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>Jenas handar</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="assets/img/team/team2.jpg" alt="Team">
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>Smithy alisha</h3>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="assets/img/team/team3.jpg" alt="Team">
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <h3>Johan mendal</h3>
                        <span>Volunteer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area pt-100 pb-70 d-none">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Latest news & blog</span>
            <h2>Latest charity blog</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog1.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>21 Jan, 2020</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Donate for nutration less poor people</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog2.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>22 Jan, 2020</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Charity meetup in Berline next year</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog3.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>23 Jan, 2020</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Donate for the poor people to help them</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection