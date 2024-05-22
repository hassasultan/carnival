<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carnival Guide - @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line to include the CSRF token -->

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('shopAssets/css/style.css?v'.rand(1,50)) }}">
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

        @media (min-width: 991px) {
            .header-opt-1 .header-content .nav-right {
                display: flex;flex-wrap: wrap;align-content: center;justify-content: center;min-height: 10ex;
            }
        }


    </style>
    @yield('head')


    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="cms-index-index index-opt-1 @yield('body_classes')">

    @php
        if (Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', Auth::id())->get();
            $total = 0;
            foreach ($cartItems as $cartItem) {
                $total += $cartItem->product->new_price * $cartItem->quantity;
            }
        }
    @endphp

    <div class="wrapper">

        <!-- alert banner top -->
        <!-- <div role="alert" class="qc-top-site qc-top-site1 alert  fade in"
            style="background-image: url({{ asset('shopAssets/images/media/index1/bg-qc-top.jpg') }});">
            <div class="container">
                <button class="close" type="button"><span aria-hidden="true">×</span></button>
                <div class="description">
                    <span class="title">Special Offer!</span>
                    <span class="subtitle">Rewarding all customers with a 15% discount. </span>
                    <span class="des">This offer is available from 9th December to 19th December 2015.</span>

                </div>
            </div>
        </div> -->
        <!-- alert banner top -->

        <!-- HEADER -->
        <header class="site-header header-opt-1 cate-show">

            <!-- header-top -->
            <div class="header-top">
                <div class="container">

                    <!-- nav-left -->
                    {{-- <ul class="nav-left">
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i>00-62-658-658</span></li>
                        <li><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
                        <li class="dropdown switcher  switcher-currency">
                            <a data-toggle="dropdown" role="button" href="#"
                                class="dropdown-toggle switcher-trigger"><span>USD</span> <i aria-hidden="true"
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-usd" aria-hidden="true"></i> USD
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown switcher  switcher-language">
                            <a data-toggle="dropdown" role="button" href="#"
                                class="dropdown-toggle switcher-trigger" aria-expanded="false">
                                <img class="switcher-flag" alt="flag"
                                    src="{{ asset('shopAssets/images/flags/flag_english.png') }}">
                                <span>English</span>
                                <i aria-hidden="true" class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag"
                                            src="{{ asset('shopAssets/images/flags/flag_english.png') }}">English
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                    <!-- nav-left -->

                    <!-- nav-right -->
                    {{-- <ul class=" nav-right">
                        <li class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My
                                    Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu  ">
                                <ul class="account">
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

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
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
                        <li><a href="">Services</a></li>
                        <li><a href="">Support </a></li>
                    </ul> --}}
                    <!-- nav-right -->

                </div>
            </div><!-- header-top -->

            <!-- header-content -->
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo" style="float: left">
                                <a href="/"><img style="width: 120px;" src="{{ asset('shopAssets/images/logo.png') }}" alt="logo"></a>
                            </strong>
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
                                            <span class="counter-label">{{ $cartItems->count() }} <span>Items</span></span>
                                            <span class="counter-price">${{ $total }}</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <form id="checkout_form">
                                            <div class="minicart-content-wrapper">
                                                <div class="subtitle">
                                                    You have <span class="total-cart-items">{{ $cartItems->count() }}</span> item(s) in your cart
                                                </div>
                                                <div class="minicart-items-wrapper">
                                                    <ol class="minicart-items" id="minicart-items">
                                                        @foreach ($cartItems as $cartItem)
                                                            @php
                                                                $image = $cartItem->product->image ? asset('productImage/' . $cartItem->product->image) : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                                            @endphp
                                                            <li class="product-item cart-row-{{ $cartItem->id }}">
                                                                <a class="product-item-photo" href="#" title="{{ $cartItem->product->title }}">
                                                                    <img class="product-image-photo" src="{{ $image }}" alt="{{ $cartItem->product->title }}">
                                                                </a>
                                                                <div class="product-item-details">
                                                                    <strong class="product-item-name">
                                                                        <a href="#">{{ $cartItem->product->title }}</a>
                                                                    </strong>
                                                                    <div class="product-item-price">
                                                                        <span class="price">{{ $cartItem->product->new_price }}</span>
                                                                    </div>
                                                                    <div class="product-item-qty">
                                                                        <span class="label">Qty: </span><span class="number">{{ $cartItem->quantity }}</span>
                                                                    </div>
                                                                    <div class="product-item-actions">
                                                                        <a class="action delete delete-cart" data-id="{{ $cartItem->id }}" href="javascript:void(0);" title="Remove item">
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
                                                    <a href="{{ route('check.out') }}" class="btn btn-checkout" title="Check Out">
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
                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    <div class="categori-search">
                                        <select data-placeholder="All Categories" class="categori-search-option">
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
                                                <input type="text" class="form-control" placeholder="I'm Searching for...">
                                                <button class="btn btn-search" type="button"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- header-content -->


            <!-- header-nav -->
            <div class="header-nav mid-header">
                <div class="container">

                    <div class="box-header-nav">

                        <!-- btn categori mobile -->
                        <span data-action="toggle-nav-cat"
                            class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

                        <!-- btn menu mobile -->
                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

                        <!--categori  -->
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
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat1.png') }}"
                                                    alt="nav-cat"></span>
                                            Electronics
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu"
                                            style="background-image: url({{ asset('shopAssets/images/media/index1/bgmenu.jpg') }});">
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="">Smartphone</a></strong>
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
                                                    <strong class="title"><a href="">Smartphone</a></strong>
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
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat2.png') }}"
                                                    alt="nav-cat"></span>
                                            Sports & Outdoors
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <div class="categori-img">
                                                <a href=""><img
                                                        src="{{ asset('shopAssets/images/media/index1/categori-img1.jpg') }}"
                                                        alt="categori-img"></a>
                                            </div>
                                            <ul class="categori-list">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="">Skirts </a></li>
                                                        <li><a href="">Jackets</a></li>
                                                        <li><a href="">Jumpusuits</a></li>
                                                        <li><a href="">Scarvest</a></li>
                                                        <li><a href="">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="">TElevision</a></strong>
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
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat3.png') }}"
                                                    alt="nav-cat"></span>
                                            Smartphone & Tablets
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <strong class="subtitle"><span>special products</span></strong>
                                            <div class="owl-carousel" data-nav="true" data-dots="false"
                                                data-margin="30" data-autoplayTimeout="300" data-autoplay="true"
                                                data-loop="true"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "600":{"items":1},
                                                "992":{"items":4}
                                                }'>

                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/product-menu1.jpg') }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Asus
                                                                    Ispiron 20</a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/product-menu2.jpg') }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">Electronics Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat4.png') }}"
                                                    alt="nav-cat"></span>
                                            Health & Beauty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat5.png') }}"
                                                    alt="nav-cat"></span>
                                            Bags, Shoes & Accessories
                                        </a>
                                    </li>

                                </ul>

                                <div class="view-all-categori">
                                    <a class="open-cate btn-view-all">All Categories</a>
                                </div>

                            </div>

                        </div><!--categori  -->

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav"
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
                                <li class="parent parent-submenu">
                                    <a > My Account  </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu drop-menu">
                                        <ul >
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

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
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
                                <li><a href="#">CONTACT US</a></li>
                            </ul>

                        </div><!-- menu -->

                        <!-- mini cart -->
                        @if (Auth::check())
                            <div class="block-minicart dropdown">

                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="cart-icon"></span>
                                </a>

                                <div class="dropdown-menu">
                                    <form>
                                        <div class="minicart-content-wrapper">
                                            <div class="subtitle">
                                                You have <span
                                                    class="total-cart-items">{{ $cartItems->count() }}</span> item(s)
                                                in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items" id="minicart-items2">
                                                    @foreach ($cartItems as $cartItem)
                                                        @php
                                                            $image = null;
                                                            if (
                                                                $cartItem->product->image != null &&
                                                                $cartItem->product->image != ''
                                                            ) {
                                                                $image =
                                                                    asset('productImage/') .
                                                                    '/' .
                                                                    $cartItem->product->image;
                                                            } else {
                                                                $image =
                                                                    'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                                            }
                                                        @endphp
                                                        <li class="product-item cart-row-{{ $cartItem->id }}">
                                                            <a class="product-item-photo" href="#"
                                                                title="{{ $cartItem->product->title }}">
                                                                <img class="product-image-photo"
                                                                    src="{{ $image }}"
                                                                    alt="{{ $cartItem->product->title }}">
                                                            </a>
                                                            <div class="product-item-details">
                                                                <strong class="product-item-name">
                                                                    <a
                                                                        href="#">{{ $cartItem->product->title }}</a>
                                                                </strong>
                                                                <div class="product-item-price">
                                                                    <span
                                                                        class="price">{{ $cartItem->product->new_price }}</span>
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
                                                <span class="price" id="cart-price2">${{ $total }}</span>
                                            </div>
                                            <div class="actions">
                                                <a href="{{ route('check.out') }}" class="btn btn-viewcart"
                                                    title="Check Out">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        @else
                            <div class="block-minicart dropdown">
                                <a href="{{ route('customer.login') }}" class="dropdown-toggle">
                                    <span class="cart-icon"></span>
                                </a>
                            </div>
                        @endif
                        <!-- block mini cart -->

                        <!-- search -->
                        <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <div class="block-content">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control"
                                                placeholder="i'm Searching for...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- search -->

                        <!--setting  -->
                        <div class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#"
                                class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true"
                                    class="fa fa-user"></i></a>
                            <div class="dropdown-menu  ">
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
                                    <li><a href="">Wishlist</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Checkout</a></li>
                                    <li><a href="">Compare</a></li>
                                    @if (Auth::check())
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
                                    @else
                                        <li>
                                            <a href="{{ route('customer.login') }}">Login/Register</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div><!--setting  -->

                    </div>
                </div>
            </div><!-- header-nav -->

        </header><!-- end HEADER -->
