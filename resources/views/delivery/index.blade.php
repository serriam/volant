@extends('delivery.main')

@section('title', '| Volant Courier ')

@section('content')


        <main>
        <div class="position-relative">
            <!-- Hero for FREE version -->
            <section class="section section-lg section-hero section-shaped">
                <!-- Background circles -->
                <div class="shape shape-style-2 shape-primary">
                    <span class="span-50"></span>
                    <span class="span-100"></span>
                    <span class="span-50"></span>
                    <span class="span-75"></span>
                    <span class="span-25"></span>
                    <span class="span-75"></span>
                    <span class="span-50"></span>
                    <span class="span-20"></span>
                    <span class="span-50"></span>
                    <span class="span-20"></span>
                </div>
                <div class="container shape-container d-flex align-items-center py-lg">
                    <div class="col px-0">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-9 text-center">
                                <!-- logo of the company goes to this place -->
                                <img src="./assets/img/brand/volant courier.png" alt="logo Here too" style="width: 200px;" class="img-fluid">
                                <!-- end of logo area -->
                                <p class="lead text-white">24 Hours delivery. Delivery that never stops with time.</p>
                                <div class="btn-wrapper mt-5">
                                    <!-- link google play store -->
                                    <a href="#" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="fa fa-play"></i></span>
                                        <span class="btn-inner--text">Get on PlayStore</span>
                                    </a>
                                    <!-- end link google play store -->
                                    <!-- link to apple store -->
                                    <a href="#" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                        <span class="btn-inner--icon"><i class="fa fa-apple"></i></span>
                                        <span class="btn-inner--text">
                                     <span class="text-default"></span> Get on AppStore</span>
                                    </a>
                                    <!-- end link apple store -->
                                    <!-- order online -->
                                    <a href="/home" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                        <span class="btn-inner--icon"><i class="fa fa-map-marker"></i></span>
                                        <span class="btn-inner--text">
                                     <span class="text-default"></span> click to request delivery</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew zindex-90">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
                </div>
            </section>
        </div>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="assets/img/gif/unold_icon1_animation_loop_f.gif" class="img-fluid floating">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <h3>Volant Application Features</h3>
                            <p>At volant we esteem delivering at convenient lead time and with affordable cost. We have taken time to develop an application with a friendly user interface and amazing features that our clients can select from. We are a world
                                class organization committed to developing long term relationships with our clients.
                            </p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-default mr-3">
                                                <i class="ni ni-delivery-fast"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Readily available fleets for delivery. Ranging from motorcycles, vans, wide-load trucks and freight trailers.</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-default mr-3">
                                                <i class="ni ni-app"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">An easy to use mobile and web application. the app features, delivery tracking, payment invoices and email support.</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-default mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Client Support. At volant we get in touch to update you about your delivery and offer assistance on queries from our clients.</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- company profiling trust -->
        <section class="section section-lg bg-gradient-primary">
            <div class="container pt-lg pb-80">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-3 text-white">Why Volant Courier</h2>
                        <p class="lead text-white">Real time logistics and lead time ensures efficiency in the running of any business and entreprises. At Volant Courier we understand that and with time have come up with a solution that helps you get infront of your competitors.</p>
                    </div>
                </div>
                <div class="row row-grid mt-5">
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-calendar-grid-58 text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">Delivery in Scheduled Time</h5>
                        <p class="text-white mt-3">Volant considers lead time and urgency and schedules for delivery in convenient time to ensure no delay is imposed to our clients.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-money-coins text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">Budget Friendly</h5>
                        <p class="text-white mt-3">Our amazing packages cover the economic consideration of our clients. We have taken time to develop an affordable pricing scheme for our packages.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-support-16 text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">Client Experience</h5>
                        <p class="text-white mt-3">With volant courier the process of requesting and getting your package at your door step is easy and fast.</p>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
        </section>
        <!-- cards for info to the clients -->
        <section class="section section-lg pt-lg-0 mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-default">Our packages</h3>
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-default rounded-circle mb-4">
                                            <i class="ni ni-building"></i>
                                        </div>
                                        <h6 class="text-default text-uppercase">Metro Package</h6>
                                        <p class="description mt-3">Metro package offers services to clients in Nairobi region, Kajiado area, Machakos region and Kiambu County. The follwowing services are available delivery modes our clients can pick from.


                                        </p>
                                        <div>
                                            <span class="badge badge-pill badge-default">Skater</span>
                                            <span class="badge badge-pill badge-default">Express Cycle</span>
                                            <span class="badge badge-pill badge-default">Pickup</span>
                                            <span class="badge badge-pill badge-default">Van</span>
                                            <span class="badge badge-pill badge-default">Heavy Loads</span>
                                        </div>
                                        <a href="#" class="btn btn-default mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-default rounded-circle mb-4">
                                            <i class="ni ni-bus-front-12"></i>
                                        </div>
                                        <h6 class="text-default text-uppercase">Upcountry Package</h6>
                                        <p class="description mt-3">The upcountry package is suitable for all long distance delivery running from 5 hours to 24 hours. We offer secure and convenient modes depending on the weight of the Load and nature of items in transit.</p>
                                        <div>
                                            <span class="badge badge-pill badge-default">Overnight long distance</span>
                                            <span class="badge badge-pill badge-default">Drop delivery</span>
                                            <span class="badge badge-pill badge-default">Door to Door</span>
                                        </div>
                                        <a href="#" class="btn btn-default mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-default rounded-circle mb-4">
                                            <i class="ni ni-delivery-fast"></i>
                                        </div>
                                        <h6 class="text-default text-uppercase">Special Package</h6>
                                        <p class="description mt-3">We offer a premium suite for clients that need urgent and emergency deliveries. This package also includes goods that are fragile and require detailed attention. It is a good coverage for clients who want to shift
                                            from one location to another.</p>
                                        <div>
                                            <span class="badge badge-pill badge-default">Movers</span>
                                            <span class="badge badge-pill badge-default">Dedicated Express</span>
                                            <span class="badge badge-pill badge-default">Good Handlers</span>
                                            <span class="badge badge-pill badge-default">Pick and Drop</span>
                                        </div>
                                        <a href="#" class="btn btn-default mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-secondary">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-4">
                        <div class="card bg-default shadow border-0">
                            <img src="./assets/img/theme/volant-mockup.png" class="card-img-top">
                            <blockquote class="card-blockquote">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                            <polygon points="0,52 583,95 0,95" class="fill-default" />
                            <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                          </svg>
                                <h4 class="display-3 font-weight-bold text-white">Request a price estimate</h4>
                                <p class="lead text-italic text-white">Get a price estimate by entering your location and destination at the right side and explore our best offers for your delivery.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="pl-md-4">

                            <div class="card bg-gradient-secondary shadow">
                                <div class="card-body p-lg-5">
                                    <h4 class="mb-1">Enter your Current Location and Destination point!</h4>
                                    <div class="form-group mt-5">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Your Location" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-compass-04"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Destiantion Place" type="text">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-default btn-round btn-block btn-lg">Proceed to Results</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer has-cards">
        <div class="container container-lg">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/landing.html" title="order for delivery">
                            <img src="./assets/img/gif/dribbble_arrive_archive.gif" class="card-img">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/profile.html" title="Profile Page">
                            <img src="./assets/img/gif/payment-complete.gif" class="card-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
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