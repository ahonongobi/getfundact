<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

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
        <link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">
        <style>
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
                        <div class="user-img">
                            <img src="{{asset('assets/img/user-form-bg.jpg')}}" alt="User">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="user-content">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="user-content-inner">
                                        <div class="top">
                                            <a href="/">
                                                <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                                            </a>
                                            <h2> <i class="fa fa-refresh"></i> REINITIALISATION DE MOT DE PASSE</h2>
                                        </div>
                                        <form method="POST" action="{{ url('forget-password') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" required name="email" class="form-control" placeholder="Email de votre compte">
                                                        @if ($errors->has('email'))

                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                  
                                                    @endif
                                                    </div>
                                                </div>
                                                <!--<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" required name="password" class="form-control" placeholder="MOT DE PASSE">
                                                    </div>
                                                </div>
                                            -->
                                                <div class="col-lg-12">
                                                    <button onclick="launch_toast()" type="submit" class="btn common-btn">ENVOYEZ LE LIEN DE REINITIALISATION</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="bottom">
                                            <p> PAS DE COMPTE ?
                                                <a href="{{url('register')}}">CREER UN COMPTE</a>
                                            </p>
                                            <h4>OU</h4>
                                            <ul>
                                                <li><a class="d-none" href="{{url('auth/facebook') }}" target="_blank"><i class="icofont-facebook"></i>SE CONNECTER  AVEC FACEBOOK</a></li>
                                                <li><a href="{{ url('auth/google') }}" target="_blank"><i class="icofont-google-plus"></i>SE CONNECTER  AVEC GOOGLE</a></li>
                                            </ul>
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
        <div id="toast"><div id="img"> <i style="font-size: 50px" class="fa fa-spinner fa-spin fa-3x fa-fw"></i> </div><div id="desc">En cours de réinitialisation...</div></div>

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
    </body>
   

</html>
