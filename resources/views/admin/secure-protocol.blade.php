<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        {{-- auto redirect this page to login after 30s --}}
        <meta http-equiv="refresh" content="60;url={{url('/login')}}">
        <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/modal-video.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">

        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>GetFund action, soutenez la communauté</title>
        <link rel="icon" type="image/png" href="{{asset('assets/css/chronomettre.css')}}">
        {{-- import css chronomettre --}}
        <link rel="stylesheet" href="{{asset('assets/css/chronometre.css')}}">
        <style>
            /** css count **/

                #container {
                    color: #000;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: auto;
                    overflow: hidden;
                }

                #countdown {
                    width: 80vmin;
                    height: auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 8vmin;
                    font-family: "Comfortaa", cursive;
                    overflow: hidden;
                }
                /** end css count **/

                        #toast {
                visibility: hidden;
                max-width: 50px;
                height: 50px;
                /*margin-left: -125px;*/
                margin: auto;
                background-color: #ee5c1a;
                color: #fff;
                text-align: center;
                border-radius: 2px;

                position: fixed;
                z-index: 1;
                left: 0;right:0;
                bottom: 30px;
                font-size: 17px;
                white-space: nowrap;
            }
            #toast #img{
                width: 50px;
                height: 20px !important;
                text-align: center;
                float: left;
                
               /** padding-top: 10px;
                padding-bottom: 16px;
                **/
                
                box-sizing: border-box;

                
               
            }
            #toast #desc{

                
                color: #fff;
            
                padding: 16px;
                
                overflow: hidden;
                white-space: nowrap;
            }

            #toast.show {
                visibility: visible;
                -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
                animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
            }

            @-webkit-keyframes fadein {
                from {bottom: 0; opacity: 0;} 
                to {bottom: 30px; opacity: 1;}
            }

            @keyframes fadein {
                from {bottom: 0; opacity: 0;}
                to {bottom: 30px; opacity: 1;}
            }

            @-webkit-keyframes expand {
                from {min-width: 50px} 
                to {min-width: 350px}
            }

            @keyframes expand {
                from {min-width: 50px}
                to {min-width: 350px}
            }
            @-webkit-keyframes stay {
                from {min-width: 350px} 
                to {min-width: 350px}
            }

            @keyframes stay {
                from {min-width: 350px}
                to {min-width: 350px}
            }
            @-webkit-keyframes shrink {
                from {min-width: 350px;} 
                to {min-width: 50px;}
            }

            @keyframes shrink {
                from {min-width: 350px;} 
                to {min-width: 50px;}
            }

            @-webkit-keyframes fadeout {
                from {bottom: 30px; opacity: 1;} 
                to {bottom: 60px; opacity: 0;}
            }

            @keyframes fadeout {
                from {bottom: 30px; opacity: 1;}
                to {bottom: 60px; opacity: 0;}
            }
