<!DOCTYPE html>
<html>

<head>
  <title>Getfund-act dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="description" content="GetfundAct est une plateforme de cagnotte en ligne internationale, qui permet à des groupes, à  des associations et à  des communautés de récolter des fonds auprès des  personnes éparpillées dans le Monde et ainsi de se mobiliser pour un proche, un collègue ou d’agir solidairement pour des causes environnementales, sociales, culturelles…">
	<meta name="description"  content="Getfund action  est un site internet  qui permet de collecter des fonds auprès du grand public pour financer un projet.">
	<meta  name="keywords" content="getfundact, getfund action,  collecte de funds , Crowdfunding afrique, Crowdfunding  benin ,Financement participatif, intellegencia si , Gboyou Guillaume Lewis,Ahonon Goby Parfait, Crowdfunding africa">
  
  <!-- CSRF Token -->
  <meta name="_token" content="mFYOd497kp8VS1rslqDa5TTSKaWPk15jvtnVKwI2">
  
  <link rel="shortcut icon" href="favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin/assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin/assets/plugins/ti-icons/css/themify-icons.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin/css/app.css')}}">
  <!-- end common css -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
  <!-- fancy box -->
  <link media="all" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@600&family=Nunito:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">   <style>
     body{
      font-family: 'Lato', sans-serif;
      font-family: 'Montserrat', sans-serif;
      font-family: 'Nunito', sans-serif;
      font-family: 'Open Sans', sans-serif;
     }

     .toastbox {
      width: 280px;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      text-align: center;
      border-radius: 4px;
      position: fixed;
      top: 105%;
      -webkit-transition: transform 0.3s linear;
      transition: transform 0.3s linear;
    }
    .toastbox.toast-tox--active {
      -webkit-transform: translateY(-150px);
      transform: translateY(-150px);
    }
    /** floating toast **/
        .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#302c51;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }

    .my-float{
      margin-top:22px;
     }

     input:invalid {
            animation: shake 300ms;
            border: solid 1px red;
            filter: drop-shadow(5px 5px 1px red);
            }
            input:invalid::after {
            content: "Error text input";
            font-size: 28px;
            color: red;
            }

            input:invalid + span::after {
            content: "Rensigner le champ";
            color: red;
            position: relative;
            top: 8px;
            }
            @keyframes shake {
            25% {
                transform: translateX(4px);
            }
            50% {
                transform: translateX(-4px);
            }
            75% {
                transform: translateX(4px);
            }
            }
   </style>
  </head>
<body id="element" data-base-url="">

  <div class="container-scroller" id="app">
    <nav  class="navbar col-lg-12 col-12 p-0 bg-danger fixed-top d-flex flex-row">
  <div style="background-color: #302c51 !important" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a style="width: 600px !important" class="navbar-brand brand-logo mr-5" href=""><img src="{{asset('admin/assets/images/logogetf.png')}}" class="mr-2" alt="logo"/></a>
    <a style="width: 600px !important" class="navbar-brand brand-logo-mini" href=""><img src="{{asset('admin/assets/images/logogetf.png')}}" alt="logo"/></a>
  </div>
  <div style="background-color: #302c51 !important" class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-layout-grid2"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <form action="{{ url('search') }}" method="post">
        @csrf
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="ti-search"></i>
              </span>
            </div>
            <input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Rechercher(email, nom )" aria-label="search" aria-describedby="search">
            
          </div>
          
        </li>
      </form>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown mr-1">
        <a onclick="var el = document.getElementById('element'); el.requestFullscreen();">
          <i style="font-size: 20px;text-decoration:none" class="ti-fullscreen text-white"></i>
        </a>
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
          <i class="ti-email mx-0 text-white"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="{{asset('assets/avatar7.png')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">Gobi robot
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                Welcome dear {{Auth::user()->name}}
              </p>
            </div>
          </a>
          
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="ti-bell mx-0 text-white"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Dernière session</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
               {{-- last login based on updated at on User model using carbon diffForHumans --}}
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                      {{Auth::user()->updated_at->diffForHumans()}}
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Private message
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Nouveaux utilisateurs</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                {{ $todayUser ?? '0' }} aujourd'hui
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('assets/avatar7.png')}}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
           Paramèttre
          </a>
          <a onclick="isloggedingOut();" class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Se deconnecter
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="ti-more"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-layout-grid2"></span>
    </button>
  </div>
