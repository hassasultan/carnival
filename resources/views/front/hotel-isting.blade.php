@extends('front.layouts.app')
@section('front-content')
    <div class="top-baner swiper-animate arrows">
        <div class="video-wrapper">
            <video loop autoplay muted poster="https://carnivalguide.co/new/img/poster.jpg" class="bgvid" id="bgvid">
                <source type="video/mp4" src="https://carnivalguide.co/new/video/silversands.mp4">
                <source type="video/ogv" src="https://carnivalguide.co/new/video/silversands.ogv">
                <source type="video/webm" src="https://carnivalguide.co/new/video/silversand.webm">
            </video>

            <div class="swiper-container main-slider-3 h-143" data-autoplay="0" data-loop="1" data-speed="800"
                data-center="0" data-slides-per-view="1" id="swiper-unique-id-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-val="0">
                        <div class="clip">
                            <div class="bg bg-bg-chrome"></div>
                        </div>
                        <div class="vertical-align">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                        <div class="main-title">
                                            <h1 class="color-white">BOOK YOUR STAY AT SILVERSAND GRENADA</h1>
                                            <form action="#">
                                                <div class="input-style-1">
                                                    <input type="text" required placeholder="Enter your destination">
                                                </div>
                                                <button type="submit" class="c-button bg-dr-blue hv-transparent">
                                                    <img src="https://carnivalguide.co/new/img/search_icon.png" alt=""><span>search now</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat for additional slides -->
                    <div class="swiper-slide" data-val="0">
                        <div class="clip">
                            <div class="bg bg-bg-chrome"></div>
                        </div>
                        <div class="vertical-align">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                        <div class="main-title">
                                            <h1 class="color-white">BOOK YOUR STAY AT SILVERSAND GRENADA</h1>
                                            <form action="#">
                                                <div class="input-style-1">
                                                    <input type="text" required placeholder="Enter your destination">
                                                </div>
                                                <button type="submit" class="c-button bg-dr-blue hv-transparent">
                                                    <img src="https://carnivalguide.co/new/img/search_icon.png" alt=""><span>search now</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (optional) -->
                <div class="pagination pagination-hidden poin-style-1"></div>
            </div>
        </div>
    </div>
    <div class="main-wraper">
        <div class="clip hotel-clip">
            <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_bg_a.jpg)">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="choose-hotel">
                        <div class="drop-wrap drop-wrap-s-2" style="background-color: #ff6600; ">
                            <div class="drop">
                                <b style="color:#fff">Trinidad</b>
                                <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                <span style="display: none;">
                                    <a href="#">France</a>
                                    <a href="#">Italy</a>
                                    <a href="#">Spain</a>
                                    <a href="#">Germany</a>
                                    <a href="#">Netherlands</a>
                                </span>
                            </div>
                        </div>
                        <div class="drop-wrap drop-wrap-s-2" style="background-color: #ff6600;">
                            <div class="drop">
                                <b style="color:#fff">Grenada</b>
                                <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                <span style="display: none;">
                                    <a href="#">Paris</a>
                                    <a href="#">Rome</a>
                                    <a href="#">Madrid</a>
                                    <a href="#">Amsterdam</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="hotel-choose">
                        <div class="fl w_50">
                            <div class="radius-mask popular-img">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/images/hotel_hilton.jpg)">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="price price-s-1">$273</div>
                            </div>
                        </div>
                        <div class="fl w_50">
                            <div class="title">
                                <h3>Hotel Hilton</h3>
                                <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris, France</span>
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
                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                                    nequetiam.</p>
                                <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="full-width arrows arrows-3">
                                <div class="swiper-container swiper-swiper-unique-id-1 initialized pagination-hidden"
                                    data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                                    data-sm-slides="2" data-md-slides="4" data-lg-slides="4" data-add-slides="4"
                                    id="swiper-unique-id-1">
                                    <div class="swiper-wrapper"
                                        style="width: 2220px; transform: translate3d(-925px, 0px, 0px); transition-duration: 1s; height: 157px;">
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Paris Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_1.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Metropole Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_2.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_3.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_4.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Paris Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_1.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide swiper-slide-visible swiper-slide-active"
                                            style="width: 185px; height: 157px;">
                                            <h6><b>Metropole Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_2.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide swiper-slide-visible"
                                            style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_3.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide swiper-slide-visible"
                                            style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_4.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide swiper-slide-visible"
                                            style="width: 185px; height: 157px;">
                                            <h6><b>Paris Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_1.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Metropole Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_2.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_3.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide" style="width: 185px; height: 157px;">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_4.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination pagination-swiper-unique-id-1"><span
                                            class="swiper-pagination-switch swiper-visible-switch"
                                            style="display: inline;"></span><span
                                            class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"
                                            style="display: none;"></span><span
                                            class="swiper-pagination-switch swiper-visible-switch"
                                            style="display: none;"></span><span
                                            class="swiper-pagination-switch swiper-visible-switch"
                                            style="display: none;"></span></div>
                                </div>
                                <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="hotel-choose hotel-hidden">
                        <div class="fl w_50">
                            <div class="radius-mask popular-img">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act"
                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_big_img_2.jpg)">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="price price-s-1">$135</div>
                            </div>
                        </div>
                        <div class="fl w_50">
                            <div class="title">
                                <h3>Hotel Pacific</h3>
                                <span class="color-dark-2 palce-txt">1 Place de la Défense, Puteaux, Lyon</span>
                                <div class="rate-wrap">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <i>313 rewies</i>
                                </div>
                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                                    nequetiam.</p>
                                <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="full-width arrows arrows-3">
                                <div class="swiper-container swiper-swiper-unique-id-2 initialized pagination-hidden"
                                    data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                                    data-sm-slides="2" data-md-slides="4" data-lg-slides="4" data-add-slides="4"
                                    id="swiper-unique-id-2">
                                    <div class="swiper-wrapper" style="transition-duration: 1s;">
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_5.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Sea Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_6.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Parkside Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_7.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_8.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_5.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Sea Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_6.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Parkside Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_7.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_8.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $300</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_5.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Sea Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_6.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Parkside Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_7.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>from $273</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                        style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_sm_img_8.jpg)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination pagination-swiper-unique-id-2"><span
                                            class="swiper-pagination-switch" style="display: inline;"></span><span
                                            class="swiper-pagination-switch" style="display: none;"></span><span
                                            class="swiper-pagination-switch" style="display: none;"></span><span
                                            class="swiper-pagination-switch" style="display: none;"></span></div>
                                </div>
                                <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>popular hotels</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse
                            id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="arrows">
                    <div class="swiper-container hotel-slider swiper-swiper-unique-id-3 initialized pagination-hidden"
                        data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="4" data-add-slides="4" id="swiper-unique-id-3">
                        <div class="swiper-wrapper"
                            style="width: 3600px; transform: translate3d(-1200px, 0px, 0px); transition-duration: 1s; height: 491px;">
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_1.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_2.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_3.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_4.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_1.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_2.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_3.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_4.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_1.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_2.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_3.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 300px; height: 491px;">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/pop_hotel_4.jpg" alt="">
                                        <div class="price price-s-1">$273</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                src="https://carnivalguide.co/new/img/loc_icon_small_drak.png" alt="">view on map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination pagination-swiper-unique-id-3"><span
                                class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"
                                style="display: inline;"></span><span
                                class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span><span
                                class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span><span
                                class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span>
                        </div>
                        <div class="swiper-arrow-left arrows-travel"><span class="fa fa-angle-left"></span></div>
                        <div class="swiper-arrow-right arrows-travel"><span class="fa fa-angle-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper">
        <div class="tab-select">
            <div class="container">
                <div class="form-block clearfix">
                    <div class="drop-wrap drop-wrap-s-3 color-3">
                        <div class="drop">
                            <b>01 adult</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span style="display: none;">
                                <a href="#">NORTH ISLAND HOTEL</a>
                                <a href="#">FOUR SEASONS HOTEL</a>
                                <a href="#">PARK PARIS HOTEL</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-tour-header row no-padd">
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="https://carnivalguide.co/new/img/home_3/hotel_big_3.jpg" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>NORTH ISLAND hotel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>From<b> $860</b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="https://carnivalguide.co/new/img/home_3/hotel_big_2.jpg" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>FOUR SEASONS hotel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>From<b> $860</b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="https://carnivalguide.co/new/img/home_3/hotel_big_1.jpg" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>Park Paris hotel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>From<b> $860</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-tour-content">
            <div class="hotel-wrpp active">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_big_main.jpg)">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>From<b> $860</b></h4>
                                        <h3>NORTH ISLAND hotel</h3>
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
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris,
                                            France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container swiper-swiper-unique-id-4 initialized pagination-hidden"
                                            data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                                            data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                                            data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3"
                                            id="swiper-unique-id-4">
                                            <div class="swiper-wrapper"
                                                style="width: 1566px; transform: translate3d(-696px, 0px, 0px); transition-duration: 1s; height: 140px;">
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block swiper-slide-visible swiper-slide-active"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block swiper-slide-visible"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block swiper-slide-visible"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block"
                                                    style="width: 174px; height: 140px;">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination pagination-swiper-unique-id-4"><span
                                                    class="swiper-pagination-switch swiper-visible-switch"
                                                    style="display: inline;"></span><span
                                                    class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"
                                                    style="display: none;"></span><span
                                                    class="swiper-pagination-switch swiper-visible-switch"
                                                    style="display: none;"></span></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span>
                                        </div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-wrpp">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_big_2.jpg)">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>From<b> $860</b></h4>
                                        <h3>FOUR SEASONS hotel</h3>
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
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris,
                                            France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container swiper-swiper-unique-id-5 initialized pagination-hidden"
                                            data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                                            data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                                            data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3"
                                            id="swiper-unique-id-5">
                                            <div class="swiper-wrapper" style="transition-duration: 1s;">
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination pagination-swiper-unique-id-5"><span
                                                    class="swiper-pagination-switch" style="display: inline;"></span><span
                                                    class="swiper-pagination-switch" style="display: none;"></span><span
                                                    class="swiper-pagination-switch" style="display: none;"></span></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span>
                                        </div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-wrpp">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_3/hotel_big_1.jpg)">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>From<b> $400</b></h4>
                                        <h3>Park Paris hotel</h3>
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
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris,
                                            France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container swiper-swiper-unique-id-6 initialized pagination-hidden"
                                            data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0"
                                            data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                                            data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3"
                                            id="swiper-unique-id-6">
                                            <div class="swiper-wrapper" style="transition-duration: 1s;">
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                style="background-image:url(https://carnivalguide.co/new/img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination pagination-swiper-unique-id-6"><span
                                                    class="swiper-pagination-switch" style="display: inline;"></span><span
                                                    class="swiper-pagination-switch" style="display: none;"></span><span
                                                    class="swiper-pagination-switch" style="display: none;"></span></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span>
                                        </div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Hot Hotel Details</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse
                            id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="arrows">
                    <div class="swiper-container pad-15 swiper-swiper-unique-id-7 initialized" data-autoplay="0"
                        data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1"
                        data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3"
                        data-add-slides="3" id="swiper-unique-id-7">
                        <div class="swiper-wrapper" style="width: 2400px; height: 637px;">
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_1.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $273</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris,
                                            France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_2.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $303</b></h4>
                                        <h4><b>gold Luxury madrid Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris,
                                            France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_3.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $200</b></h4>
                                        <h4><b>dubai Burj al-Arab hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_1.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $400</b></h4>
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_2.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $400</b></h4>
                                        <h4><b>royal Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 400px; height: 637px;">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/new/img/home_3/hot_hotel_3.jpg" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>From<b> $400</b></h4>
                                        <h4><b>sheraton Hotel</b></h4>
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
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                class="fa fa-flag"></i> view more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination poin-style-2 pagination-swiper-unique-id-7"><span
                                class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"
                                style="display: inline-block;"></span><span
                                class="swiper-pagination-switch swiper-visible-switch"
                                style="display: inline-block;"></span><span
                                class="swiper-pagination-switch swiper-visible-switch"
                                style="display: inline-block;"></span><span class="swiper-pagination-switch"
                                style="display: inline-block;"></span><span class="swiper-pagination-switch"
                                style="display: none;"></span><span class="swiper-pagination-switch"
                                style="display: none;"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-mob-12 col-xs-6">
                    <h2 class="title-small">Trendy Now</h2>
                    <div class="row">
                        <div class=" col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_1.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_5.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_9.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_2.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_6.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_10.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mob-12 col-xs-6">
                    <h2 class="title-small">Special for You</h2>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_3.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_7.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_11.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_4.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_8.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="https://carnivalguide.co/new/img/home_3/hotel-small_12.jpg"
                                        alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>from $273</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-90 background-block"
        style="background-image: url(https://carnivalguide.co/new/&quot;img/home_8/bg_block_1.jpg&quot;);">
        <img class="center-image" src="https://carnivalguide.co/new/img/home_8/bg_block_1.jpg" alt="" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-white underline">subscribe</h4>
                        <h2 class="color-white">let’s subscribe</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <form class="subscribe-form" action="#">
                        <div class="subscribe-input input-style-1 input-style-2 fl">
                            <input type="text" required="" placeholder="Enter your email">
                        </div>
                        <button type="submit"
                            class="c-button b-60 bg-blue-2 hv-blue-2-o fr"><span>subscribe</span></button>
                    </form>
                </div>
            </div>
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
                @foreach ($blogs as $blog)
                    <div class="col-xs-12 col-sm-4">
                        <div class="s_news-entry">
                            <img class="s_news-img img-full img-responsive"
                                src="https://carnivalguide.co/travel/images/blog1.jpg" alt="">
                            <h4 class="s_news-title"><a href="#">{{ $blog->title }}</a></h4>
                            <div class="tour-info-line clearfix">
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                        alt="">
                                    <span
                                        class="font-style-2 color-dark-2">{{ $blog->created_at->format('d/m/Y') }}</span>
                                </div>
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                        alt="">
                                    <span class="font-style-2 color-dark-2">By
                                        {{ $blog->user->first_name . ' ' . $blog->user->last_name }}</span>
                                </div>
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png" alt="">
                                    <span class="font-style-2 color-dark-2">10 comments</span>
                                </div>
                            </div>
                            {{-- <div class="s_news-text color-grey-3">{!! $blog->description !!}</div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.brand_showcase')

    {{-- <!-- block  showcase-->
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
                                    <img src="https://carnivalguide.co/travel/images/digicel.jpg" alt="logo"
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 1)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product image"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " role="tabpanel" id="brand1-2">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/flowt2.jpg" alt="logo"
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 2)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 3)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 4)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 5)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="brand1-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 6)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-7">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 7)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 8)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " role="tabpanel" id="brand1-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-title">
                                    <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                        alt="logo" class="logo-showcase">
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 9)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                    </strong>
                                                                    <div class="clearfix">
                                                                        <div class="product-item-price">
                                                                            <span
                                                                                class="price">${{ $product->price }}</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="old-price">${{ $product->old_price }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div title="{{ $product->rating }}%"
                                                                                    class="rating-result">
                                                                                    <span
                                                                                        style="width:{{ $product->rating }}%">
                                                                                        <span><span>{{ $product->rating }}</span>%
                                                                                            of <span>100</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block  showcase--> --}}
@endsection
