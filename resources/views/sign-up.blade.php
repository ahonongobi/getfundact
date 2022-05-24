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
        <!-- google captcha cdn link -->
        <script src='https://www.google.com/recaptcha/api.js?render=6Lf7BRggAAAAAPMcZGJG2VKqRH6gUMbZZC59vuL6'></script>

        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
        <link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <title>GetFund action, soutenez la communauté</title>
        <link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">
        <style>
            
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
                                            <h2>CRÉATION DE COMPTE </h2>
                                        </div>
                                        <form method="POST" action="{{url('register') }}">
                                            @csrf
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" checked type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Personne">
                                                <label  class="form-check-label"  for="inlineRadio1">Personne 
                                                    {{-- make tooltip --}}
                                                    <i style="position: relative;display:inline-block" title="Créer et collecter des fonds"  class="icofont-exclamation-circle"></i>
                                                    
    
                                                 </label>
                                                 
                                            </div>
                                            <div class="form-check form-check-inline mb-2">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Organisation">
                                                <label class="form-check-label" for="inlineRadio2">Organisation<i title="Contribuer à des campagnes"  class="icofont-exclamation-circle"></i></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="surname" value="{{ old('surname') }}" type="text" class="form-control" placeholder="Prénoms">
                                                        @if ($errors->has('surname'))
                                                        <span class="text-danger">{{  $errors->first('surname') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Nom">
                                                        @if ($errors->has('name'))
                                                        <span class="text-danger">{{  $errors->first('name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="E-mail">
                                                        @if ($errors->has('email'))
                                                        <span class="text-danger">{{  $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="password" id="password-field"  name="password" class="form-control" placeholder="Mot de passe">
                                                        <span 
                                                        style="float: right;
                                                        margin-left: -30px;
                                                        margin-right: 20px;
                                                        margin-top: -30px;
                                                        position: relative;
                                                        z-index: 2;" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                        @if ($errors->has('password'))
                                                        <span class="text-danger">{{  $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                {{-- google captcha button --}}
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="g-recaptcha" data-sitekey="6Lf7BRggAAAAAPMcZGJG2VKqRH6gUMbZZC59vuL6"></div>
                                                        @if ($errors->has('g-recaptcha-response'))
                                                        <span class="text-danger">{{  $errors->first('g-recaptcha-response') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn common-btn">CRÉER</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="bottom">
                                            <p>DÉJÀ INSCRIT ?
                                                <a href="{{url('login')}}">SE CONNECTER</a>
                                            </p>
                                            <h4>OU</h4>
                                            <ul>
                                                <li><a class="d-none" href="{{url('auth/facebook') }}" target="_blank"><i class="icofont-facebook"></i>Se connecter avec facebook</a></li>
                                                <li><a href="{{ url('auth/google') }}"><i class="icofont-google-plus"></i>Se connetcer avec google</a></li>
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
                  setTimeout(function(){ window.location.href="/login"; }, 6000);

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
                $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }
                });
            </script>
    </body>

</html>
