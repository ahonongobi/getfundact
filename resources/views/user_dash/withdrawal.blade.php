@extends('_layouts._user')
<style>
    .main-container{
    
    font-family: 'Red Hat Display', sans-serif;
    background: url('../images/pattern-background-desktop.svg')no-repeat top;
    background-color: #E0E8FE;
    margin-top: 1% !important;
}
.container{
    margin-top: 1% !important;
}

.top-part{
    
    background: url('../images/illustration-hero.svg') no-repeat center;
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}

.bottom-part{
    background-color: #fff;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
}

.word-section{
    text-align: center;
    padding-top: 22px;
}

.word-section h1{
    font-size: 28px;
    padding: 12px;
    color:  hsl(223, 47%, 23%);
    font-weight: 700;
}

.word-section p{
    font-size: 17px;
    letter-spacing: 0.4px;
    line-height: 23px;
    font-weight: 600;
    color: hsl(226, 20%, 71%);
    padding: 12px;
    margin-bottom: 15px;
}

.plan-section{
    background-color: hsl(225, 100%, 98%);
    display: flex;
    flex-direction: row;
    padding: 16px;
    border-radius: 12px;
    align-items: center;
    margin: 0 40px;
    margin-bottom: 32px;
}

.plan-section .img img{
    margin-right: 15px;
}

.plan-section .annual-plan h2{
    color:  hsl(223, 47%, 23%);
    font-size: 20px;
}

.plan-section .annual-plan p{
    color: hsl(226, 20%, 71%);
    font-weight: 600;
}

.plan-section .change{
    margin: auto;
    margin-right: 0px;   
}

.plan-section .change a{
    color: hsl(245, 75%, 52%);
    text-decoration: underline;
    font-weight: 600;
    transition: 0.3s ease-out;
    transition-property: color, text;
}

.plan-section .change a:hover{
    color: #766CF1;
    text-decoration: none;
}

.btn-section{
    display: flex;
    flex-direction: column;
    margin-top: 8px;
    padding-bottom: 32px;
}

.btn{
    border: none;
    width:auto;
    margin: 0 40px;
    font-size: 14px;
    padding: 14px 0;
    border-radius: 7px;
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 700;
    cursor: pointer;
}

.btn-payment{
    background-color: hsl(245, 75%, 52%);
    margin-bottom: 25px;
    color: #fff;
    transition: 0.3s ease-in;
    transition-property: background;
    box-shadow: 0 18px 14px 0px rgba(0, 0, 0, 0.2);
}

.btn-payment:hover{
    background-color: #766CF1;
}

.btn-submit{
    color: hsl(226, 20%, 71%);
    background-color: #fff;
    transition: 0.3s ease-in;
    transition-property: color;
}

.btn-submit:hover{
    color: hsl(223, 47%, 23%);
}

/* Media Queries */

@media (min-width: 1440px) {
    .main-container{
        background-image: none;
    }
}

@media (max-height: 700px) {
    .main-container{
        padding: 35px 0;
    }
}

@media (max-width: 500px) {
    .main-container{
        padding: 35px 35px;
    }

    .plan-section .annual-plan h2{
        font-size: 16px;
    }

    .plan-section .annual-plan p{
        font-size: 14px;
    }

    .plan-section .change a{
        font-size: 14px;
    }
}

@media (max-width: 375px) {
    .main-container{
        background-image: url('../images/pattern-background-mobile.svg');
        padding: 25px 25px;
    }

    .container{
        max-width: 350px !important;
    }

    br{
        display: none;
    }

    .word-section p{
        margin: 0 18px;
    }

    .plan-section{
        margin: 0 20px;
    }
    
    .annual-plan{
        margin-right: 15px;
    }
}
   
