@extends('backend.mainback')

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


  <div class="panel-header panel-header-md">
    <div class="container">
     @include('backend.includes.messages')
   </div>
 </div>
 <div class="content">

   <div class="card">
    <div class="card-body reveal" id="reveal">
      <div class="mb-5">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> My Orders </h4>
          </div>
          <div class="col-md-6">
           <a href="{{ route('orders.create') }}" class="btn btn-info pull-right" >Create Order</a>
         </div>
       </div>
       {{-- <div id="demo"></div> --}}


     </div>
     <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- tabs here each with different package description -->
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-building mr-2"></i>In Progress</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bus-front-12 mr-2"></i>Complete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-delivery-fast mr-2"></i>Cancelled</a>
            </li>
          </ul>
        </div>
        <div class="card ">

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="container table-responsive">
                <div class="row justify-content">

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary" style="font-size: 12px;" >
                          <th>To:</th>
                          <th>From:</th>
                          <th>Package</th>
                          <th>Amount</th>
                          <th>Time</th>
                          <th>Instructions</th>
                          <th>Edit</th>
                          <th>Cancel</th>
                          <th>Delete</th>
                        </thead>
                        <tbody style="font-size:12px;">
                          @foreach($order as $orders)
                          @if($orders->email == Auth::user()->email && $orders->cancel == 0 && $orders->mark == 0)
                          <tr>
                            <td>{{ $orders->to }}</td>
                            <td>{{ $orders->from }}</td>
                            <td>{{ $orders->package }}</td>
                            <td>{{ $orders->info }}</td>
                            <td>{{ $orders->time }}</td>
                            <td>{{ $orders->instruct }}</td>
                            <td>
                              <a href="{{ route('orders.edit', $orders->id) }}" class="btn btn-sm btn-info">Edit</a>
                            </td>

                            <td>
                              <button onclick="cancelorder({{ $orders->id }})" class="btn btn-sm btn-warning">Cancel</button>
                            </td>

                            <td>
                              <button onclick="deleteorder2({{ $orders->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>

                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                      <div class="text-center">
                        {!! $order->links(); !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <!-- content upcountry packages here explained with link to make order -->

              <div class="container table-responsive">
                <div class="row justify-content">

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary" style="font-size: 12px;" >
                          <th>To:</th>
                          <th>From:</th>
                          <th>Package</th>
                          <th>Amount</th>
                          <th>Time</th>
                          <th>Instructions</th>
                          <th>Delete</th>
                        </thead>
                        <tbody style="font-size:12px;">
                          @foreach($order as $orders)
                          @if($orders->email == Auth::user()->email && $orders->cancel == 0 && $orders->mark == 1)
                          <tr>
                            <td>{{ $orders->to }}</td>
                            <td>{{ $orders->from }}</td>
                            <td>{{ $orders->package }}</td>
                            <td>{{ $orders->info }}</td>
                            <td>{{ $orders->time }}</td>
                            <td>{{ $orders->instruct }}</td>

                            <td>
                              <button onclick="deleteorder2({{ $orders->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>

                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                      <div class="text-center">
                        {!! $order->links(); !!}
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- end upcountry packages -->
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
              <!-- special packages here explained with link to make order -->

              <div class="container table-responsive">
                <div class="row justify-content">

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary" style="font-size: 12px;" >
                          <th>To:</th>
                          <th>From:</th>
                          <th>Package</th>
                          <th>Amount</th>
                          <th>Time</th>
                          <th>Instructions</th>
                          <th>Delete</th>
                        </thead>
                        <tbody style="font-size:12px;">
                          @foreach($order as $orders)
                          @if($orders->email == Auth::user()->email && $orders->cancel == 1)
                          <tr>
                            <td>{{ $orders->to }}</td>
                            <td>{{ $orders->from }}</td>
                            <td>{{ $orders->package }}</td>
                            <td>{{ $orders->info }}</td>
                            <td>{{ $orders->time }}</td>
                            <td>{{ $orders->instruct }}</td>

                            <td>
                              <button onclick="deleteorder2({{ $orders->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>

                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                      <div class="text-center">
                        {!! $order->links(); !!}
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

<script>

  function deleteorder2(id){
    var id = id;

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this order!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
       jQuery.ajax({
        url:'{{ route('orders.deleteorder2') }}',
        method:"POST",
        data:{id: id, _token: '{{csrf_token()}}'},
        success:function(result)
        {
         swal(result, "has been deleted!", {
          icon: "success",
        }).then(function(){ 
         location.reload();
       }
       );
      },
      error : function(){alert("Something Went Wrong.");},
    });
     } else {
      swal("Order is safe!").then(function(){ 
       location.reload();
     }
     );
    }
  });
  }

                // swal(result, "has been confirmed successfully!", "success")

              </script>

              <script>
               function cancelorder(id){
                var id = id;

                swal({
                  title: "Are you sure?",
                  text: "Once canceled, you will not be able to uncancel this order!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                   jQuery.ajax({
                    url:'{{ route('orders.cancelorder') }}',
                    method:"POST",
                    data:{id: id, _token: '{{csrf_token()}}'},
                    success:function(result)
                    {
                     swal(result, "has been canceled!", {
                      icon: "success",
                    }).then(function(){ 
                     location.reload();
                   }
                   );
                  },
                  error : function(){alert("Something Went Wrong.");},
                });
                 } else {
                  swal("Order is safe!").then(function(){ 
                   location.reload();
                 }
                 );
                }
              });
              }
            </script>

              @endsection
