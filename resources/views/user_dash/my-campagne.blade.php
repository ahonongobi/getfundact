
@extends('_layouts._user')


@section('content')
<section class="donations-area two pt-100 pb-70">
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success">
           
                {{Session::get('success')}}
           
        </div>
        @endif
        <div class="section-title">
            <span class="sub-title">GETFUND ACTION</span>
            <h2>Campagnes publiques</h2>
   
        </div>
        <div class="row">

            @foreach ($campagnes as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        @php
                        $simpleString = $item->id;
                        $ciphering = 'AES-128-CTR';
                        $iv_lenght = openssl_cipher_iv_length($ciphering);
                        $option = 0;
                        $encryption_iv = '1234567891011121';
                        $encryption_key = 'abyssinie';
                        $encryption = openssl_encrypt($simpleString,$ciphering,$encryption_key,$option,$encryption_iv);
                        @endphp
                        <img style="height: 400px;" src="{{asset('storage/UserDocument/'.$item->file_vignette)}}" alt="Donation">
                        <a class="common-btn" href="{{ url('donation-details/'.$encryption.'/'.$item->name_b) }}">Détails</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#{{$item->categories}}</a>
                            <h3>
                                <a href="{{ url('donation-details') }}">{{$item->name}}</a>
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
                                
                                
                            </ul>
                            <h4 class="d-flex justify-content-between"> 
                                                        
                                <a href="{{ url('edit/'.$item->id) }}" style="text-decoration: none; color: #d45214; cursor: pointer;" class="ml-10">Modifier <i class="icofont-edit"></i></a>
                                <a onclick="deleteCampagne({{$item->id}})"  style="text-decoration: none; color: #d45214; cursor: pointer;" class="ml-10">Supprimer <i class="icofont-trash"></i></a>
                                {{--href="{{ url('delete-post/'.$item->id) }}"--}}
                                @if ($item->etat==1)
                                {{-- etat to Brouillon --}}
                                <a href="{{ url('edit/'.$item->id) }}"  style="text-decoration: none; color: #d45214; cursor: pointer;" class="ml-10">Brouillon <i class="icofont-eye-alt"></i></a>
                                 
                                @else
                                    <a style="text-decoration: none; color: green; cursor: pointer;" class="ml-10">Terminé<i class="icofont-check"></i></a>
                                    
                                @endif
                                
                            </h4>
                           {{--<h4>Contributions: 
                                <span>60 personnes</span>
                            </h4>--}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection

