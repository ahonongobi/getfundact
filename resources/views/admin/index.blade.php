@extends('_layouts._admin')

@section('content')


   
                <div class="row">
                    <div  class="col-md-12 grid-margin">
                        <div style="background-color: #302c51 !important" class="card bg-primarys border-0 position-relative">
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
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The
                                                                total number of sessions within the date range. It is the
                                                                period time a user is actively engaged with your website,
                                                                page or app, etc</p>
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
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Utilisateurs</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Surname</th>
                                                <th>Date</th>
                                                <th>Statut</th>
                                                <th>Décision 1 </th>
                                                <th>Décision 2 </th>
                                                <th>Décision 3 </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($all_users as $item)
                                          <tr>
                                            <td>{{$item->name}}</td>
                                            <td class="font-weight-bold">{{$item->surname}}</td>
                                            <td>{{$item->created_at}}</td>
                                            @if ($item->states ==1)
                                            <td class="font-weight-medium text-success">Completed</td>
                                            @elseif($item->states ==0)
                                            
                                            <td class="font-weight-medium text-warning">Pending</td>
                                            @elseif($item->states == 2)
                                            <td class="font-weight-medium text-danger">Cancelled</td>
                                            @endif
                                            <td>

                                                <button class="btn btn-warning rounded-0 text-white">Details</button>

                                            </td>
                                            <td class="d-flex justify-content-evenly">
                                                <button
                                                    class="btn btn-danger rounded-0 text-white mr-3">valider</button>

                                            </td>
                                            <td>
                                                <button
                                                    class="btn btn-success rounded-0 text-white mr-3">valider</button>

                                            </td>
                                            <td>

                                                <button class="btn btn-warning rounded-0 text-white">En
                                                    attente</button>

                                            </td>
                                        </tr>  
                                          @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection
