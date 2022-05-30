@extends('_layouts._invest')


@section('content')
    <style>
        .button-class {
            background-color: brown;
        }

        .text-white {
            color: white !important;
        }

        .grid {
            display: flex;
            flex-direction: row;
            width: 80%;
            padding-top: 30px;
        }

        .row2 {
            display: flex;
            flex-direction: column;
            padding: 12px;
            margin-right: 15px;

            border-radius: 5px;
            width: 100px;
            height: 130px;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            font-size: .8em;
            color: #aaa;
            text-align: center;
            transition: background-color .25s ease-in-out;
        }

        .row2 img {
            padding-bottom: 15px;
            border-radius: 6px;
            max-width: 100%;
        }

        .row2:Hover {
            background-color: #302c51;
            cursor: pointer;
        }

        /** make shiny button  to kkiapay-button**/
        .kkiapay-button {
            margin: 0;
            padding: 15px 70px;
            outline: none;
            border: none;
            border-radius: 5px;
            background: #f85e17;
            color: white;
            overflow: hidden;
            transition: 500ms ease all;
            position: relative;
        }

        .kkiapay-button:before {
            content: "";
            position: absolute;
            top: -40%;
            right: 110%;
            width: 30px;
            height: 200%;
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(20deg);
        }

        .kkiapay-button:hover {
            background: #ee4466;
        }

        .kkiapay-button:hover:before {
            right: -20%;
            transition: 1s ease all;
        }

    </style>
    <div class="container">
        <div class="feature-area two pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-8" style="display: none;">
                        <div class="feature-item">
                            <i class="flaticon-donation"></i>
                            <h3>
                                <p href="#">Nom: {{ $var_name }}</p>
                            </h3>
                            <h3>
                                <a href="#">Prénoms: {{ $var_surname }}</a>
                            </h3>
                            <h3>
                                <a href="#">Email: {{ $var_email }}</a>
                            </h3>
                            <h3>
                                <a href="#">Montant: {{ $var_montant }}FCFA</a>
                            </h3>

                            <form action="{{ url('checkout') }}" method="POST">
                                @csrf
                                <input type="hidden" name="email" value="$var_email" id="">
                                <input type="hidden" name="amount" value="{{ $var_montant }}">
                                <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7" data-public-key="pk_sandbox_NTc9o_eAdlAxVYHVkq_kZXsy"
                                                                data-button-text="Contribuer {{ $var_montant }}" data-button-class="btn common-btn"
                                                                data-transaction-amount="{{ $var_montant }}"
                                                                data-customer-firstname="{{ $var_surname }}" data-customer-email="{{ $var_email }}"
                                                                data-customer-lastname="{{ $var_name }}"
                                                                data-transaction-description="Description de la transaction" data-currency-iso="XOF">
                                </script>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <div class="feature-area two pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div style="background-color: #f85e17;box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;"
                            class="feature-item">
                            <i class="flaticon-donation"></i> <span class="text-white"
                                style="font-size: 50px;">({{ $var_montant }}FCFA)</span>
                            {{-- <h3>
                            <p href="#">Nom: {{ $var_name }}</p>
                        </h3>
                        <h3>
                            <a href="#">Prénoms: {{ $var_surname }}</a>
                        </h3>
                        <h3>
                            <a href="#">Email: {{ $var_email }}</a>
                        </h3>
                        <h3>
                            <a href="#">Montant: {{ $var_montant }} FCFA</a>
                        </h3> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-white" scope="col">Nom</th>
                                            <th class="text-white" scope="col">Prénoms</th>
                                            <th class="text-white" scope="col">Email</th>
                                            <th class="text-white" scope="col">Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-white" scope="row">{{ $var_name }}</th>
                                            <td class="text-white">{{ $var_surname }}</td>
                                            <td class="text-white">{{ $var_email }}</td>
                                            <td class="text-white">{{ $var_montant }} FCFA</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            {{-- live
                                <kkiapay-widget  amount="{{$var_montant}}"
                        key='c3b0b98740689ce0ba3c23a739738f25dad41a8f'
                        url='/process'
                        position='center'
                        sandbox='false'
                        data=''
                        callback="{{route('callback',["slug"=>$var_montant,"email"=>$var_email])}}"> --}}
                            {{-- test id --}}

                            {{-- <kkiapay-widget  amount="1"
                            key='03ef50b091f211eaa76be1d98e099dbf'
                            url='/process'
                            position='center'
                            sandbox='true'
                            data=''
                            theme='#ff6015'
                            callback="{{route('callback',["slug"=>$var_montant,"email"=>$var_email])}}"> --}}



                        </div>
                    </div>


                </div>

            </div>


        </div>



    </div>

    <div class="d-flex justify-content-center mb-3">
        <button class="kkiapay-button"><i class="flaticon-donation"></i> Effectuer le paiement ici</button>
    </div>
    <div class="d-flex justify-content-center mb-3 grid">

        <div class="row2" onclick="chosePaymentMethod('visa')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Visa_2021.svg">
        </div>
        <div class="row2" onclick="chosePaymentMethod('mastercard')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg">
        </div>
        <div class="row2" onclick="chosePaymentMethod('americanexpress')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg">
        </div>
        <div class="row2" onclick="chosePaymentMethod('paypal')">
            <img src="{{ asset('assets/img/banner/mtn.png') }}">
        </div>
        <div class="row2" onclick="chosePaymentMethod('bitcoin')">
            <img src="{{ asset('assets/img/banner/moov.png') }}">
        </div>
        <div class="row2" onclick="chosePaymentMethod('ethereum')">
            <img src="{{ asset('assets/img/orange-money.png') }}">
        </div>
    </div>
    {{-- <script src="https://cdn.kkiapay.me/k.js"></script> --}}



    <script amount="1" callback="{{ route('callback', ['slug' => $var_montant, 'email' => $var_email]) }}" data="" url="/process"
        position="center" theme="#ff6015" sandbox="true" key="03ef50b091f211eaa76be1d98e099dbf"
        src="https://cdn.kkiapay.me/k.js"></script>

@stop
