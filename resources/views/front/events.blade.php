@extends('front.layouts.app')
@section('front-content')
    {{-- <div class="top-baner swiper-animate arrows">
        <div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0"
            data-slides-per-view="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act"
                            style="background-image:url(https://carnivalguide.co/travel/img/home_9/slide_1a.jpg)">
                        </div>
                    </div>
                    <div class="vertical-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title style-1 vert-title">
                                        <div class="top-weather-info delay-1">
                                            <img src="https://carnivalguide.co/travel/img/theme-1/logo.fw.png"
                                                alt="">
                                        </div>
                                        <h1 class="color-white delay-1">amazing events</h1>
                                        <h3 class="person_price color-white delay-1">more then <strong>10 000</strong>
                                            cruises worldwide</h3>
                                        <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue
                                            bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo
                                            elementum. Lorem ipsum dolor sit.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#"
                                                    class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img
                                                        src="https://carnivalguide.co/travel/img/loc_icon.png"
                                                        alt=""><span>view our tours</span></a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#"
                                                    class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>view hot
                                                        propose</span></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-val="1">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act"
                            style="background-image:url(https://carnivalguide.co/travel/img/home_9/slide_1a.jpg)">
                        </div>
                    </div>
                    <div class="vertical-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title style-1 vert-title">
                                        <div class="top-weather-info delay-1">
                                            <img src="https://carnivalguide.co/travel/img/theme-1/logo.fw.png"
                                                alt="">
                                        </div>
                                        <h1 class="color-white delay-1">amazing Events</h1>
                                        <h3 class="person_price color-white delay-1">more then <strong>10 000</strong>
                                            cruises worldwide</h3>
                                        <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue
                                            bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo
                                            elementum. Lorem ipsum dolor sit.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#"
                                                    class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img
                                                        src="https://carnivalguide.co/travel/img/loc_icon.png"
                                                        alt=""><span>view our tours</span></a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#"
                                                    class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>view hot
                                                        propose</span></a>
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
        </div>
        <div class="arrow-wrapp m-200 arr-s-7">
            <div class="cont-1170">
                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>

        <div class="baner-tabs style-2">
            <div class="text-center">
                <div class="drop-tabs">
                    <b>hotels</b>
                    <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                    <ul class="nav-tabs tpl-tabs tabs-style-1">
                        <li class="active click-tabs"><a href="#one" data-toggle="tab" aria-expanded="false">Monday</a>
                        </li>
                        <li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false">Tuesday</a></li>
                        <li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false">Wednesday</a></li>
                        <li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false">Thursday</a></li>
                        <li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">Friday</a></li>
                        <li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">Saturday</a></li>
                        <li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">Sunday</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content tpl-tabs-cont section-text t-con-style-1" style="background:#000">
                <div class="tab-pane active in" id="one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>Your Destinationss</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                        <input type="text" placeholder="Enter a destination or hotel name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check In</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check Out</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Kids</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Adults</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Rooms</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>search
                                        now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="two">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>Your Destinationss</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                        <input type="text" placeholder="Enter a destination or flight name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check In</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check Out</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Kids</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Adults</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Rooms</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>search
                                        now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>Your Destinationss</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                        <input type="text" placeholder="Enter a destination or car name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check In</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check Out</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Kids</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Adults</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Rooms</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>search
                                        now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="four">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>Your Destinationss</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                        <input type="text" placeholder="Enter a destination or cruise name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check In</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check Out</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Kids</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Adults</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Rooms</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>search
                                        now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="five">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>Your Destinationss</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                        <input type="text" placeholder="Enter a destination or activities name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check In</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>Check Out</h5>
                                    <div class="input-style-1">
                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Kids</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Adults</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>Rooms</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
                                                <a href="#">01</a>
                                                <a href="#">02</a>
                                                <a href="#">03</a>
                                                <a href="#">04</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>search
                                        now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @include('front.templates.youtube-video-template') --}}
    <style>
        /* * { margin: 0; padding: 0; box-sizing: border-box; } */
        .video-container {
            background: #888;
            text-align: center;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: #888;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            padding-top: 115px;
        }

        .hero h1 {
            font-size: 4.5rem;
            letter-spacing: 2px;
        }

        .hero h4 {
            font-size: 30px;
            color: rgba(255, 255, 255, 0.6);
        }

        .hero .text-orange {
            font-size: 2.8rem;
            margin: 10px 0;
            color: #ff6600;
        }

        .hero p {
            font-size: 1.4rem;
            margin: 10px 0;
            color: #fff;
            color: rgba(255, 255, 255, 0.6);
        }

        .hero span {
            font-weight: bold;
        }

        .play-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.5rem;
            margin: 15px 0;
        }

        .buttons {
            margin-top: 15px;
        }

        .btn {
            padding: 12px 24px;
            margin: 10px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-orange {
            background: #ff6600;
            color: white;
        }

        .btn-orange:hover {
            background: #cc5500;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: black;
        }

        /* Video Popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        .popup video {
            border-radius: 10px;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }
    </style>
    <div class="arrows">
        <div class="swiper-container main-slider-5" data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
            data-slides-per-view="1">
            <div class="swiper-wrapper">
                @foreach ($banners as $key => $row)
                    <div class="swiper-slide" data-val="{{ $key }}">
                        @php
                            $videoUrl = null;
                            $imgUrl = null;
                            $extension = pathinfo($row->banner_image, PATHINFO_EXTENSION);
                            $video_extensions = ['mp4', 'mov', 'avi', 'wmv', 'flv', 'webm', 'mkv'];
                            if (in_array(strtolower($extension), $video_extensions)) {
                                $videoUrl = asset($row->banner_image); // Use local or hosted video
                            } else {
                                $imgUrl = asset($row->banner_image); // Use local or hosted video
                            }
                        @endphp
                        <div class="video-container">
                            <div class="hero"
                                @if ($imgUrl != null) style="background-image: url({{ $imgUrl }}) !important; background-repeat:no-repeat !important; background-position:center;" @else style="background-image: url({{ asset($row->poster) }}) !important; background-repeat:no-repeat !important; background-position:center;" @endif>
                                @if ($row->description != null)
                                    <h4>{{ $row->description }}</h4>
                                @endif
                                {{-- <h1>ROMANTIC HOLIDAYS IN NORWAY</h1>
                                <p class="text-orange">FROM <span>$400</span> PER PERSON</p> --}}
                                @if ($videoUrl != null)
                                    <div class="play-button" onclick="openVideoPopup('{{ $videoUrl }}')">
                                        <i class="fa fa-play"></i>
                                    </div>
                                @endif
                                {{-- <p>JULY <span>19TH</span> TO JULY <span>26TH</span></p>
                                <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue bibendum
                                    nulla.
                                </p> --}}
                                <div class="buttons">
                                    {{-- <a href="#" class="c-button b-60 bg-red hv-red-o delay-2"><span>view
                                            more</span></a> --}}
                                    <a href="#" class="c-button b-60 bg-tr-1 hv-red delay-2"><span>book now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination pagination-hidden poin-style-1"></div>
            <div class="arrow-wrapp arr-s-2">
                <div class="cont-1170">
                    <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Popup -->
    <div class="popup" id="videoPopup">
        <span class="close" onclick="closeVideoPopup()">&times;</span>
        <div id="videoContainer"></div>
    </div>

    <script>
        function openVideoPopup(videoUrl) {
            const videoContainer = document.getElementById("videoContainer");
            const popup = document.getElementById("videoPopup");

            videoContainer.innerHTML = `
            <video width="800" height="450" controls autoplay>
                <source src="${videoUrl}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `;
            popup.style.display = "flex";
        }

        function closeVideoPopup() {
            const popup = document.getElementById("videoPopup");
            const videoContainer = document.getElementById("videoContainer");

            popup.style.display = "none";
            videoContainer.innerHTML = ""; // Clear video to stop playback
        }

        // Initialize Swiper
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.main-slider-5', {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                navigation: {
                    nextEl: '.swiper-arrow-right',
                    prevEl: '.swiper-arrow-left',
                },
                pagination: {
                    el: '.pagination',
                    clickable: true
                }
            });
        });
    </script>


    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top events</h4>
                        <h2 class="color-dark-2">best propose</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container pad-15" data-autoplay="0" data-loop="0" data-speed="1000"
                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        @foreach ($upcoming_events as $event)
                            <div class="swiper-slide">
                                <div class="hotel-item style-6">
                                    <div class="radius-top">
                                        <img width="270" height="200"
                                            src="{{ asset('eventBanner/' . $event->banner) }}" alt="{{ $event->name }}">
                                    </div>
                                    <div class="title">
                                        <div class="tour-info-line clearfix">
                                            <div class="tour-info fl">
                                                <img src="{{ asset('travel/img/calendar_icon_grey.png') }}" alt="">
                                                <span class="font-style-2 color-grey-3">
                                                    {{ \Carbon\Carbon::parse($event->start_date)->format('F dS, Y') }}
                                                </span>
                                            </div>
                                            <div class="tour-info fl">
                                                <img src="{{ asset('travel/img/loc_icon_small_grey.png') }}" alt="">
                                                <span class="font-style-2 color-grey-3">{{ $event->venue }}</span>
                                            </div>
                                        </div>
                                        <h4><b>{{ $event->name }}</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 reviews</i>
                                        </div>
                                        @if (count($event->tickets) > 0)
                                            <h5>from <strong>${{ $event->tickets[0]->price }}</strong> / person</h5>
                                        @else
                                            <h5>from <strong>FREE</strong></h5>
                                        @endif
                                        <p class="f-14 color-grey-3">{{ $event->description }}</p>
                                        <a href="{{ route('get.myEvent.detail', $event->slug) }}"
                                            class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                        <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                        {{-- <a href="{{ route('event.booking', $event->slug) }}"
                                            class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP PREVIEW-->
    <div class="top-preview row no-margin">
        @foreach ($carnival_events as $event)
            <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
                <div class="tp_entry style-2">
                    <div class="tp_image">
                        <img class="center-image" src="{{ asset('eventBanner/' . $event->banner) }}"
                            alt="{{ $event->name }}">
                    </div>
                    <div class="tp_content">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 rewies</i>
                            @if (count($event->tickets) > 0)
                                <div class="tp_price">$273</div>
                            @else
                                <div class="tp_price"> <strong>FREE</strong></div>
                            @endif
                        </div>
                        <h4><b>{{ $event->name }}</b></h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                <span
                                    class="font-style-2 color-grey-3">{{ \Carbon\Carbon::parse($event->start_date)->format('F dS, Y') }}</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                <span class="font-style-2 color-grey-3">{{ $event->venue }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_2a.jpg"
                        alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         --}}
    </div>

    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top events</h4>
                        <h2 class="color-dark-2">top events around the world</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($carnival_events as $event)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="world-city black-hover">
                            <div class="tour-layer delay-1"></div>
                            <img class="center-image" src="{{ asset('eventBanner/' . $event->banner) }}"
                                alt="{{ $event->name }}">
                            <div class="vertical-align">
                                <h3 class="world-title color-white">{{ $event->venue }}</h3>
                                @if (count($event->tickets) > 0)
                                    <h4 class="world-price color-white">from <b>${{ $event->tickets[0]->price }}</b></h4>
                                @else
                                    <h4><strong>FREE</strong></h4>
                                @endif
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <p class="color-white-light">{{ $event->description }}</p>
                                <a href="{{ route('get.myEvent.detail', $event->slug) }}"
                                    class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="world-country">
                            <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/country_1.png"
                                alt="">
                            <div class="vertical-align">
                                <h4>destinations in {{ $event->venue }}</h4>
                                <ul class="color-grey-3">
                                    @foreach ($event->relatedEvents as $item)
                                        <li>{{ $item->name . ', ' . $item->venue }}</li>
                                    @endforeach
                                    {{-- <li>La Spezia, Italy</li>
                                    <li>Messina (Sicily), Italy</li>
                                    <li>Naples (Salerno), Italy</li>
                                    <li>Rome (Civitavecchia), Italy</li>
                                    <li>Venice, Italy</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div class="top-baner arrows">
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0"
            data-slides-per-view="1" id="tour-slide-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/bg_1a.jpg" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>from $960</strong> / person</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Rewies</i>
                                    </div>
                                    <h2>Event Banner Ads</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                alt="">
                                            <span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small.png"
                                                alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view
                                            more</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/bg_1a.jpg" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>from $960</strong> / person</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Rewies</i>
                                    </div>
                                    <h2>Princess World Cruise vacation</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                alt="">
                                            <span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small.png"
                                                alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view
                                            more</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/bg_3.jpg" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>from $960</strong> / person</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Rewies</i>
                                    </div>
                                    <h2>Princess World Cruise vacation</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                alt="">
                                            <span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small.png"
                                                alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view
                                            more</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination pagination-hidden poin-style-1"></div>
        </div>
        <div class="arrow-wrapp arr-s-7">
            <div class="cont-1170">
                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>
    </div> --}}

    @include('front.templates.video-slider-template')
    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">popular</h4>
                        <h2 class="color-dark-2">popular events</h2>
                    </div>
                </div>
            </div>
            {{-- <div class="row"> --}}
                {{-- <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_1a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>HAWAIIAN CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_2a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>TAHITI & PACIFIC CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_3a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>ASIA & AFRICA CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_4a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>GETAWAY CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_5a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>PANAMA CANAL CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_6a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>SOUTH AMERICA CRUISES</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_7a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>CRUISE THE WORLD</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0"
                                src="https://carnivalguide.co/travel/img/home_9/cruise_8a.jpg" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong> / person</span></h5>
                            <h4>CRUISE THE WORLD</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    @if ($popular_events->isNotEmpty())
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            @foreach ($popular_events->chunk(4) as $chunk)
                                @foreach ($chunk as $event)
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover"
                                                href="{{ route('get.myEvent.detail', $event->slug) }}">
                                                <img class="img-responsive radius-0"
                                                    src="{{ asset('eventBanner/' . $event->banner) }}"
                                                    alt="{{ $event->name }}">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <h5>
                                                    <span class="color-dark-2">
                                                        {{-- <strong>${{ number_format($event->tickets->min('price'), 2) }}</strong> --}}
                                                        @if (count($event->tickets) > 0)
                                                            <h4 class="world-price color-white">from
                                                                <b>${{ $event->tickets[0]->price }}/ person</b>
                                                            </h4>
                                                        @else
                                                            <h4><strong>FREE</strong></h4>
                                                        @endif
                                                    </span>
                                                </h5>
                                                <h4>{{ $event->name }}</h4>
                                                <div class="hotel-loc tt">
                                                    <strong>{{ \Carbon\Carbon::parse($event->start_date)->format('d.m') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($event->end_date)->format('d.m') }} /
                                                        {{ \Carbon\Carbon::parse($event->start_date)->diffInDays($event->end_date) }}
                                                        nights</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                        {{-- @else
                        <p class="text-center">No popular events available.</p>
                    @endif --}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="item-block style-5 hover-blue-3">
                                <img class="center-image"
                                    src="{{ asset('eventpromotional_image/' . $popular_events[0]->promotional_image) }}"
                                    alt="">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            {{-- </div> --}}
        </div>
    </div>

    <!-- HOTEL-ITEM-->
    @include('partials.brand_showcase')
@endsection
