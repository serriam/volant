{{-- @extends('layouts.admin') --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Volant Courier</title>

    <!-- Scripts -->

    <link href="/assets/img/brand/volant courier.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="assets2/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="assets2/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="assets2/css/argon.css?v=1.0.0" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body class="{{ $class ?? '' }}">
        <div id="app">

            @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
            @endauth

            <div class="main-content">
                @include('layouts.navbars.navbar')
                @include('layouts.headers.cards')

                <div class="container-fluid mt--7">
                    <div class="row mt-5">
                        <div class="col-xl-12 mb-5 mb-xl-0">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0">Unconfimed Orders</h3>
                                        </div>
                                        <div class="col text-right">
                                            {{-- <a href="#!" class="btn btn-sm btn-primary">See all</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">email</th>
                                                <th scope="col">Phone No.</th>
                                                <th scope="col">to</th>
                                                <th scope="col">from</th>
                                                <th scope="col">package</th>
                                                <th scope="col">charge</th>
                                                <th scope="col">time</th>
                                                <th scope="col">instructions</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orderm as $orders)
                                            @if($orders->mark == 0 && $orders->cancel == 0)
                                            <tr>
                                                <th scope="row">
                                                    {{ $orders->email }}
                                                </th>
                                                <th scope="row">
                                                        {{ $orders->phone }}
                                                    </th>
                                                <th scope="row">
                                                    {{ $orders->to }}
                                                </th>
                                                <td>
                                                    {{ $orders->from }}
                                                </td>
                                                <td>
                                                    {{ $orders->package }}
                                                </td>
                                                <td>
                                                    {{ $orders->info }}
                                                </td>
                                                <td>
                                                    {{ $orders->time }}
                                                </td>
                                                <td>
                                                    {{ $orders->instruct }}
                                                </td>
                                                <td>
                                                    <button onclick="confirm({{ $orders->id }})" class="btn btn-sm btn-success" >Complete</button>

                                                    <button onclick="cancelorder({{ $orders->id }})" class="btn btn-sm btn-danger" >Cancel</button>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layouts.footers.auth')
                </div>
            </div>

            <script>

                function confirm(id){
                    var mark = 1;
                    var id = id;
                    
                    jQuery.ajax({
                        url:'{{ route('orders.confirm') }}',
                        method:"POST",
                        data:{mark: mark, id: id, _token: '{{csrf_token()}}'},
                        success:function(result)
                        {
                            swal(result, "has been confirmed successfully!", "success").then(function(){ 
                               location.reload();
                           }
                           );
                        },
                        error : function(){alert("Something Went Wrong.");},
                    });
                }

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
                        url:'{{ route('orders.cancelorder2') }}',
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

        @push('js')
        <script src="assets2/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="assets2/vendor/chart.js/dist/Chart.extension.js"></script>
        @endpush
    </div>

    @guest()
    @include('layouts.footers.guest')
    @endguest

    <script src="assets2/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')

    <!-- Argon JS -->
    <script src="assets2/js/argon.js?v=1.0.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>