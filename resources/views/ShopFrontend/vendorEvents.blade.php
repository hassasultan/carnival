@extends('front.layouts.app')
@section('front-content')
    <div class="top-baner swiper-animate arrows">
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
    </div>

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
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/images/kidscarn.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Kiddies Carnival</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$860</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/images/dimanchegras.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Dimanche Gras</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$600</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/images/socamonarch.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Soca Monarch</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$455</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/images/panorama.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Panorama</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$990</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/home_9/tour_1.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Queen Show</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$860</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/home_9/tour_2.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Jouvert</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$600</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/home_9/tour_3.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Pretty Mas</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$455</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/home_9/tour_4.jpg" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Monday Night Mas</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>$990</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP PREVIEW-->
    <div class="top-preview row no-margin">
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_1a.jpg"
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_3a.jpg"
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
                    <h4><b>cruise in monaco for two</b></h4>
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_4a.jpg"
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_5a.jpg"
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_6a.jpg"
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_7a.jpg"
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
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/preview_8a.jpg"
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
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/city_1a.jpg"
                            alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">italy</h3>
                            <h4 class="world-price color-white">from <b>$860</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-country">
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/country_1.png"
                            alt="">
                        <div class="vertical-align">
                            <h4>destinations in italy</h4>
                            <ul class="color-grey-3">
                                <li>Cagliari (Sardinia), Italy</li>
                                <li>La Spezia, Italy</li>
                                <li>Messina (Sicily), Italy</li>
                                <li>Naples (Salerno), Italy</li>
                                <li>Rome (Civitavecchia), Italy</li>
                                <li>Venice, Italy</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/city_2a.jpg"
                            alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">france</h3>
                            <h4 class="world-price color-white">from <b>$655</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-country">
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/country_2.png"
                            alt="">
                        <div class="vertical-align">
                            <h4>destinations in frace</h4>
                            <ul class="color-grey-3">
                                <li>Ajaccio, Corsica</li>
                                <li>Cannes, France</li>
                                <li>Le Havre (Paris), France</li>
                                <li>Marseille, France</li>
                                <li>Nice (Villefranche)</li>
                                <li>Provence (Toulon), France</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/city_3a.jpg"
                            alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">United Kingdom</h3>
                            <h4 class="world-price color-white">from <b>$700</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-country">
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/country_3.png"
                            alt="">
                        <div class="vertical-align">
                            <h4>destinations in USA</h4>
                            <ul class="color-grey-3">
                                <li>Ayr (Glasgow), Scotland</li>
                                <li>Dover, England</li>
                                <li>Edinburgh, Scotland</li>
                                <li>Greenock (Glasgow), Scotland</li>
                                <li>olyhead, Wales</li>
                                <li> Inverness/Loch Ness, Scotland</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/city_4a.jpg"
                            alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Spain</h3>
                            <h4 class="world-price color-white">from <b>$550</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-country">
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/country_4.png"
                            alt="">
                        <div class="vertical-align">
                            <h4>destinations in spaine</h4>
                            <ul class="color-grey-3">
                                <li>Cadiz, Spain</li>
                                <li>Cartagena, Spain</li>
                                <li>Fuerteventura, Canary</li>
                                <li>Ibiza, Spain</li>
                                <li>Lanzarote, Canary Islands</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-baner arrows">
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
                    <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/bg_3.jpg"
                        alt="">
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
    </div>


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
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
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
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="item-block style-5 hover-blue-3">
                        <img class="center-image" src="https://carnivalguide.co/travel/img/home_9/special1.jpg"
                            alt="">
                        <div class="tour-layer delay-1"></div>
                        <div class="vertical-align">
                            <!-- <h4 class="ib-subtitle hover-it"><span>-20%</span> off</h4>
                                       <h3 class="hover-it">honeymoon cruise</h3>
                                        <p>Cursus libero purus ac cursus ut sed.Nunc cursus libero purus ac congue arcu.</p>
                                        <div class="ib-undertitle">from only</div>
                                        <div class="ib-price">$860</div>
                                        <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view more</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90 bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">Carnival Guide</h4>
                        <h2 class="color-dark-2">Supporting Brands</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">from <strong>$750</strong></div>
                        <img class="icon-img" src="https://carnivalguide.co/travel/img/home_9/icon_1a.jpg"
                            alt="">
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
                        <h5 class="icon-title color-dark-2">Carib</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium.
                            Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view
                                more</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">from <strong>$750</strong></div>
                        <img class="icon-img" src="https://carnivalguide.co/travel/img/home_9/icon_2a.jpg"
                            alt="">
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
                        <h5 class="icon-title color-dark-2">Clarkes Court</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium.
                            Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view
                                more</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">from <strong>$750</strong></div>
                        <img class="icon-img" src="https://carnivalguide.co/travel/img/home_9/icon_3a.jpg"
                            alt="">
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
                        <h5 class="icon-title color-dark-2">Coca Cola</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium.
                            Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view
                                more</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">from <strong>$750</strong></div>
                        <img class="icon-img" src="https://carnivalguide.co/travel/img/home_9/icon_4a.jpg"
                            alt="">
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
                        <h5 class="icon-title color-dark-2">Digicel</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium.
                            Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view
                                more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
