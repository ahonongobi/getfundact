
@extends('_layouts._invest')

@section('content')
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
                                <a href="{{ url('donation-details/'.$item->id.'/'.$item->name_b) }}">{{$item->name}}</a>
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
        </div>
    </div>
</section>

@endsection