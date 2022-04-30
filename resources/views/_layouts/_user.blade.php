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
        <link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <title>GetFund action, soutenez la communauté</title>
        <link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">
        <script src="{{asset('assets/ckeditor/ckeditor.js')}}" ></script>
        <style>
            body{
                font-family: montserrat !important;
            }
        </style>
        
        
    </head>
    <body>

        <div class="loader d-none">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-box-one">
                        <div class="pre-box-two"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-area sticky-top">

            <div class="mobile-nav">
                <a href="{{ url('my_space') }}" class="logo">
                    <img style="width:300px;height:80px;" src="{{asset('assets/img/logogetf.png')}}" alt="Logo">
                </a>
            </div>

            <div class="main-nav">
                <div class="container">

                    @if (Auth::check())
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('my_space') }}">
                            <img style="width:300px;height:80px;" src="{{asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('profile') }}" class="nav-link dropdown-toggle active">MON PROFIL 
                                    
                                    </a>
                                  
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('my-campagne') }}" class="nav-link dropdown-toggle ">MES CAMAPAGNES 
                                    
                                    </a>
                                  
                                </li>



                                <li class="nav-item">
                                    <a href="{{ url('contributions') }}" class="nav-link dropdown-toggle ">MES COMTRIBUTIONS 
                                    
                                    </a>
                                  
                                </li>

                              
                                <li class="nav-item">
                                    <a href="{{ url('logout') }}" class="nav-link ">SE DECONNECTER 
                                    <i class="icofont-power"></i>
                                    </a>
                                  
                                </li>
                                   
                            
                            </ul>
                            <div class="side-nav">
                                <a class="donate-btn" href="{{ url('campagne') }}">
                                    DEMARER
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </div>
                        </div>
                    </nav> 
                    @else
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img style="width:300px;height:80px;" src="{{asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link dropdown-toggle active">ACCUEIL 
                                    
                                    </a>
                                  
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('about')}}" class="nav-link dropdown-toggle ">À PROPOS 
                                    
                                    </a>
                                  
                                </li>



                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle ">COMMENT ÇA MARCHE 
                                    
                                    </a>
                                  
                                </li>

                              
                                <li class="nav-item">
                                    <a href="{{ url('login') }}" class="nav-link">SE CONNECTER 
                                    <i class="icofont-user"></i>
                                    </a>
                                  
                                </li>
                                   
                             
                              
                              
                                

                            </ul>
                            <div class="side-nav">
                                <a class="donate-btn" href="{{ url('login') }}">
                                    DEMARER
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                    @endif
                    
                </div>
            </div>
        </div>
        
        <div @if (isset($details->file_couverture))
            style="background-image: url({{asset('storage/UserDocument/'.$details->file_couverture)}});"
        @else
        style="background-image: url({{asset('assets/img/banner/title-bg1.jpg')}});"
        @endif  class="page-title-area title-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>{{$details->name ?? 'GETFOUND ACTION'}}</h2>
                            <ul>
                                <li>
                                    @if (Auth::check())
                                    <a href="">Bienvenue : </a>
                                    @endif
                                </li>
                                <li>
                                    @if(Auth::check())
                                    <span>{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                    <span>
                                        @if (Auth::user()->states==1)
                                            | Compte Actif
                                        @else
                                        | Compte inactif
                                        @endif
                                    </span>
                                    @else
                                        
                                    @endif
                                </li>
                                <li>
                                    @if(Auth::check())
                                      
                                   @else
                                        
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @if (Auth::check())
        <div class="feature-area two pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-solidarity"></i>
                            <h3>
                                <a href="#">MONTANT COLLECTÉ</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">{{ $count_your_contribution_amount_for_you }} FCFA</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item two">
                            <i class="flaticon-donation"></i>
                            <h3>
                                <a href="#">MONTANT DEMANDÉ</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">{{ $count_your_contribution_amount_for_you }} FCFA</a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="feature-item three">
                            <i class="flaticon-love"></i>
                            <h3>
                                <a href="#">Contributions</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">{{$count_contribution_for_you}} donations déjà</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="feature-area two pb-70 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-solidarity"></i>
                            <h3>
                                <a href="#">MONTANT COLLECTÉ</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">${{ $count_contribution_amount }}</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item two">
                            <i class="flaticon-donation"></i>
                            <h3>
                                <a href="#">MONTANT DEMANDÉ</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">${{$details ?? ''->montant_v}}</a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="feature-item three">
                            <i class="flaticon-love"></i>
                            <h3>
                                <a href="#">Contributions</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">{{$count_contribution}} donations déjà</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
       


  @yield('content')


  <footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="/">
                            
                            <img src="{{asset('assets/img/logogetf.png')}}" alt="Logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero, magni est placeat neque, repellat maxime a dolore</p>
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
           <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>A propos de nous</h3>
                        <ul>
                            <li><a href=""><i class="icofont-simple-right"></i>Pourquoi choisir Getfund-act</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Nous contacter</a></li>
                            <li><a href="/about"><i class="icofont-simple-right"></i>A propos de nous</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Comment reussir mes campagnes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Liens utils</h3>
                        <ul>
                            <li><a href=""><i class="icofont-simple-right"></i>Exemples de cagnotte</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>FAQ/Aide</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Evenements</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Don</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact info</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">Rue en Face de IITA, TANKPÈ ABOMEY-CALAVI</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+229 5150 7071">+229 5150 7071</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">6A, New street, Spain</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+548658956">+548-658-956</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright ©2021 GETFUND ACT. Développé  par 
                <a href="https://intelligencia-tech.com/" target="_blank">Intelligencia tech</a> | <a href="">Notice légale et confidentialité</a>
            </p>

        </div>
    </div>
</footer>


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

<script src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>


 <script>
     $('.tab-link').click( function() {
	
	var tabID = $(this).attr('data-tab');
	
	$(this).addClass('active').siblings().removeClass('active');
	
	$('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
 </script>

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
    @if(Session::has('message')){
        var type= "{{Session::get('alert-type','info')}}";
        switch(type){
          case'info':
          toastr.info("{{Session::get('message')}}");
          break;
          case'warning':
          toastr.warning("{{Session::get('message')}}");
          break;
          case'success':
          toastr.success("{{Session::get('message')}}");
          break;
        } 
      } 
      
       

    @endif
    
  </script>
  <script>
      $(document).ready(function(){

          @if (isset($notification_2)) {
              toastr.options = {
                  timeOut: 5000,
                    //positionClass: "toast-top-center",
                    preventDuplicates: true,
                    closeButton: true,
                    progressBar: true,
                    //showMethod: "slideDown",
                    //hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 1000,
                    extendedTimeOut: 1000,
                    timeOut: 0,
                    tapToDismiss: true,
                    closeOnHover: true,
                    extendedTimeOut: 1000,

              }
            toastr.info('{{$notification_2}}');
          }
          @endif
         
      })
  </script>
  <script>
      
      $(document).ready(function(){

@if (isset($alertMessage)) {
    toastr.options = {
        timeOut: 5000,
          //positionClass: "toast-top-center",
          preventDuplicates: true,
          closeButton: true,
          progressBar: true,
          //showMethod: "slideDown",
          //hideMethod: "slideUp",
          showDuration: 200,
          hideDuration: 1000,
          extendedTimeOut: 1000,
          timeOut: 0,
          tapToDismiss: true,
          closeOnHover: true,
          extendedTimeOut: 1000,

    }
  toastr.warning('{{$alertMessage}}');
}
@endif

})
  </script>

<script>
    (function($) {

$.fn.select2button = function(options) {
  this.hide();
  return this.each(function(index) {
    $(this).after('<section />');
    var op = $('option', this);
    var ops = $('option:selected', this).index();

    op.each(function() {
      $('section').eq(index).append('<button>' + $(this).text() + '</button>')
      var btn = $('section:eq(' + index + ') button');

      if (this.index == ops){
        btn.eq(this.index).addClass('active');
      }
        

      btn.on('click', function() {
        var btns = $(this).index();
        op.removeAttr("selected");
        btn.removeClass('active');
        $(this).addClass('active');
        op.eq(btns).attr('selected', true);
      })
    });

  });
};

}(jQuery));

// Call!
$('.select2button').select2button();
</script>

</body>
</html>