
@extends('_layouts._invest')


@section('content')
<style>
    .button-class{
        background-color: brown;
    }
    .text-white{
        color: white !important;
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
                        
                            <form  action="{{url('checkout')}}" method="POST">
                                @csrf
                                <input type="hidden" name="amount" value="{{$var_montant}}">
                                <script
                                  src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                                  data-public-key="pk_sandbox_NTc9o_eAdlAxVYHVkq_kZXsy"
                                  data-button-text="Contribuer {{$var_montant}}"
                                  data-button-class="btn common-btn"
                                  data-transaction-amount="{{ $var_montant }}"
                                  data-customer-firstname="{{ $var_surname }}"
                                  data-customer-email="{{ $var_email }}"
                                  data-customer-lastname="{{ $var_name }}"
                                  data-transaction-description="Description de la transaction"
                                  data-currency-iso="XOF">
                                </script>
                               </form>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>


    
    <div  class="feature-area two pb-70">
        <div  class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div style="background-color: #f85e17;box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;" class="feature-item">
                        <i class="flaticon-donation"></i> <span class="text-white" style="font-size: 50px;">({{$var_montant}}FCFA)</span>
                        {{--<h3>
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
                                <th class="text-white"  scope="col">Nom</th>
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
                        <kkiapay-widget  amount="{{$var_montant}}"
                        key='03ef50b091f211eaa76be1d98e099dbf'
                        url='/process'
                        position='center'
                        sandbox='true'
                        data=''
                        callback="{{route('callback',["slug"=>$var_montant])}}">
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
    
    
</div>
<script src="https://cdn.kkiapay.me/k.js"></script>

   @stop