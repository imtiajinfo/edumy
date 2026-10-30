<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Sign Up - {{ config('app.name', 'Laravel') }}</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="{{ asset('assets/backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/iconic/css/material-design-iconic-font.min.css') }}">
    <!-- bootstrap -->
    <link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/pages/extra_pages.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />


<div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-logo">
                        <img alt="" src="{{ asset('assets/backend/img/logo-2.png') }}">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Registration
                    </span>
                    <div class="row">
                        <div class="col-lg-12 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter username">
                                <input class="input100 {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter email">
                                <input id="username" class="input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                                @if ($errors->has('username'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter Email">
                                <input id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password again">
                                <input id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder=" password">
                                @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password again">
                                <input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="text-center p-t-30">
                        <a class="txt1" href="#">
                            You already have a membership?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/extra-pages/pages.js') }}"></script>
    <!-- end js include path -->

