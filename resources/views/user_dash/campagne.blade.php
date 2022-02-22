<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title>GetFund action, soutenez la communauté</title>
        <link rel="icon" type="image/png" href="{{('assets/img/favicon.png')}}">
        <script src="{{asset('assets/ckeditor/ckeditor.js')}}" ></script>
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
            <img src="{{asset('assets/img/logo-two.png')}}" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">

            @if (Auth::check())
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('my_space') }}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
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
                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
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
                    <h2>GETFOUND ACTION</h2>
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


    <div class="container d-none">
        <div class="row">
            <div class="col-lg-12">
                <div class="div-center">
                    <h2>TinyMCE Editor: Basic Example</h2>
                    <textarea name="myTextarea" id="myTextarea"></textarea>

                    <h2>TinyMCE Editor: With All Plugins</h2>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="about-area two pb-70">
      <div class="container">
          <center>
              <h4>Ma cagnotte</h4>
          </center>
          <div class="row align-items-center">
              
              <form method="POST" enctype="multipart/form-data" action="{{ url('addcampagnes') }}">
                  @csrf
      
                       <container class="col-md-12">
                          <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-4 d-flex justify-content-center">
                              INFORMATIONS DÉTAILLÉES
                          </h2>
                         
                          <div class="col-lg-12 mb-4">
                              <div class="form-group mb-5">
                                  
                                    
                                      <select name="categories" class="mb-4 form-group">
                                          <option value="">Catégories dans laquelle se trouve votre campagne</option>
                                          <option value="Anniversaire">Anniversaire</option>
                                          <option value="Associatif">Associatif</option>
                                          <option value="Autres">Autres</option>
                                          <option value="Bicycling">Bicycling</option>
                                          <option value="Entertainment">Entertainment</option>
                                          <option value="Environment">Environment</option>
                                          <option value="Evènement">Evènement</option>
                                          <option value="Event">Event</option>
                                          <option value="Familial">Familial</option>
                                          <option value="Humanitaire">Humanitaire</option>
                                          <option value="Mariage">Mariage</option>
                                          <option value="Mobility">Mobility</option>
                                          <option value="Recreation">Recreation</option>
                                          <option value="Restoration">Restoration</option>
                                          <option value="Schools">Schools</option>
                                          <option value="Soutien pour proche">Soutien pour proche</option>
                                          <option value="Sports">Sports</option>
                                          <option value="Streetscapes">Streetscapes</option>
                                          <option value="Technology">Technology</option>
                                          <option value="Tontine">Tontine</option>
                                          <option value="Transit">Transit</option>
                                          <option value="Voyage">Voyage</option>
                                      </select>
                                    
                               </div>
                          </div>
                          <div class="col-lg-12 mb-4">
                              <div class="form-group">
                                  <input type="text" value="{{ old('name') }}" required name="name" class="form-control" placeholder="Nom de la cagnotte">
                              </div>
                          </div>
                          
                          <div class="col-lg-12 mb-4">
                              <div class="form-group">
                                  <input type="number" value="{{ old('duree') }}" required name="duree" class="form-control" placeholder="Durée(en jours)">
                              </div>
                          </div>
                          <div class="col-lg-12 mb-4">
                              <div class="form-group">
                                  <input type="text" required name="monnaie" readonly class="form-control" value="FCFA (XOF)" placeholder="Monnaie">
                              </div>
                          </div>
                          <div class="col-lg-12 mb-4">
                              <div class="form-group">
                                  <input type="number" value="{{ old('montant_v') }}" required name="montant_v" class="form-control" placeholder="* Montant visé - 0 si pas de montant précis">
                              </div>
                              <input type="checkbox" name="hidden_cash" value="1" id=""> Ne pas Montrer le montant cumulé de la collecte
  
                          </div>
  
                          <div class="col-lg-12 mb-4">
                              <div class="form-group">
                                  <input type="text" value="{{ old('name_b') }}" required name="name_b" class="form-control" placeholder="* Nom du bénéficiaire">
                              </div>
                          </div>
  
                          
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('where') }}" required name="where" class="form-control" placeholder="* Où sera dépensée la collecte">
                              </div>
                          </div>
                          
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('details') }}" required name="details" class="form-control" placeholder="Détails sur le lieu">
                              </div>
                          </div>
                          <div class="col-lg-12 mb-4">
                            <textarea name="details_ojectifs" id="myTextarea2">{{old('details_ojectifs')}}</textarea>
                              {{--<textarea name="details_ojectifs" placeholder="" class="form-control" id="long_desc" rows="3">
                                   {{old('details_objectifs')}}
                                  </textarea> --}}
                                  <small class="text-muted">Racontez-nous l'histoire de votre projet. Qu'est-ce que c'est, pourquoi cela importe-t-il, et pourquoi les contributeurs devraient s'en préoccuper? Voici l'endroit pour plus de détails.</small>
                          </div>
  
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('keys_word') }}" required name="keys_word" class="form-control" placeholder="* Mots Clés">
                                  <smal class="text-muted">
                                      Ajouter des mots-clés augmente les chances de découverte de votre projet dans les recherches. Mes mot-clés sont des mots qui décrivent le mieux votre projet. Si votre projet consiste à construire une école, 'Ecole', 'Construction', 'Education' seront des mots clés pertinents. Une liste de mots clés vous est proposée.
                                  </smal>
                              </div>
                          </div>
                          <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                              COMMUNICATION
                          </h2> 
  
                          
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('video') }}" required name="video" class="form-control" placeholder="**Vidéo (si vous avez une vidéo youtube de votre événement ou projet)">
                                  <small class="text-muted">
                                      Copier-Coller le lien d une vidéo Viméo ou Youtube qui présente votre cagnotte. Votre vidéo doit être courte pour captiver vos potentiels contributeurs mais complète afin de dire d éclairer au mieux sur votre cagnotte.
                                  </small>
                              </div>
                          </div> 
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <label for="">Image de vignette (cagnotte publique)</label>
                                  <input type="file" required name="file_vignette" class="form-control">
                                  <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou .png).</small>
                              </div>
                          </div>
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <label for="">Image de couverture de votre cagnotte</label>
                                  <input type="file" required name="file_couverture" class="form-control">
                                  <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou .png).</small>
                              </div>
                          </div>
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('siteweb') }}" required name="siteweb" class="form-control" placeholder="Site Web (si vous avez une page web de votre événement ou projet)">
                                  <small class="text-muted">Copiez-collez le lien sur votre site web si vous en avez un.</small>
                              </div>
                          </div> 
  
                          <div class="col-lg-12 mb-4 ">
                              <div class="form-group">
                                  <input type="text" value="{{ old('hashtag') }}" required name="hashtag" class="form-control" placeholder="Hashtag (pour cagnottes publiques)">
                                  <small class="text-muted">Hashtag (pour cagnottes publiques).</small>
                              </div>
                          </div>
                          <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                              BUDGET ET PLANNING
                          </h2>
  
                          <div class="col-lg-12 mb-4">
                              <label for="">Détails du budget</label>
                              <textarea name="detail_budget"  placeholder="" class="form-control" id="long_desc2" rows="3">
                                     {{old('detail_budget')}}
                                  </textarea>
                                  <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une explication ici.
  
                                  </small>
                          </div>
                           <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">ENGLISH TRANSLATION</h2>
                           <div class="col-lg-12 mb-4">
                              <label for="">English</label>
                              <textarea name="details_budget_en" placeholder="" class="form-control" id="long_desc3" rows="3">
                                  {{old('details_budget_en')}}
                                  </textarea>
                                  <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une explication ici.
  
                                  </small>
                          </div>
  
                          <input type="checkbox" required name="" id=""> En soumettant, vous acceptez les Conditions d'utilisation.
                          <div class="col-lg-12">
                              <button type="submit" class="btn common-btn">SOUMETTRE LES INFORMATIONS POUR VALIDATIONS</button>
                          </div>
                      </container>
  
                      
                  </div>
              </form>
          </div>
      </div>
  </div>


  {{-- footer ---}}

  <footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="/">
                            <img src="{{asset('assets/img/logo-two.png')}}" alt="Logo">
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
</body>

</html>
