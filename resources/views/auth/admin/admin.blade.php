@extends('layouts.admin')

@section('content')
<main>
        <section class="section section-shaped section-lg">
          <div class="container pt-lg-md">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card bg-secondary shadow border-0">
                  <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center" style="padding-top:20px; font-size:20px;">
                      <small>Admin Login</small>
                    </div>
                    
                  </div>
                  
                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                      <small>Or sign in with credentials</small>
                    </div>
                    <form method="POST" action="{{ route('adminLogin') }}">
    
                        @csrf
    
                      <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                      </div>
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for=" customCheckLogin">
                          <span>Remember me</span>
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Login in</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <a href="#" class="text-light">
                      <small style="color: blue;">Forgot password?</small>
                    </a>
                  </div>
                  <div class="col-6 text-right">
                    <a href="/register" class="text-light">
                      <small style="color: #000;">Create new account</small>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection    
    