<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="GetfundAct est une plateforme de cagnotte en ligne internationale, qui permet à des groupes, à  des associations et à  des communautés de récolter des fonds auprès des  personnes éparpillées dans le Monde et ainsi de se mobiliser pour un proche, un collègue ou d’agir solidairement pour des causes environnementales, sociales, culturelles…">
	<meta name="description"  content="Getfund action  est un site internet  qui permet de collecter des fonds auprès du grand public pour financer un projet.">
	<meta  name="keywords" content="getfundact, getfund action,  collecte de funds , Crowdfunding afrique, Crowdfunding  benin ,Financement participatif, intellegencia si , Gboyou Guillaume Lewis,Ahonon Goby Parfait, Crowdfunding africa">

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
        {{--<link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}"> --}}

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">

        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <title>GetFund action, soutenez la communauté</title>
        {{--<link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">--}}
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/favicon_io/site.webmanifest">
        <script src="{{asset('assets/ckeditor/ckeditor.js')}}" ></script>
         <!-- Facebook Pixel Code -->
         <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2294101097407796'); 
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" 
            src="https://www.facebook.com/tr?id=2294101097407796&ev=PageView
            &noscript=1"/>
        </noscript>
    <!-- End Facebook Pixel Code -->
        <script>
        fbq('track', 'CompleteRegistration');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q81G62RQSG"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Q81G62RQSG');
        </script>
        <style>
            body{
                font-family: montserrat !important;
            }
        </style>
    <script src='{{asset('tinymce/tinymce.min.js')}}'></script>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
    </script>
    <script src="{{ asset('assets/js/gobitextaera.js') }}"></script>
    
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
              <img style="width: 300px; height:auto;" src="{{asset('assets/img/logogetf.png')}}" alt="Logo">
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
                      <img style="width:300px;height:auto;" src="{{asset('assets/img/logo.png')}}" alt="Logo">
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
  
  <div class="page-title-area title-bg-one">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="title-item">
                      <h2>GETFUND ACTION</h2>
                      <ul>
                          <li>
                              @if (Auth::check())
                              <a href="user.php">Bienvenue : </a>
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
<footer class="footer-area">
    <div class="container">
        {{--<div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="/">
                            
                            <img style="width: 300px" src="{{asset('assets/img/logogetf.png')}}" alt="Logo">
                        </a>
                        <p>"Il est indispensable de se lancer dans une levée de fonds quand on a fait la preuve de son concept ou a minima de sa capacité à exécuter" <br>Jean Patrice ANCIAUX</p>
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
           <!--<div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                       
                        <ul>
                            <li><a href=""><i class="icofont-simple-right"></i>Pourquoi choisir Getfund-act</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Nous contacter</a></li>
                            <li><a href="/about"><i class="icofont-simple-right"></i>A propos de nous</a></li>
                            <li><a href=""><i class="icofont-simple-right"></i>Comment reussir mes campagnes</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Liens utils</h3>
                        <ul>
                            <li><a href="/my-campagne"><i class="icofont-simple-right"></i>Mes campagnes</a></li>
                            <li><a href="/profile"><i class="icofont-simple-right"></i>Mon profil</a></li>
                            <li><a href="/contributions"><i class="icofont-simple-right"></i>Mes contributions</a></li>
                            
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
                        
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="copyright-area">
            <p>Copyright ©2021- <script>document.write(new Date().getFullYear())</script>  GETFUND ACT. Développé  par 
                <a href="https://intelligencia-si.com/" target="_blank">Intelligencia SI</a> | <a href="/termes">Notice légale et confidentialité</a> | <a href="/cgv">Conditions générales d'utilisations</a>
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

<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

</script>
<script>
	$(document).ready(function(){
        //id="modalshow" click, show modal
        $('#modalshow').click(function(){
            
            $("#myModal").modal('show');
        });
		
	});
</script>
</body>

</html>
