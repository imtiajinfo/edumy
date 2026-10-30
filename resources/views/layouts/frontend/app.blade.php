<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
<!-- css file -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/menu.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css')}}">
<!-- Favicon -->
<link href="{{ asset('assets/frontend/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('assets/frontend/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
    @stack('css')
</head>
<body>

@include('layouts.frontend.partial.header')

    @yield('content')

@include('layouts.frontend.partial.footer')

<!-- Wrapper End -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/isotop.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/timepicker.js') }}"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('assets/frontend/js/script.js') }}"></script>

@stack('script')
</body>
</html>
