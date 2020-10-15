@extends('layouts.ap')

@section('content')

 <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                             @csrf
                                        <div class="form-head">
                                            <a href="{{url('/')}}" class="logo"><img src="{{URL::asset('assets/images/logo.jpeg')}}" class="img-fluid" alt="logo" style="height: 80px;width: 80px"></a>
                                        </div>                                        
                                        <h2 class="text-primary my-4">Log in !</h2>
                                        <div class="form-group">
                                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                    <a href="{{route('register') }}">Sign up</a>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="{{route('password.request') }}" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>                          
                                    
                                    </form>
                                    <div class="login-or">
                                        <h6 class="text-muted"><br></h6>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
@endsection
