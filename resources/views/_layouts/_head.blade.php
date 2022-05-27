<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="GetfundAct est une plateforme de cagnotte en ligne internationale, qui permet à des groupes, à  des associations et à  des communautés de récolter des fonds auprès des  personnes éparpillées dans le Monde et ainsi de se mobiliser pour un proche, un collègue ou d’agir solidairement pour des causes environnementales, sociales, culturelles…">
	    <meta name="description"  content="Getfund action  est un site internet  qui permet de collecter des fonds auprès du grand public pour financer un projet.">
	    <meta  name="keywords" content="getfundact, getfund action,  collecte de funds , Crowdfunding afrique, Crowdfunding  benin ,Financement participatif, intellegencia si , Gboyou Guillaume Lewis,Ahonon Goby Parfait, Crowdfunding africa">
        {{--meta csrf-token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
        {{--<link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">--}}
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/favicon_io/site.webmanifest">
        
        <style>
            a, .nav-item{
                font-family: montserrat !important;
            }
            footer{
                font-family: montserrat !important;
            }
            

        </style>
    </head>
    <body style="font-family: montserrat; ">

        <div class="loader d-none">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-box-one">
                        <div class="pre-box-two"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="left">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">IITA, TANKPÈ ABOMEY-CALAVI</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+229 5150 7071">+229 5150 7071</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="right">
                            <ul>
                                
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                {{--<li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>--}}
                                 <li>
                                    <a href="{{url('login')}}" target="_blank">
                                        <i class="icofont-user"></i>
                                    </a>
                                </li>
                            </ul>
                            <div  class="language">
                                <select>
                                    <option>English</option>
                                    {{--<option>العربيّة</option>
                                    <option>Deutsch</option>
                                    <option>Português</option>--}}
                                </select>
                            </div>
                            <div class="header-search">
                                <i id="search-btn" class="icofont-search-2"></i>
                                <div id="search-overlay" class="block">
                                    <div class="centered">
                                        <div id="search-box">
                                            <i id="close-btn" class="icofont-close"></i>
                                            <form method="POST" action="{{url('search-compagn')}}">
                                                @csrf
                                                <input type="text" name="search" class="form-control" placeholder="Tapez catgorie ou un mot clé..."/>
                                                <button type="submit" class="btn">Réchercher</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area sticky-top">

            <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="{{asset('assets/img/logogetf.png')}}"  alt="Logo">
                </a>
            </div>

            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img style="width:400px;height:80px;" src="{{asset('assets/img/logo.png')}}" alt="Logo">
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
                                    <a href="/how-work" class="nav-link dropdown-toggle ">COMMENT ÇA MARCHE 
                                    
                                    </a>
                                  
                                </li>

                              
                                <li class="nav-item">
                                    <a href="{{ url('login') }}" class="nav-link ">SE CONNECTER 
                                    <i class="icofont-user"></i>
                                    </a>
                                  
                                </li>
                                   
                             
                              
                              
                                

                            </ul>
                            <div class="side-nav">
                                <a class="donate-btn" href="{{ url('login') }}">
                                DÉMARRER
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
@yield('content')

<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="/">
                            <img src="assets/img/logogetf.png" alt="Logo">
                        </a>
                        <p>"Il est indispensable de se lancer dans une levée de fonds quand on a fait la preuve de son concept ou a minima de sa capacité à exécuter" <br>Jean Patrice ANCIAUX</p>
                        <ul>
                            <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
           <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>A propos de nous</h3>
                        <ul>
                            <li><a href="/why-choose-us"><i class="icofont-simple-right"></i>Pourquoi choisir Getfund-act</a></li>
                            <li><a href="/contact"><i class="icofont-simple-right"></i>Nous contacter</a></li>
                            <li><a href="/about"><i class="icofont-simple-right"></i>A propos de nous</a></li>
                            <li><a href="/sucess"><i class="icofont-simple-right"></i>Comment reussir mes campagnes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Liens utils</h3>
                        <ul>
                            <li><a href="/all-campagnes"><i class="icofont-simple-right"></i>Exemples de cagnotte</a></li>
                            <li><a href="/faq"><i class="icofont-simple-right"></i>FAQ/Aide</a></li>
                            <li><a href="/#"><i class="icofont-simple-right"></i>Evenements</a></li>
                            <li><a href="/tarifs"><i class="icofont-simple-right"></i>Tarifs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">Rue en Face de IITA, TANKPÈ ABOMEY-CALAVI</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+229 5150 7071">+229 5150 7071  / +229 94696763</a>
                                </li>

                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a href="">conctact@getfund-act.com  <br/>
                                    contact@intelligencia-si.com    </a>
                                </li>
                            </ul>
                        </div>
                        <!---<div class="contact-inner">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright ©2021 - <script>document.write(new Date().getFullYear())</script> GETFUND ACTION. Développé  par 
                <a href="https://intelligencia-si.com/" target="_blank">Intelligencia SI</a> | <a href="/termes">Notice légale et confidentialité</a>
            </p>

        </div>
    </div>
</footer>


<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?10582';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#E15C1b", 
      "ctaText":"Démarrer..",
      "borderRadius":"50",
      "marginLeft":"0",
      "marginBottom":"25",
      "marginRight":"25",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Getfund Action",
      "brandSubTitle":"Lewis Guillaume ",
      "brandImg":"https://www.getfundact.com/assets/img/favicon.png",
      "welcomeText":"Bonjour !\nComment puis-je vous aider ? \n Nous vous assistons pour la création de votre campagne. ",
      "messageText":" Salut ! Comment ça marche ?",
      "backgroundColor":"#302c51",
      "ctaText":"Nous écrire..",
      "borderRadius":"25",
      "autoShow":true,
      "phoneNumber":"22994696763"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>


<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>

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
<script src="{{('assets/js/jquery.min.js')}}"></script>
<script src="{{('assets/js/popper.min.js')}}"></script>
<script src="{{('assets/js/bootstrap.min.js')}}"></script>

<script src="{{('assets/js/form-validator.min.js')}}"></script>

<script src="{{('assets/js/contact-form-script.js')}}"></script>

<script src="{{('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{('assets/js/jquery-modal-video.min.js')}}"></script>

<script src="{{('assets/js/wow.min.js')}}"></script>

<script src="{{('assets/js/lightbox.min.js')}}"></script>

<script src="{{('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{('assets/js/odometer.min.js')}}"></script>
<script src="{{('assets/js/jquery.appear.min.js')}}"></script>

<script src="{{('assets/js/jquery.nice-select.min.js')}}"></script>

<script src="{{('assets/js/custom.js')}}"></script>
<script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
<script>
        

    (function() {
        if (!localStorage.getItem('cookieconsent')) {
            document.body.innerHTML += '\
    <div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#302c51;color:#FFF;text-align:center;width:100%;z-index:99999;">\
        Ce site utilise des cookies pour améliorer vos préférences. En poursuivant votre navigation sur ce site, vous consentez à leur utilisation.\
        <a  style="background-color: #ff6015;" class="btn more  text-white" href="#">Oui J\'accepte</a>\
    </div>\
    ';
            document.querySelector('.cookieconsent a').onclick = function(e) {
                e.preventDefault();
                document.querySelector('.cookieconsent').style.display = 'none';
                localStorage.setItem('cookieconsent', true);
            };
        }
    })();


</script>
<script>

         
    function Abyssinie(){
    swal("{{Session::get('title')}}", "{{Session::get('sending')}}", "{{Session::get('type')}}");
  }
  
  $(document).ready(function(){
        //swal("a","b","warning")
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
