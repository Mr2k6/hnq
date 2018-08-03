<?php
/**
 * Created by PhpStorm.
 * User: HuyNQ
 * Date: 5/11/2018
 * Time: 9:58 AM
 */
?>
        <!DOCTYPE html>
<html lang="en">
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
    <title>Trang quản lý CMS - Login</title>
    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="{{ asset( "hnq/assets/css/plugins/pace.css") }}">
    <script src="{{ asset( "hnq/assets/js/pace.min.js") }}"></script>
    <!--Page loading plugin End   -->
    <!-- Plugin Css Put Here -->
    <link href="{{ asset( "hnq/assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset( "hnq/assets/css/plugins/bootstrap-switch.min.css") }}">
    <link rel="stylesheet" href="{{ asset( "hnq/assets/css/plugins/ladda-themeless.min.css") }}">
    <link href="{{ asset( "hnq/assets/css/plugins/humane_themes/bigbox.css") }}" rel="stylesheet">
    <link href="{{ asset( "hnq/assets/css/plugins/humane_themes/libnotify.css") }}" rel="stylesheet">
    <link href="{{ asset( "hnq/assets/css/plugins/humane_themes/jackedup.css") }}" rel="stylesheet">
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
<body class="login-screen">
@yield('content')
<script src="{{ asset( "hnq/assets/js/lib/jquery-2.1.1.min.js") }}"></script>
<script src="{{ asset( "hnq/assets/js/lib/jquery.easing.js") }}"></script>
<script src="{{ asset( "hnq/assets/js/bootstrap-switch.min.js") }}"></script>
<!--Script for notification start-->
<script src="{{ asset( "hnq/assets/js/loader/spin.js") }}"></script>
<script src="{{ asset( "hnq/assets/js/loader/ladda.js") }}"></script>
<script src="{{ asset( "hnq/assets/js/humane.min.js") }}"></script>
<!--Script for notification end-->

<script src="{{ asset( "hnq/assets/js/pages/login.js") }}"></script>
</body>
</html>