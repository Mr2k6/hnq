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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset( "hnq/assets/images/ios/fickle-logo-72.png") }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset( "hnq/assets/images/ios/fickle-logo-72.png") }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset( "hnq/assets/images/ios/fickle-logo-114.png") }}" />
    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="{{ asset( "hnq/assets/images/ico/fab.ico") }}">
    <title> @yield('title')</title>
    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="{{ asset( "hnq/assets/css/plugins/pace.css") }}">
    <script src="{{ asset( "hnq/assets/js/pace.min.js") }}"></script>
    <!--Page loading plugin End   -->
    <!-- Plugin Css Put Here -->
    <link href="{{ asset( "hnq/assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="{{ asset( "hnq/assets/css/style.css") }}" rel="stylesheet">
    <!-- Custom styles Style End-->
    <!-- Responsive Style For-->
    <link href="{{ asset( "hnq/assets/css/responsive.css") }}" rel="stylesheet">
    <!-- Responsive Style For-->
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset( "hnq/assets/js/html5shiv.js") }}"></script>
    <script src="{{ asset( "hnq/assets/js/respond.min.js") }}"></script>
    <![endif]-->
</head>
<body>
    @include('admin.elements.navigation')
    <section id="main-container">
        @include('admin.elements.leftnavigation')
        @yield('content')
        @include('admin.elements.rightwrapper')
        @include('admin.elements.changecolor')
    </section>
    <!--Layout Script start -->
    <script type="text/javascript" src="{{ asset( "hnq/assets/js/color.js") }}"></script>
    <script type="text/javascript" src="{{ asset( "hnq/assets/js/lib/jquery-1.11.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset( "hnq/assets/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset( "hnq/assets/js/multipleAccordion.js") }}"></script>
    <!--easing Library Script Start -->
    <script src="{{ asset( "hnq/assets/js/lib/jquery.easing.js") }}"></script>
    <!--easing Library Script End -->
    <!--Nano Scroll Script Start -->
    <script src="{{ asset( "hnq/assets/js/jquery.nanoscroller.min.js") }}"></script>
    <!--Nano Scroll Script End -->
    <!--switchery Script Start -->
    <script src="{{ asset( "hnq/assets/js/switchery.min.js") }}"></script>
    <!--switchery Script End -->
    <!--bootstrap switch Button Script Start-->
    <script src="{{ asset( "hnq/assets/js/bootstrap-switch.js") }}"></script>
    <!--bootstrap switch Button Script End-->
    <!--easypie Library Script Start -->
    <script src="{{ asset( "hnq/assets/js/jquery.easypiechart.min.js") }}"></script>
    <!--easypie Library Script Start -->
    <!--bootstrap-progressbar Library script Start-->
    <script src="{{ asset( "hnq/assets/js/bootstrap-progressbar.min.js") }}"></script>
    <!--bootstrap-progressbar Library script End-->
    <script type="text/javascript" src="{{ asset( "hnq/assets/js/pages/layout.js") }}"></script>
    <!--Layout Script End -->
</body>
</html>