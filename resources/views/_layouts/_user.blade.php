<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="GetfundAct est une plateforme de cagnotte en ligne internationale, qui permet à des groupes, à  des associations et à  des communautés de récolter des fonds auprès des  personnes éparpillées dans le Monde et ainsi de se mobiliser pour un proche, un collègue ou d’agir solidairement pour des causes environnementales, sociales, culturelles…">
	    <meta name="description"  content="Getfund action  est un site internet  qui permet de collecter des fonds auprès du grand public pour financer un projet.">
	     <meta  name="keywords" content="getfundact, getfund action,  collecte de funds , Crowdfunding afrique, Crowdfunding  benin ,Financement participatif, intellegencia si , Gboyou Guillaume Lewis,Ahonon Goby Parfait, Crowdfunding africa">

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
        {{--<link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">--}}
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/favicon_io/site.webmanifest">
        <script src="{{asset('assets/ckeditor/ckeditor.js')}}" ></script>
        <style>
            body{
                font-family: montserrat !important;
            }
            
        </style>
         <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f685ffce-0f91-4e63-9783-3053bab47d12";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
         
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
                    <img style="width:300px;height:auto;" src="{{asset('assets/img/logogetf.png')}}" alt="Logo">
                </a>
            </div>

            <div class="main-nav">
                <div class="container">

                    @if (Auth::check())
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('my_space') }}">
                            <img style="width:280px;height:auto;" src="{{asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    {{-- heck if profile is completed and cni is not null, s_cni, is not null, iban is not nulln bic is not null --}}
                                    @if ((!$check_if_user_complete_profile == 0))    
                                    <a href="{{ url('profile') }}" class="nav-link dropdown-toggle active">MON PROFIL 
                                    
                                    </a>
                                    @else 
                                    <a onclick="accountArchived()" class="nav-link dropdown-toggle">MON PROFIL
                                    </a>
                                    @endif
                                  
                                </li>

                                <li class="nav-item">
                                    @if ((!$check_if_user_complete_profile == 0))  
                                    <a href="{{ route('my-campagne') }}" class="nav-link dropdown-toggle ">MES CAMAPAGNES 
                                    
                                    </a>
                                    @else
                                    <a onclick="accountArchived()" class="nav-link dropdown-toggle">MES CAMAPAGNES
                                    </a>
                                    @endif
                                  
                                </li>



                                <li class="nav-item">
                                    @if ((!$check_if_user_complete_profile == 0))
                                    <a href="{{ url('contributions') }}" class="nav-link dropdown-toggle ">MES COMTRIBUTIONS 
                                    
                                    </a>
                                    @else
                                    <a onclick="accountArchived()" class="nav-link dropdown-toggle">MES COMTRIBUTIONS
                                    </a>
                                    @endif
                                    
                                  
                                </li>

                              
                                <li class="nav-item">

                                    <a style="cursor: pointer;" onclick="isloggedingOut()" class="nav-link ">SE DECONNECTER 
                                    <i class="icofont-power"></i>
                                    </a>
                                  
                                </li>
                                   
                            
                            </ul>
                            <div class="side-nav">
                                @if ((!$check_if_user_complete_profile == 0))
                                <a class="donate-btn" href="{{ url('campagne') }}">
                                    DÉMARRER
                                    <i class="icofont-heart-alt"></i>
                                </a>
                                @else
                                <a onclick="accountArchived()" class="donate-btn">
                                DÉMARRER
                                    <i class="icofont-heart-alt"></i>
                                </a>
                                @endif

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
                                DÉMARRER
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
        style="background-image: url({{asset('assets/img/banner/bg.jpg')}});"
        @endif  class="page-title-area title-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            {{--if details name is not set --}}
                            @if (!isset($details->name))
                            <h2 class="gradient-heading">GETFUND ACTION</h2>
                            @else
                            <h2 class="gradient-heading-gobi">{{$details->name ?? 'GETFUND ACTION'}}</h2>
                            @endif
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
                            {{--<a class="feature-btn" href="#">{{ $count_your_contribution_amount_for_you }} FCFA</a>--}}
                            <a class="feature-btn" href="#">{{ $solde }} FCFA</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item two">
                            <i class="flaticon-donation"></i>
                            <h3>
                                <a href="#">MONTANT DEMANDÉ</a>
                            </h3>
                            <p></p>
                            <a class="feature-btn" href="#">{{ $montant_asked_for_you ?? '0' }} FCFA</a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="feature-item three">
                            <i class="flaticon-love"></i>
                            <h3>
                                <a href="#">CONTRIBUTIONS</a>
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
                                <a href="#">CONTRIBUTIONS</a>
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
      {{-- set pt-100 to take the height large if you want. --}}
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
                <a href="https://intelligencia-si.com/" target="_blank">Intelligencia SI</a> | <a href="/termes">Notice légale et confidentialité</a>  | <a href="/cgv">Conditions générales d'utilisations</a>
            </p>

        </div>
    </div>
  
   <!-- <script>
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
      "autoShow":false,
      "phoneNumber":"22994696763"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> -->
</footer>


<div class="go-top d-none">
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
{{--<script src="{{asset('assets/js/profile-form.js')}}"></script>--}}


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
<script>
    $(function() {
    $('#moov').addClass('hidden').hide();
    $('#mtn').addClass('hidden').hide();
    $(".bank").css("background-color", "#302c51");

    $('.mtn').click(function() {
        $('#moov').addClass('hidden').hide();
        $('#bank').addClass('hidden').hide();

        if ($('#mtn').hasClass('hidden')) {
            $('#mtn').removeClass('hidden').fadeIn(1000);
            $(".mtn").css("background-color", "#302c51");
            $(".bank").css("background-color", "#ff6015");
            $(".moov").css("background-color", "#ff6015");
           
        }
        else {
            $('#mtn').addClass('hidden').fadeOut(1000);
        }
    });

    $('.moov').click(function() {
        $('#mtn').addClass('hidden').hide();
        $('#bank').addClass('hidden').hide();

        if ($('#moov').hasClass('hidden')) {
            $('#moov').removeClass('hidden').fadeIn(1000);
            $(".mtn").css("background-color", "#ff6015");
            $(".bank").css("background-color", "#ff6015");
            $(".moov").css("background-color", "#302c51");
        }
        else {
            $('#moov').addClass('hidden').fadeOut(1000);
        }
    });

    $('.bank').click(function() {
        $('#mtn').addClass('hidden').hide();
        $('#moov').addClass('hidden').hide();

        if ($('#bank').hasClass('hidden')) {
            $('#bank').removeClass('hidden').fadeIn(1000);
            $(".mtn").css("background-color", "#ff6015");
            $(".moov").css("background-color", "#ff6015");
            $(".bank").css("background-color", "#302c51");
        }
        else {
            $('#bank').addClass('hidden').fadeOut(1000);
        }
    });
});
</script>
<script>
    function clicked(idWallet, idUser,amount) {
        document.getElementById("idWallet_" + idWallet).value = idWallet;
        document.getElementById("idUser_" + idWallet).value = idUser;
        document.getElementById("amount_" + idWallet).value = amount;
        //document.getElementById("form_"+idWallet).submit();
        
        // alert(idWallet);
        $.ajax({
            url: "",
            type: "GET",
            data: {
                idWallet: idWallet,
                idUser: idUser,
                amount: amount

            },
            success: function(data) {
                
                console.log(idWallet);
                
                //window location href to listWithdrawal page with idWallet, idUser and amount as parameters
                window.location.href = "/getlistWithdrawal?idWallet=" + idWallet + "&idUser=" + idUser + "&amount=" + amount;
                // alert(data);
            }
        });
    }
