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

                            </div>
                            <h3>{{ __('Login') }}</h3>
                            <div class="social-btn-login">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li>
                                </ul>
                                <!--<button class="btn ls-dark-btn rounded"><i class="fa fa-facebook"></i></button>
                                <button class="btn ls-dark-btn rounded"><i class="fa fa-twitter"></i></button>
                                <button class="btn ls-dark-btn rounded"><i class="fa fa-linkedin"></i></button>
                                <button class="btn ls-dark-btn rounded"><i class="fa fa-google-plus"></i></button>
                                <button class="btn ls-dark-btn rounded"><i class="fa fa-github"></i></button>
                                <button class="btn ls-dark-btn rounded"><i class="fa fa-bitbucket"></i></button>-->
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
                        </div>

                        <div class="login-form">
                            <form id="form-login" action="{{ route('login') }}" class="form-horizontal ls_form" method="POST">
                                @csrf
                                <div class="input-group ls-group-input">
                                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                                <div class="input-group ls-group-input">
                                    <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                </div>

                                <div class="remember-me">
                                    <input name="remember" {{ old('remember') ? 'checked' : '' }} class="switchCheckBox" type="checkbox" checked data-size="mini" data-on-text="<i class='fa fa-check'><i>" data-off-text="<i class='fa fa-times'><i>">
                                    <span>{{ __('Remember Me') }}</span>
                                </div>
                                <div class="input-group ls-group-input login-btn-box">
                                    <button class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down" type="submit">
                                        <span class="ladda-label"><i class="fa fa-key"></i></span>
                                    </button>
                                    <a class="forgot-password" href="javascript:void(0)">Forgot password</a>
                                </div>
                            </form>
                        </div>
                        <div class="forgot-pass-box">
                            <form action="#" class="form-horizontal ls_form">
                                <div class="input-group ls-group-input">
                                    <input class="form-control" type="text" placeholder="someone@mail.com">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                </div>
                                <div class="input-group ls-group-input login-btn-box">
                                    <button class="btn ls-dark-btn col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-rocket"></i> Send
                                    </button>

                                    <a class="login-view" href="javascript:void(0)">Login</a> & <a class="" href="/register">Registration</a>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <p class="copy-right big-screen hidden-xs hidden-sm">
            <span>&#169;</span> Fickle <span class="footer-year">2014</span>
        </p>
    </section>
@endsection
