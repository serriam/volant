@extends('delivery.main')

@section('title', '| Volant Courier ')

@section('content')

    <main class="profile-page">
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-150">
                <div class="shape shape-style-2 shape-dark">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="display-3  text-white">No Haste. Your deliveries in time

                                </h1>
                                <p class="lead  text-white">Explore amazing packages that suite your business needs.</p>
                                <div class="btn-wrapper">
                                    <a href="#tabs-icons-text-1" class="btn btn-primary btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="fa fa-building"></i></span>
                                        <span class="btn-inner--text">Metro</span>
                                    </a>
                                    <a href="#tabs-icons-text-2" class="btn btn-info btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-bus-front-12"></i></span>
                                        <span class="btn-inner--text">Upcountry</span>
                                    </a>
                                    <a href="#tabs-icons-text-3" class="btn btn-default btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-delivery-fast"></i></span>
                                        <span class="btn-inner--text">Special</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <!-- image here -->
                                <img class="img-fluid" src="/assets/img/brand/delivered.gif" width="400px">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 300"></polygon>
          </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->

        </div>
        <section class="section">
            <div class="container col-lg-12">
                <div class="card card-profile shadow-lg">
                    <div class="px-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 order-lg-3 text-lg-right align-self-lg-center">
                                <!-- <div class="card-profile-actions ">
                                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                            </div> -->
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">47</span>
                                        <span class="description">Counties</span>
                                    </div>
                                    <div>
                                        <span class="heading">200+</span>
                                        <span class="description">Fleets</span>
                                    </div>
                                    <div>
                                        <span class="heading">16+</span>
                                        <span class="description">Package Categories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-info mt-5">
                        <h3>Volant Packages
                            <span class="font-weight-light">12</span>
                        </h3>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- tabs here each with different package description -->
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-building mr-2"></i>Metro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bus-front-12 mr-2"></i>Upcountry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-delivery-fast mr-2"></i>Special</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card ">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="container">
                                                <div class="row justify-content">
                                                    <!-- content metro packages here explained with link to make order -->
                                                    <!-- light weight -->
                                                    <div class="card shadow shadow-sm--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-4 ">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="fa fa-bicycle"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Light Weight Loads</h4>
                                                                </div>

                                                                <!-- skater delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">Skater Delivery:</h5>
                                                                            <div>
                                                                                <p>Skater delivery for short-distances. This mode saves time especially within CBD. Suitable to cut-on heavy traffic.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 220</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Delivery Time:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">4 Hour</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end skater delivery -->
                                                                        <br>
                                                                        <!-- express cycle delivery -->
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">Express Cycle Delivery:</h5>
                                                                            <div>
                                                                                <p>A rider picks up your parcel from your location and delivers it directly to the mentioned location.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 300</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Delivery Time:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">1 Hour</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end express cycle delivery -->


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Light Weight -->

                                                    <!-- Medium weight Load -->
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="fa fa-cab"></i>
                                                                    </div>
                                                                    <h4 class=" text-default text-uppercase">Medium Weight Loads</h4>
                                                                </div>

                                                                <!-- Pickup delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">Pickup Delivery:</h5>
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 2000</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-10km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end skater delivery -->

                                                                        <!-- express cycle delivery -->
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">Van Delivery:</h5>
                                                                            <div>
                                                                                <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 2000</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0 - 10km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end van delivery -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end medium weight Load -->
                                                    <!-- Heavy Weight Load  -->
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="fa fa-truck"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Heavy Weight Loads</h4>
                                                                </div>

                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">3-Tonne Truck:</h5>
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end skater delivery -->

                                                                        <!-- express cycle delivery -->
                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">5-Tonne Truck:</h5>
                                                                            <div>
                                                                                <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 6000</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0 - 25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">10-Tonne Truck:</h5>
                                                                            <div>
                                                                                <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 6800</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0 - 25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12">
                                                                            <h5 class="display-4 title text-default">28-Tonne Truck:</h5>
                                                                            <div>
                                                                                <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 7000</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0 - 25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end heavy weight Load -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                            <!-- content upcountry packages here explained with link to make order -->

                                            <div class="container">
                                                <div class="row justify-content">
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3 ">
                                                                <div class>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="fa fa-moon-o"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Overnight Long Distance</h4>
                                                                </div>

                                                                <!-- overnight Long Distance -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end overnight long distance -->

                                                                    </div>
                                                                </div>
                                                                <!-- end overnight Long Distance -->


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-user-run"></i>
                                                                    </div>
                                                                    <h4 class=" text-default text-uppercase">Door to Door</h4>
                                                                </div>

                                                                <!-- Pickup delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end overnight long distance -->

                                                                    </div>
                                                                </div>
                                                                <!-- end van delivery -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="fa fa-inbox"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Drop Delivery</h4>
                                                                </div>
                                                                <!-- Drop delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end drop delivery -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end upcountry packages -->
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <!-- special packages here explained with link to make order -->

                                            <div class="container">
                                                <div class="row justify-content">
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3 ">
                                                                <div class>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-box-2"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Movers</h4>
                                                                </div>

                                                                <!-- overnight Long Distance -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end overnight long distance -->

                                                                    </div>
                                                                </div>
                                                                <!-- end overnight Long Distance -->


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-badge"></i>
                                                                    </div>
                                                                    <h4 class=" text-default text-uppercase">Dedicated Express</h4>
                                                                </div>

                                                                <!-- dedicated express delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end dedicated delivery -->

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-diamond"></i>
                                                                    </div>
                                                                    <h4 class="text-default text-uppercase">Good Handlers</h4>
                                                                </div>
                                                                <!-- Drop delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end drop delivery -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-email-83"></i>
                                                                    </div>
                                                                    <h4 class=" text-default text-uppercase">Drop and Delivery</h4>
                                                                </div>

                                                                <!-- Pickup delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end overnight long distance -->

                                                                    </div>
                                                                </div>
                                                                <!-- end van delivery -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card shadow shadow-lg--hover mt-5">
                                                        <div class="card-body">
                                                            <div class="row d-flex px-3">
                                                                <div>
                                                                    <div class="icon icon-shape bg-gradient-default rounded-circle text-white">
                                                                        <i class="ni ni-user-run"></i>
                                                                    </div>
                                                                    <h4 class=" text-default text-uppercase">Pick and Drop</h4>
                                                                </div>

                                                                <!-- Pickup delivery -->
                                                                <div class="card-body">
                                                                    <div class="row d-flex px-4">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                                                                <div>
                                                                                    <small><strong>Amount:</strong></small>
                                                                                    <span class="badge badge-pill badge-info">Kes. 4500</span>
                                                                                </div>
                                                                                <div>
                                                                                    <small><strong>Range:</strong></small>
                                                                                    <span class="badge badge-pill badge-warning">0-25km</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end overnight long distance -->

                                                                    </div>
                                                                </div>
                                                                <!-- end van delivery -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end special packages -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of packages tabs -->
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </main>
    <footer class="footer has-cards">
        <div class="container">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2019
                        <a href="#" target="_blank">Volant Courier</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Developed by Obspace Ltd.</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

@endsection