@extends('_layouts._user')
<style>
  @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap");
.plans {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;

  max-width: 100%;
  padding: 85px 50px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  background: #fff;
  border-radius: 20px;
  -webkit-box-shadow: 0px 8px 10px 0px #d8dfeb;
  box-shadow: 0px 8px 10px 0px #d8dfeb;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.plans .plan input[type="radio"] {
  position: absolute;
  opacity: 0;
}

.plans .plan {
  cursor: pointer;
  width: 48.5%;
}

.plans .plan .plan-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 30px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 2px solid #e1e2e7;
  border-radius: 10px;
  -webkit-transition: -webkit-box-shadow 0.4s;
  transition: -webkit-box-shadow 0.4s;
  -o-transition: box-shadow 0.4s;
  transition: box-shadow 0.4s;
  transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
  position: relative;
}

.plans .plan .plan-content img {
  margin-right: 30px;
  height: 72px;
}

.plans .plan .plan-details span {
  margin-bottom: 10px;
  display: block;
  font-size: 20px;
  line-height: 24px;
  color: #252f42;
}

.container .title {
  font-size: 16px;
  font-weight: 500;
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  color: #252f42;
  margin-bottom: 20px;
}

.plans .plan .plan-details p {
  color: #646a79;
  font-size: 14px;
  line-height: 18px;
}

.plans .plan .plan-content:hover {
  -webkit-box-shadow: 0px 3px 5px 0px #e8e8e8;
  box-shadow: 0px 3px 5px 0px #e8e8e8;
}

.plans .plan input[type="radio"]:checked + .plan-content:after {
  content: "";
  position: absolute;
  height: 8px;
  width: 8px;
  background: #216fe0;
  right: 20px;
  top: 20px;
  border-radius: 100%;
  border: 3px solid #fff;
  -webkit-box-shadow: 0px 0px 0px 2px #0066ff;
  box-shadow: 0px 0px 0px 2px #0066ff;
}

.plans .plan input[type="radio"]:checked + .plan-content {
  border: 2px solid #216ee0;
  background: #eaf1fe;
  -webkit-transition: ease-in 0.3s;
  -o-transition: ease-in 0.3s;
  transition: ease-in 0.3s;
}

@media screen and (max-width: 991px) {
  .plans {
    margin: 0 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding: 40px;
  }

  .plans .plan {
    width: 100%;
  }

  .plan.complete-plan {
    margin-top: 20px;
  }

  .plans .plan .plan-content .plan-details {
    width: 70%;
    display: inline-block;
  }

  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 45%;
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    transform: translate(-50%);
  }
}

@media screen and (max-width: 767px) {
  .plans .plan .plan-content .plan-details {
    width: 60%;
    display: inline-block;
  }
}

@media screen and (max-width: 540px) {
  .plans .plan .plan-content img {
    margin-bottom: 20px;
    height: 56px;
    -webkit-transition: height 0.4s;
    -o-transition: height 0.4s;
    transition: height 0.4s;
  }

  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 20px;
    right: 10px;
  }

  .plans .plan .plan-content .plan-details {
    width: 100%;
  }

  .plans .plan .plan-content {
    padding: 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
  }
}

/* inspiration */
.inspiration {
  font-size: 12px;
  margin-top: 50px;
  position: absolute;
  bottom: 10px;
  font-weight: 300;
}

.inspiration a {
  color: #666;
}
@media screen and (max-width: 767px) {
  /* inspiration */
  .inspiration {
    display: none;
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
      <div class="container">
        <form method="POST" action="{{url('listWithdrawal')}}" >
        @csrf
        <div class="plans">
            
          <div class="title">Choisissisez la cagnote</div>
          {{-- foreach withdral  --}}
            @foreach ($withdrawalinfo as $item)
            
            <input style="display: none;" type="checkbox" value="{{$item->id}}" name="id[]">
            
            <input type="hidden" name="montant" value="{{$item->montant_cotise}}">
          <label class="plan basic-plan mb-3" for="basic{{$item->id}}">
            <input  type="radio" name="plan" id="basic{{$item->id}}" />
            <div class="plan-content">
              <img loading="lazy" src="{{asset('assets/img/banner/money.png')}}" alt="" />
              <div class="plan-details">
                <span>{{$item->name}}-{{$item->categories}}</span>
                <p>
                    {{$item->montant_cotise}} XOF
                </p>
              </div>
            </div>
          </label>
          @endforeach
          <button type="submit" class="btn common-btn">SOUMETTRE LE CHOIX</button>
         <!-- <label class="plan complete-plan" for="complete">
            <input type="radio" id="complete" name="plan" />
            <div class="plan-content">
              <img loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
              <div class="plan-details">
                <span>Complete</span>
                <p>For growing business who wants to create a rewarding place to work.</p>
              </div>
            </div>
          </label>
          <label class="plan complete-plan" for="complete1">
            <input type="radio" id="complete1" name="plan" />
            <div class="plan-content">
              <img loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
              <div class="plan-details">
                <span>Complete</span>
                <p>For growing business who wants to create a rewarding place to work.</p>
              </div>
            </div>
          </label>-->
        </div>
    </form>
      </div>
      
      
@endsection