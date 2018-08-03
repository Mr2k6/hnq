<?php
/**
 * Created by PhpStorm.
 * User: HuyNQ
 * Date: 5/29/2018
 * Time: 7:42 PM
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


    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="assets/images/ico/fab.ico">

    <title>404 Error</title>

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
<body class="single-page">
<div id="outer-wrapper">
    <div id="inner-wrapper">
        <div class="not-found">
            <h1>4 <i class="fa fa-meh-o"></i> 4</h1>
            @if ($error)
                   <p>{{ $error }}</p>
            @endif
            <a href="/"><i class="fa fa-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
</body>
</html>