</nav>    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<div id="right-sidebar" class="settings-panel">
  <i class="settings-close ti-close"></i>
  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">HISTORIQUE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">NOTIFICATIONS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
     <div class="p-3">
      <ul class="chat-list">
        {{--  btn danger to clear historique --}}
        <a onclick="showSwal('auto-close')"  class="btn btn-danger text-white d-flex justify-content-center">Effacer l'historique</a>
        @foreach ($historique as $item)
        <li class="list active">
          <div class="profile"><img src="{{asset('assets/img/banner/Exclamation_mark_red.png')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>{{ $item->email }}</p>
            <p>{{ $item->created_at->diffForHumans() }}</p>
            <p>{{ $item->country }}</p>
          </div>
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                      
          <small class="text-muted my-auto"></small>
        </li>
        @endforeach
        {{--<li class="list active">
          <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>--}}
      </ul>
      
     </div>
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">LES TACHES RECENTES</h4>
      
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Il y 5h</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">abyssiniea@gmail.com</p>
        <p class="text-gray mb-0 ">Suppression d'utilisateur</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0"></p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">...</small>
      </div>
     
      <ul class="chat-list">
        @foreach ($historique as $item)
        <li class="list active">
          <div class="profile"><img src="{{asset('assets/img/banner/Exclamation_mark_red.png')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>{{ $item->email }}</p>
            <p>{{ $item->created_at->diffForHumans() }}</p>
          </div>
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                      
          <small class="text-muted my-auto"></small>
        </li>
        @endforeach
        {{--<li class="list active">
          <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>--}}
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>     
 <nav  class="sidebar sidebar-offcanvas" id="sidebar">
  <ul style="position: fixed" class="nav">
    <li class="nav-item active">
      <a class="nav-link" href="/dashboard-interface">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Princiaple</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/users">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Utilisateurs</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/campagnes-actif">
          <i class="ti-unlock menu-icon"></i>
          <span class="menu-title">Campagnes actifs</span>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="/campagnes-inactif">
          <i class="ti-lock menu-icon"></i>
          <span class="menu-title">Campagnes inactif</span>
        </a>
      </li>
  
    <li class="nav-item ">
      <a class="nav-link" href="/withdarwal">
        <i class="ti-reload menu-icon"></i>
        <span class="menu-title">Retrait</span>
      </a>
    </li>

  
    
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('notifications') }}">
        <i class="ti-bell menu-icon"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>

    <li class="nav-item ">
      <a class="nav-link" href="{{ url('percentage') }}">
        <i class="ti-stats-down menu-icon"></i>
        <span class="menu-title">Pourcentage</span>
      </a>
    </li>
    
    <li class="nav-item ">
        <a class="nav-link" onclick="isloggedingOut();">
          <i class="ti-power-off menu-icon"></i>
          <span class="menu-title">Deconnexion </span>
        </a>
      </li>
    
    <li class="nav-item d-none ">
      <a class="nav-link" data-toggle="collapse" href="#error-pages" aria-expanded="false" aria-controls="error-pages">
        <i class="ti-help-alt menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="error-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="error-pages/error-404.html">404</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="error-pages/error-500.html">500</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item d-none ">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="ti-layers menu-icon"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/blank-page.html">Blank Page</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/profile.html">Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/faq.html">FAQ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/faq-2.html">FAQ 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/news-grid.html">News Grid</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/timeline.html">Timeline</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/search-results.html">Search Results</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/user-listing.html">User Listing</a>
          </li>
        </ul>
      </div>
    </li>
    
    
    
  </ul>
</nav>
<div class="main-panel">
    <div class="content-wrapper">
        <div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                            <h4 class="font-weight-bold">🖐, Welcomeback {{ Auth::user()->name }}!</h4>
                            <h4 class="font-weight-normal mb-0">Getfund-act Dashboard,</h4>
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Balance totale</p>
                                    <h4 class="mb-0 font-weight-bold">{{ $Count_dispo_amount }}XOF</h4>
                                </div>
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Aujourd'hui</p>
                                    <h4 class="mb-0 font-weight-bold">{{ $Count_dispo_amount_today }}XOF</h4>
                                </div>
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Rétrait effectué</p>
                                    <h4 class="mb-0 font-weight-bold">{{$all_withdrawal ?? '0'}}XOF</h4>
                                </div>
                                <div class="pr-3 mb-3 mb-xl-0 d-none">
                                    <p class="text-muted">Downloadsd</p>
                                    <h4 class="mb-0 font-weight-bold">4006</h4>
                                </div>
                                <div class="mb-3 mb-xl-0">
                                    <a onclick="isloggedingOut();" class="btn btn-warning rounded-0 text-white"> <i class="ti-power-off"></i> Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 grid-margin stretch-card">
                    <div style="background-color: #27293d !important" class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left text-white">Nombre de Campagnes</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-white">{{ $count_all_campagne }}</h3>
                                <i style="color: white !important" class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 text-white"></i>
                            </div>
                            <p class="mb-0 mt-2 text-warning d-none">2.00% <span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div style="background-color: #f5a623" class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left text-white">Nombre d'utilisateurs</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-white">{{ $Countall_users }}</h3>
                                <i style="color: white !important" class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                            </div>
                            <p class="mb-0 mt-2 text-danger d-none">0.22% <span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div style="background-color: #f5a623" class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left text-white">Inscription Journalière</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-white">{{ $todayUser }}</h3>
                                <i style="color: white !important" class="ti-id-badge icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                            </div>
                            <p class="mb-0 mt-2 text-success d-none">10.00%<span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div style="background-color: #27293d !important" class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left text-white">Rétrait demandé en cours</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-white">{{ $all_withdraw_amount ?? '0' }}</h3>
                                {{-- icon ti-layers-alt   --}}
                                <i style="color: white !important" class="ti-moneys icon-md text-muted mb-0 mb-md-3 mb-xl-0">XOF</i>
                            </div>
                            <p class="mb-0 mt-2 text-success d-none">22.00%<span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>
