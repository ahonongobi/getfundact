@extends('_layouts._admin')

@section('content')

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div style="background-color: #302c51 !important" class="card bg-primary border-0 position-relative">
                            <div class="card-body">
                                <p class="card-title text-white">Performance en temp réel</p>
                                <div id="performanceOverview"
                                    class="carousel slide performance-overview-carousel position-static pt-2"
                                    data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                                                        <div class="icon icon-a text-white mr-3">
                                                            <i class="ti-cup icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Revenue total</h3>
                                                                <h3 class="mb-0">34040</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">+34040</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0 d-none">0.036%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">
                                                               </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-b text-white mr-3">
                                                            <i class="ti-bar-chart icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Paiement</h3>
                                                                <h3 class="mb-0">$9672471</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">7.34567</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0 d-none">2.036%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-c text-white mr-3">
                                                            <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Week-end</h3>
                                                                <h3 class="mb-0">6358</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">+9082</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0 d-none">35.54%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">
                                                               </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                                                        <div class="icon icon-a text-white mr-3">
                                                            <i class="ti-cup icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Clients</h3>
                                                                <h3 class="mb-0">49076</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">+59238</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0">0.056%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-b text-white mr-3">
                                                            <i class="ti-bar-chart icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Order</h3>
                                                                <h3 class="mb-0">$308656</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">-6.20967</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0">2.389%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-c text-white mr-3">
                                                            <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                                                                <h3 class="mb-0">6358</h3>
                                                            </div>
                                                            <div
                                                                class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0">+9082</h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0">35.54%</h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#performanceOverview" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#performanceOverview" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- last 3 admin users --}}
                    @foreach ($last_admin as $item)
                        <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                    <img src="{{ asset('assets/gobi_avatar.png') }}" class="img-lg rounded" alt="profile image"/>
                                    <div class="ms-sm-3 ms-md-0 ms-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                        <h6 class="mb-0">{{$item->name}}</h6>
                                        <p class="text-muted mb-1">{{$item->email}}</p>
                                        <p class="mb-0 text-success font-weight-bold">Administrateur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    {{--<div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                    <img src="{{ asset('assets/gobi_avatar.png') }}" class="img-lg rounded" alt="profile image"/>
                                    <div class="ms-sm-3 ms-md-0 ms-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                                        <h6 class="mb-0">Edward</h6>
                                        <p class="text-muted mb-1">edward@gmail.com</p>
                                        <p class="mb-0 text-success font-weight-bold">Tester</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    
                </div>


            </div>
            <div id="container"></div>
        </div>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    var users =  <?php echo json_encode($users) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Croissance Nouvaux utilisateurs, 2022'
        },
        subtitle: {
            text: ''
        },
         xAxis: {
            categories: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Au', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Nombre de nouveaux utilisateurs'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nouveaux utilisateurs',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
    </script>
    @endsection
