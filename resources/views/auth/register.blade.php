@extends('layouts.ap')

@section('content')
 <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <button type="button" class="btn btn-default" style="    float: right;margin-top: 10px;background: #fff;border: none;"><a href="{{url('/')}}" style="color: #000">Sign In</a></button>
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">

                <div class="card-body">
                    <?php $cat_id = rand(1000,1000000000); ?>
                     <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                             @csrf

                                             <input type="hidden" name="user_id" id="user_id" value="<?php echo $cat_id; ?>">
                                        <!-- <div class="form-head">
                                             <a href="{{url('/')}}" class="logo"><img src="{{URL::asset('assets/images/logo.jpeg')}}" class="img-fluid" alt="logo" style="height: 80px;width: 80px"></a>
                                        </div>   -->                                      
                                        <h2 class="text-primary my-4">Sign Up !</h2>
                                         <div class="form-group">
                                             <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="*name" required autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="*email" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                             <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="*phone" required autofocus>
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                             <input id="dob" type="text" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" placeholder="*dob" required autofocus>
                                                @if ($errors->has('dob'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('dob') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                             <input id="adhar_number" type="text" class="form-control{{ $errors->has('adhar_number') ? ' is-invalid' : '' }}" name="adhar_number" value="{{ old('adhar_number') }}" placeholder="*aadhar number" required autofocus>
                                                @if ($errors->has('adhar_number'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('adhar_number') }}</strong>
                                                    </span>
                                                @endif
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="*password" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                         <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="*confirmation" required>

                                        </div>
                                        <div class="form-group">
                                             <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="*address" required autofocus>
                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block font-18">Sign Up</button>                          
                                    
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
