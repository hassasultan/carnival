<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carnival Guide - @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line to include the CSRF token -->

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('shopAssets/css/style.css?v' . rand(1, 50)) }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    @if (Route::is('front.track.order') || Route::is('front.blog.list') || Route::is('front.blog.detail'))
        <link rel="stylesheet" type="text/css" href="{{ asset('shopAssets/css/wocommerce.css') }}" />
    @endif

    <style>
        /* Skeleton loading animation */
        .skeleton-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .skeleton-table {
            width: 100%;
            border-collapse: collapse;
        }

        .skeleton-table th,
        .skeleton-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .skeleton-item {
            background-color: #f0f0f0;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }

        .skeleton-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .skeleton-content {
            padding: 20px;
        }

        .skeleton-line {
            height: 12px;
            margin-bottom: 10px;
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>

    @yield('head')

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @media (min-width: 1200px) {

            .slick-slider:not(:hover) .slick-arrow,
            .woocommerce-product-gallery:not(:hover) .flex-direction-nav a {
                transform: scale(0);
            }
        }

        @media (min-width: 1200px) {

            .flex-direction-nav a,
            .slick-slider .slick-arrow {
                --arrow-width: 30px;
                --arrow-fz: 30px;
            }
        }

        .flex-direction-nav a,
        .slick-slider .slick-arrow {
            --arrow-width: 20px;
            --arrow-height: 30px;
            --arrow-posi: calc(50% - var(--arrow-height)/2);
            --arrow-posi-h: 0;
            --arrow-fz: 20px;
            align-items: center;
            color: #999;
            cursor: pointer;
            display: flex;
            font-size: 0;
            font-weight: 400;
            height: var(--arrow-height);
            justify-content: center;
            letter-spacing: 0;
            line-height: 0;
            padding: 0;
            position: absolute;
            transition: .2s;
            width: var(--arrow-width);
            z-index: 5;
        }

        .slick-next,
        .slick-next:focus,
        .slick-next:hover,
        .slick-prev,
        .slick-prev:focus,
        .slick-prev:hover {
            background: #0000;
            color: #0000;
            outline: none;
        }

        .slick-next,
        .slick-prev {
            border: none;
            cursor: pointer;
            display: block;
            font-size: 0;
            height: 20px;
            line-height: 0;
            padding: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
        }

        .slick-next,
        .slick-prev {
            margin-top: -1% !important;
        }

        .slick-prev {
            left: 0 !important;
            z-index: 9999;
        }

        .slick-arrow {
            background-color: #a9a9a9 !important;
            height: 50px !important;
            width: 30px !important;
        }
    </style>
</head>

<body class="cms-index-index index-opt-1 @yield('body_classes')">

    @php
        if (Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', Auth::id())->get();
            $total = 0;
            foreach ($cartItems as $cartItem) {
                if ($cartItem->type === 'product') {
                    $total += $cartItem->product->new_price * $cartItem->quantity;
                }
            }
        }
    @endphp

    <div class="wrapper">

        <!-- alert banner top -->
        <div role="alert" class="qc-top-site qc-top-site1 alert  fade in"
            style="background-image: url({{ asset('shopAssets/images/media/index1/bg-qc-top.jpg') }}) }});">
            <div class="container">
                <button class="close" type="button"><span aria-hidden="true">×</span></button>
                <div class="description">
                    <span class="title">Special Offer!</span>
                    <span class="subtitle">Rewarding all customers with a 15% discount. </span>
                    <span class="des">This offer is available from 9th December to 19th December 2015.</span>

                </div>
            </div>
        </div>
        <!-- alert banner top -->

        <header class="site-header header-opt-4 cate-show">

            <div class="header-top">
                <div class="container">

                    <ul class="nav-left">
                        <li><span>Welcome to CarnivalGuide</span></li>
                        <li><span>Call Us: +09 957774334</span></li>
                        <li><a href=""><img src="{{ asset('shopAssets/images/media/index3/log-face.png') }}"
                                    alt="log-face"></a></li>
                    </ul>

                    <ul class="nav-right">
                        @if (Auth::check())
                            <li class="dropdown setting">
                                <a data-toggle="dropdown" role="button" href="#"
                                    class="dropdown-toggle "><span>My
                                        Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu  " style="right: 0px; left: auto;">
                                    <div class="switcher  switcher-language">
                                        <strong class="title">Select language</strong>
                                        <ul class="switcher-options ">
                                            <li class="switcher-option">
                                                <a href="#">
                                                    <img class="switcher-flag" alt="flag"
                                                        src="{{ asset('shopAssets/images/flags/flag_french.png') }}">
                                                </a>
                                            </li>
                                            <li class="switcher-option">
                                                <a href="#">
                                                    <img class="switcher-flag" alt="flag"
                                                        src="{{ asset('shopAssets/images/flags/flag_germany.png') }}">
                                                </a>
                                            </li>
                                            <li class="switcher-option">
                                                <a href="#">
                                                    <img class="switcher-flag" alt="flag"
                                                        src="{{ asset('shopAssets/images/flags/flag_english.png') }}">
                                                </a>
                                            </li>
                                            <li class="switcher-option switcher-active">
                                                <a href="#">
                                                    <img class="switcher-flag" alt="flag"
                                                        src="{{ asset('shopAssets/images/flags/flag_spain.png') }}">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="switcher  switcher-currency">
                                        <strong class="title">SELECT CURRENCIES</strong>
                                        <ul class="switcher-options ">
                                            <li class="switcher-option">
                                                <a href="#">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="switcher-option switcher-active">
                                                <a href="#">
                                                    <i class="fa fa-eur" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="switcher-option">
                                                <a href="#">
                                                    <i class="fa fa-gbp" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <ul class="account">
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="">My Account</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li>
                                            <a class="" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('customer.login') }}">Login/Register</a>
                            </li>
                        @endif
                        <li><a href="">Buyer Protection</a></li>
                        <li><a href="">Services </a></li>
                        <li><a href="">Support</a></li>
                    </ul>

                </div>
            </div>

            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="clearfix">

                        <div class="nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="/"><img width="120"
                                        src="{{ asset('shopAssets/images/logo.png') }}" alt="logo"></a>
                            </strong><!-- logo -->
                        </div>

                        <div class="nav-right">

                            @if (Auth::check())
                                <!-- block mini cart -->
                                <div class="block-minicart dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <span class="cart-icon"></span>
                                        <span class="counter qty">
                                            <span class="cart-text">My Cart</span>
                                            <span class="counter-number">{{ $cartItems->count() }}</span>
                                            <span class="counter-label">{{ $cartItems->count() }}
                                                <span>Items</span></span>
                                            <span class="counter-price">${{ $total }}</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <form id="checkout_form">
                                            <div class="minicart-content-wrapper">
                                                <div class="subtitle">
                                                    You have <span
                                                        class="total-cart-items">{{ $cartItems->count() }}</span>
                                                    item(s) in your cart
                                                </div>
                                                <div class="minicart-items-wrapper">
                                                    <ol class="minicart-items" id="minicart-items">
                                                        @foreach ($cartItems as $cartItem)
                                                            @php
                                                                if ($cartItem->type === 'product') {
                                                                    $image = $cartItem->product->image
                                                                        ? asset(
                                                                            'productImage/' . $cartItem->product->image,
                                                                        )
                                                                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                                                } elseif ($cartItem->type === 'event') {
                                                                    $image = $cartItem->event->banner
                                                                        ? asset(
                                                                            'eventBanner/' . $cartItem->event->banner,
                                                                        )
                                                                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                                                } elseif ($cartItem->type === 'music') {
                                                                    $image = $cartItem->event->banner
                                                                        ? asset(
                                                                            'cover_image/' .
                                                                                $cartItem->music->cover_image,
                                                                        )
                                                                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                                                }

                                                            @endphp
                                                            <li class="product-item cart-row-{{ $cartItem->id }}">
                                                                <a class="product-item-photo" href="#"
                                                                    title="{{ $cartItem->type === 'product' ? $cartItem->product->title : ($cartItem->type === 'event' ? $cartItem->event->name : '') }}">
                                                                    <img class="product-image-photo"
                                                                        src="{{ $image }}"
                                                                        alt="{{ $cartItem->type === 'product' ? $cartItem->product->title : ($cartItem->type === 'event' ? $cartItem->event->name : '') }}">
                                                                </a>
                                                                <div class="product-item-details">
                                                                    <strong class="product-item-name">
                                                                        @if ($cartItem->type === 'product')
                                                                            <a
                                                                                href="#">{{ $cartItem->product->title }}</a>
                                                                        @elseif($cartItem->type === 'event')
                                                                            <a
                                                                                href="#">{{ $cartItem->event->name }}</a>
                                                                        @endif
                                                                    </strong>
                                                                    <div class="product-item-price">
                                                                        @if ($cartItem->type === 'product')
                                                                            <span
                                                                                class="price">{{ $cartItem->product->new_price }}</span>
                                                                        @elseif($cartItem->type === 'event')
                                                                            <span class="price">0</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="product-item-qty">
                                                                        <span class="label">Qty: </span><span
                                                                            class="number">{{ $cartItem->quantity }}</span>
                                                                    </div>
                                                                    <div class="product-item-actions">
                                                                        <a class="action delete delete-cart"
                                                                            data-id="{{ $cartItem->id }}"
                                                                            href="javascript:void(0);"
                                                                            title="Remove item">
                                                                            <span>Remove</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                                <div class="subtotal">
                                                    <span class="label">Total</span>
                                                    <span class="price" id="cart-price">${{ $total }}</span>
                                                </div>
                                                <div class="actions">
                                                    <a href="{{ route('check.out') }}" class="btn btn-checkout"
                                                        title="Check Out">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif

                        </div>

                        <div class="nav-mind">

                            <!-- menu -->
                            <div class="block-nav-menu">
                                <div class="actions-close-nav"><span data-action="close-nav"
                                        class="close-nav"><span>close</span></span></div>
                                <ul class="ui-menu">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="/">HOME</a>
                                    </li>
                                    <li class="{{ Request::routeIs('front.vendors') ? 'active' : '' }}"><a
                                            href="{{ route('front.vendors') }}"> MAS CAMPS </a></li>
                                    <li class="{{ Request::routeIs('front.cgGear.listing') ? 'active' : '' }}"><a
                                            href="{{ route('front.cgGear.listing') }}"> CG GEAR </a></li>
                                    <li class="{{ Request::routeIs('front.marketplace') ? 'active' : '' }}"><a
                                            href="{{ route('front.marketplace') }}"> MARKET PLACE </a></li>
                                    <li class="{{ Request::routeIs('model.listing') ? 'active' : '' }}"><a
                                            href="{{ route('model.listing') }}"> MODELS </a></li>
                                    <li class="{{ Request::routeIs('artist.listing') ? 'active' : '' }}"><a
                                            href="{{ route('artist.listing') }}"> ARTISTES </a></li>
                                    <li class="parent parent-submenu">
                                        <a> Carnivals </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu drop-menu">
                                            <ul>
                                                <li><a href="{{ route('front.vendors') }}">Mascamps</a></li>
                                                <li><a href="{{ route('front.carnival_listing') }}">Carnival Commitees</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    {{-- <li class="{{ Request::routeIs('front.carnival_listing') ? 'active' : '' }}"><a
                                            href="{{ route('front.carnival_listing') }}"> Carnival Listing </a></li> --}}
                                    <li class="{{ Request::routeIs('front.shop_listing') ? 'active' : '' }}"><a
                                            href="{{ route('front.shop_listing') }}"> EVENTS </a></li>
                                    @if (Auth::check())
                                        <li class="parent parent-submenu">
                                            <a> My Account </a>
                                            <span class="toggle-submenu"></span>
                                            <div class="submenu drop-menu">
                                                <ul>
                                                    <li><a href="">My Account</a></li>
                                                    <li><a href="">Wishlist</a></li>
                                                    <li><a href="">Checkout</a></li>
                                                    <li><a href="">Compare</a></li>
                                                    @if (Auth::check())
                                                        <li>
                                                            <a class="" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{ route('customer.login') }}">Login/Register</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                    <li><a href="#">CONTACT US</a></li>
                                </ul>

                            </div><!-- menu -->


                        </div>

                    </div>

                </div>
            </div><!-- header-content -->

            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 42px;">
                {{-- <div class="container"> --}}
                <div class=" header-nav mid-header">
                    <div class="container">
                        <div class="box-header-nav">

                            <span data-action="toggle-nav-cat"
                                class="nav-toggle-menu nav-toggle-cat"><span>Categories</span><i aria-hidden="true"
                                    class="fa fa-bars"></i></span>

                            <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i
                                    aria-hidden="true" class="fa fa-bars"></i></span>

                            <!-- categori -->
                            <div class="block-nav-categori">

                                <div class="block-title">
                                    <span>Categories</span>
                                </div>

                                <div class="block-content">
                                    <div class="clearfix"><span data-action="close-cat"
                                            class="close-cate"><span>Categories</span></span></div>
                                    <ul class="ui-categori">
                                        <li class="parent">
                                            <a href="">
                                                <span class="icon"><img
                                                        src="{{ asset('shopAssets/images/icon/index3/nav-cat1.png') }}"
                                                        alt="nav-cat"></span>
                                                Electronics
                                            </a>
                                            <span class="toggle-submenu"></span>
                                            <div class="submenu"
                                                style="background-image: url({{ asset('shopAssets/images/media/index1/bgmenu.jpg') }}); left: 270px; width: 670px;">
                                                <ul class="categori-list clearfix">
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">Smartphone</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">TElevision</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a href="">Camera</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="categori-list clearfix">
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">Smartphone</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">TElevision</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a href="">Camera</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="parent">
                                            <a href="">
                                                <span class="icon"><img
                                                        src="{{ asset('shopAssets/images/icon/index3/nav-cat2.png') }}"
                                                        alt="nav-cat"></span>
                                                Sports &amp; Outdoors
                                            </a>
                                            <span class="toggle-submenu"></span>
                                            <div class="submenu" style="left: 270px; width: 670px;">
                                                <div class="categori-img">
                                                    <a href=""><img
                                                            src="{{ asset('shopAssets/images/media/index1/categori-img1.jpg') }})}}"
                                                            alt="categori-img"></a>
                                                </div>
                                                <ul class="categori-list">
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">Smartphone</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a
                                                                href="">TElevision</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a href="">Camera</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-sm-3">
                                                        <strong class="title"><a href="">washing
                                                                machine</a></strong>
                                                        <ul>
                                                            <li><a href="">Skirts </a></li>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">Jumpusuits</a></li>
                                                            <li><a href="">Scarvest</a></li>
                                                            <li><a href="">T-Shirts</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="icon"><img
                                                        src="{{ asset('shopAssets/images/icon/index3/nav-cat4.png') }}"
                                                        alt="nav-cat"></span>
                                                Health &amp; Beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="icon"><img
                                                        src="{{ asset('shopAssets/images/icon/index3/nav-cat4.png') }}"
                                                        alt="nav-cat"></span>
                                                Health &amp; Beauty
                                            </a>
                                        </li>


                                    </ul>

                                    <div class="view-all-categori">
                                        <a class="open-cate btn-view-all">All Categories</a>
                                    </div>
                                </div>

                            </div><!-- categori -->

                            <!-- search -->
                            @if (Route::is('details.aboutUs') ||
                                    Route::is('front.vendor.detail') ||
                                    Route::is('front.subVendor.detail') ||
                                    Route::is('model.detail'))
                                <ul class="category-links">
                                    @if ($user->packageName != 'Artistes')
                                        <li><a href="{{ route('details.aboutUs', $user->slug) }}">About us</a>
                                        </li>
                                    @endif
                                    <li>
                                        @if ($user->packageName == 'Models')
                                            <a href="{{ route('model.booking.create', $user->slug) }}">Send
                                                a message</a>
                                        @else
                                            <a
                                                href="mailto:{{ $user->vendor?->email ?? ($user->subVendor?->email ?? ($user->email ?? 'Email not available')) }}?subject=Inquiry&body=Hello {{ $user->name }},">Send
                                                a message</a>
                                        @endif
                                    </li>
                                    <li><a href="{{ route('myEevent.listing', $user->slug) }}">Events</a></li>
                                    <li><a href="{{ route('front.myGallery', $user->slug) }}">Gallery</a></li>
                                </ul>
                            @else
                                <div class="block-search">
                                    <div class="block-title">
                                        <span>Search</span>
                                    </div>
                                    <div class="block-content">
                                        <div class="categori-search  ">
                                            <select data-placeholder="All Categories" class="categori-search-option"
                                                style="display: none;">
                                                <option>All Categories</option>
                                                <option>Fashion</option>
                                                <option>Tops Blouses</option>
                                                <option>Clothing</option>
                                                <option>Furniture</option>
                                                <option>Bathtime Goods</option>
                                                <option>Shower Curtains</option>
                                            </select>
                                        </div>
                                        <div class="form-search">
                                            <form>
                                                <div class="box-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type Your Keyword...">
                                                    <button class="btn btn-search"
                                                        type="button"><span>search</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- menu -->
                            <div class="block-nav-menu">
                                <div class="actions-close-nav"><span data-action="close-nav"
                                        class="close-nav"><span>close</span></span></div>
                                <ul class="ui-menu">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="{{ Request::routeIs('front.vendors') ? 'active' : '' }}"><a
                                            href="{{ url('/mascamps') }}"> MAS CAMPS </a></li>
                                    {{-- <li><a href="#"> CG GEAR </a></li>
                                        <li><a href="#">MODELS</a></li>
                                        <li><a href="#">ARTISTES</a></li>
                                        <li><a href="#">EVENTS</a></li> --}}
                                    @if (Auth::check())
                                        <li class="parent parent-submenu">
                                            <a> My Account </a>
                                            <span class="toggle-submenu"></span>
                                            <div class="submenu drop-menu">
                                                <ul>
                                                    <li><a href="">My Account</a></li>
                                                    <li><a href="">Wishlist</a></li>
                                                    <li><a href="">Checkout</a></li>
                                                    <li><a href="">Compare</a></li>
                                                    <li>
                                                        <a class="" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                    {{-- @else
                                            <li>
                                                <a href="{{ route('customer.login') }}">Login/Register</a>
                                            </li> --}}
                                    <li><a href="#">CONTACT US</a></li>
                                </ul>

                            </div><!-- menu -->

                            <!--language  -->
                            <div class="dropdown switcher  switcher-language">
                                <a data-toggle="dropdown" role="button" href="#"
                                    class="dropdown-toggle switcher-trigger" aria-expanded="false">
                                    <img class="switcher-flag" alt="flag"
                                        src="{{ asset('shopAssets/images/flags/flag_english.png') }}">
                                    <span>English</span>
                                    <i aria-hidden="true" class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu switcher-options " style="right: 0px; left: auto;">
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag"
                                                src="{{ asset('shopAssets/images/flags/flag_english.png') }}">English
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag"
                                                src="{{ asset('shopAssets/images/flags/flag_french.png') }}">French
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag"
                                                src="{{ asset('shopAssets/images/flags/flag_germany.png') }}">Germany
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!--currency  -->
                            <div class="dropdown switcher  switcher-currency">
                                <a data-toggle="dropdown" role="button" href="#"
                                    class="dropdown-toggle switcher-trigger"><span>USD</span> <i aria-hidden="true"
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu switcher-options " style="right: 0px; left: auto;">
                                    <li class="switcher-option">
                                        <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>USD
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <i class="fa fa-eur" aria-hidden="true"></i>eur
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <i class="fa fa-gbp" aria-hidden="true"></i>gbp
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>

        </header>
