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
                                                        alt=""><span>view our
                                                        tours</span></a>
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
                                                        alt=""><span>view our
                                                        tours</span></a>
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
    </div>

    {{-- <div class="inner-banner style-6">
        <img class="center-image" src="https://carnivalguide.co/travel/img/firstbanner.png" alt="">
        <div class="vertical-align">
            <div class="container">
            </div>
        </div>
    </div> --}}

    <!-- DETAIL WRAPPER -->
    <div class="detail-wrapper">
        <div class="container">
            <div class="row padd-90">
                <div class="col-xs-12 col-md-8">
                    <div class="detail-content">

                        <div class="simple-tab type-2 tab-wrapper">
                            <div class="tab-nav-wrapper">
                                <div class="nav-tab  clearfix">
                                    @foreach ($event->country_tabs as $key => $row)
                                        <div class="nav-tab-item @if ($key == 0) active @endif">
                                            {{ $row->tab }}
                                        </div>
                                    @endforeach
                                    {{-- <div class="nav-tab-item">
                                        Sports
                                    </div>
                                    <div class="nav-tab-item">
                                        Culture and History
                                    </div>
                                    <div class="nav-tab-item">
                                        Nightlife
                                    </div>
                                    <div class="nav-tab-item">
                                        Flights
                                    </div>
                                    <div class="nav-tab-item">
                                        Cars/Rentals
                                    </div>
                                    <div class="nav-tab-item">
                                        Hotels
                                    </div>

                                    <div class="nav-tab-item">
                                        Air BNB
                                    </div>
                                    <div class="nav-tab-item">
                                        Events & Tickets
                                    </div>
                                    <div class="nav-tab-item">
                                        Mas Camps/Costumes
                                    </div>
                                    <div class="nav-tab-item">
                                        Tours and Activities
                                    </div>
                                    <div class="nav-tab-item">
                                        Gallery
                                    </div>

                                    <div class="nav-tab-item ">
                                        Restaurants
                                    </div>
                                    <div class="nav-tab-item">
                                        Blog
                                    </div> --}}

                                </div>
                            </div>
                            <div class="tabs-content clearfix">
                                @foreach ($event->country_tabs as $key => $row)
                                    <div class="tab-info @if ($key == 0) active @endif">
                                        {{-- @if ($row->file_type == 'image')
                                            <img src="{{ asset('files/' . $row->file) }}" class="img-responsive"
                                                alt="file">
                                        @elseif($row->file_type == 'video')
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video loop muted controls class="" id="">
                                                <source type="video/mp4" src="{{ asset('files/' . $row->file) }}" />
    
                                            </video>
                                        </div>
                                        @endif --}}
                                        <div class="slider-wth-thumbs style-1 arrows">
                                            <div class="swiper-container thumbnails-preview swiper-swiper-unique-id-{{ $key }} initialized"
                                                data-autoplay="0" data-loop="1" data-speed="500" data-center="0"
                                                data-slides-per-view="1" id="swiper-unique-id-0">
                                                <div class="swiper-wrapper"
                                                    style="width: 5390px; transform: translate3d(-770px, 0px, 0px); transition-duration: 0s; height: 455px;">
                                                    <div class="swiper-slide swiper-slide-duplicate active" data-val="0"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="{{ asset('files/' . $row->file) }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide active swiper-slide-visible swiper-slide-active"
                                                        data-val="0" style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide" data-val="1"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide" data-val="2"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide" data-val="3"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide" data-val="4"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-duplicate" data-val="5"
                                                        style="width: 770px; height: 455px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="pagination pagination-hidden pagination-swiper-unique-id-0">
                                                    <span
                                                        class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span
                                                        class="swiper-pagination-switch"></span><span
                                                        class="swiper-pagination-switch"></span><span
                                                        class="swiper-pagination-switch"></span><span
                                                        class="swiper-pagination-switch"></span></div>
                                                <div class="arrow-wrapp arr-s-3">
                                                    <div class="swiper-arrow-left sw-arrow"><span
                                                            class="fa fa-angle-left"></span></div>
                                                    <div class="swiper-arrow-right sw-arrow"><span
                                                            class="fa fa-angle-right"></span></div>
                                                </div>
                                            </div>
                                            <div class="swiper-container thumbnails swiper-swiper-unique-id-1 initialized pagination-hidden"
                                                data-autoplay="0" data-loop="0" data-speed="500" data-center="0"
                                                data-slides-per-view="responsive" data-mob-slides="2" data-xs-slides="3"
                                                data-sm-slides="4" data-md-slides="5" data-lg-slides="5"
                                                data-add-slides="5" id="swiper-unique-id-1">
                                                <div class="swiper-wrapper" style="width: 770px; height: 101px;">
                                                    <div class="swiper-slide current active swiper-slide-visible swiper-slide-active"
                                                        data-val="0" style="width: 154px; height: 101px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_1s.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-visible" data-val="1"
                                                        style="width: 154px; height: 101px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_2s.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-visible" data-val="2"
                                                        style="width: 154px; height: 101px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_3s.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-visible" data-val="3"
                                                        style="width: 154px; height: 101px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_4s.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-visible" data-val="4"
                                                        style="width: 154px; height: 101px;">
                                                        <img class="img-responsive img-full"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_5s.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="pagination hidden pagination-swiper-unique-id-1"><span
                                                        class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"
                                                        style="display: inline;"></span><span
                                                        class="swiper-pagination-switch swiper-visible-switch"
                                                        style="display: none;"></span><span
                                                        class="swiper-pagination-switch swiper-visible-switch"
                                                        style="display: none;"></span><span
                                                        class="swiper-pagination-switch swiper-visible-switch"
                                                        style="display: none;"></span><span
                                                        class="swiper-pagination-switch swiper-visible-switch"
                                                        style="display: none;"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            {!! $row->content !!}

                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="list-wrapper bg-grey-2">
                                                <div class="" style="padding: 1.2rem;">
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="sidebar bg-white clearfix" style="margin-bottom: 1.2rem;">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">search</h4>
                                                                            <div class="search-inputs">
                                                                                <div class="form-block clearfix">
                                                                                    <div class="input-style-1 b-50 color-3">
                                                                                        <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                                            alt="">
                                                                                        <input type="text"
                                                                                            placeholder="Where do you want to go?">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-block clearfix">
                                                                                    <div class="input-style-1 b-50 color-3">
                                                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                                            alt="">
                                                                                        <input type="text" placeholder="Check In"
                                                                                            class="datepicker hasDatepicker"
                                                                                            id="dp1721321640005">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-block clearfix">
                                                                                    <div class="input-style-1 b-50 color-3">
                                                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                                            alt="">
                                                                                        <input type="text" placeholder="Check Out"
                                                                                            class="datepicker hasDatepicker"
                                                                                            id="dp1721321640006">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="submit"
                                                                                class="c-button b-40 bg-blue-2 hv-blue-2-o"
                                                                                value="search">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">price range</h4>
                                                                            <div class="slider-range color-1 clearfix"
                                                                                data-counter="$" data-position="start" data-from="0"
                                                                                data-to="1500" data-min="0" data-max="2000">
                                                                                <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                                    id="slider-range-0" aria-disabled="false">
                                                                                    <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                                        style="left: 0%; width: 75%;"></div><a
                                                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                        href="#" style="left: 0%;"></a><a
                                                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                        href="#" style="left: 75%;"></a>
                                                                                </div>
                                                                                <input type="text" class="amount-start"
                                                                                    readonly="" value="$0"
                                                                                    id="amount-start-0">
                                                                                <input type="text" class="amount-end"
                                                                                    readonly="" value="$1500" id="amount-end-0">
                                                                            </div>
                                                                            <input type="submit"
                                                                                class="c-button b-40 bg-blue-2 hv-blue-2-o"
                                                                                value="search">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">star rating</h4>
                                                                            <div class="sidebar-rating">
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="star-5"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="star-5">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="rate">
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="star-4"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="star-4">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="rate">
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="star-3"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="star-3">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="rate">
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="star-2"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="star-2">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="rate">
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="star-1"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="star-1">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="rate">
                                                                                            <span
                                                                                                class="fa fa-star color-yellow"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">Facility</h4>
                                                                            <div class="sidebar-rating">
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-1"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-1">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Pet allowed</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-2"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-2">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Groups
                                                                                            allowed</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-3"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-3">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Tour guides</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-4"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-4">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Access for
                                                                                            disabled</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-5"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-5">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Pet allowed</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-6"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-6">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Groups
                                                                                            allowed</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry color-1">
                                                                                    <input class="checkbox-form" id="text-7"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="text-7">
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                        <span class="checkbox-text">Access for
                                                                                            disabled</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">Review Score</h4>
                                                                            <div class="sidebar-score">
                                                                                <div class="input-entry type-2 color-2">
                                                                                    <input class="checkbox-form" id="score-5"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="score-5">
                                                                                        <span class="checkbox-text">
                                                                                            5
                                                                                            <span class="rate">
                                                                                                <span
                                                                                                    class="fa fa-star color-yellow"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry type-2 color-2">
                                                                                    <input class="checkbox-form" id="score-4"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="score-4">
                                                                                        <span class="checkbox-text">
                                                                                            4
                                                                                            <span class="rate">
                                                                                                <span
                                                                                                    class="fa fa-star color-yellow"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry type-2 color-2">
                                                                                    <input class="checkbox-form" id="score-3"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="score-3">
                                                                                        <span class="checkbox-text">
                                                                                            3
                                                                                            <span class="rate">
                                                                                                <span
                                                                                                    class="fa fa-star color-yellow"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry type-2 color-2">
                                                                                    <input class="checkbox-form" id="score-2"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="score-2">
                                                                                        <span class="checkbox-text">
                                                                                            2
                                                                                            <span class="rate">
                                                                                                <span
                                                                                                    class="fa fa-star color-yellow"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="input-entry type-2 color-2">
                                                                                    <input class="checkbox-form" id="score-1"
                                                                                        type="checkbox" name="checkbox"
                                                                                        value="climat control">
                                                                                    <label class="clearfix" for="score-1">
                                                                                        <span class="checkbox-text">
                                                                                            1
                                                                                            <span class="rate">
                                                                                                <span
                                                                                                    class="fa fa-star color-yellow"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sp-check"><i
                                                                                                class="fa fa-check"></i></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="sidebar-block">
                                                                            <h4 class="sidebar-title color-dark-2">categories</h4>
                                                                            <ul class="sidebar-category color-1">
                                                                                <li class="active">
                                                                                    <a class="cat-drop" href="#">tours <span
                                                                                            class="fr">(68)</span></a>
                                                                                    <ul>
                                                                                        <li><a href="#">sea tours (785)</a></li>
                                                                                        <li><a href="#">food tours (85)</a></li>
                                                                                        <li><a href="#">romantic tours (125)</a>
                                                                                        </li>
                                                                                        <li><a href="#">honeymoon tours (70)</a>
                                                                                        </li>
                                                                                        <li><a href="#">mountain tours (159)</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="cat-drop" href="#">hotels <span
                                                                                            class="fr">(125)</span></a>
                                                                                    <ul>
                                                                                        <li><a href="#">sea tours (785)</a></li>
                                                                                        <li><a href="#">food tours (85)</a></li>
                                                                                        <li><a href="#">romantic tours (125)</a>
                                                                                        </li>
                                                                                        <li><a href="#">honeymoon tours (70)</a>
                                                                                        </li>
                                                                                        <li><a href="#">mountain tours (159)</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="cat-drop" href="#">cruises <span
                                                                                            class="fr">(75)</span></a>
                                                                                    <ul>
                                                                                        <li><a href="#">sea tours (785)</a></li>
                                                                                        <li><a href="#">food tours (85)</a></li>
                                                                                        <li><a href="#">romantic tours (125)</a>
                                                                                        </li>
                                                                                        <li><a href="#">honeymoon tours (70)</a>
                                                                                        </li>
                                                                                        <li><a href="#">mountain tours (159)</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="cat-drop" href="#">flights <span
                                                                                            class="fr">(93)</span></a>
                                                                                    <ul>
                                                                                        <li><a href="#">sea tours (785)</a></li>
                                                                                        <li><a href="#">food tours (85)</a></li>
                                                                                        <li><a href="#">romantic tours (125)</a>
                                                                                        </li>
                                                                                        <li><a href="#">honeymoon tours (70)</a>
                                                                                        </li>
                                                                                        <li><a href="#">mountain tours (159)</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="list-header clearfix">
                                                                <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                                    <div class="drop">
                                                                        <b>Sort by price</b>
                                                                        <a href="#" class="drop-list"><i
                                                                                class="fa fa-angle-down"></i></a>
                                                                        <span>
                                                                            <a href="#">ASC</a>
                                                                            <a href="#">DESC</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                                    <div class="drop">
                                                                        <b>Sort by ranking</b>
                                                                        <a href="#" class="drop-list"><i
                                                                                class="fa fa-angle-down"></i></a>
                                                                        <span>
                                                                            <a href="#">ASC</a>
                                                                            <a href="#">DESC</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="list-view-change">
                                                                    <div class="change-grid color-1 fr"><i
                                                                            class="fa fa-th"></i></div>
                                                                    <div class="change-list color-1 fr active"><i
                                                                            class="fa fa-bars"></i></div>
                                                                    <div class="change-to-label fr color-grey-8">View:
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-content clearfix">
                                                                <div class="list-item-entry">
                                                                    <div class="hotel-item style-3 bg-white">
                                                                        <div class="table-view">
                                                                            <div class="radius-top cell-view">
                                                                                <img src="https://carnivalguide.co/travel/img/car_1.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-middle clearfix cell-view">
                                                                                <div class="date list-hidden">July
                                                                                    <strong>19th</strong> to July
                                                                                    <strong>26th</strong></div>
                                                                                <div class="date grid-hidden"><strong>19.07
                                                                                        - 26.07 / 7</strong> night</div>
                                                                                <h4><b>tours in greece</b></h4>
                                                                                <div class="rate-wrap">
                                                                                    <div class="rate">
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                    </div>
                                                                                    <i>485 rewies</i>
                                                                                </div>
                                                                                <p class="f-14 grid-hidden">Nunc cursus
                                                                                    libero purus ac congue arcu cur sus ut
                                                                                    sed vitae pulvinar. Nunc cursus libero
                                                                                    purus ac congue arcu.</p>
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-right clearfix cell-view">
                                                                                <div class="hotel-person color-dark-2">from
                                                                                    <span class="color-blue">$273</span>
                                                                                    person</div>
                                                                                <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                                    href="#">view more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-item-entry">
                                                                    <div class="hotel-item style-3 bg-white">
                                                                        <div class="table-view">
                                                                            <div class="radius-top cell-view">
                                                                                <img src="https://carnivalguide.co/travel/img/car_2.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-middle clearfix cell-view">
                                                                                <div class="date list-hidden">July
                                                                                    <strong>19th</strong> to July
                                                                                    <strong>26th</strong></div>
                                                                                <div class="date grid-hidden"><strong>19.07
                                                                                        - 26.07 / 7</strong> night</div>
                                                                                <h4><b>tours in monaco</b></h4>
                                                                                <div class="rate-wrap">
                                                                                    <div class="rate">
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                    </div>
                                                                                    <i>485 rewies</i>
                                                                                </div>
                                                                                <p class="f-14 grid-hidden">Nunc cursus
                                                                                    libero purus ac congue arcu cur sus ut
                                                                                    sed vitae pulvinar. Nunc cursus libero
                                                                                    purus ac congue arcu.</p>
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-right clearfix cell-view">
                                                                                <div class="hotel-person color-dark-2">from
                                                                                    <span class="color-blue">$703</span>
                                                                                    person</div>
                                                                                <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                                    href="#">view more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-item-entry">
                                                                    <div class="hotel-item style-3 bg-white">
                                                                        <div class="table-view">
                                                                            <div class="radius-top cell-view">
                                                                                <img src="https://carnivalguide.co/travel/img/car_3.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-middle clearfix cell-view">
                                                                                <div class="date list-hidden">July
                                                                                    <strong>19th</strong> to July
                                                                                    <strong>26th</strong></div>
                                                                                <div class="date grid-hidden"><strong>19.07
                                                                                        - 26.07 / 7</strong> night</div>
                                                                                <h4><b>tours in italy</b></h4>
                                                                                <div class="rate-wrap">
                                                                                    <div class="rate">
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                    </div>
                                                                                    <i>485 rewies</i>
                                                                                </div>
                                                                                <p class="f-14 grid-hidden">Nunc cursus
                                                                                    libero purus ac congue arcu cur sus ut
                                                                                    sed vitae pulvinar. Nunc cursus libero
                                                                                    purus ac congue arcu.</p>
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-right clearfix cell-view">
                                                                                <div class="hotel-person color-dark-2">from
                                                                                    <span class="color-blue">$300</span>
                                                                                    person</div>
                                                                                <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                                    href="#">view more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-item-entry">
                                                                    <div class="hotel-item style-3 bg-white">
                                                                        <div class="table-view">
                                                                            <div class="radius-top cell-view">
                                                                                <img src="https://carnivalguide.co/travel/img/car_4.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-middle clearfix cell-view">
                                                                                <div class="date list-hidden">July
                                                                                    <strong>19th</strong> to July
                                                                                    <strong>26th</strong></div>
                                                                                <div class="date grid-hidden"><strong>19.07
                                                                                        - 26.07 / 7</strong> night</div>
                                                                                <h4><b>tours in miami</b></h4>
                                                                                <div class="rate-wrap">
                                                                                    <div class="rate">
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                    </div>
                                                                                    <i>485 rewies</i>
                                                                                </div>
                                                                                <p class="f-14 grid-hidden">Nunc cursus
                                                                                    libero purus ac congue arcu cur sus ut
                                                                                    sed vitae pulvinar. Nunc cursus libero
                                                                                    purus ac congue arcu.</p>
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-right clearfix cell-view">
                                                                                <div class="hotel-person color-dark-2">from
                                                                                    <span class="color-blue">$400</span>
                                                                                    person</div>
                                                                                <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                                    href="#">view more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-item-entry">
                                                                    <div class="hotel-item style-3 bg-white">
                                                                        <div class="table-view">
                                                                            <div class="radius-top cell-view">
                                                                                <img src="https://carnivalguide.co/travel/img/car_5.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-middle clearfix cell-view">
                                                                                <div class="date list-hidden">July
                                                                                    <strong>19th</strong> to July
                                                                                    <strong>26th</strong></div>
                                                                                <div class="date grid-hidden"><strong>19.07
                                                                                        - 26.07 / 7</strong> night</div>
                                                                                <h4><b>tours in USA</b></h4>
                                                                                <div class="rate-wrap">
                                                                                    <div class="rate">
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                        <span
                                                                                            class="fa fa-star color-yellow"></span>
                                                                                    </div>
                                                                                    <i>485 rewies</i>
                                                                                </div>
                                                                                <p class="f-14 grid-hidden">Nunc cursus
                                                                                    libero purus ac congue arcu cur sus ut
                                                                                    sed vitae pulvinar. Nunc cursus libero
                                                                                    purus ac congue arcu.</p>
                                                                            </div>
                                                                            <div
                                                                                class="title hotel-right clearfix cell-view">
                                                                                <div class="hotel-person color-dark-2">from
                                                                                    <span class="color-blue">$273</span>
                                                                                    person</div>
                                                                                <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                                    href="#">view more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="c_pagination clearfix padd-120">
                                                                <a href="#"
                                                                    class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev
                                                                    page</a>
                                                                <a href="#"
                                                                    class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next
                                                                    page</a>
                                                                <ul class="cp_content color-1">
                                                                    <li class="active"><a href="#">1</a></li>
                                                                    <li><a href="#">2</a></li>
                                                                    <li><a href="#">3</a></li>
                                                                    <li><a href="#">4</a></li>
                                                                    <li><a href="#">...</a></li>
                                                                    <li><a href="#">10</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                @endforeach

                                {{-- <div class="tab-info ">
                                    <div class="arrows">
                                        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                                            data-center="0" data-slides-per-view="1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide active" data-val="0">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img/home/s_slide_1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="swiper-slide" data-val="1">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img//home/s_slide_2.jpg"
                                                        alt="">
                                                </div>


                                                <div class="swiper-slide" data-val="4">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img//home/s_slide_5.jpg"
                                                        alt="">
                                                </div>

                                                <div class="swiper-slide" data-val="1">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img//home/s_slide_7.jpg"
                                                        alt="">
                                                </div>

                                                <div class="swiper-slide" data-val="3">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img//home/s_slide_9.jpg"
                                                        alt="">
                                                </div>
                                                <div class="swiper-slide" data-val="4">
                                                    <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img//home/s_slide_10.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="pagination pagination-hidden"></div>
                                            <div class="arrow-wrapp arr-s-3">
                                                <div class="swiper-arrow-left sw-arrow"><span
                                                        class="fa fa-angle-left"></span></div>
                                                <div class="swiper-arrow-right sw-arrow"><span
                                                        class="fa fa-angle-right"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>General Information About Grenada</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <div class="table-responsive">
                                        <table class="table style-2 type-3">
                                            <thead>
                                                <tr>
                                                    <th>country</th>
                                                    <th>city</th>
                                                    <th>area</th>
                                                    <th>weather</th>
                                                    <th>local time</th>
                                                    <th>currency</th>
                                                    <th>launguage</th>
                                                    <th>population</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Grenada</td>
                                                    <td>St.George's</td>
                                                    <td>348.5 km<sup>2</sup></td>
                                                    <td>30<sup>0</sup>c, sun</td>
                                                    <td>mon 12:53 am</td>
                                                    <td>EC</td>
                                                    <td>English</td>
                                                    <td>110 thousand</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <div class="isotope-container row row10">
                                        <div class="grid-sizer col-mob-12 col-xs-6 col-sm-4"></div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_1a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Greneda</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_2a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Grenada</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_3a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Grenada</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_4a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Grenada</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_5a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Grenada</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                                            <a class="black-hover" href="#">
                                                <img class="img-full img-responsive" src="https://carnivalguide.co/travel/img/detail/blog_gal_6a.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                                <div class="vertical-align">
                                                    <div class="date color-white">July <strong>19th</strong> to July
                                                        <strong>26th</strong>
                                                    </div>
                                                    <h4 class="color-white"><b>tours in Grenada</b></h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <h3>you need to know</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>

                                <div class="tab-info">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video loop muted controls class="" id="">
                                            <source type="video/mp4" src="https://carnivalguide.co/travel/video/puregreneda.mp4" />

                                        </video>
                                    </div>
                                    <h3>Grenada Culture and History</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                    <h4>culture of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="video-click style-2">
                                                <a href="https://player.vimeo.com/video/127669609?color=cd6018&amp;title=0&amp;byline=0&amp;portrait=0"
                                                    class="video-change"></a>
                                                <img src="https://carnivalguide.co/travel/img/detail/guide_2.jpg" class="img-href res-img"
                                                    alt="video image">
                                                <div class="video">
                                                    <iframe></iframe>
                                                    <img src="https://carnivalguide.co/travel/img/home_2/close.png" alt="close" class="close-v">
                                                </div>
                                                <div class="video-title">
                                                    <div class="item-block style-2">
                                                        <div class="play">
                                                            <img src="https://carnivalguide.co/travel/img/home_2/play.png" alt="palay">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_3.jpg" alt="">
                                        </div>
                                    </div>
                                    <h4>history of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue.
                                    </p>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusre et dolore magna aliqua.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_4.jpg" alt="">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_5.jpg" alt="">
                                        </div>
                                    </div>
                                    <h4>history of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue.
                                    </p>
                                </div>

                                <div class="tab-info">
                                    <div>
                                        <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img/detail/m_slide_1a.jpg"
                                            alt="">
                                    </div>
                                    <h3>Grenada Nightlife</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                    <h4>culture of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <h3>French Wine Bar</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_1a.jpg" alt="">
                                                <div class="bar-title color-dark">Bar-Restaurant de l’Hôtel Costes</div>
                                                <div class="bar-desc color-grey">
                                                    239, Rue Saint-Honoré - 75001 Grenada<br>
                                                    Tel. : +33 (0) 1 42 44 50 25<br>
                                                    Fax : +33 (0) 1 42 44 50 01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_2a.jpg" alt="">
                                                <div class="bar-title color-dark">Buddha bar</div>
                                                <div class="bar-desc color-grey">
                                                    8, Rue Boissy d’Anglas - 75008 Grenada<br>
                                                    Tel. : +33 (0) 1 53 05 90 00<br>
                                                    Fax : +33 (0) 1 53 05 90 09
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_3a.jpg" alt="">
                                                <div class="bar-title color-dark">Le Cithéa</div>
                                                <div class="bar-desc color-grey">
                                                    114, Rue Oberkampf - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 40 21 70 95<br>
                                                    Fax : +33 (0) 1 47 00 94 97
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_4a.jpg" alt="">
                                                <div class="bar-title color-dark">Le SanZ SanS</div>
                                                <div class="bar-desc color-grey">
                                                    49, Rue Faubourg Saint-Antoine - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 44 75 78 78<br>
                                                    Fax : +33 (0) 1 53 17 04 85
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>nightlife of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue.</p>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusre et dolore magna aliqua.</p>
                                </div>

                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_6a.jpg" alt="">

                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_15.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_13.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_1.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 green tt">best offer</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_2.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_3.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_4.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_6b.jpg" alt="">

                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_15.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b></b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_13.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b></b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_1.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 green tt">best offer</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b></b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_2.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_3.jpg"
                                                            alt="">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/hotel_grid_4.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">
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
                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut
                                                            sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon" src="https://carnivalguide.co/travel/img/tour_list/hotel_icon_5.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="title hotel-right bg-dr-blue-2 clearfix cell-view">
                                                        <div class="hotel-person color-white">from <span>$703</span></div>
                                                        <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                            href="#">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_7a.jpg" alt="">
                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_2.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_3.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_3.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_2.jpg" alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1
                                                            stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">LANDING</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                                        <a href="#" class="c-button b-40 color-grey-3 hv-o"><img
                                                                src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_8b.jpg" alt="">
                                    <div class="grid-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_1.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_2.jpg" alt="">
                                                        <div class="price price-s-4">$500</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_3.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>alaska CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4.jpg" alt="">
                                                        <div class="price price-s-4">$650</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5.jpg" alt="">
                                                        <div class="price price-s-4">$670</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6.jpg" alt="">
                                                        <div class="price price-s-4">$200</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>europe CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7.jpg" alt="">
                                                        <div class="price price-s-4">$400</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8.jpg" alt="">
                                                        <div class="price price-s-4">$550</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>spain CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>italy CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11.jpg" alt="">
                                                        <div class="price price-s-4">$700</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>china CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_events.jpg" alt="">
                                    <div class="grid-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4a.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>Feat n Sweat</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5a.jpg" alt="">
                                                        <div class="price price-s-4">$500</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>Nations Flag Party</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6a.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>Free Soca Party</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4.jpg" alt="">
                                                        <div class="price price-s-4">$650</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5.jpg" alt="">
                                                        <div class="price price-s-4">$670</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6.jpg" alt="">
                                                        <div class="price price-s-4">$200</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>europe CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7.jpg" alt="">
                                                        <div class="price price-s-4">$400</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8.jpg" alt="">
                                                        <div class="price price-s-4">$550</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>spain CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>italy CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11.jpg" alt="">
                                                        <div class="price price-s-4">$700</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>china CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_mas.jpg" alt="">
                                    <div class="grid-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_1a.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>Flesh Carnival</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_2a.jpg" alt="">
                                                        <div class="price price-s-4">$500</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ORO Carnival</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_3a.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>Carnival Freaks</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4.jpg" alt="">
                                                        <div class="price price-s-4">$650</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5.jpg" alt="">
                                                        <div class="price price-s-4">$670</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6.jpg" alt="">
                                                        <div class="price price-s-4">$200</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>europe CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7.jpg" alt="">
                                                        <div class="price price-s-4">$400</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8.jpg" alt="">
                                                        <div class="price price-s-4">$550</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>spain CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>italy CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11.jpg" alt="">
                                                        <div class="price price-s-4">$700</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>china CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_tours.jpg" alt="">
                                    <div class="grid-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10a.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11a.jpg" alt="">
                                                        <div class="price price-s-4">$500</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12a.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4.jpg" alt="">
                                                        <div class="price price-s-4">$650</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5.jpg" alt="">
                                                        <div class="price price-s-4">$670</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6.jpg" alt="">
                                                        <div class="price price-s-4">$200</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>europe CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7.jpg" alt="">
                                                        <div class="price price-s-4">$400</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8.jpg" alt="">
                                                        <div class="price price-s-4">$550</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>spain CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>italy CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11.jpg" alt="">
                                                        <div class="price price-s-4">$700</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>china CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-info">
                                    <img class="img-responsive" src="https://carnivalguide.co/travel/img/detail/guide_12a.jpg" alt="">
                                    <div class="grid-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7a.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8a.jpg" alt="">
                                                        <div class="price price-s-4">$500</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9a.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b></b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_4.jpg" alt="">
                                                        <div class="price price-s-4">$650</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_5.jpg" alt="">
                                                        <div class="price price-s-4">$670</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_6.jpg" alt="">
                                                        <div class="price price-s-4">$200</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>europe CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_7.jpg" alt="">
                                                        <div class="price price-s-4">$400</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_8.jpg" alt="">
                                                        <div class="price price-s-4">$550</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>usa CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_9.jpg" alt="">
                                                        <div class="price price-s-4">$600</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>spain CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_10.jpg" alt="">
                                                        <div class="price price-s-4">rest</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>italy CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_11.jpg" alt="">
                                                        <div class="price price-s-4">$700</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>ASIA & AFRICA CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-9 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/travel/img/tour_list/cruise_grid_12.jpg" alt="">
                                                        <div class="price price-s-4">$450</div>
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="tour-info-line clearfix">
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">July <strong>19th
                                                                        2015</strong></span>
                                                            </div>
                                                            <div class="tour-info fl">
                                                                <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
                                                                <span class="font-style-2 color-grey-3">alaska</span>
                                                            </div>
                                                        </div>
                                                        <h4><b>china CRUISES</b></h4>
                                                        <div class="rate-wrap list-hidden">
                                                            <div class="rate">
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                                <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                            <i>485 rewies</i>
                                                        </div>
                                                        <p class="f-14 color-grey-3">San Juan, Charlotte Amalie,
                                                            Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.
                                                        </p>
                                                        <div class="buttons-block bg-dr-blue-2 clearfix">
                                                            <a href="#"
                                                                class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1 fl">detail</a>
                                                            <a href="#"
                                                                class="c-button b-40 bg-white hv-transparent fr">book
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-info">
                                    <div>
                                        <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img/detail/m_slide_1b.jpg"
                                            alt="">
                                    </div>
                                    <h3>Grenada Nightlife</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                    <h4>culture of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <h3>French Wine Bar</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_1a.jpg" alt="">
                                                <div class="bar-title color-dark">Bar-Restaurant de l’Hôtel Costes</div>
                                                <div class="bar-desc color-grey">
                                                    239, Rue Saint-Honoré - 75001 Grenada<br>
                                                    Tel. : +33 (0) 1 42 44 50 25<br>
                                                    Fax : +33 (0) 1 42 44 50 01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_2a.jpg" alt="">
                                                <div class="bar-title color-dark">Buddha bar</div>
                                                <div class="bar-desc color-grey">
                                                    8, Rue Boissy d’Anglas - 75008 Grenada<br>
                                                    Tel. : +33 (0) 1 53 05 90 00<br>
                                                    Fax : +33 (0) 1 53 05 90 09
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_3a.jpg" alt="">
                                                <div class="bar-title color-dark">Le Cithéa</div>
                                                <div class="bar-desc color-grey">
                                                    114, Rue Oberkampf - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 40 21 70 95<br>
                                                    Fax : +33 (0) 1 47 00 94 97
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_4a.jpg" alt="">
                                                <div class="bar-title color-dark">Le SanZ SanS</div>
                                                <div class="bar-desc color-grey">
                                                    49, Rue Faubourg Saint-Antoine - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 44 75 78 78<br>
                                                    Fax : +33 (0) 1 53 17 04 85
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>nightlife of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue.</p>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusre et dolore magna aliqua.</p>
                                </div>
                                <div class="tab-info">
                                    <div>
                                        <img class="img-responsive img-full" src="https://carnivalguide.co/travel/img/detail/guide_13a.jpg"
                                            alt="">
                                    </div>
                                    <h3>Grenada Nightlife</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                    <h4>culture of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <h3>French Wine Bar</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_1a.jpg" alt="">
                                                <div class="bar-title color-dark">Bar-Restaurant de l’Hôtel Costes</div>
                                                <div class="bar-desc color-grey">
                                                    239, Rue Saint-Honoré - 75001 Grenada<br>
                                                    Tel. : +33 (0) 1 42 44 50 25<br>
                                                    Fax : +33 (0) 1 42 44 50 01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_2a.jpg" alt="">
                                                <div class="bar-title color-dark">Buddha bar</div>
                                                <div class="bar-desc color-grey">
                                                    8, Rue Boissy d’Anglas - 75008 Grenada<br>
                                                    Tel. : +33 (0) 1 53 05 90 00<br>
                                                    Fax : +33 (0) 1 53 05 90 09
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_3a.jpg" alt="">
                                                <div class="bar-title color-dark">Le Cithéa</div>
                                                <div class="bar-desc color-grey">
                                                    114, Rue Oberkampf - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 40 21 70 95<br>
                                                    Fax : +33 (0) 1 47 00 94 97
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="bar">
                                                <img class="bar-img" src="https://carnivalguide.co/travel/img/detail/bar_4a.jpg" alt="">
                                                <div class="bar-title color-dark">Le SanZ SanS</div>
                                                <div class="bar-desc color-grey">
                                                    49, Rue Faubourg Saint-Antoine - 75011 Grenada<br>
                                                    Tel. : +33 (0) 1 44 75 78 78<br>
                                                    Fax : +33 (0) 1 53 17 04 85
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>nightlife of Grenada</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque
                                        varius justo et, condimentum augue.</p>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam,
                                        nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac
                                        turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusre et dolore magna aliqua.</p>
                                </div> --}}


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="right-sidebar">
                        <div class="sidebar-filter bg-grey-2">
                            <h4 class="color-dark-2">search</h4>
                            <div class="form-block type-2 clearfix">
                                <div class="form-label color-dark-2">Country</div>
                                <div class="drop-wrap drop-wrap-s-4 color-4">
                                    <div class="drop">
                                        <b>France</b>
                                        <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                        <span>
                                            <a href="#">France</a>
                                            <a href="#">USA</a>
                                            <a href="#">Italy</a>
                                            <a href="#">Canada</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-block type-2 clearfix">
                                <div class="form-label color-dark-2">City</div>
                                <div class="drop-wrap drop-wrap-s-4 color-4">
                                    <div class="drop">
                                        <b>Grenada</b>
                                        <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                        <span>
                                            <a href="#">Grenada</a>
                                            <a href="#">London</a>
                                            <a href="#">Grenada</a>
                                            <a href="#">New Yourk</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-block type-2 clearfix">
                                <div class="form-label color-dark-2">By name</div>
                                <div class="input-style-1 b-50 brd-0 type-2 color-4">
                                    <input type="text" placeholder="Enter name(optional)">
                                </div>
                            </div>
                            <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o"
                                value="confirm booking">
                        </div>
                        {{-- <div class="sidebar-text-label bg-dr-blue-2 color-white">useful information</div> --}}

                        {{-- <div class="help-contact bg-grey-2">
                            <h4 class="color-dark-2">Need Help?</h4>
                            <p class="color-grey-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a class="help-phone color-dark-2 link-dr-blue-2" href="tel:0200059600"><img
                                    src="https://carnivalguide.co/travel/img/detail/phone24-dark-2.png" alt="">020
                                00 59 600</a>
                            <a class="help-mail color-dark-2 link-dr-blue-2" href="mailto:let’s_travel@world.com"><img
                                    src="https://carnivalguide.co/travel/img/detail/letter-dark-2.png"
                                    alt="">let’s_travel@world.com</a>
                        </div> --}}
                        <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">popular posts</h4>
                            <div class="widget-popular">
                                <div class="hotel-small style-2 clearfix">
                                    <a class="hotel-img black-hover" href="#">
                                        <img class="img-responsive radius-0"
                                            src="https://carnivalguide.co/travel/img/home_7/small_hotel_5.jpg"
                                            alt="">
                                        <div class="tour-layer delay-1"></div>
                                    </a>
                                    <div class="hotel-desc">
                                        <div class="tour-info-line">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                                            </div>
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                            </div>
                                        </div>
                                        <h4>history of mauritius</h4>
                                        <div class="tour-info-line clearfix">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">10 comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-small style-2 clearfix">
                                    <a class="hotel-img black-hover" href="#">
                                        <img class="img-responsive radius-0"
                                            src="https://carnivalguide.co/travel/img/home_7/small_hotel_6.jpg"
                                            alt="">
                                        <div class="tour-layer delay-1"></div>
                                    </a>
                                    <div class="hotel-desc">
                                        <div class="tour-info-line">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                                            </div>
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                            </div>
                                        </div>
                                        <h4>mauritius from 5 days</h4>
                                        <div class="tour-info-line clearfix">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">10 comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-small style-2 clearfix">
                                    <a class="hotel-img black-hover" href="#">
                                        <img class="img-responsive radius-0"
                                            src="https://carnivalguide.co/travel/img/home_7/small_hotel_7.jpg"
                                            alt="">
                                        <div class="tour-layer delay-1"></div>
                                    </a>
                                    <div class="hotel-desc">
                                        <div class="tour-info-line">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">03/07/2015</span>
                                            </div>
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                            </div>
                                        </div>
                                        <h4>mauritius from 5 days</h4>
                                        <div class="tour-info-line clearfix">
                                            <div class="tour-info">
                                                <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png"
                                                    alt="">
                                                <span class="font-style-2 color-dark-2">10 comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block type-2">
                            <div class="simple-tab tab-3 color-1 tab-wrapper">
                                <div class="tab-nav-wrapper">
                                    <div class="nav-tab  clearfix">
                                        <div class="nav-tab-item active">
                                            commented
                                        </div>
                                        <div class="nav-tab-item">
                                            popular
                                        </div>
                                        <div class="nav-tab-item">
                                            new
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-content clearfix">
                                    <div class="tab-info active">
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/home_9/cruise_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_2.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-info">
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_2.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/home_9/cruise_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-info">
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/home_9/cruise_1.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-small style-2 clearfix">
                                            <a class="hotel-img black-hover" href="#">
                                                <img class="img-responsive radius-0"
                                                    src="https://carnivalguide.co/travel/img/detail/popular_2.jpg"
                                                    alt="">
                                                <div class="tour-layer delay-1"></div>
                                            </a>
                                            <div class="hotel-desc">
                                                <div class="tour-info-line">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                    </div>
                                                </div>
                                                <h4>cruises reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon_grey.png"
                                                            alt="">
                                                        <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block type-2">
                            <div class="widget-slider arrows">
                                <div class="swiper-container swiper-swiper-unique-id-2 initialized" data-autoplay="0"
                                    data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1"
                                    id="swiper-unique-id-2">
                                    <div class="swiper-wrapper"
                                        style="width: 1480px; transform: translate3d(-370px, 0px, 0px); transition-duration: 0s; height: 215px;">
                                        <div class="swiper-slide radius-4 background-block swiper-slide-duplicate"
                                            data-val="1"
                                            style="background-image: url(&quot;img/home_9/f_slide.jpg&quot;); width: 370px; height: 215px;">
                                            <img class="center-image"
                                                src="https://carnivalguide.co/travel/img/home_9/f_slide.jpg"
                                                alt="" style="display: none;">
                                            <div class="vertical-bottom">
                                                <h4 class="color-white">royal Hotel</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">03/07/2015</span>
                                                    </div>
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide radius-4 active background-block swiper-slide-visible swiper-slide-active"
                                            data-val="0"
                                            style="background-image: url(&quot;img/detail/widget_s.jpg&quot;); width: 370px; height: 215px;">
                                            <img class="center-image"
                                                src="https://carnivalguide.co/travel/img/detail/widget_s.jpg"
                                                alt="" style="display: none;">
                                            <div class="vertical-bottom">
                                                <h4 class="color-white">best hotels reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">03/07/2015</span>
                                                    </div>
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide radius-4 background-block" data-val="1"
                                            style="background-image: url(&quot;img/home_9/f_slide.jpg&quot;); width: 370px; height: 215px;">
                                            <img class="center-image"
                                                src="https://carnivalguide.co/travel/img/home_9/f_slide.jpg"
                                                alt="" style="display: none;">
                                            <div class="vertical-bottom">
                                                <h4 class="color-white">royal Hotel</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">03/07/2015</span>
                                                    </div>
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide radius-4 active background-block swiper-slide-duplicate"
                                            data-val="0"
                                            style="background-image: url(&quot;img/detail/widget_s.jpg&quot;); width: 370px; height: 215px;">
                                            <img class="center-image"
                                                src="https://carnivalguide.co/travel/img/detail/widget_s.jpg"
                                                alt="" style="display: none;">
                                            <div class="vertical-bottom">
                                                <h4 class="color-white">best hotels reviews</h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/calendar_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">03/07/2015</span>
                                                    </div>
                                                    <div class="tour-info">
                                                        <img src="https://carnivalguide.co/travel/img/people_icon.png"
                                                            alt="">
                                                        <span class="font-style-2 color-white">By Emma Stone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination pagination-hidden poin-style-1 pagination-swiper-unique-id-2">
                                        <span
                                            class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span
                                            class="swiper-pagination-switch"></span></div>
                                    <div class="arr-t-3">
                                        <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span>
                                        </div>
                                        <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">latest comments</h4>
                            <div class="widget-comment">
                                <div class="w-comment-entry">
                                    <div class="w-comment-date"><img
                                            src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                            alt=""> july <strong>19th 2015</strong></div>
                                    <div class="w-comment-title color-grey-3"><a class="color-dark-2"
                                            href="#">BEST HOTELS REVIEWS</a> by <span class="color-dark-2">Emma
                                            Stone</span></div>
                                    <div class="w-comment-text color-grey-3">Lorem ipsum dolor sit amet, eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="w-comment-entry">
                                    <div class="w-comment-date"><img
                                            src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                            alt=""> july <strong>21th 2015</strong></div>
                                    <div class="w-comment-title color-grey-3"><a class="color-dark-2"
                                            href="#">TOP BEST HOTELS AND TOURS</a> by <span
                                            class="color-dark-2">Emma Stone</span></div>
                                    <div class="w-comment-text color-grey-3">Lorem ipsum dolor sit amet, eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="w-comment-entry">
                                    <div class="w-comment-date"><img
                                            src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                            alt=""> july <strong>29th 2015</strong></div>
                                    <div class="w-comment-title color-grey-3"><a class="color-dark-2"
                                            href="#">TOP BEST HOTELS AND TOURS</a> by <span
                                            class="color-dark-2">Emma Stone</span></div>
                                    <div class="w-comment-text color-grey-3">Lorem ipsum dolor sit amet, eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">popular tags</h4>
                            <ul class="widget-tags clearfix">
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a>
                                </li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">cruises</a></li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a>
                                </li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a>
                                </li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Illegal</a></li>
                                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>
                            </ul>
                        </div>
                        {{-- <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">popular tags</h4>
                            <div class="widget-gallery clearfix">
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_1.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_2.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_3.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_4.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_5.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_6.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_7.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_8.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_9.jpg" alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_10.jpg"
                                        alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_11.jpg"
                                        alt=""></a>
                                <a href="#"><img class="img-responsive"
                                        src="https://carnivalguide.co/travel/img/detail/w_gal_12.jpg"
                                        alt=""></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="additional-block padd-90">
                <h4 class="additional-title">may interest you</h4>
                <div class="may-interested">
                    <div class="row">
                        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="hotel-item style-11 bg-white">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/tour_list/tour_grid_1a.jpg"
                                        alt="">
                                </div>
                                <div class="title bg-grey-2">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong>
                                    </div>
                                    <h4><b>Tours in Grenada</b></h4>
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
                                    <div class="hotel-person color-dark-2">from <span>$273</span> person</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="hotel-item style-11 bg-white">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/tour_list/tour_grid_2a.jpg"
                                        alt="">
                                </div>
                                <div class="title bg-grey-2">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong>
                                    </div>
                                    <h4><b>Tours in Grenada</b></h4>
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
                                    <div class="hotel-person color-dark-2">from <span>$703</span> person</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="hotel-item style-11 bg-white">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/tour_list/tour_grid_3a.jpg"
                                        alt="">
                                </div>
                                <div class="title bg-grey-2">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong>
                                    </div>
                                    <h4><b>TOURS IN GRENADA</b></h4>
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
                                    <div class="hotel-person color-dark-2">from <span>$300</span> person</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="hotel-item style-11 bg-white">
                                <div class="radius-top">
                                    <img src="https://carnivalguide.co/travel/img/tour_list/tour_grid_4a.jpg"
                                        alt="">
                                </div>
                                <div class="title bg-grey-2">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong>
                                    </div>
                                    <h4><b>TOURS IN</b></h4>
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
                                    <div class="hotel-person color-dark-2">from <span>$300</span> person</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-90 background-block"
        style="background-image: url(https://carnivalguide.co/travel/img/home_8/bg_block_1.jpg);">
        <img class="center-image" src="https://carnivalguide.co/travel/img/home_8/bg_block_1.jpg" alt=""
            style="display: none;">
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
                            <div class="s_news-text color-grey-3">{!! $blog->description !!}</div>
                        </div>
                    </div>
                @endforeach
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
                                        @foreach ($products->chunk(2) as $chunk)
                                            <div class="item">
                                                @foreach ($chunk as $product)
                                                    @if ($product->brand_id == 1)
                                                        <div class="product-item  product-item-opt-1 ">
                                                            <div class="product-item-info">
                                                                <div class="product-item-photo">
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product image"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
                                                                    <a class="product-item-img" href="">
                                                                        <img alt="product name"
                                                                            src="{{ $product->image_url }}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-item-detail">
                                                                    <strong class="product-item-name">
                                                                        <a href="">{{ $product->name }}</a>
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
                                        {{-- <div class="item">
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
                                            </div> --}}
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
