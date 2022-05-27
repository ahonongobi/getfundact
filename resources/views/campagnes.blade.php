@extends('_layouts._head')

@section('content')
    <section id="donations-area" class="donations-area two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">GETFUND ACTION</span>
                <h2>Principales collectes de fonds</h2>

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
                                <img style="height: 400px !important"
                                    src="{{ asset('storage/UserDocument/' . $item->file_vignette) }}" alt="Donation">
                                <a class="common-btn"
                                    href="{{ url('getfund-donation-details/' .$encryption. '/' . $item->name_b) }}">Contribuer</a>
                            </div>
                            <div class="inner">
                                <div class="top">
                                    <a class="tags" href="#">#{{ $item->categories }}</a>
                                    <h3>
                                        <a
                                            href="{{ url('getfund-donation-details/' . $item->id . '/' . $item->name_b) }}">{{ $item->name }}</a>
                                    </h3>
                                    <p>
                                        @php
                                            echo substr($item->details, 0, 75) . '...';
                                        @endphp

                                    </p>
                                </div>
                                <div class="bottom">
                                    <div style="height: 15px;" class="progress">
                                        @php
                                            $xpercent = (100 * $item->montant_cotise) / $item->montant_v;
                                            $x = number_format(((float) 100 * $item->montant_cotise) / $item->montant_v, 2, '.', '');
                                        @endphp
                                        <div class="progress-bar  progress-bar-striped bg-success progress-bar-animated"
                                            role="progressbar"
                                            style="width: {{ $xpercent }}%; background-color: #ff6015 !important"
                                            aria-valuenow="{{ $xpercent }}" aria-valuemin="0" aria-valuemax="100">
                                            {{ $x }}%</div>
                                    </div>
                                    {{-- @if ($item->montant_cotise == 0.0)
                             <div class="skill">
                                <div class="skill-bar skill0 wow fadeInLeftBig">

                                    
                                    <span class="skill-count0">0%</span>
                                </div>
                            </div>
                             @endif
                            
                            @if (0 < $item->montant_cotise and $item->montant_cotise < (10 * $item->montant_v) / 100)
                            <div class="skill">
                                <div class="skill-bar skill10 wow fadeInLeftBig">

                                    
                                    <span class="skill-count10">10%</span>
                                </div>
                            </div>
                            @endif
                            
                            @if ($item->montant_cotise == (1 / 20) * $item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill20 wow fadeInLeftBig">

                                    
                                    <span class="skill-count20">20%</span>
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise == (1 / 50) * $item->montant_v)
                            <div class="skill">
                               
                                <div class="skill-bar skill50 wow fadeInLeftBig">

                                    <span class="skill-count50">50%</span>
                                </div>
                            </div>     
                            @endif
                            
                            @if ($item->montant_cotise == (1 / 75) * $item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill75 wow fadeInLeftBig">

                                    
                                    <span class="skill-count75">75%</span>
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise == (1 / 85) * $item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill1 wow fadeInLeftBig">

                                    <span class="skill-count1">85%</span>
                                    
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise == (1 / 95) * $item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill95 wow fadeInLeftBig">

                                    <span class="skill-count95">95%</span>
                                    
                                </div>
                            </div>
                            @endif
                            @if ($item->montant_cotise == $item->montant_v)
                            <div class="skill">
                                <div class="skill-bar skill100 wow fadeInLeftBig">

                                    <span class="skill-count100">100%</span>
                                    
                                </div>
                            </div>
                            @endif --}}
                                    <ul>
                                        <li>Montant contribué: @php
                                            if ($item->montant_cotise == 0) {
                                                echo '0 FCFA';
                                            } else {
                                                echo $item->montant_cotise . ' FCFA';
                                            }
                                        @endphp</li>
                                        <li>Montant visé: {{ $item->montant_v }} FCFA</li>
                                    </ul>
                                    {{-- <h4>Contributions: 
                                <span>60 personnes</span>
                            </h4> --}}
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