/** start here radio button css like a button **/
            .btn_choose_sent input {
  -webkit-appearance: none;
  display: block;
  margin: 10px;
  width: 18px;
  height: 18px;
  border-radius: 12px;
  cursor: pointer;
  vertical-align: middle;
  box-shadow: hsla(0,0%,100%,.15) 0 1px 1px, inset hsla(0,0%,0%,.5) 0 0 0 1px;
  background-color: hsla(0,0%,0%,.2);
      background-image: -webkit-radial-gradient( #fff 0%, #fff 15%, #fff 28%, #fff 70% );
  background-repeat: no-repeat;
  -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
    -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
  outline: none;
}
.btn_choose_sent input:checked {
  -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
    -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
}
.btn_choose_sent input:active {
  -webkit-transform: scale(1.5);
  -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}



/* The up/down direction logic */

.btn_choose_sent input,
.btn_choose_sent input:active {
  background-position: 0 24px;
}
.btn_choose_sent input:checked {
  background-position: 0 0;
}
.btn_choose_sent input:checked ~ input,
 .btn_choose_sent input:checked ~ input:active {
  background-position: 0 -24px;
}

.btn_choose_sent{
	    background: #EF2D56;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none; 
     border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding:  16px 20px 16px 38px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}

.btn_choose_sent input{
    position: absolute;
    left: 0;
    right: 0;
    z-index: 99;
    top: 2px;
}

.btn_choose_sent input:after{
	 position: absolute;
    content: '';
    width: 15rem;
    left: 0;
    right: 0;
    /* background: red; */
    /* z-index: -1; */
    height: 40px;
    top: -10px;
}

.bg_btn_chose_1{
	background-color: #f78968 !important;
}


.bg_btn_chose_2{
	background-color: #4e336fdb !important;
}


.bg_btn_chose_3{
	background-color: #359dcc !important;
}


/*-=p=--=*/




.btn_choose_sent_check_b{
	  background: #EF2D56;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none; 
     border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding:  16px 20px 16px 46px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}
/** end start here radio button css like a button **/
        </style>
    </head>
    <body>

        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-box-one">
                        <div class="pre-box-two"></div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="user-form-area">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-lg-6 p-0">
                        <div class="user-img2">
                            <a href=""><img src="{{asset('assets/img/seure2fa.svg')}}" alt="User"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="user-content">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="user-content-inner">
                                        {{-- count down in css --}}
                                        <div id="container">
                                            <div id="countdown">
                                                <p id="timer"></p>
                                            </div>
                                        </div>
                                        
                                          {{-- count down --}}
                                        <div class="top">
                                            <a href="/">
                                                <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                                            </a>
                                            
                                            <h2>PROTOCOL DE VERIFICATION 2FA</h2>
                                            <span>Quel est le code secret envoyé dans votre e-mail (en 1min): {{--Session::get('code')}} {{session()->get('code')--}}</span>
                                        </div>
                                        @if (Session::has('message'))
                                            <div class="alert alert-success">
                                               <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>
                                            
                                        @endif
                                        <form id="chnage-position" method="POST" action="{{ url('code-verification') }}">
                                            @csrf
                                            @if (Session::has('code'))
                                            <button type="button" class="btn_choose_sent bg_btn_chose_3">
                                                <input type="radio" name="code" value="{{Session::get('remember_token_3')}}" />  {{Session::get('_token_4')}}
                                            </button>
                                              {{-- another --}}
                                            <button type="button" class="btn_choose_sent bg_btn_chose_1">
                                                <input type="radio" name="code" value="{{Session::get('remember_token_1')}}" />{{Session::get('remember_token_1')}}
                                            </button>
                                            <button type="button" class="btn_choose_sent bg_btn_chose_2">
                                                <input type="radio" name="code" value="{{Session::get('remember_token_2')}}" />{{Session::get('remember_token_2')}}
                                            </button>
                                            <button type="button" class="btn_choose_sent bg_btn_chose_3">
                                                <input type="radio" name="code" value="{{Session::get('remember_token_3')}}" />  {{Session::get('remember_token_3')}}
                                            </button>
                                            {{-- another--}}
                                            {{--<button type="button" class="btn_choose_sent bg_btn_chose_3">
                                                <inpu                                                <input type="radio" name="code" value="{{Session::get('remember_token_3')}}" />  {{Session::get('_token_5')}}
                                         t type="radio" name="code" value="{{Session::get('remember_token_3')}}" />  {{Session::get('_token_5')}}
                                            </button>--}}
                                            
                                            @endif
                                            {{--<div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" required name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" required name="password" class="form-control" placeholder="MOT DE PASSE">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button onclick="launch_toast()" type="submit" class="btn common-btn">SE CONNECTER</button>
                                                </div>
                                            </div>--}}
                                        </form>
                                        <div class="bottom">
                                            <p> PAS DE COMPTE ?
                                                <a href="{{url('register')}}">CREER UN COMPTE</a>
                                                |
                                                <a href="{{ url('password-forget') }}">MOT DE PASSE OUBLIE</a>
                                            </p>
                                            {{--<h4>OU</h4>
                                            <ul>
                                                <li><a class="d-none" href="{{url('auth/facebook') }}" target="_blank"><i class="icofont-facebook"></i>SE CONNECTER  AVEC FACEBOOK</a></li>
                                                <li><a href="{{ url('auth/google') }}" target="_blank"><i class="icofont-google-plus"></i>SE CONNECTER  AVEC GOOGLE</a></li>
                                            </ul>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<img src="https://i.postimg.cc/6pYnv437/imageedit-3-9681146303.gif" alt="" srcset="">  --}}
        <div id="toast"><div id="img"> <i style="font-size: 50px" class="fa fa-spinner fa-spin fa-3x fa-fw"></i> </div><div id="desc">En cours d'authentification...</div></div>

        <div class="go-top">
            <i class="icofont-arrow-up"></i>
            <i class="icofont-arrow-up"></i>
        </div>


        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        
        <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
        
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        
        <script src="{{asset('assets/js/jquery-modal-video.min.js')}}"></script>
        
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        
        <script src="{{asset('assets/js/lightbox.min.js')}}"></script>
        
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
        
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        
                <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
                <script>
                    function Abyssinie(){
                  swal("{{Session::get('title')}}", "{{Session::get('sending')}}", "{{Session::get('type')}}");
                  
                 
             }
          
          $(document).ready(function(){
        
            @if(Session::has('sending')) {
              Abyssinie();
            } 
            @endif
            @if(!Session::has('sending')) {
              console.log('try to post');
            } 
            
            @endif
            
          })
            </script>
             <script>    
                function launch_toast() {
                  var x = document.getElementById("toast")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 8000);
          }
              </script>
              <script>
                  //submit form on radio button click
                  $('input[type=radio]').on('change', function() {
                    $(this).closest("form").submit();
                   });
              </script>
              <script>
                  function cntDown() {
                    let sec = 60;
                    const el = document.getElementById("timer");
                    const timer = setInterval(() => {
                        el.innerHTML = sec--;
                        if (sec < 10) el.style.color = "#ff0";
                        if (sec < 5) el.style.color = "#f00";
                        if (sec < 0) clearInterval(timer);
                    }, 1000);
                }

cntDown();
              </script>
              <script>
                  var parent = $("#chnage-position");
                  setInterval(() => parent.prepend(parent.children().last()), 3000)

              </script>
    </body>
   

</html>
