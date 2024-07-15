@extends('front.layouts.app')
@section('front-content')
    <div class="full-height">
        <div class="video-wrapper">
            <video loop autoplay muted poster="https://carnivalguide.co/travel/img/poster.jpg" class="bgvid" id="bgvid">
                <source type="video/mp4" src="https://carnivalguide.co/travel/video/soca.mp4" />
                <source type="video/ogv" src="https://carnivalguide.co/travel/video/soca.ogv" />
                <source type="video/webm" src="https://carnivalguide.co/travel/video/soca.webm" />
            </video>
            <div class="vertical-align">
                <div class="container" style="margin-top:30px">

                    <div class="arrows">
                        <div class="swiper-container main-slider-5" data-autoplay="0" data-loop="1" data-speed="900"
                            data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                @foreach ($events as $key => $row)
                                    <div class="swiper-slide @if ($key == 0) active @endif"
                                        data-val="{{ $key }}">
                                        <div class="vertical-align">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                        <div class="slider-block clearfix">
                                                            <div class="slider-block-left">
                                                                <img class="center-image"
                                                                    src="{{asset($row->banner)}}"
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
                                                                <h4 class="sb-title">{{ $row->name }} <span style="">Spice
                                                                        Mas</span>
                                                                </h4>
                                                                <div class="sb-price color-dark-2"><span>${{ $row->tickets[0]->price }}</span> / per
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
                                                                    @foreach ($row->images as $item)
                                                                        <a class="active"
                                                                            href="{{ asset($item->image_url) }}"><img
                                                                                class="img-responsive"
                                                                                src="https://carnivalguide.co/travel/img/home/slide_preview_1.jpg"
                                                                                alt=""></a>
                                                                    @endforeach
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
                                @endforeach
                                {{-- <div class="swiper-slide" data-val="1">
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
                            </div> --}}
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
    <div class="main-wraper" style="padding:160px 0px 0px 0px">
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
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_1.png"
                                    alt="">
                                <h5>europe</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive" src="https://carnivalguide.co/travel/img/theme-1/country_2.png"
                                    alt="">
                                <h5>asia</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <div class="contry-item">
                                <img class="img-responsive"
                                    src="https://carnivalguide.co/travel/img/theme-1/country_3.png" alt="">
                                <h5>africa</h5>
                            </div>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive"
                                    src="https://carnivalguide.co/travel/img/theme-1/country_4.png" alt="">
                                <h5>north america</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive"
                                    src="https://carnivalguide.co/travel/img/theme-1/country_5.png" alt="">
                                <h5>south america</h5>
                            </a>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                            <a class="contry-item">
                                <img class="img-responsive"
                                    src="https://carnivalguide.co/travel/img/theme-1/country_6.png" alt="">
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
                                    <img src="https://carnivalguide.co/travel/img/home/city_1.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">St.Vincent</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                    <img src="https://carnivalguide.co/travel/img/home/city_2.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Trinidad</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                    <img src="https://carnivalguide.co/travel/img/home/city_3.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Barbados</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpgg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
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
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_1.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">venice</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
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
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_2.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">rome</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
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
                                    <img src="https://carnivalguide.co/travel/img/home_5/city_3.jpg" class="res-img"
                                        alt="">
                                    <div class="tour-caption">
                                        <div class="vertical-align">
                                            <h3 class="underline hover-it">Barbados</h3>
                                            <div class="weth-icon">
                                                <img src="https://carnivalguide.co/travel/img/weather_icon_small.png"
                                                    alt="">
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_7.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_8.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_9.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_1.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_2.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_3.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_4.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_5.jpg"
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
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/img/home_5/hotel_6.jpg"
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
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_1.png" alt="">
                                <h5 class="icon-title color-dark-2">happy clients</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_2.png" alt="">
                                <h5 class="icon-title color-dark-2">amazing tour</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_3.png" alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_4.png" alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_1.png" alt="">
                                <h5 class="icon-title color-dark-2">happy clients</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_2.png" alt="">
                                <h5 class="icon-title color-dark-2">amazing tour</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_3.png" alt="">
                                <h5 class="icon-title color-dark-2">support cases</h5>
                                <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt
                                    accumsan pretium. Donec fermentum, ex non placerat.</div>
                                <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="https://carnivalguide.co/travel/img/home_8/icon_4.png" alt="">
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
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-val="0">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_1.jpg"
                                            alt="">
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
                                        <img class="tm-people"
                                            src="https://carnivalguide.co/travel/images/testimonialimg1.jpg"
                                            alt="">
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
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_2.jpg"
                                            alt="">
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
                                        <img class="tm-people"
                                            src="https://carnivalguide.co/travel/images/testimonialimg5.jpg"
                                            alt="">
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
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_3.jpg"
                                            alt="">
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
                                        <img class="tm-people"
                                            src="https://carnivalguide.co/travel/images/testimonialimg3.jpg"
                                            alt="">
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
                                        <img src="https://carnivalguide.co/travel/img/home/testimonal_4.jpg"
                                            alt="">
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
                                        <img class="tm-people"
                                            src="https://carnivalguide.co/travel/images/testimonialimg4.jpg"
                                            alt="">
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
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="4" data-add-slides="4">
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
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_1.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_2.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_3.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_4.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_5.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_6.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_7.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_8.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_9.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="#"><img class="img-responsive"
                                src="https://carnivalguide.co/travel/img/home/partner_10.png" alt=""></a>
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
                        <img class="s_news-img img-full img-responsive"
                            src="https://carnivalguide.co/travel/images/blog1.jpg" alt="">
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
                        <img class="s_news-img img-full img-responsive"
                            src="https://carnivalguide.co/travel/images/blog2.jpg" alt="">
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
                        <img class="s_news-img img-full img-responsive"
                            src="https://carnivalguide.co/travel/images/blog3.jpg" alt="">
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
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/digicel1.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/digicel2.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/digicel3.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/digicel4.jpg"></a>
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
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="https://carnivalguide.co/travel/images/flowt3.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/flowt4.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/flowt5.jpg"></a>
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
                                                                src="https://carnivalguide.co/travel/images/flowt6.jpg"></a>
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
@endsection
