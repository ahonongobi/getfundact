@extends('_layouts._head')

<style>
    .sub-title, h2, ul li {
        font-family: montserrat;
    }
    button {
  cursor: pointer;
  outline: none;
}
a.outline {
  position: relative;
  z-index: 3;
  background: transparent;
  color: #1172c4;
  font-size: 14px;
  border-color: #1172c4;
  border-style: solid;
  border-width: 2px;
  border-radius: 22px;
  padding: 10px 40px;
  text-transform: uppercase;
  transition: all 0.2s linear;
}
a.outline:hover {
  color: white;.element
  background: #1172c4;
  border-color: white;
  transition: all 0.2s linear;
}
a.green-white {
  font-weight: 700;
  color: #ff6015;
  border-color: #ff6015;
  background: transparent;
}
a.green-white:hover {
  color: white;
  background: #ff6015;
  border-color: #ff6015;
}
.element2{
    display: flex;
    
    flex-direction: row;
    justify-content: space-between; 
    width: 100%;
    margin: 0 auto;
    

}
.element {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly; 
    width: 100%;
    margin: 5px;
    

}
/** on mobile then make it a column */
@media (max-width: 767px) {
    .element, .element2{
        flex-direction: column;
        flex: 50%;
        
    }
    .element a, .element2 a{
        margin-bottom: 10px;
        width: auto;
        text-align: center;
        justify-content: center;
    }
    
}
/** -------------------------------------------------- */


.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
</style>

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
                            <span style="font-family: montserrat;">COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE</span>
                            <h1 style="font-family: montserrat; ">Une collecte de fonds de confiance pour tous les moments de vie.</h1>
                            <p style="font-family: montserrat; ">Faites-vous aider. Exprimez votre g??n??rosit??. D??marrer en un seul clic.</p>
                            <div class="banner-btn-area">
                                <a style="font-family: montserrat; " class="common-btn banner-btn" href="{{ url('login') }}">D??marrer une campagne</a>
                                <a style="font-family: montserrat; " class="common-btn" href="/how-work">Comment ??a marche ?</a>
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
                            <p>Faites-vous aider. Exprimez votre g??n??rosit??. D??marrer en un seul clic.</p>
                            <div class="banner-btn-area">
                                <a style="font-family: montserrat; " class="common-btn banner-btn" href="{{ url('login') }}">D??marrer une campagne</a>
                                <a style="font-family: montserrat; " class="common-btn" href="/how-work">Comment ??a marche ?</a>
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
                            <p>Faites-vous aider. Exprimez votre g??n??rosit??. D??marrer en un seul clic.</p>
                            <div class="banner-btn-area">
                                <a style="font-family: montserrat; " class="common-btn banner-btn" href="{{ url('login') }}">D??marrer une campagne</a>
                                <a style="font-family: montserrat; " class="common-btn" href="/how-work">Comment ??a marche ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="feature-area two pb-70 d-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-item">
                    <i class="flaticon-solidarity"></i>
                    <h3>
                        <a href="#">Configuration simple
</a>
                    </h3>
                    <p>Vous pouvez personnaliser et partager votre campagne getfund Action en quelques minutes. </p>
                   
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-item two">
                    <i class="flaticon-donation"></i>
                    <h3>
                        <a href="#">S??curit??</a>
                    </h3>
                    <p>Notre ??quipe de confiance et s??curit?? travaille 24 h/24 et 7 j/7 pour vous prot??ger contre d'??ventuelles fraudes.</p>
                   
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="feature-item three">
                    <i class="flaticon-love"></i>
                    <h3>
                        <a href="#">B??n??fique</a>
                    </h3>
                    <p>Exploiter la puissance des r??seaux sociaux pour diffuser votre histoire et obtenir davantage de soutien.</p>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-area two pb-70 mt-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">FINANCEZ VOTRE PROJET AVEC LES DONS</span>
                        <h2>GETFUND ACTION</h2>
                    </div>
                    <p>GETFUND ACTION , Une plateforme qui permet ?? vos contributeurs de choisir collectivement de financer directement et de mani??re tra??able vos projets identifi??s.</p>
                    <ul>

                       
                        <li>
                            <span>01</span>
                           Cr??er gratuitement et facilement une campagne.
                        </li>
                        <li>
                            <span>02</span>
                            Partager la campagne avec vos amis, vos proches , sur des reseaux sociaux,  etc.
                        </li>
                        <li>
                            <span>03</span>
                            Collecter l???argent des participants par carte bancaire et par mobile money .
                        </li>
                        <li>
                            <span>04</span>
                            Recever les fonds collect??s sur votre compte bancaire ou sur votre compte mobile money puis ex??cuter votre projet.
                        </li>
                    </ul>
                    <div class="about-btn-area">
                        {{-- withdrawal url --}}
                        <a class="common-btn about-btn" href="{{ url('login') }}">Commencer votre getfund-act</a>
                        <a class="common-btn" href="/how-work">Comment ??a marche</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/img/about/about-main2.jpg" alt="About">
                    <div class="video-wrap">
                        <button class="js-modal-btn video-btn" data-bs-toggle="modal" href="#exampleModalToggle">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal start -->
