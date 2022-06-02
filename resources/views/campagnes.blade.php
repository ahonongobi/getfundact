@extends('_layouts._head')
<style>
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
.language{
    display: none !important;
}
</style>
@section('content')
    <div class="container mt-3 bg-white pt-100">
        <span  class="element mb-3">
            <a href="{{url('campagnes/Anniversaire')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-birthday-cake"> </i> Anniversaire</a>
            <a href="{{url('campagnes/Soutien pour proche')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-heart-alt"> </i>Soutien pour proche</a>
            
            <a href="{{url('campagnes/Ecole')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-education"> </i>Ecole</a>
            <a href="{{url('campagnes/Sport')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-football"> </i>Sport</a>

            
        </span>
        <span class="element2 mb-3 mt-3">
            <a href="{{url('campagnes/Associatif')}}" type="submit"  class="outline green-white"><i style="font-size: 20px" class="icofont-money"> </i>Associatif</a>
            <a href="{{url('campagnes/Tontine')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-money"></i>Tontine</a>
            <a href="{{url('campagnes/Humanitaire')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-users-social"></i>Humanitaire</a>
            {{-- duplicate ten --}}
            <a href="{{url('campagnes/Familliale')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-people"></i>Familliale</a>
            <a href="{{url('campagnes/Mobilité')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-ui-travel"></i>Mobilité</a>
            <a href="{{url('campagnes/Effectuer un Voyage')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-airplane-alt"></i>Voyage</a>

            
        </span>
        <span class="element2 mb-3 mt-3">
            <a href="{{url('campagnes/Technologie')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-help-robot"> </i>Technologie</a>
            {{-- duplicate ten --}}
            <a href="{{url('campagnes/Medical')}}" type="submit" class="outline green-white"><i style="font-size: 20px" class="icofont-hospital"> </i>Medical</a>
            

            
        </span>
        {{-- category --}}
        
    </div>
    <section id="donations-area" class="donations-area two pt-100 pb-70">
        <div class="container mt-3">
            
            <div class="section-title">
                <span class="sub-title">GETFUND ACTION</span>
                <h2> Principales collectes de fonds</h2>

            </div>
            <div class="row">

                @foreach ($campagnes as $item)
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
                                        <li>Montant contribué:  @php
                                        if($item->montant_cotise==0)
                                        echo "0 FCFA";
    
                                        else {
                                            echo $item->montant_cotise.' FCFA';
                                        }
                                    @endphp</li>
                                    <li>Montant visé: {{$item->montant_v}} FCFA</li>
                                    --}}
                                    <li style="font-weight: bold;font-size: 15px;">
                                        @php 
                                        if($item->montant_cotise==0)
                                        echo "XOF 0";
    
                                        else {
                                            echo 'XOF '.number_format((float)$item->montant_cotise,2,'.','');
                                        }
                                        @endphp 
                                        collectés / XOF{{$item->montant_v}}
                                        
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
                    {!! $campagnes->links() !!}
                </div>
            </div>
        </div>
    </section>
    
@endsection
