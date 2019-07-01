@extends('layouts.admin')

@section('content')
<main>
        <section class="section section-shaped section-lg">
          <div class="container pt-lg-md">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card bg-secondary shadow border-0">
                  <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center mb-3">
                      <small>Sign Up</small>
                    </div>
                    {{-- <div class="btn-wrapper text-center">
                      <a href="{{ url('auth/google') }}" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                          <img src="assets/img/icons/common/google.svg">
                        </span>
                        <span class="btn-inner--text">Google</span>
                      </a>
                    </div> --}}
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                      <small>Or sign in with credentials</small>
                    </div>
                    <form method="POST" action="{{ route('createAdmin') }}">
                       @csrf
                      <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-person"></i></span>
                          </div>
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-email-83"></i></span>
                          </div>
                            <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
    
                                    @error('password')
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
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                                </div>
                        </div>
                      </div>
    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection