<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>Getfund-act dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  
  </head>
<body data-base-url="">

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
            <input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Rechercher (id user, email, nom )" aria-label="search" aria-describedby="search">
            
          </div>
          
        </li>
      </form>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown mr-1">
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
          <i class="ti-email mx-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="{{asset('assets/avatar7.png')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">David Grey
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                New product launch
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                Upcoming board meeting
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="ti-bell mx-0"></i>
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
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
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
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 days ago
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
            Settings
          </a>
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
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
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
     <div class="p-3">
      <div class="list-wrapper">
        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
          <li>
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Meeting with Urban Team
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Duplicate a project for new customer
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Project meeting with CEO
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Follow up of team zilla
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Level up for Antony
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
        </ul>
      </div>
      <div class="add-items d-flex mb-0 mt-2">
        <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
        <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
      </div>
     </div>
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('assets/avatar7.png')}}" alt="image"><span class="offline"></span></div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>     
 <nav  class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item active">
      <a class="nav-link" href="/dashboard-interface">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="/users">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Utilisateurs</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/campagnes-actif">
          <i class="ti-settings menu-icon"></i>
          <span class="menu-title">Campagnes actifs</span>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="/campagnes-inactif">
          <i class="ti-settings menu-icon"></i>
          <span class="menu-title">Campagnes inactif</span>
        </a>
      </li>
  
    <li class="nav-item ">
      <a class="nav-link" href="/withdarwal">
        <i class="ti-settings menu-icon"></i>
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
        <a class="nav-link" href="/logout">
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
                            <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
                            <h4 class="font-weight-normal mb-0">Getfund-act Dashboard,</h4>
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Balance total</p>
                                    <h4 class="mb-0 font-weight-bold">{{ $Count_dispo_amount }}FCFA</h4>
                                </div>
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Aujourd'hui</p>
                                    <h4 class="mb-0 font-weight-bold">{{ $Count_dispo_amount_today }}FCFA</h4>
                                </div>
                                <div class="border-right pr-4 mb-3 mb-xl-0">
                                    <p class="text-muted">Paiement</p>
                                    <h4 class="mb-0 font-weight-bold">4006</h4>
                                </div>
                                <div class="pr-3 mb-3 mb-xl-0 d-none">
                                    <p class="text-muted">Downloadsd</p>
                                    <h4 class="mb-0 font-weight-bold">4006</h4>
                                </div>
                                <div class="mb-3 mb-xl-0">
                                    <a href="/logout" class="btn btn-warning rounded-0 text-white">Deconexion</a>
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
                                <i style="color: white !important" class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                            </div>
                            <p class="mb-0 mt-2 text-success d-none">10.00%<span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div style="background-color: #27293d !important" class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left text-white">Montant disponible</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-white">{{ $Count_dispo_amount }}FCFA</h3>
                                <i style="color: white !important" class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                            </div>
                            <p class="mb-0 mt-2 text-success d-none">22.00%<span class="text-black ml-1"><small>(30
                                        days)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>
@yield('content')

<footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 <a href="" target="_blank">Getfund-act</a>. All rights reserved.</span>
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
  
      <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>

      <!-- data table -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
      <script>
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
        } );

      </script>
      <script>
        $(document).ready(function() {
        $('#example2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
        } );

      </script>
  </body>
  
  </html>