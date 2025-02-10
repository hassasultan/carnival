<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="{{ asset('shopAssets/css/carnival-bootstrap.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.structure.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=1">
    <link href="{{ asset('shopAssets/css/carnival-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/shopstyle.css?ver=7') }}" rel="stylesheet" type="text/css" />
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/isotope-layout@3/dist/isotope.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <link rel="shortcut icon" href="https://carnivalguide.co/travel/favicon.ico"/> 
    <link href="https://carnivalguide.co/travel/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://carnivalguide.co/travel/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://carnivalguide.co/travel/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
	<link href="https://carnivalguide.co/travel/css/style.css" rel="stylesheet" type="text/css"/>   --}}


    <style>
        .owl-prev,
        .owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: block;
            width: 30px;
            height: 30px;
            background: #ccc;
            /* Adjust the background color */
            text-align: center;
            line-height: 30px;
            font-size: 20px;
            cursor: pointer;
            z-index: 1000;
        }

        .owl-prev {
            left: -40px;
            /* Adjust position */
        }

        .owl-next {
            right: -40px;
            /* Adjust position */
        }
    </style>

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
    @yield('front-script')

</body>

</html>