<!-- Button trigger modal -->
  <style>
     /** set with and height on youtube iframe according to the device **/ 
        
  </style>
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/lPfUoROFGEM?controls=0" title="Getfund act" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
    </div>
  </div>
</div>

  
  {{-- modal end here --}}
<section id="donations-area" class="donations-area two pt-100 pb-70">
    <div class="container">
        <span  class="element mb-3">
            <a href="{{url('campagnes/Anniversaire')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-birthday-cake"> </i> Anniversaire</a>
            <a href="{{url('campagnes/Soutien pour proche')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-heart-alt"> </i>Soutien pour proche</a>
            
            <a href="{{url('campagnes/Education')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-education"> </i>??ducation</a>
            <a href="{{url('campagnes/Sport')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-football"> </i>Sport</a>

            
        </span>
        <span class="element2 mb-3 mt-3">
            <a href="{{url('campagnes/Association')}}" type="submit"  class="outline green-white"><i style="font-size: 20px" class="icofont-money"> </i>Association</a>
            
            <a href="{{url('campagnes/Humanitaire')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-users-social"></i>Humanitaire</a>
            {{-- duplicate ten --}}
            <a href="{{url('campagnes/Famille')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-people"></i>Famille</a>
            
            <a href="{{url('campagnes/Effectuer un Voyage')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-airplane-alt"></i>Voyage</a>

            
        </span>
        <span class="element2 mb-3 mt-3">
            <a href="{{url('campagnes/Technologie')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-help-robot"> </i>Technologie</a>
            {{-- duplicate ten --}}
            <a href="{{url('campagnes/Sant??')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-hospital"> </i>Sant??</a>
            

            
        </span>
        <div class="section-title">
            <span class="sub-title">GETFUND ACTION</span>
            <h2>Et si vous investissiez dans un projet ?? impact positif ?</h2>
   
        </div>
        <div class="row">

            @foreach ($all_campagnes as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div  class="img">
                        @php
                        $simpleString = $item->id;
                        $ciphering = 'AES-128-CTR';
                        $iv_lenght = openssl_cipher_iv_length($ciphering);
                        $option = 0;
                        $encryption_iv = '1234567891011121';
                        $encryption_key = 'abyssinie';
                        $encryption = openssl_encrypt($simpleString,$ciphering,$encryption_key,$option,$encryption_iv);
                        @endphp
                        <img style="height: 400px !important" src="{{asset('storage/UserDocument/'.$item->file_vignette)}}" alt="Donation">
                        <a class="common-btn" href="{{ url('getfund-donation-details/'.$encryption.'/'.$item->name_b) }}">Contribuer</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#{{$item->categories}}</a>
                            <h3>
                                <a href="{{ url('getfund-donation-details/'.$encryption.'/'.$item->name_b) }}">{{$item->name}}</a>
                            </h3>
                            <p>
                                @php
                                echo substr($item->details,0,75).'...'
                                @endphp
                                
                            </p>
                            
                        </div>
                        <div class="bottom">
                            {{-- diffFormHuman --}}
                            @php
                               //passe to carbon last_donation and display according to diffFormHuman
                               //set carbon to french
                                 $carbon = Carbon\Carbon::now();
                                 $carbon->setLocale('fr');
                                 
                                 $last_donation = Carbon\Carbon::parse($item->last_donation);
                                    $now = Carbon\Carbon::now();
                                    $diffFormHuman = $last_donation->diffForHumans($now);
                                    $diffFormHuman = str_replace('il y a ','il y a',$diffFormHuman);
                                    $diffFormHuman = str_replace('avant','',$diffFormHuman);
                                    $diffFormHuman = str_replace('mois','mois',$diffFormHuman);
                                    $diffFormHuman = str_replace('jour','jour',$diffFormHuman);
                                    $diffFormHuman = str_replace('heure','heure',$diffFormHuman);
                                    $diffFormHuman = str_replace('minute','minute',$diffFormHuman);
                                    $diffFormHuman = str_replace('seconde','seconde',$diffFormHuman);    

                            @endphp
                            @if ($item->last_donation!=null)
                            <p>Dernier don : Il y a {{
                                $diffFormHuman
                               }} </p>
                            @else
                            <p>Dernier don : aucun</p>
                            @endif
                            
                            <div style="height: 15px;" class="progress">
                                @php
                                    $xpercent = 100*$item->montant_cotise/$item->montant_v;
                                    $x = number_format((float)100*$item->montant_cotise/$item->montant_v,2,'.','');
                                @endphp
                                <div  class="progress-bar  progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: {{ $xpercent }}%; background-color: #ff6015 !important" aria-valuenow="{{$xpercent}}" aria-valuemin="0" aria-valuemax="100">{{$x}}%</div>
                              </div>
                             {{--@if ($item->montant_cotise==0.00)
                             <div class="skill">
                                <div class="skill-bar skill0 wow fadeInLeftBig">

                                    
                                    <span class="skill-count0">0%</span>
                                </div>
                            </div>
                             @endif
                            
                            @if (0 < $item->montant_cotise AND $item->montant_cotise < (10*$item->montant_v)/100)
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

                            --}}
                            
                            <ul style="width: 100% !important">

                                   {{-- laste affichage 
                                    <li>Montant contribu??:  @php
                                    if($item->montant_cotise==0)
                                    echo "0 FCFA";

                                    else {
                                        echo $item->montant_cotise.' FCFA';
                                    }
                                @endphp</li>
                                <li>Montant vis??: {{$item->montant_v}} FCFA</li>
                                --}}
                                <li style="font-weight: bold;font-size: 15px;">
                                    @php 
                                    if($item->montant_cotise==0)
                                    echo "XOF 0";

                                    else {
                                        echo 'XOF '.number_format((float)$item->montant_cotise,2,'.','');
                                    }
                                    @endphp 
                                    collect??s / XOF{{$item->montant_v}}
                                    
                                </li>
                                <li> </li>
                                
                            </ul>
                           {{--<h4>Contributions: 
                                <span>60 personnes</span>
                            </h4>--}}
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
            <div class="col-sm-6 col-lg-4">%MCEPASTEBIN%
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
            </div>%MCEPASTEBIN%
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


<div class="benefit-area two pt-100 pb-70 d-none">
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
                    <span class="sub-title">GETFUND ACT</span>
                    <h2>Vous offre tout ce dont vous avez besoin
</h2>
                    <p> Notre r??putation repose sur notre volont?? de servir et soutenir notre communaut?? ?? chaque ??tape.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item">
                            <i class="flaticon-house"></i>
                            <h3>Humanitaire</h3>
                            <p style="font-family: montserrat;">Faites un don ou lancez une collecte de fonds pour aider un proche.
</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item two">
                            <i class="flaticon-hospital"></i>
                            <h3>Aide medical</h3>
                            <p>Lancez une campagne et r??glez de suite vos d??penses de sant??.

</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item three">
                            <i class="flaticon-fast-food"></i>
                            <h3>Anniversaire</h3>
                            <p>Faites un don ou lancez une collecte de fonds pour aider un proche.
</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6">
                        <div class="benefit-item four">
                            <i class="flaticon-graduation-cap"></i>
                            <h3>??ducation</h3>
                            <p>Lancez une campagne et r??glez de suite vos frais de scolarit??.

</p>
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
                                <span>Australia</span>%MCEPASTEBIN%
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