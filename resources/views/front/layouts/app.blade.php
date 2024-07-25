<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="{{ asset('shopAssets/css/carnival-bootstrap.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.structure.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=1">
    <link href="{{ asset('shopAssets/css/carnival-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/shopstyle.css?ver=7') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Style CSS -->

    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/fa7b99de89.css" crossorigin="anonymous"> -->
    <title>Let's Travel</title>
</head>

<body class="no-overflow" data-color="theme-1">

    @include('front.layouts.includes.header')
    <div class="content">
    @yield('front-content')
    </div>
    @include('front.layouts.includes.footer')
    @include('front.layouts.includes.scripts')

</body>

</html>