</script>
 <script>
     //swal warning function accountArchived() 
        function accountArchived() {
            swal({
                title: "Compte inactif",
                text: "Veuillez renseigner les informations au niveau de votre profil et confirmer votre identité en soumettant une copie de votre carte d'identité ou passeport dans l'onglet <identité> afin que le compte soit activé. ",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OK",
                closeOnConfirm: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //close the swal
                    window.location.href = "/profile";
                }
            });
        }
        //end of scrpit
 </script>
 <script> 
        //swal warning function isloggedingOut() to logout or not
        function isloggedingOut() {
            swal({
                title: "Êtes-vous sûr de vouloir vous déconnecter?",
                text: "Vous allez être déconnecté de votre compte",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Oui",
                cancelButtonText: "Non",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //close the swal
                    window.location.href = "/logout";
                } else {
                    swal("Annulé", "Vous êtes toujours connecté", "error");
                }
            });
        }

            
            //end of scrpit
 </script>
 <script>
     //swal warning to deleteCampagne 
        function deleteCampagne(idCampagne) {
            swal({
                title: "Êtes-vous sûr de vouloir supprimer cette campagne?",
                text: "Vous ne pourrez pas récupérer cette campagne",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Oui",
                cancelButtonText: "Non",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //close the swal
                    window.location.href = "/delete-post/" + idCampagne;
                } else {
                    swal("Annulé", "Suppression annulée", "error");
                }
            });
        }
        //end of scrpit

 </script>
 <script>
     //swal to display you have no right to delete user
        function noRightToDeleteUser() {
            swal({
                title: "Vous n'avez pas les droits pour supprimer cet utilisateur",
                text: "",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OK",
                closeOnConfirm: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //close the swal
                    window.location.href = "/profile";
                }
            });
            
        }
 </script>
    <script>
        function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
    }

    function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
    });
 
    </script>
    <script>
        //here same script, but change attribute name as in profile.blade.php file
        function readURL2(input2) {
    if (input2.files && input2.files[0]) {
            
            var reader = new FileReader();
    
            reader.onload = function(e) {
            $('.image-upload-wrap2').hide();
    
            $('.file-upload-image2').attr('src', e.target.result);
            $('.file-upload-content2').show();
    
            $('.image-title2').html(input2.files[0].name);
            };
    
            reader.readAsDataURL(input2.files[0]);
    
        } else {
            removeUpload2();
        }
        }
        //then make removeUpload2() function
        function removeUpload2() {  
        $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
        $('.file-upload-content2').hide();
        $('.image-upload-wrap2').show();
        }
        $('.image-upload-wrap2').bind('dragover', function () {
            $('.image-upload-wrap2').addClass('image-dropping');
        });
        $('.image-upload-wrap2').bind('dragleave', function () {
            $('.image-upload-wrap2').removeClass('image-dropping');
        });
        

    </script>
    <script>
        
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Lire plus") {
                $(this).text("Lire moins")
            } else {
                $(this).text("Lire plus")
            }
            });
    </script>
    <script>
        // id animate-contribution  and animate-contribution2 : show and hide one after one in every 3 seconds
        $(document).ready(function(){
            $(".animate-contribution2").hide();
            setInterval(function(){
                $(".animate-contribution").fadeOut(1000);
                //fadeIn fasl
                $(".animate-contribution2").fadeIn(1000);
            }, 3000);
            setInterval(function(){
                $(".animate-contribution2").fadeOut(3000);
                $(".animate-contribution").fadeIn(3000);
            }, 3000);
        }); 
                                                      
    </script>
    <script>
        //autoplay youtube iframe on modal show
         $(document).ready(function(){
          $('#exampleModalToggle').on('shown.bs.modal', function () {
             var videoSrc = $("#exampleModalToggle iframe").attr("src");
              // set the video to autostart
                 $("#exampleModalToggle iframe").attr("src", videoSrc+"&amp;autoplay=1")
                 // clear the autoplay value when the modal hides       
          });
          // clear the autoplay value when the modal hides  
             $('#exampleModalToggle').on('hide.bs.modal', function () {
                 var videoSrc = $("#exampleModalToggle iframe").attr("src");
                 $("#exampleModalToggle iframe").attr("src", videoSrc.replace("&amp;autoplay=1", ""));
             });
         })
     </script>
        
</body>
</html>