</style>
@section('content')
  
      {{--<div class="container d-none">
        <div class="details-payment">
            <h3>Contribution</h3>
            <form method="POST" action="{{ url('withdrawal') }}">
                @csrf
                
                

                <div class="form-input-area">
                    <div class="col-lg-12 mb-4">
                        <div class="form-group mb-5">
                            
                              
                                {{--<select name="nom_campagne" class="mb-4 form-group">
                                    <option>Veuillez selectionner le rétrait que vous souhaitez effectué :) </option>
                                    <option value="all">Je veux retirer tout mes sous</option>
                                    @foreach ($withdrawalinfo as $item)
                                    <option value="{{ $item->id }}-{{ $item->name }}">{{ $item->name }}/ {{ $item->created_at }}/ ${{ $item->montant_cotise ?? '0' }}</option>
                                    @endforeach
                                    
                                </select>--}}
                                {{--
                                <style>
                                    section:last-of-type button {
                                        width: 50%;
                                        padding: 2em 0;
                                        border-bottom: 0;
                                    }
        
                                    section:last-of-type button:nth-child(even) {
                                        border-right: 1px solid #e15b1a;
                                    }
        
                                    section:last-of-type button:nth-child(3),
                                    section:last-of-type button:nth-child(4) {
                                        border-bottom: 1px solid #e15b1a;
                                    }
        
                                    section button {
                                        width: 50%;
                                        padding: 1em 0;
                                        background: none;
                                        box-shadow: none;
                                        text-transform: uppercase;
                                        letter-spacing: 5px;
                                        border-left: 1px solid #e15b1a;
                                        border-top: 1px solid #e15b1a;
                                        border-bottom: 1px solid #e15b1a;
                                        border-right: 0;
                                        transition: background 0.25s ease-in;
                                        cursor: pointer;
                                        color: #302c51;
                                    }
                                    @media (max-width: 991px) {
                                        section button {
                                            width: 100%;
                                        }
                                  }
                                    section button:hover,
                                    section button.active {
                                        background: #e15b1a;
                                        color: white;
                                    }
        
                                    section button:focus {
                                        outline: none;
                                    }
        
                                    section button:last-of-type {
                                        border-right: 1px solid #e15b1a;
                                    }
        
                                    
        
                                </style>
                                 
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <label for="">Veuillez selectionner le rétrait que vous souhaitez effectué :)
                                    </label>
                                    <select name="nom_campagne" class="select2button mt-3">
                                        <option style="font-size: 5px" value="all" selected>Je veux retirer tout mes sous</option>
                                       
                                        @foreach ($withdrawalinfo as $item)
                                        <option value="{{ $item->id }}-{{ $item->name }}">{{ $item->name }}/ ${{ $item->montant_cotise ?? '0' }}</option>
                                        @endforeach
                                    </select>
        
                                </div>
                              
                         </div>
                    </div>
                    
                    
                    
                    <div class="text-center mt-3 mb-3">
                        
                        <button type="submit" class="btn common-btn">Lancer le rétrait</button>

                    
                    </div>
                </div>
            </form>
        </div>
      </div>
      --}}
  

      <div class="main-container">
        <form method="POST" action="{{ url('withdrawal') }}">
            @csrf
            <input type="hidden" name="nom_campagne" value="Not defined">
        <div class="container">
            <div class="top-part"></div>
            <div class="bottom-part">
                <div class="word-section">
                    <h1>Récapitulatif du rétrait</h1>
                    <p> Chaque demande de retrait met entre 3 et 5 jours pour être traitée et validée.</p>
                </div>
                <div class="plan-section">
                    <div class="img">
                        <img style="width: 50px;height:50px" src="{{asset('assets/img/banner/icone-de-banque-jaune.png')}}" alt="">
                    </div>
                    <div class="annual-plan">
                        <h2>Nom de la banque</h2>
                        <p>{{$profile->nom_banque}}</p>
                    </div>
                    <div class="change">
                        <a href="#">Changer</a>
                    </div>
                </div>
                <div class="plan-section">
                    <div class="img">
                        <img style="width: 50px;height:50px" src="{{asset('assets/img/banner/iban.png')}}" alt="">
                    </div>
                    <div class="annual-plan">
                        <h2>Iban/BIC</h2>
                        <p>{{$profile->iban}} <br>{{$profile->bic}}</p>
                    </div>
                    <div class="change">
                        <a href="/profile">Changer</a>
                    </div>
                </div>
                <div class="plan-section">
                    <div class="img">
                        <img style="width: 50px;height:50px" src="{{asset('assets/img/banner/money.png')}}" alt="">
                    </div>
                    <div class="annual-plan">
                        <h2>Montant disponible</h2>
                        <p>{{ $count_your_contribution_amount_for_you }} FCFA</p>
                    </div>
                    <div class="change">
                        <a href="/profile"></a>
                    </div>
                </div>
                <div class="btn-section">
                    @if ($count_your_contribution_amount_for_you > 0)
                    <button style="background-color: #e15b1a !important;color:#fff" class="btn-payment btn" type="submit">Lancer le rétrait</button>
                    @else
                    <button style="background-color: #e15b1a !important;color:#fff" class="btn-payment btn disabled" type="submit">Lancer le rétrait</button>
                    @endif
                    <button style="color: red;" class="btn-submit btn" type="submit">Annuler le processus</button>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection