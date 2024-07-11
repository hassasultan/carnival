{{-- @extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="block-section-top block-section-top3">
            <div class="container" style="width: 100%;padding:0 !important;">
                <div class="box-section-top" style="padding: 0 !important;">

                    <!-- block slide top -->
                    <div class="block-slide-main slide-opt-8" style="width:100%">

                        <!-- slide -->
                        <div class="owl-carousel " data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            <div class="item">
                                <img src="{{ asset('shopAssets/images/media/index8/slide1.jpg') }}" alt="slide1"
                                    class="img-slide" style="height: 100%;min-height:200px;">
                                <div class="description" style="top: 30%;">
                                    <span class="subtitle ">Paris fashion week</span>
                                    <span class="title">fashion talents from paris </span>
                                    <span class="des">Quisque malesuada placerat nisl. Quisque libero metus, condimen
                                        Quisque malesuada placerat nisl. Quisque libero metus, condimen</span>
                                    <a href="" class="view-opt8">SHOP NOW</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('shopAssets/images/media/index8/slide2.jpg') }}" alt="slide1"
                                    class="img-slide" style="height: 100%;min-height:200px;">
                                <div class="description" style="top: 30%;">
                                    <span class="subtitle ">Paris fashion week</span>
                                    <span class="title">fashion talents from paris </span>
                                    <span class="des">Quisque malesuada placerat nisl. Quisque libero metus,
                                        condimen</span>
                                    <a href="" class="view-opt8">SHOP NOW</a>
                                </div>
                            </div>

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                </div>
            </div>
        </div>


        <!-- block-brand -->
        <div class="block-brand-op6">
            <div class="container">
                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="2" data-loop="true"
                    data-responsive='{
                        "0":{"items":3},
                        "480":{"items":4},
                        "600":{"items":5},
                        "992":{"items":7}
                    }'>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_1.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_2.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_3.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_4.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_5.png') }}"
                                alt="brand"></a>
                    </div>
                </div>
            </div>
        </div><!-- block-brand -->


    </main><!-- end MAIN -->

@endsection --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="{{ asset('shopAssets/css/carnival-bootstrap.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.structure.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/jquery-ui.min.css?ver=1') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=1">
    <link href="{{ asset('shopAssets/css/carnival-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('shopAssets/css/shopstyle.css?ver=7') }}" rel="stylesheet" type="text/css" />

    <!-- Style CSS -->

    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/fa7b99de89.css" crossorigin="anonymous"> -->
    <title>Let's Travel</title>
</head>

<body class="no-overflow" data-color="theme-1">

    <div class="style-page">
        <div class="wrappers">
            <div class="conf-button">
                <span class="fa fa-cog"></span>
                <h6>Theme options</h6>
            </div>
            <a href="index.html" class="site-logo"><img src="https://carnivalguide.co/travel/img/theme-1/logo_dark.png"
                    alt=""></a>
            <div class="color-block">
                <h5>change color</h5>
                <div class="entry bg-1" data-color="theme-1"></div>
                <div class="entry bg-2" data-color="theme-2"></div>
                <div class="entry bg-3" data-color="theme-3"></div>
                <div class="entry bg-4" data-color="theme-4"></div>
                <div class="entry bg-5" data-color="theme-5"></div>
                <div class="entry bg-6" data-color="theme-6"></div>
                <div class="entry bg-7" data-color="theme-7"></div>
                <div class="entry bg-8" data-color="theme-8"></div>
                <div class="entry bg-9" data-color="theme-9"></div>
            </div>
            <div class="color-block">
                <h5>Layout style</h5>
                <div class="check-option active"><span class="boxed">Boxed</span></div>
                <div class="check-option"><span class="noboxed">Wide</span></div>
            </div>
            <div class="color-block">
                <h5>Elements style</h5>
                <div class="check-option active"><span class="rounded">Rounded</span></div>
                <div class="check-option"><span class="norounded">Not rounded</span></div>
            </div>
            <div class="color-block">
                <h5>Header style</h5>
                <div class="header-style">
                    <a href="https://carnivalguide.co/travel/menu_style_1.html" class="active">
                        <img src="https://carnivalguide.co/travel/img/landing/header_1.png" alt="">
                    </a>
                    <a href="https://carnivalguide.co/travel/menu_style_2.html">
                        <img src="https://carnivalguide.co/travel/mg/landing/header_2.png" alt="">
                    </a>
                    <a href="https://carnivalguide.co/travel/menu_style_3.html">
                        <img src="https://carnivalguide.co/travel/img/landing/header_3.png" alt="">
                    </a>
                    <a href="https://carnivalguide.co/travel/menu_style_4.html">
                        <img src="https://carnivalguide.co/travel/img/landing/header_4.png" alt="">
                    </a>
                    <a href="https://carnivalguide.co/travel/menu_style_5.html">
                        <img src="https://carnivalguide.co/travel/img/landing/header_5.png" alt="">
                    </a>
                    <a href="https://carnivalguide.co/travel/menu_style_6.html">
                        <img src="https://carnivalguide.co/travel/img/landing/header_6.png" alt="">
                    </a>
                </div>
            </div>
            <div class="color-block">
                <h5>Footer style</h5>
                <div class="header-style">
                    <a href="footer_style_1.html" class="active">
                        <img src="https://carnivalguide.co/travel/img/landing/footer_1.png" alt="">
                    </a>
                    <a href="footer_style_2.html">
                        <img src="https://carnivalguide.co/travel/img/landing/footer_2.png" alt="">
                    </a>
                    <a href="footer_style_3.html">
                        <img src="https://carnivalguide.co/travel/img/landing/footer_3.png" alt="">
                    </a>
                    <a href="footer_style_4.html">
                        <img src="https://carnivalguide.co/travel/img/landing/footer_4.png" alt="">
                    </a>
                    <a href="footer_style_5.html">
                        <img src="https://carnivalguide.co/travel/img/landing/footer_5.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="loading green">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>

    <header class="bg-white color-4 header-style-2">
        <div class="top-header-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-bar">
                            <a href="index.html" class="logo">
                                <img src="https://carnivalguide.co/travel/img/theme-1/logo.fw.png" alt="lets travel"
                                    height="50px">
                            </a>
                        </div>
                        <div class="drop-wrap-wrap">
                            <div class="drop-wrap">
                                <div class="drop drop-lg">
                                    <b><img src="https://carnivalguide.co/travel/img/en.png"
                                            alt="">English</b>
                                    <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                    <span class="lg">
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/en.png"
                                                alt="">English</a>
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/fr.png"
                                                alt="">Français</a>
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/de.png"
                                                alt="">Deutsch</a>
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/fr.png"
                                                alt="">Italiano</a>
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/ja.png"
                                                alt="">日本語</a>
                                        <a href="#"><img src="https://carnivalguide.co/travel/img/ko.png"
                                                alt="">한국어</a>
                                    </span>
                                </div>
                            </div>
                            <div class="drop-wrap">
                                <div class="drop">
                                    <b>Sign in</b>
                                    <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                    <span>
                                        <a href="#">Sign in</a>
                                        <a href="#">connect with <i class="fa fa-facebook"></i></a>
                                        <a href="#">connect with <i class="fa fa-google-plus"></i></a>
                                        <a href="#">connect with <i class="fa fa-pinterest"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="drop-wrap">
                                <div class="drop">
                                    <b>EUR <i class="fa fa-eur"></i></b>
                                    <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                    <span>
                                        <a href="#">EUR <i class="fa fa-eur"></i></a>
                                        <a href="#">USD <i class="fa fa-usd"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="form-block">
                            <div class="input-style-1 b-50 color-3">
                                <img src="https://carnivalguide.co/travel/img/search_icon_small.png" alt="">
                                <input placeholder="Search..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav">
                        <div class="nav-menu-icon">
                            <a href="#"><i></i></a>
                        </div>
                        <nav class="menu">
                            <ul>

                                <li class="type-1 active">
                                    <a href="index.html">home<span class="fa fa-angle-down"></span></a>

                                </li>

                                <li class="type-1"><a href="#">Services<span
                                            class="fa fa-angle-down"></span></a>
                                    <ul class="dropmenu">
                                        <li><a href="index_10.html">Flights</a></li>
                                        <li><a href="index_3.html">Hotels</a></li>
                                        <li><a href="cars.html">Car Rentals</a></li>
                                        <li><a href="index-orig.html">Tours & Activities</a></li>

                                    </ul>
                                </li>




                                <li class="type-1"><a href="index_9.html">Events & Tickets<span
                                            class="fa fa-angle-down"></span></a>

                                </li>
                                <li><a href="video_bar.html">Travel Packages <span
                                            class="fa fa-chevron-right"></span></a>

                                </li>




                                <li class="type-1"><a href="https://carnivalguide.co/shop/">Shop <span
                                            class="fa fa-chevron-right"></span></a>
                                    <ul class="dropmenu">
                                        <li><a href="faq.html">Costumes</a></li>
                                        <li><a href="faq1.html">Mas Camps</a></li>
                                    </ul>
                                </li>
                                <li><a href="carnivalpage.html">Carnival Listing <span
                                            class="fa fa-chevron-right"></span></a>

                                </li>
                                <li class="type-1"><a href="#">Gallery/Media <span
                                            class="fa fa-chevron-right"></span></a>
                                    <ul class="dropmenu">
                                        <li><a href="gallery_2.html">Pictures</a></li>
                                        <li><a href="gallery_2.html">Videos</a></li>
                                        <li><a href="gallery_2.html">Artists/Music</a></li>

                                    </ul>
                                </li>
                                <li><a href="policies.html">Paid 2 Parti</a></li>
                                <li><a href="sitemap.html">About us</a></li>

                                <!-- <li><a href="login.html">FAQ</a></li> -->



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="full-height">
        <div class="video-wrapper">
            <video loop autoplay muted poster="https://carnivalguide.co/travel/img/poster.jpg" class="bgvid"
                id="bgvid">
                <source type="video/mp4" src="https://carnivalguide.co/travel/video/soca.mp4" />
                <source type="video/ogv" src="https://carnivalguide.co/travel/video/soca.ogv" />
                <source type="video/webm" src="https://carnivalguide.co/travel/video/soca.webm" />
            </video>
            <div class="vertical-align">
                <div class="container" style="margin-top:30px">

                    <div class="arrows">
                        <div class="swiper-container main-slider-5" data-autoplay="0" data-loop="1"
                            data-speed="900" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <div class="vertical-align">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                    <div class="slider-block clearfix">
                                                        <div class="slider-block-left">
                                                            <img class="center-image"
                                                                src="https://carnivalguide.co/travel/img/home/slide_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="slider-block-right">
                                                            <div class="rate-wrap">
                                                                <div class="rate">
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                </div>
                                                                <i>485 Reviews</i>
                                                            </div>
                                                            <h4 class="sb-title">Grenada <span style="">Spice
                                                                    Mas</span>
                                                            </h4>
                                                            <div class="sb-price color-dark-2"><span>$500</span> / per
                                                                person</div>
                                                            <div class="sb-text">Spicemas is the premier cultural event
                                                                in Grenada. It's the party everyone waits all year to
                                                                participate in, watch, and enjoy.
                                                                Spicemas events are colourful, funny, surprising, and
                                                                energetic, linking back to Grenada's African, French,
                                                                British, and Caribbean heritage.
                                                            </div>
                                                            <a href="guide.html"
                                                                class="c-button b-50 bg-green hv-green-o ">view
                                                                more</a>
                                                            <div class="slide-preview">
                                                                <a class="active"
                                                                    href="https://carnivalguide.co/travel/img/home/slide_1.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_1.jpg"
                                                                        alt=""></a>
                                                                <a
                                                                    href="https://carnivalguide.co/travel/img/home/slide_2.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_2.jpg"
                                                                        alt=""></a>
                                                                <a
                                                                    href="https://carnivalguide.co/travel/img/home/slide_3.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="slide-preview">
                                                                <a
                                                                    href="https://carnivalguide.co/travel/img/home_5/slide_1.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_4.jpg"
                                                                        alt=""></a>
                                                                <a
                                                                    href="https://carnivalguide.co/travel/img/home_5/slide_2.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_5.jpg"
                                                                        alt=""></a>
                                                                <a
                                                                    href="https://carnivalguide.co/travel/img/home_5/slide_3.jpg"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_6.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <div class="vertical-align">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                    <div class="slider-block clearfix">
                                                        <div class="slider-block-left">
                                                            <img class="center-image" src="https://carnivalguide.co/travel/img/home_5/slide_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="slider-block-right">
                                                            <div class="rate-wrap">
                                                                <div class="rate">
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                    <span class="fa fa-star color-yellow"></span>
                                                                </div>
                                                                <i>485 Reviews</i>
                                                            </div>
                                                            <h4 class="sb-title">Trinidad Carnival</h4>
                                                            <div class="sb-price color-dark-2"><span>$500</span> / per
                                                                person</div>
                                                            <div class="sb-text">Lorem ipsum dolor sit amet,
                                                                consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                            </div>
                                                            <a href="guide.html"
                                                                class="c-button b-50 bg-green hv-green-o ">view
                                                                more</a>
                                                            <div class="slide-preview">
                                                                <a class="active" href="#"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_1.jpg"
                                                                        alt=""></a>
                                                                <a href="#"><img class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_2.jpg"
                                                                        alt=""></a>
                                                                <a href="#"><img class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="slide-preview">
                                                                <a class="active" href="#"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_1.jpg"
                                                                        alt=""></a>
                                                                <a href="#"><img class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_2.jpg"
                                                                        alt=""></a>
                                                                <a href="#"><img class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home_5/slide_preview_3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination pagination-hidden poin-style-1"></div>
                            <div class="arrow-wrapp arr-s-2">
                                <div class="cont-1170">
                                    <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span>
                                    </div>
                                    <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- CONTRY-ITEM -->
    <div class="main-wraper" style="padding:110px 0px 0px 0px">
        <div class="container clearfix contry-wrapp">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="second-title style-3">
                        <h4 class="subtitle color-dark-2-light">World Carnivals</h4>
                        <h2 class="color-dark-2">Access to any carnival in the world</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="row">
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_1.png" alt="">
                                <h5>europe</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_2.png" alt="">
                                <h5>asia</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <div class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_3.png" alt="">
                                <h5>africa</h5>
                            </div>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_4.png" alt="">
                                <h5>north america</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_5.png" alt="">
                                <h5>south america</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_6.png" alt="">
                                <h5>australia</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="main-wraper ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="color-dark-2-light">upcoming carnivals</h4>
                        <h2>most popular carnivals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="1" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-val="0">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home/city_1.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">St.Vincent</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+32<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home/city_2.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Trinidad</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+30<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="2">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home/city_3.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Barbados</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+28<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpgg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="3">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_1.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">venice</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+32<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="4">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_2.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">rome</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+30<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="5">
                            <div class="city-entry bg-grey-2">
                                <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                    <div class="tour-layer delay-1"></div>
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_3.jpg" class="res-img" alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Barbados</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                <b>+28<sup>o</sup>C</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="city-desc">
                                    <div class="tab-wrapper">
                                        <div class="tab-nav-wrapper">
                                            <div class="nav-tab  clearfix">
                                                <div class="nav-tab-item active">
                                                    Flights
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Hotels
                                                </div>
                                                <div class="nav-tab-item ">
                                                    Events
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-content clearfix">
                                            <div class="tab-info active">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-info">
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">1. bristol
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">2. Mykonos
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                                <div class="hotel-line clearfix">
                                                    <a class="hotel-img black-hover" href="#">
                                                        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
                                                            alt="">
                                                        <div class="tour-layer delay-1"></div>
                                                    </a>
                                                    <div class="hotel-line-content">
                                                        <a class="hotel-line-title" href="#">3. luxury
                                                            Hotel</a>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 Rewies</i>
                                                        </div>
                                                        <div class="hotel-line-price">from $273</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>




    <!-- Tour Item
 <div class="main-wraper bg-grey-2 padd-90">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
     <div class="second-title">
      <h4 class="color-dark-2-light">our directions</h4>
    <h2>Top Destinations</h2>
    </div>
    </div>
   </div>
   <div class="tour-item-grid row">
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_1.jpg" alt="">
      <div class="tour-weather">mountains</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">Alps Mountains</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_2.jpg" alt="">
      <div class="tour-weather">sea tours</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">monaco city</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_3.jpg" alt="">
      <div class="tour-weather">sea tours</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">maldivies</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_4.jpg" alt="">
      <div class="tour-weather">sea tours</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">bora bora</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_5.jpg" alt="">
      <div class="tour-weather">mountains</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">Carpathian Mountains</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-4 clear-xs-2 clear-md-3">
     <div class="tour-item style-2">
      <div class="radius-top">
      <img src="https://carnivalguide.co/travel/img/home_5/tour_5.jpg" alt="">
      <div class="tour-weather">sea tours</div>
      </div>
      <div class="tour-desc bg-white">
       <a href="#" class="c-button bg-green hv-green-o delay-2 small"><span>view more</span></a>
       <h4><a class="tour-title color-dark-2 link-green" href="#">miami</a></h4>
       <div class="tour-text color-grey-3">Nunc cursus libero purus ac cong.</div>
     </div>
     </div>
    </div>
   </div>
  </div>
 </div>		-->

    <!-- COUNTER-ENTRY
 <div class="main-wraper color-2 padd-90">
  <img class="center-image" src="https://carnivalguide.co/travel/img/home_5/bg-counter.jpg" alt="">
  <div class="container">
   <div class="row">
    <div class="col-xs-12">
     <div class="second-title style-2">
      <h4 class="color-white-light">our directions</h4>
    <h2>why we are the best</h2>
    </div>
    </div>
   </div>
   <div class="counters row">
    <div class="col-mob-12 col-xs-6 col-sm-3">
     <div class="counter-entry">
      <img class="counter-icon" src="https://carnivalguide.co/travel/img/theme-1/c_icon_1.png" alt="">
      <div class="counter-number underline color-white" data-to="25968" data-speed="3000">0</div>
      <h5 class="counter-title color-white">happy clients</h5>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-3">
     <div class="counter-entry">
      <img class="counter-icon" src="https://carnivalguide.co/travel/img/theme-1/c_icon_2.png" alt="">
      <div class="counter-number underline color-white" data-to="55598" data-speed="3000">0</div>
      <h5 class="counter-title color-white">amazing tour</h5>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-3">
     <div class="counter-entry">
      <img class="counter-icon" src="https://carnivalguide.co/travel/img/theme-1/c_icon_3.png" alt="">
      <div class="counter-number underline color-white" data-to="5568" data-speed="3000">0</div>
      <h5 class="counter-title color-white">support cases</h5>
     </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-3">
     <div class="counter-entry">
      <img class="counter-icon" src="https://carnivalguide.co/travel/img/theme-1/c_icon_4.png" alt="">
      <div class="counter-number underline color-white" data-to="15968" data-speed="3000">0</div>
      <h5 class="counter-title color-white">in bussines</h5>
     </div>
    </div>
   </div>
  
  </div>
 </div>-->

    <div class="main-wraper bg-grey-5 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2 underline">our services</h4>
                        <h2>we are the best</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000"
                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_1.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">happy clients</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_2.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">amazing tour</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_3.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_4.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_1.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">happy clients</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_2.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">amazing tour</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_3.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2" src="https://carnivalguide.co/travel/img/home_8/icon_4.png"
                                    alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="color-dark-2-light">testimonials</h4>
                        <h2>what our clients say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                        data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-val="0">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_1.jpg" alt="">
                                        <div class="tour-weather">sea tour</div>
                                    </div>
                                    <div class="tour-desc bg-white">
                                        <div class="rate">
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                        </div>
                                        <img class="tm-people" src="https://carnivalguide.co/travel/images/testimonialimg1.jpg" alt="">
                                        <h4><a class="tour-title color-dark-2 link-green" href="#">inna
                                                lunoe</a></h4>
                                        <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu
                                            cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="1">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_2.jpg" alt="">
                                        <div class="tour-weather">mountains</div>
                                    </div>
                                    <div class="tour-desc bg-white">
                                        <div class="rate">
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                        </div>
                                        <img class="tm-people" src="https://carnivalguide.co/travel/images/testimonialimg5.jpg" alt="">
                                        <h4><a class="tour-title color-dark-2 link-green" href="#">alina,
                                                mark</a></h4>
                                        <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu
                                            cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="2">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_3.jpg" alt="">
                                        <div class="tour-weather">sea tour</div>
                                    </div>
                                    <div class="tour-desc bg-white">
                                        <div class="rate">
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                        </div>
                                        <img class="tm-people" src="https://carnivalguide.co/travel/images/testimonialimg3.jpg" alt="">
                                        <h4><a class="tour-title color-dark-2 link-green" href="#">george
                                                ross</a></h4>
                                        <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu
                                            cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="4">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_4.jpg" alt="">
                                        <div class="tour-weather">mountains</div>
                                    </div>
                                    <div class="tour-desc bg-white">
                                        <div class="rate">
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                            <span class="fa fa-heart color-green"></span>
                                        </div>
                                        <img class="tm-people" src="https://carnivalguide.co/travel/images/testimonialimg4.jpg" alt="">
                                        <h4><a class="tour-title color-dark-2 link-green" href="#">mikel,
                                                kim</a></h4>
                                        <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu
                                            cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination  poin-style-1 pagination-hidden"></div>
                    </div>
                    <div class="swiper-arrow-left offers-arrow color-3"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right offers-arrow color-3"><span class="fa fa-angle-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-blue-2 underline">our gallery</h4>
                        <h2>photos our customers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                        data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-val="0">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_1.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="1">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_1.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="2">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_2.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="3">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_3.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="4">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_4.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="5">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_5.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="6">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_6.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="7">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_7.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="8">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_8.jpg" alt="">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pagination  poin-style-1 pagination-hidden"></div>
                    </div>
                    <div class="swiper-arrow-left offers-arrow color-3"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right offers-arrow color-3"><span class="fa fa-angle-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- GAL-ITEM
