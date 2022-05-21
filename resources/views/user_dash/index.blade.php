@extends('_layouts._user')

@section('content')





<div class="about-area two pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">COTISEZ EN TOUTE SECURITE A TRAVERS LE MONDE ENTIER PUIS DEPENSEZ</span>
                        <h2>GETFUND ACTION</h2>
                    </div>
                    <p>GETFUND ACTION , Une plateforme qui permet à vos contributeurs de choisir collectivement de financer directement et de manière traçable vos projets identifiés.</p>
                    <ul>
                        <li>
                            <span>01</span>
                           Créez gratuitement et facilement une campagne.
                        </li>
                        <li>
                            <span>02</span>
                            Partagez la campagne avec vos amis, vos proches , sur des reseaux sociaux,  etc.
                        </li>
                        <li>
                            <span>03</span>
                            Collectez l’argent des participants par carte bancaire et par mobile money .
                        </li>
                        <li>
                            <span>04</span>
                            Recevez les fonds collectés sur votre compte bancaire ou sur votre compte mobile money puis exécuter votre projet.
                        </li>
                    </ul>
                    <div class="about-btn-area">
                        {{-- withdrawal url --}}
                        <a class="common-btn about-btn" href="{{ url('list-withdrawal') }}">Demander un rétrait</a>
                        <a class="common-btn" href="#">Comment ça marche</a>
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
            <h2>Campagnes publiques</h2>
   
        </div>
        <div class="row">

            @foreach ($all_campagnes as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img style="height: 400px !important" src="{{asset('storage/UserDocument/'.$item->file_vignette)}}" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details/'.$item->id.'/'.$item->name_b) }}">Contribuer</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#{{$item->categories}}</a>
                            <h3>
                                <a href="{{ url('donation-details/'.$item->id.'/'.$item->name_b) }}">{{$item->name}}</a>
                            </h3>
                            <p>
                                @php
                                echo substr($item->details,0,75).'...'
                                @endphp
                                
                            </p>
                        </div>
                        <div class="bottom">
                            <div style="height: 15px;" class="progress">
                                @php
                                    $xpercent = 100*$item->montant_cotise/$item->montant_v;
                                    $x = number_format((float)100*$item->montant_cotise/$item->montant_v,2,'.','');
                                @endphp
                                <div  class="progress-bar  progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: {{ $xpercent }}%; background-color: #ff6015 !important" aria-valuenow="{{$xpercent}}" aria-valuemin="0" aria-valuemax="100">{{$x}}%</div>
                              </div>
                             
                            {{--@if ($item->montant_cotise==0)
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
                           --}}

                            
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
                            <!--<h4>Contributions: 
                                <span>60 personnes</span>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
            
            
            
            
        </div>
    </div>
</section>
@endsection