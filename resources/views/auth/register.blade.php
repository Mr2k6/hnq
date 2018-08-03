@extends('auth.master')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">
                        <div class="login-user-icon">
                            <i class="glyphicon glyphicon-user"></i>
                            <!--<img src="images/login.png" alt="Logo"/>-->
                        </div>
                        <h3>{{ __('Register') }}</h3>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="login-form">

                        <form id="form-register" action="{{ route('register') }}" class="form-horizontal ls_form" method="post">
                            @csrf
                            <div class="input-group ls-group-input">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="{{ __('Name') }}"  id="name" name="name" value="{{ old('name') }}" required autofocus>
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>

                            <div class="input-group ls-group-input">
                                <input  placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>


                            <div class="input-group ls-group-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                            <div class="input-group ls-group-input">
                                <input id="passwordn" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="{{ __('Password') }}" required>
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down" type="submit">
                                    <span class="ladda-label">{{ __('Register') }}</span>
                                </button>

                                <a class="" href="{{ route('login') }}">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="copy-right big-screen hidden-xs hidden-sm">
        <span>&#169;</span> HuyNQ <span class="footer-year">2014</span>
    </p>
</section>
@endsection
