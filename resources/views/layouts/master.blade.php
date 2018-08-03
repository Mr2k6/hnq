<?php
/**
 * Created by PhpStorm.
 * User: HuyNQ
 * Date: 4/13/2018
 * Time: 3:45 PM
 */
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title> @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />
    <meta itemprop="name" content="" />
    <meta itemprop="description" content="" />
    <meta property="fb:app_id" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
    <meta name="theme-color" content="#0094b9" />
    <link rel='shortcut icon' href='favicon.ico' />
    <meta name="robots" content="index, follow">
    <style>.async-hide { opacity: 0 !important }</style>
    <link type="text/css" rel="stylesheet" href="{{ asset( 'assets/css/plugins.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset( 'assets/css/addons.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset( 'assets/css/main.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="{{ asset( 'assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset( 'assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset( 'assets/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset( 'assets/js/fix.js') }}"></script>
    <script src="{{ asset( 'assets/js/mix.js') }}"></script>
</head>
<body class="hnq homepage vi-vn">
@include("layouts.elements.mobilemenu")
<div id="wrapper" class="fullpage">
    @include("layouts.elements.header")
    @include("layouts.elements.mobileheader")
    @include("layouts.elements.slide")
    @yield('content')
    @include("layouts.elements.mobilefooter")
    @include("layouts.elements.footer")
    <div class="up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
</div>
</body>
</html>