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
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{-- <?php 
          $now = date("Y-m-d H:m:s");
          $hours = '5 hours';
          $new_time = date("Y-m-d H:i:s", strtotime(sprintf("+%d hours", $hours)));

          var_dump($now);
          ?> --}}
          {{-- <p id="time" style="display: hidden;"><?= $new_time ?></p> --}}
          <div id="demo"></div>
          <h4 class="card-title"> My Orders </h4>
          <a href="{{ route('orders.create') }}" class="btn btn-info pull-right" >Create Order</a>
        </div>
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
                <th>Delete</th>
              </thead>
              <tbody style="font-size:12px;">
                @foreach($order as $orders)
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
                    <button onclick="deleteorder2({{ $orders->id }})" class="btn btn-sm btn-danger">Delete</button>
                  </td>

                </tr>
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

              @endsection
