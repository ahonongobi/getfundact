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
        <title>GetFund action, soutenez la communauté</title>
        <link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">
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
                                            <h2>ESPACE MEMBRE</h2>
                                        </div>
                                        <form method="POST" action="{{ url('login') }}">
                                            @csrf
                                            <div class="row">
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
                                                    <button type="submit" class="btn common-btn">SE CONNECTER</button>
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
    </body>

</html>