@yield('content')
<span class="toastbox" role="alert"></span>
{{-- floating button here --}}
<a data-toggle="modal" data-target="#exampleModal" class="float">
  <i class="fa fa-plus my-float text-white"></i>
</a>

{{-- floating button here --}}
<form action="{{ route('admin.add.manager') }}" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AJOUTER UN MANAGER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          {{-- {{ route('admin.add.manager') }} --}}
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" required class="form-control" name="name"  placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Prénom</label>
              <input type="text" required class="form-control" name="surname"  placeholder="Prénom">
             </div>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" required class="form-control" name="email"   placeholder="E-mail">
         </div>

         <div class="form-group">
          <label for="exampleInputEmail1">Code da validation</label>
          <input type="password" required class="form-control" name="code"   placeholder="Code">
       </div>
    
      </div>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-success">Enrégistrer</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
      </div>
      
    </div>
  </div>
</div>
</form>
<!-- Modal Ends -->
<footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 - <script>document.write(new Date().getFullYear())</script>  <a href="" target="_blank">Getfund-act</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Intelligencia & made with <i class="mdi mdi-heart text-danger"></i>
      </span>
    </div>
  </footer>      </div>
      </div>
    </div>
  
    <!-- base js -->
    <script src="{{asset('admin/js/app.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- end base js -->
  
    <!-- plugin js -->
      <script src="{{asset('admin/assets/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- end plugin js -->
  
    <!-- common js -->
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <!-- end common js -->
    <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>

      <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
       <!--fancybox-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <!-- data table -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
      <script src="{{asset('admin/assets/js/copied.js')}}"></script>
      <script src="{{asset('admin/assets/js/copied2.js')}}"></script>
      <script src="{{asset('admin/assets/js/copied3.js')}}"></script>
      <!-- <script src="../assets/js/alerts.js"></script> -->
      <script src="{{asset('admin/assets/js/alerts.js')}}"></script>
      <script> 
        $(document).ready(function() {
        $('#example').DataTable( {
           // show
           
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            //language french
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
            //avoid alphabetical order
            ,order: []
            

        } );
              $('#example tbody').on('click', 'tr', function () {
              $(this).toggleClass('selected');
              // add color #fff to a a tag
              $(this).find('tr td a').css('color', '#fff !important');
              
              });
              $('#example2 tbody').on('click', 'tr', function () {
              $(this).toggleClass('selected');
              });
              $('#example3 tbody').on('click', 'tr', function () {
              $(this).toggleClass('selected');
              });
              $('#example_today tbody').on('click', 'tr', function () {
              $(this).toggleClass('selected');
              });
        } );

      </script>
      <script>
        $(document).ready(function() {
        $('#example2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            //language french
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
            //avoid alphabetical order
            ,order: []
        } );
        } );

      </script>
      <script>
        $(document).ready(function() {
        $('#example3').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            //language french
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
            //avoid alphabetical order
            ,order: []
        } );
        } );

      </script>
      <script>
        $(document).ready(function() {
        $('#example_today').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            //language french
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
            //avoid alphabetical order
            ,order: []

            //make select menu sort by 10,20,30,40,50,60,70,80,90,100
            

        } );
             
        } );

      </script>
      <script>
        
        $(document).ready(function() {
        $('#example_1months').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            //language french
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
            //avoid alphabetical order
            ,order: []
            //make displat by row of 10,20,30,40,50,60,70,80,90,100
            

        } );
        } );
      </script>
      <script>
        // Fancybox Config
        $('[data-fancybox="gallery"]').fancybox({
          buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
          ],
          loop: false,
          protect: true
        });
      </script>
      <!--end fancybox-->
      
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
    <script>
      //swal warning function isloggedingOut();for logout or not 
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

    </script>
  </body>
  
  </html>