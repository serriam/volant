@extends('backend.mainback2')

@section('title', '| Volant Courier ')

@section('content')

  {{--   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
  </div> --}}

  {{--     <footer class="footer">
        <div class="container-fluid">
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
          </div>
        </div>
      </footer> --}}
      <!--   Core JS Files   -->

      <div class="wrapper ">
        <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a class="navbar-brand mr-lg-5" href="/">
          {{ Html::image('/assets/img/brand/volant courier.png', 'alt Volant Courier') }}
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
           <div class="alert alert-default">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif

            You are logged in!
          </div>
        </li>
        <li>
          <a href="/home">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="active">
          <a href="/orders">
            <i class="now-ui-icons users_single-02"></i>
            <p>Orders</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel" id="main-panel">
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="#pablo">Orders</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons location_world"></i>
                <p>
                  Welcome {{ Auth::user()->name }}
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                {{-- <a class="dropdown-item" href="#">Action</a> --}}

                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="now-ui-icons users_single-02"></i>
              <p>
                <span class="d-lg-none d-md-block">Account</span>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Make An Order</h4>
          </div>
          <div class="card-body">

                 {{--  <div class="row" data-parsley-validate>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>To:</label>
                        <input type="text" name="to" id="to" class="form-control" placeholder="To" required>
                        <p style="color: red;" id="error"></p>
                      </div>
                    </div>

                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>From:</label>
                        <input type="text" name="from" id="from" class="form-control" placeholder="From" required>
                        <p style="color: red;" id="errorf"></p>
                      </div>
                    </div>
                

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                              continue
                            </a>
                      </div>
                    </div>
                  </div> --}}
            {{--   <form id="distance_form">
                <div class="form-group">
                  <label>from: </label>
                  <input id="from_places" class="form-control" placeholder="Enter a Location" name="from">
                  <input type="hidden" id="origin" name="origin" required name="">
                </div>

                <div class="form-group">
                  <label>to:</label>
                  <input id="to_places" class="form-control" placeholder="Enter A Location" name="to">
                  <input id="destination" type="hidden" name="destination" required>
                </div>

                <input type="submit" value="calculate" class="btn btn-info">
              </form> --}}

              
              <div class="pac-card card col-md-5" id="pac-card">     
                <div class="card-body">
                 <div id="title">
                  Enter your location
                </div>

                <div id="type-selector" class="pac-controls">
                  <input type="radio" name="type" id="changetype-all" checked="checked">
                  <label for="changetype-all">All</label>

                  <input type="radio" name="type" id="changetype-establishment">
                  <label for="changetype-establishment">Establishments</label>

                  <input type="radio" name="type" id="changetype-address">
                  <label for="changetype-address">Addresses</label>

                  <input type="radio" name="type" id="changetype-geocode">
                  <label for="changetype-geocode">Geocodes</label>
                </div>
                <div id="strict-bounds-selector" class="pac-controls">
                  <input type="checkbox" id="use-strict-bounds" value="">
                  <label for="use-strict-bounds">Strict Bounds</label>
                </div>

                <form id="distance_form">  
                  <div id="pac-container" class="form-group">
                    <label style="font-size: 15px;">Your Location:</label>
                    <input id="pac-input" style="width: 70%" value="{{ $order->from }}" class="form-control" type="text"
                    placeholder="Enter a location">
                    <input type="hidden" id="origin" name="origin" required name="from">
                  </div>

                  <div id="pac-container" class="form-group">
                    <label style="font-size: 15px;">Destination:</label>
                    <input id="pac-input2" value="{{ $order->to }}" style="width: 70%" class="form-control" type="text"
                    placeholder="Enter a location">
                    <input type="hidden" id="destination" name="destination" required name="to">
                  </div>

                  <input type="submit" id="proceed" value="continue" class="btn btn-info">
                </form>

              </div>
            </div>


            <div id="googleMap" style="width:100%;height:400px;"></div>

            <div id="infowindow-content">
              <img src="" width="16" height="16" id="place-icon">
              <span id="place-name"  class="title"></span><br>
              <span id="place-address"></span>
            </div>


            <div id="result" class="card">
              <ul class="list-group d-flex justify-content-between card-body">
               {{--  <li class="list-group-item">
                  Distance In Mile :
                  <span id="in_mile" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li> --}}
                <li class="list-group-item d-flex justify-content-between">
                  Distance In Kilo :
                  <span id="in_kilo" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  Time:
                  <span id="duration_text" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li>
              {{--   <li class="list-group-item d-flex justify-content-between">
                  In Minutes
                  <span id="duration_value" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li> --}}
                <li class="list-group-item d-flex justify-content-between">
                  From :
                  <span id="from" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  To :
                  <span id="to" style="color: #fff" class="badge badge-success badge-pill"></span>
                </li>
                <input type="hidden" id="id" name="id" required value="{{ $order->id }}" name="id">
              </ul>
            </div>

            <div class="card">
              <div class="card-body reveal" id="reveal" style="display: none;">
                <div class="mb-5">
                  <small class="text-uppercase font-weight-bold">Packages</small>
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
                                      <h4 class="text-default ">Light Weight Loads</h4>
                                    </div>

                                    <!-- skater delivery -->
                                    <div>
                                      <div class="row d-flex px-4" >
                                        <div class="col-lg-12 card fill" id="skater">
                                          <h5 class=" title text-default" id="skater-name">Skater Delivery:</h5>
                                          <div class="card-body" >
                                            <p>Skater delivery for short-distances. This mode saves time especially within CBD. Suitable to cut-on heavy traffic.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="skater-amount" class="badge badge-pill badge-info">Ksh. 220</span>
                                            </div>
                                            <div>
                                              <small><strong>Delivery Time:</strong></small>
                                              <span id="skater-time" class="badge badge-pill badge-warning">4 Hour</span>
                                            </div>

                                          </div>
                                        </div>

                                        <!-- end skater delivery -->
                                        <br>
                                        <!-- express cycle delivery -->
                                        <div class="col-lg-12 card fill" id="express">
                                          <h5 class=" title text-default" id="express-name">Express Cycle Delivery:</h5>
                                          <div class="card-body"> 
                                            <p>A rider picks up your parcel from your location and delivers it directly to the mentioned location.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="express-amount" class="badge badge-pill badge-info">ksh. 300</span>
                                            </div>
                                            <div>
                                              <small><strong>Delivery Time:</strong></small>
                                              <span id="express-time" class="badge badge-pill badge-warning">1 Hour</span>
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
                                      <h4 class=" text-default">Medium Weight Loads</h4>
                                    </div>

                                    <!-- Pickup delivery -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="pickup">
                                          <h5 class=" title text-default" id="pickup-name">Pickup Delivery:</h5>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="pickup-amount" class="badge badge-pill badge-info">ksh. 2000</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="pickup-time" class="badge badge-pill badge-warning">0-10km</span>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- end skater delivery -->

                                        <!-- express cycle delivery -->
                                        <div class="col-lg-12 card fill" id="van">
                                          <h5 class=" title text-default" id="van-name">Van Delivery:</h5>
                                          <div class="card-body" >
                                            <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="van-amount" class="badge badge-pill badge-info">ksh. 2000</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="van-time" class="badge badge-pill badge-warning">0 - 10km</span>
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
                                      <h4 class="text-default">Heavy Weight Loads</h4>
                                    </div>

                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="3-Tonne">
                                          <h5 class=" title text-default" id="3-Tonne-name">3-Tonne Truck:</h5>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="3-Tonne-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="3-Tonne-time" class="badge badge-pill badge-warning">0-25km</span>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- end skater delivery -->

                                        <!-- express cycle delivery -->
                                        <div class="col-lg-12 card fill" id="5-Tonne">
                                          <h5 class=" title text-default" id="5-Tonne-name">5-Tonne Truck:</h5>
                                          <div class="card-body">
                                            <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="5-Tonne-amount" class="badge badge-pill badge-info">ksh. 6000</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="5-Tonne-time" class="badge badge-pill badge-warning">0 - 25km</span>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-12 card fill" id="10-Tonne">
                                          <h5 class=" title text-default" id="10-Tonne-name">10-Tonne Truck:</h5>
                                          <div class="card-body">
                                            <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="10-Tonne-amount" class="badge badge-pill badge-info">ksh. 6800</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="10-Tonne-time" class="badge badge-pill badge-warning">0 - 25km</span>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-12 card fill" id="28-Tonne">
                                          <h5 class=" title text-default" id="28-Tonne-name">28-Tonne Truck:</h5>
                                          <div class="card-body" >
                                            <p>Similar to pickup. Van delivery offers protection to parcels sensitive to weather changes.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="28-Tonne-amount" class="badge badge-pill badge-info">ksh. 7000</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="28-Tonne-time" class="badge badge-pill badge-warning">0 - 25km</span>
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

                                    </div>

                                    <!-- overnight Long Distance -->
                                    <div>
                                      <div class="row d-flex px-4 dropdown"> 
                                        <div class="col-lg-12 card fill dropdown-toggle"id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <h5 class=" title text-default" id="medium-name" >Overnight Long Distance:</h5>
                                          <div class="card-body "  >
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                           
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="medium-time" class="badge badge-pill badge-warning">0-25km</span>
                                            </div>
                                          </div>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="col-lg-12 card" id="medium">
                                              <div class="card-body fill dropdown-item col-lg-12">
                                                <small id="weight" ><strong>1-7kgs:</strong></small>
                                              <span id="medium-amount1" class="badge badge-pill badge-info">ksh. 250</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12">
                                                <small id="weight"><strong>8-10kgs:</strong></small>
                                              <span id="medium-amount2" class="badge badge-pill badge-info">ksh. 300</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12">
                                                <small id="weight"><strong>11-15kgs:</strong></small>
                                              <span id="medium-amount3" class="badge badge-pill badge-info">ksh. 350</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12">
                                                <small id="weight"><strong>16-19kgs:</strong></small>
                                              <span id="medium-amount4" class="badge badge-pill badge-info">ksh. 400</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12">
                                                <small id="weight"><strong>20-25kgs:</strong></small>
                                              <span id="medium-amount5" class="badge badge-pill badge-info">ksh. 500</span>
                                              </div>
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

                                    </div>

                                    <!-- Pickup delivery -->
                                    <div>
                                      <div class="row d-flex px-4 dropdown" >
                                        <div class="col-lg-12 card fill dropdown-toggle"id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <h4 class="title text-default" id="door-name">Door to Door</h4>
                                          <div class="card-body" >
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="door-time" class="badge badge-pill badge-warning">0-25km</span>
                                            </div>
                                          </div>

                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="col-lg-12 card" >
                                              <div class="card-body fill dropdown-item col-lg-12" id="door">
                                                <small id="weight" ><strong>1-7kgs:</strong></small>
                                              <span id="door-amount1" class="badge badge-pill badge-info">ksh. 250</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="door">
                                                <small id="weight"><strong>8-10kgs:</strong></small>
                                              <span id="door-amount2" class="badge badge-pill badge-info">ksh. 300</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="door">
                                                <small id="weight"><strong>11-15kgs:</strong></small>
                                              <span id="door-amount3" class="badge badge-pill badge-info">ksh. 350</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="door">
                                                <small id="weight"><strong>16-19kgs:</strong></small>
                                              <span id="door-amount4" class="badge badge-pill badge-info">ksh. 400</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="door">
                                                <small id="weight"><strong>20-25kgs:</strong></small>
                                              <span id="door-amount5" class="badge badge-pill badge-info">ksh. 500</span>
                                              </div>
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

                                    </div>
                                    <!-- Drop delivery -->
                                    <div>
                                      <div class="row d-flex px-4 dropdown">
                                        <div class="col-lg-12 card fill dropdown-toggle"id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <h4 class="title text-default" id="drop-name">Drop Delivery</h4>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                           
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="drop-time" class="badge badge-pill badge-warning">0-25km</span>
                                            </div>
                                          </div>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <div class="col-lg-12 card" >
                                              <div class="card-body fill dropdown-item col-lg-12" id="drop">
                                                <small id="weight" ><strong>1-7kgs:</strong></small>
                                              <span id="drop-amount1" class="badge badge-pill badge-info">ksh. 250</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="drop">
                                                <small id="weight"><strong>8-10kgs:</strong></small>
                                              <span id="drop-amount2" class="badge badge-pill badge-info">ksh. 300</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="drop">
                                                <small id="weight"><strong>11-15kgs:</strong></small>
                                              <span id="drop-amount3" class="badge badge-pill badge-info">ksh. 350</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="drop">
                                                <small id="weight"><strong>16-19kgs:</strong></small>
                                              <span id="drop-amount4" class="badge badge-pill badge-info">ksh. 400</span>
                                              </div>
                                              <div class="card-body fill dropdown-item col-lg-12" id="drop">
                                                <small id="weight"><strong>20-25kgs:</strong></small>
                                              <span id="drop-amount5" class="badge badge-pill badge-info">ksh. 500</span>
                                              </div>
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

                                    </div>

                                    <!-- overnight Long Distance -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="movers">
                                          <h4 class="title text-default" id="movers-name">Movers</h4>
                                          <div class="card-body ">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="movers-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="movers-time" class="badge badge-pill badge-warning">0-25km</span>
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

                                    </div>

                                    <!-- dedicated express delivery -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="dedicated">
                                          <h4 class="title text-default" id="dedicated-name">Dedicated Express</h4>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="dedicated-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="dedicated-time" class="badge badge-pill badge-warning">0-25km</span>
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

                                    </div>
                                    <!-- Drop delivery -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="good">
                                          <h4 class="text-default" id="good-name">Good Handlers</h4>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="good-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="good-time" class="badge badge-pill badge-warning">0-25km</span>
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

                                    </div>

                                    <!-- Pickup delivery -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="delivery">
                                          <h4 class="title text-default text-uppercase" id="delivery-name">Drop and Delivery</h4>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="delivery-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="delivery-time" class="badge badge-pill badge-warning">0-25km</span>
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

                                    </div>

                                    <!-- Pickup delivery -->
                                    <div>
                                      <div class="row d-flex px-4">
                                        <div class="col-lg-12 card fill" id="pick">
                                          <h4 class="title text-default text-uppercase" id="pick-name">Pick and Drop</h4>
                                          <div class="card-body">
                                            <p>Delivery for medium package. This covers items which are not affected by weather conditions such as rain.</p>
                                            <div>
                                              <small><strong>Amount:</strong></small>
                                              <span id="pick-amount" class="badge badge-pill badge-info">ksh. 4500</span>
                                            </div>
                                            <div>
                                              <small><strong>Range:</strong></small>
                                              <span id="pick-time" class="badge badge-pill badge-warning">0-25km</span>
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
                    <!-- end of packages tabs -->
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>


</div>
</div>

<script>
//   setTimeout(function() {
//     document.getElementById("page-content").textContent = 'Page is ready!';
// }, 2000);
</script>

<script>
  function distance(){
    var to = $("#to").val();
    var from  = $("#from").val();
    var small = $("#small").val();
    var medium = $("#medium").val();

    if (to == '') {
      $('#error').html('this field is required');
    }

    if (from == '') {
      $('#errorf').html('this field is required');
    }

    jQuery.ajax({
      url:'{{ route('orders.distance') }}',
      method: "POST",
      data: {to : to, from : from, _token : '{{ csrf_token() }}'},
      success:function(result){
        $('#load').html(result);
      }, 
      error:function(){alert('something went wrong.');},
    });
  }
</script>

@endsection