<div class="main-wraper">
 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-8 col-sm-offset-2">
    <div class="second-title">
     <h4 class="subtitle color-blue-2 underline">our gallery</h4>
     <h2>photos our customers</h2>
    </div>
   </div>
  </div>
  <div class="isotope-container row">
   <div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_1.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_2.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_3.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_4.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_5.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_6.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_7.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
   <div class="item gal-item col-mob-12 col-xs-6 col-sm-3">
    <a class="black-hover" href="detail_2.html">
     <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/home/gal_8.jpg" alt="">
     <div class="tour-layer delay-1"></div>
     <div class="vertical-align">
      <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
      <h4 class="color-white"><b>tours in monaco</b></h4>
     </div>
    </a>
   </div>
  </div>
 </div>
</div>-->

    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dark-2-light">our partners</h4>
                        <h2>Our Investor Relations</h2>
                        <p class="color-grey">We have teamed up with the carnival committees to give you the best
                            platform available</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0"
            data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3"
            data-md-slides="4" data-lg-slides="5" data-add-slides="6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_1.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_2.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_3.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_4.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_5.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_6.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_7.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_8.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_9.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive" src="https://carnivalguide.co/travel/img/home/partner_10.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="pagination pagination-hidden"></div>
        </div>
    </div>



    <!-- S_NEWS-ENTRY -->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-blue-2 underline">news</h4>
                        <h2>latest news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="s_news-entry">
                        <img class="s_news-img img-full img-responsive" src="https://carnivalguide.co/travel/images/blog1.jpg" alt="">
                        <h4 class="s_news-title"><a href="#">Lorem ipsum dolor</a></h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">10 comments</span>
                            </div>
                        </div>
                        <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            commodo consequat.</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="s_news-entry">
                        <img class="s_news-img img-full img-responsive" src="https://carnivalguide.co/travel/images/blog2.jpg" alt="">
                        <h4 class="s_news-title"><a href="#">Lorem ipsum dolor</a></h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">10 comments</span>
                            </div>
                        </div>
                        <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            commodo consequat.</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="s_news-entry">
                        <img class="s_news-img img-full img-responsive" src="https://carnivalguide.co/travel/images/blog3.jpg" alt="">
                        <h4 class="s_news-title"><a href="#">Lorem ipsum dolor</a></h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png" alt="">
                                <span class="font-style-2 color-dark-2">10 comments</span>
                            </div>
                        </div>
                        <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            commodo consequat.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- block  showcase-->
    <div class="block-showcase block-showcase-opt1 block-brand-tabs">
        <div class="container">

            <div class="block-title">
                <span class="title">brand showcase</span>
            </div>

            <div class="block-content">

                <ul class="nav-brand owl-carousel" data-nav="true" data-loop="true" data-dots="false"
                    data-margin="1"
                    data-responsive='{
				"0":{"items":3},
				"380":{"items":4},
				"480":{"items":5},
				"640":{"items":7},
				"992":{"items":8}
			}'>
                    <li class="active" data-tab="brand1-1">
                        <img src="https://carnivalguide.co/travel/images/digicelt.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-2">
                        <img src="https://carnivalguide.co/travel/images/flowt.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-3">
                        <img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-4">
                        <img src="https://carnivalguide.co/travel/images/caribt.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-5">
                        <img src="https://carnivalguide.co/travel/images/hugginst.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-6">
                        <img src="https://carnivalguide.co/travel/images/glenlgt.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-7">
                        <img src="https://carnivalguide.co/travel/images/intert.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-8">
                        <img src="https://carnivalguide.co/travel/images/cococolat.jpg" alt="img">
                    </li>
                    <li data-tab="brand1-9">
                        <img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active  " role="tabpanel" id="brand1-1">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/digicel.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/digicel1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/digicel2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/digicel3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/digicel4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " role="tabpanel" id="brand1-2">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/flowt2.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/flowt3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/flowt4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/flowt5.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name" src="https://carnivalguide.co/travel/images/flowt6.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-3">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-4">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-5">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-6">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-7">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-8">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-9">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg" alt="logo"
                                        class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                        women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="" class="btn btn-default">shop this brand <i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
									"0":{"items":1},
									"380":{"items":1},
									"480":{"items":1},
									"640":{"items":2},
									"992":{"items":2}
								}'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat
                                                                mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of
                                                                                <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div><!-- block  showcase-->


    <!-- Hotel section-->
    <!--
    <div class="main-wraper padd-90">
        <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
     <div class="second-title">
      <h4 class="color-dark-2-light">hotels</h4>
    <h2>Special hotels for You</h2>
    </div>
    </div>
   </div>
        <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_1.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_4.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_7.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_2.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_5.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h4>bristol Hotel</h4>
        <h4>from $273</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_8.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_3.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_6.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
    <div class="hotel-small style-2 clearfix">
    <a class="hotel-img black-hover" href="#">
    <img class="img-responsive radius-3" src="https://carnivalguide.co/travel/img/home_5/small_hotel_9.jpg" alt="">
    <div class="tour-layer delay-1 radius-3"></div>
    </a>
    <div class="hotel-desc">
        <h5>from <strong>$273</strong></h5>
        <h4>bristol Hotel</h4>
       <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
      </div>
    </div>
    </div>
        </div>
        </div>
 </div>
-->

    <!-- <footer class="bg-dark type-2">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="footer-block">
    <img src="https://carnivalguide.co/travel/img/theme-1/logo.png" alt="" class="logo-footer">
    <div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  magna aliqua. Ut aliquip ex ea commodo consequat.</div>
    <div class="footer-share">
    <a href="#"><span class="fa fa-facebook"></span></a>
    <a href="#"><span class="fa fa-twitter"></span></a>
    <a href="#"><span class="fa fa-google-plus"></span></a>
    <a href="#"><span class="fa fa-pinterest"></span></a>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
    <div class="footer-block">
      <h6>Travel News</h6>
      <div class="f_news clearfix">
       <a class="f_news-img black-hover" href="#">
        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_6/news_1.jpg" alt="">
        <div class="tour-layer delay-1"></div>
       </a>
       <div class="f_news-content">
        <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
        <span class="date-f">Mar 18, 2015</span>
        <a href="#" class="r-more">read more</a>
       </div>
      </div>
      <div class="f_news clearfix">
       <a class="f_news-img black-hover" href="#">
        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_6/news_2.jpg" alt="">
        <div class="tour-layer delay-1"></div>
       </a>
       <div class="f_news-content">
        <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
        <span class="date-f">Mar 18, 2015</span>
        <a href="#" class="r-more">read more</a>
       </div>
      </div>
      <div class="f_news clearfix">
       <a class="f_news-img black-hover" href="#">
        <img class="img-responsive" src="https://carnivalguide.co/travel/img/home_6/news_1.jpg" alt="">
        <div class="tour-layer delay-1"></div>
       </a>
       <div class="f_news-content">
        <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
        <span class="date-f">Mar 18, 2015</span>
        <a href="#" class="r-more">read more</a>
       </div>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="footer-block">
                     <h6>Tags:</h6>
    <a href="#" class="tags-b">flights</a>
    <a href="#" class="tags-b">traveling</a>
    <a href="#" class="tags-b">sale</a>
    <a href="#" class="tags-b">cruises</a>
    <a href="#" class="tags-b">cars</a>
    <a href="#" class="tags-b">hotels</a>
    <a href="#" class="tags-b">tours</a>
    <a href="#" class="tags-b">booking</a>
    <a href="#" class="tags-b">countries</a>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <div class="footer-block">
                     <h6>Contact Info</h6>
                       <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Aenean vulputate porttitor</span></div>
      <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">+93 123 456 789</a></div>
      <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">letstravel@mail.com</a></div>
      <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">let’s_travel@world.com</a></div>
      
     </div>
    </div>
    </div>
    </div>
    </div>
    <div class="footer-link bg-black">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="copyright">
      <span>&copy; 2015 All rights reserved. LET'STRAVEL</span>
     </div>
    <ul>
      <li><a class="link-aqua" href="#">Privacy Policy </a></li>
      <li><a class="link-aqua" href="#">About Us</a></li>
      <li><a class="link-aqua" href="#">Support </a></li>
      <li><a class="link-aqua" href="#">FAQ</a></li>
      <li><a class="link-aqua" href="#">Blog</a></li>
      <li><a class="link-aqua" href="#"> Forum</a></li>
     </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>   -->

    <footer class="bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="footer-block">
                        <img src="https://carnivalguide.co/travel/img/theme-1/logo.fw.png" alt="" class="logo-footer">
                        <div class="instagram-wiget">
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_1.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_2.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_3.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_4.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_5.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_6.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_7.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_8.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_9.jpg" alt=""></a>
                            <a href="#"><img src="https://carnivalguide.co/travel/img/home_1/inst_img_10.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-sm-3 no-padding">
                    <div class="footer-block no-separ">
                        <h6>best tours</h6>
                        <ul>
                            <li><a href="#">Camping holidays</a></li>
                            <li><a href="#">Self-catering holidays</a></li>
                            <li><a href="#">Safaris and wildlife</a></li>
                            <li><a href="#">Activity and adventure</a></li>
                            <li><a href="#">Food and wine holidays</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-sm-3 no-padding">
                    <div class="footer-block">
                        <h6>popular countries</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">France</a></li>
                                    <li><a href="#">Spain</a></li>
                                    <li><a href="#">Ukraine</a></li>
                                    <li><a href="#">Turkey</a></li>
                                    <li><a href="#">India</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">France</a></li>
                                    <li><a href="#">Spain</a></li>
                                    <li><a href="#">Ukraine</a></li>
                                    <li><a href="#">Turkey</a></li>
                                    <li><a href="#">India</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 no-padding">
                    <div class="footer-block">
                        <h6>follow us:</h6>
                        <ul class="footer-folow">
                            <li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span
                                        class="color-fb-2">12</span></a></li>
                            <li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span
                                        class="color-tw-2">27</span></a></li>
                            <li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span
                                        class="color-gg-2">51</span></a></li>
                            <li class="color-pin"><a href=""><i class="fa fa-pinterest"></i>pinterest<span
                                        class="color-pin-2">70</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                    <div class="footer-block no-separ">
                        <h6>Subscribe</h6>
                        <form action="#" class="footer-form">
                            <div class="form-input">
                                <input type="email" placeholder="Enter your email" required>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <input type="submit" value="submit" class="bg-orange">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-link bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="#">Privacy Policy </a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support </a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#"> Forum</a></li>
                        </ul>
                        <div class="copyright">
                            <span>&copy; 2015 All rights reserved. LET'STRAVEL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('shopAssets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/carnival-bootstrap.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/carnival-jquery-ui.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/idangerous.swiper.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/jquery.viewportchecker.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('shopAssets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('shopAssets/js/all.js') }}"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/carnival-jquery.min.js') }}"></script>

    <!-- sticky -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.sticky.js') }}"></script>

    <!-- OWL CAROUSEL Slider -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/owl.carousel.min.js') }}"></script>

    <!-- Boostrap -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/carnival-bootstrap.min.js') }}"></script>

    <!-- Countdown -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.countdown.min.js') }}"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.bxslider.min.js') }}"></script>

    <!-- actual -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.actual.min.js') }}"></script>

    <!-- Chosen jquery-->
    <script type="text/javascript" src="{{ asset('shopAssets/js/chosen.jquery.min.js') }}"></script>

    <!-- parallax jquery-->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.parallax-1.1.3.js') }}"></script>

    <!-- elevatezoom -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/jquery.elevateZoom.min.js') }}"></script>

    <!-- fancybox -->
    <script src="{{ asset('shopAssets/js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('shopAssets/js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('shopAssets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>

    <!-- arcticmodal -->
    <script src="{{ asset('shopAssets/js/arcticmodal/jquery.arcticmodal.js') }}"></script>

    <!-- Main -->
    <script type="text/javascript" src="{{ asset('shopAssets/js/main.js') }}"></script>

</body>

</html>
