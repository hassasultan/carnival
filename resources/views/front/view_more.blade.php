@extends('front.layouts.app')
@section('front-content')
    {{-- <div class="top-baner swiper-animate arrows">

        <div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0"
            data-slides-per-view="1" style="height:600px !important;">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act"
                            style="background-image:url(https://carnivalguide.co/travel/img/home_9/slide_1a.jpg)">
                        </div>
                    </div>
                    <div class="vertical-align" style="top:40% !important;">
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
    </div> --}}
    @include('front.templates.youtube-video-template')

    <!-- DETAIL WRAPPER -->
    <div class="detail-wrapper">
        <div class="container">
            <div class="row padd-90">
                <div class="col-xs-12 col-md-8">
                    <div class="detail-content">

                        <div class="simple-tab type-2 tab-wrapper">
                            <div class="tab-nav-wrapper">
                                <div class="nav-tab  clearfix">
                                    @if ($carnivals?->country_tabs != null)
                                        @foreach ($carnivals->country_tabs as $key => $row)
                                            <div class="nav-tab-item @if ($key == 0) active @endif">
                                                {{ $row->tab }}
                                            </div>
                                        @endforeach
                                    @endif
                                    {{-- <div class="nav-tab-item">
                                        Sports
                                    </div>
                                    <div class="nav-tab-item">
                                        Culture and History
                                    </div>
                                    <div class="nav-tab-item">
                                        Nightlife
                                    </div> --}}
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

                                    {{-- <div class="nav-tab-item ">
                                        Restaurants
                                    </div> --}}
                                    <div class="nav-tab-item">
                                        Blog
                                    </div>

                                </div>
                            </div>
                            <style>
                                .carousel {
                                    width: 100%;
                                    max-width: 800px;
                                    margin: 20px auto;
                                    position: relative;
                                }

                                .carousel-wrapper {
                                    position: relative;
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .carousel-slides {
                                    display: flex;
                                    transition: transform 0.5s ease;
                                    align-items: center;
                                    /* Center the slides vertically */
                                    justify-content: center;
                                    /* Center the slides horizontally */
                                }

                                .slide {
                                    min-width: 100%;
                                    height: 455px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    background-color: #f0f0f0;
                                    /* Ensure the slide has a background */
                                }

                                .img-responsive {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                .carousel-control {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    background-color: rgba(255, 255, 255, 0.7);
                                    border: none;
                                    padding: 10px;
                                    cursor: pointer;
                                    z-index: 1;
                                    width: 5% !important;
                                    height: 45px;
                                }

                                .prev {
                                    left: 10px;
                                    /* Additional styling for the previous button, if needed */
                                }

                                .next {
                                    right: 10px;
                                    /* Correctly position the next button on the right side */
                                    left: auto;
                                    /* Ensure the left position is not overriding the right */
                                }

                                .carousel-thumbnails {
                                    display: flex;
                                    justify-content: center;
                                    margin-top: 10px;
                                }

                                .thumbnail {
                                    width: 150px;
                                    height: 80px;
                                    margin: 0 5px;
                                    cursor: pointer;
                                    overflow: hidden;
                                    border: 2px solid transparent;
                                    transition: border 0.3s ease;
                                }

                                .thumbnail:hover,
                                .thumbnail.active {
                                    border-color: #555;
                                }

                                .img-thumb {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }
                            </style>
                            <div class="tabs-content clearfix">
                                @if ($carnivals?->country_tabs != null)
                                    @foreach ($carnivals->country_tabs as $key => $row)
                                        <div class="tab-info @if ($key == 0) active @endif">
                                            <div class="carousel">
                                                <div class="carousel-wrapper">
                                                    <button class="carousel-control prev">&#10094;</button>
                                                    <div class="carousel-slides">
                                                        <div class="slide active">
                                                            <img class="img-responsive img-full"
                                                                src="{{ asset('files/' . $row->file) }}" alt="Slide 1">
                                                        </div>
                                                        <div class="slide">
                                                            <img class="img-responsive img-full"
                                                                src="{{ asset('files/' . $row->file) }}" alt="Slide 2">
                                                        </div>
                                                        <div class="slide">
                                                            <img class="img-responsive img-full"
                                                                src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                                alt="Slide 3">
                                                        </div>
                                                        <div class="slide">
                                                            <img class="img-responsive img-full"
                                                                src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                                alt="Slide 4">
                                                        </div>
                                                        <div class="slide">
                                                            <img class="img-responsive img-full"
                                                                src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                                alt="Slide 5">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control next">&#10095;</button>
                                                </div>
                                                <div class="carousel-thumbnails">
                                                    <div class="thumbnail">
                                                        <img class="img-responsive img-thumb"
                                                            src="{{ asset('files/' . $row->file) }}" alt="Thumbnail 1">
                                                    </div>
                                                    <div class="thumbnail">
                                                        <img class="img-responsive img-thumb"
                                                            src="{{ asset('files/' . $row->file) }}" alt="Thumbnail 2">
                                                    </div>
                                                    <div class="thumbnail">
                                                        <img class="img-responsive img-thumb"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                            alt="Thumbnail 3">
                                                    </div>
                                                    <div class="thumbnail">
                                                        <img class="img-responsive img-thumb"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                            alt="Thumbnail 4">
                                                    </div>
                                                    <div class="thumbnail">
                                                        <img class="img-responsive img-thumb"
                                                            src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                            alt="Thumbnail 5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                {!! $row->content !!}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- Flights --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive" src="https://carnivalguide.co/new/img/detail/guide_6a.jpg"
                                        alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="hotel-filter">
                                        <div class="baner-bar"
                                            style="box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0); position: relative; bottom:0px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>where</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>rooms</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>Adult</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="range-wrapp">
                                                        <h4>Price range</h4>
                                                        <div class="slider-range" data-counter="$" data-position="start"
                                                            data-from="0" data-to="5000" data-min="0"
                                                            data-max="5000">
                                                            <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                id="slider-range-0" aria-disabled="false">
                                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                    style="left: 0%; width: 81.5%;"></div><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 0%;"></a><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 81.5%;"></a>
                                                            </div>
                                                            <input type="text" class="amount-start" readonly=""
                                                                value="$0" id="amount-start-0">
                                                            <input type="text" class="amount-end" readonly=""
                                                                value="$1500" id="amount-end-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="submit">
                                                        <input class="c-button b-60 bg-white hv-orange" type="submit"
                                                            value="search now">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-12 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view">
                                                        <img src="https://carnivalguide.co/new/img//tour_list/flight_grid_2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="title hotel-middle cell-view">
                                                        <div class="hotel-right-text color-grey fr">one way flights, 1 stop
                                                        </div>
                                                        <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                                        <h4><b>Cheap Flights to Grenada</b></h4>
                                                        <div class="fi_block grid-hidden row row10">
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_2.png"
                                                                    alt="">
                                                                <div class="fi_content">
                                                                    <div class="fi_title color-dark-2">take off</div>
                                                                    <div class="fi_text color-grey">wed nov 13, 2013 7:50
                                                                        am</div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-icon col-xs-6 col10">
                                                                <img class="fi_icon"
                                                                    src="https://carnivalguide.co/new/img//tour_list/flight_icon_1.png"
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
                                                                src="https://carnivalguide.co/new/img//flag_icon_grey.png"
                                                                alt="">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Cars/Rentals --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive" src="https://carnivalguide.co/new/img/detail/guide_6b.jpg"
                                        alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="hotel-filter">
                                        <div class="baner-bar"
                                            style="box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0); position: relative; bottom:0px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="hotels-block">
                                                        <h4>From</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                        <div class="input-entry color-5">
                                                            <input class="checkbox-form" id="text-1" type="checkbox"
                                                                name="checkbox" value="climat control">
                                                            <label class="clearfix" for="text-1">
                                                                <span class="sp-check"><i class="fa fa-check"></i></span>
                                                                <span class="checkbox-text">Same location</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="hotels-block">
                                                        <h4>To</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="timePiker dtpicker-overlay dtpicker-mobile"
                                                    style="display: none;">
                                                    <div class="dtpicker-bg">
                                                        <div class="dtpicker-cont">
                                                            <div class="dtpicker-content">
                                                                <div class="dtpicker-subcontent"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="hotels-block">
                                                        <h4>Time</h4>
                                                        <div class="time-input">
                                                            <img src="https://carnivalguide.co/travel/img/clock.png"
                                                                alt="">
                                                            <input type="text" data-field="time" readonly="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>Check Out</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Time</h4>
                                                        <div class="time-input">
                                                            <img src="https://carnivalguide.co/travel/img/clock.png"
                                                                alt="">
                                                            <input type="text" data-field="time" readonly="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="submit" style="margin-top:38px ">
                                                        <input class="c-button b-60 bg-white hv-orange" type="submit"
                                                            value="search now">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="range-wrapp">
                                                        <h4>Price range</h4>
                                                        <div class="slider-range" data-counter="$" data-position="start"
                                                            data-from="0" data-to="5000" data-min="0"
                                                            data-max="5000">
                                                            <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                id="slider-range-0" aria-disabled="false">
                                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                    style="left: 0%; width: 88.64%;"></div><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 0%;"></a><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 88.64%;"></a>
                                                            </div>
                                                            <input type="text" class="amount-start" readonly=""
                                                                value="$0" id="amount-start-0">
                                                            <input type="text" class="amount-end" readonly=""
                                                                value="$1500" id="amount-end-0">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-12" style="margin-top:20px;">
                                        {{-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="second-title">
                                                    <h2>Advanced Search (16)</h2>
                                                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id
                                                        tor.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="low-price">-10%</div>
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_1a.fw.png"
                                                            alt="">
                                                        <div class="price price-s-1">$500<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">porsche cayenne</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_2.png"
                                                            alt="">
                                                        <div class="price price-s-1">$350 <span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Totota</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_3.png"
                                                            alt="">
                                                        <div class="price price-s-1">$200<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Nissan</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_4.png"
                                                            alt="">
                                                        <div class="price price-s-1">$400<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">hyundai</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_5.png"
                                                            alt="">
                                                        <div class="price price-s-1">$500<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">mustang</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_6.png"
                                                            alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Opel</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="low-price">-20%</div>
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_7.png"
                                                            alt="">
                                                        <div class="price price-s-1">$350<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Jeep</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_8.png"
                                                            alt="">
                                                        <div class="price price-s-1">$400<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">volkswagen</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_1.png"
                                                            alt="">
                                                        <div class="price price-s-1">$500<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">porsche cayenne</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="low-price">-50%</div>
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_2.png"
                                                            alt="">
                                                        <div class="price price-s-1">$350 <span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Totota</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_3.png"
                                                            alt="">
                                                        <div class="price price-s-1">$200<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Nissan</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_4.png"
                                                            alt="">
                                                        <div class="price price-s-1">$400<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">hyundai</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_5.png"
                                                            alt="">
                                                        <div class="price price-s-1">$500<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">mustang</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">

                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_6.png"
                                                            alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Opel</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_7.png"
                                                            alt="">
                                                        <div class="price price-s-1">$350<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">Jeep</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item cars-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/car_8.png"
                                                            alt="">
                                                        <div class="price price-s-1">$400<span>/day</span></div>
                                                    </div>
                                                    <div class="title">
                                                        <h4><a href="#">volkswagen</a></h4>
                                                        <h6 class="clas">standart</h6>
                                                        <div class="rate-wrap">
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_2.png"
                                                                    alt=""><i>X2</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_3.png"
                                                                    alt=""><i>X4</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_5.png"
                                                                    alt=""><i>+</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_1.png"
                                                                    alt=""><i>auto</i></span>
                                                            <span class="car-i"><img
                                                                    src="https://carnivalguide.co/new/img/car_icon_4.png"
                                                                    alt=""><i>gaz</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Hotels --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_7a.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="hotel-filter">
                                        <div class="baner-bar"
                                            style="box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0); position: relative; bottom:0px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>where</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>rooms</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>Adult</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="range-wrapp">
                                                        <h4>Price range</h4>
                                                        <div class="slider-range" data-counter="$"
                                                            data-position="start" data-from="0" data-to="5000"
                                                            data-min="0" data-max="5000">
                                                            <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                id="slider-range-0" aria-disabled="false">
                                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                    style="left: 0%; width: 81.5%;"></div><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 0%;"></a><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 81.5%;"></a>
                                                            </div>
                                                            <input type="text" class="amount-start" readonly=""
                                                                value="$0" id="amount-start-0">
                                                            <input type="text" class="amount-end" readonly=""
                                                                value="$1500" id="amount-end-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="submit">
                                                        <input class="c-button b-60 bg-white hv-orange" type="submit"
                                                            value="search now">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(https://carnivalguide.co/new/img/tour_list/hotel_grid_15.jpg);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_15.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_13.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_13.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_1.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_1.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 green tt">best offer</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_2.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_2.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_3.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_3.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_4.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_4.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                    {{-- <div class="main-wraper hotel-items">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_1.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_2.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_3.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_4.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_5.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_6.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                    <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- Air BNB --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_8b.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-content clearfix">
                                        <div class="list-item-entry">
                                            <div class="hotel-item style-8 bg-grey-2">
                                                <div class="table-view">
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(https://carnivalguide.co/new/img/tour_list/hotel_grid_15.jpg);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_15.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_13.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_13.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_1.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_1.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 green tt">best offer</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_2.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_2.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_3.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_3.jpg"
                                                            alt="" style="display: none;">
                                                        <div class="price price-s-2 red tt">hot price</div>
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                                    <div class="radius-top cell-view background-block"
                                                        style="background-image: url(&quot;img/tour_list/hotel_grid_4.jpg&quot;);">
                                                        <img class="center-image"
                                                            src="https://carnivalguide.co/new/img/tour_list/hotel_grid_4.jpg"
                                                            alt="" style="display: none;">
                                                    </div>
                                                    <div class="title hotel-middle clearfix cell-view">

                                                        <h4><b>Luxury madrid Hotel</b></h4>
                                                        <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans
                                                            Défense, Puteaux</span>
                                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus
                                                            ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                        <div class="hotel-icons-block grid-hidden">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_1.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_2.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_3.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_4.png"
                                                                alt="">
                                                            <img class="hotel-icon"
                                                                src="https://carnivalguide.co/new/img/tour_list/hotel_icon_5.png"
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
                                    {{-- <div class="main-wraper hotel-items">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_1.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_2.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_3.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_4.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_5.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_6.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg" alt="">
                                                        <div class="price price-s-1">$125 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">SPAIN - Barselona</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                    <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg" alt="">
                                                        <div class="price price-s-1">$250 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">FRANCE - Paris</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">4 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 5 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="hotel-item tours-item">
                                                    <div class="radius-top">
                                                        <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg" alt="">
                                                        <div class="price price-s-1">$305 <span>/day</span></div>
                                                    </div>
                                                    <div class="title clearfix">
                                                        <h4><a href="#">Philippines</a></h4>
                                                        <span class="f-14 color-dark-2"><img src="https://carnivalguide.co/new/img/loc_icon_small_grey.png" alt="">2 Place de la Sans Défense, Puteaux</span>
                                                        <div class="rate-wrap">
                                                            <div class="rate">
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            <span class="fa fa-star color-yellow"></span>
                                                            </div>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-calendar-o"></i>
                                                                <span><b>Date:</b> 6 days</span>
                                                        </div>
                                                        <div class="info-tour">
                                                            <i class="fa fa-money"></i>
                                                                <span><b>Adult:</b> 2500$</span>
                                                                <span><b>Children:</b> 1200$</span>
                                                        </div>

                                                    <a href="booking.html" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">book now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- Events & Tickets --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_events.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="hotel-filter">
                                        <div class="baner-bar"
                                            style="box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0); position: relative; bottom:0px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="hotels-block">
                                                        <h4>From</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                        <div class="input-entry color-5">
                                                            <input class="checkbox-form" id="text-1"
                                                                type="checkbox" name="checkbox"
                                                                value="climat control">
                                                            <label class="clearfix" for="text-1">
                                                                <span class="sp-check"><i
                                                                        class="fa fa-check"></i></span>
                                                                <span class="checkbox-text">Same location</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="hotels-block">
                                                        <h4>To</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="timePiker dtpicker-overlay dtpicker-mobile"
                                                    style="display: none;">
                                                    <div class="dtpicker-bg">
                                                        <div class="dtpicker-cont">
                                                            <div class="dtpicker-content">
                                                                <div class="dtpicker-subcontent"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="hotels-block">
                                                        <h4>Time</h4>
                                                        <div class="time-input">
                                                            <img src="https://carnivalguide.co/travel/img/clock.png"
                                                                alt="">
                                                            <input type="text" data-field="time" readonly="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>Check Out</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Time</h4>
                                                        <div class="time-input">
                                                            <img src="https://carnivalguide.co/travel/img/clock.png"
                                                                alt="">
                                                            <input type="text" data-field="time" readonly="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="submit" style="margin-top:38px ">
                                                        <input class="c-button b-60 bg-white hv-orange" type="submit"
                                                            value="search now">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="range-wrapp">
                                                        <h4>Price range</h4>
                                                        <div class="slider-range" data-counter="$"
                                                            data-position="start" data-from="0" data-to="5000"
                                                            data-min="0" data-max="5000">
                                                            <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                id="slider-range-0" aria-disabled="false">
                                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                    style="left: 0%; width: 88.64%;"></div><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 0%;"></a><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 88.64%;"></a>
                                                            </div>
                                                            <input type="text" class="amount-start" readonly=""
                                                                value="$0" id="amount-start-0">
                                                            <input type="text" class="amount-end" readonly=""
                                                                value="$1500" id="amount-end-0">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-xs-12 ">
                                        <div class="list-header clearfix">
                                            <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                <div class="drop">
                                                    <b>Sort by price</b>
                                                    <a href="#" class="drop-list"><i
                                                            class="fa fa-angle-down"></i></a>
                                                    <span style="display: none;">
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
                                                    <span style="display: none;">
                                                        <a href="#">ASC</a>
                                                        <a href="#">DESC</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="list-view-change">
                                                <div class="change-grid color-1 fr active"><i class="fa fa-th"></i>
                                                </div>
                                                {{-- <div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div> --}}
                                                <div class="change-to-label fr color-grey-8">View:</div>
                                            </div>
                                        </div>
                                        <div class="clearfix grid-content">
                                            <div class="list-item-entry">
                                                <div class="hotel-item style-3 bg-white">
                                                    <div class="table-view">
                                                        <div class="radius-top cell-view">
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in greece</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$703</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in italy</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in miami</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$400</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in USA</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in santorini</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$500</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in paris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in brasil</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monte carlo</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$200</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in bora bora</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$333</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in france</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$250</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in spaine</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$750</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_14.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in marmaris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_15.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$503</span> person</div>
                                                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                href="#">view more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c_pagination clearfix padd-120">
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev
                                                page</a>
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next
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
                                {{-- Mas Camps/Costumes --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_mas.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 ">
                                        <div class="list-header clearfix">
                                            <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                <div class="drop">
                                                    <b>Sort by price</b>
                                                    <a href="#" class="drop-list"><i
                                                            class="fa fa-angle-down"></i></a>
                                                    <span style="display: none;">
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
                                                    <span style="display: none;">
                                                        <a href="#">ASC</a>
                                                        <a href="#">DESC</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="list-view-change">
                                                <div class="change-grid color-1 fr active"><i class="fa fa-th"></i>
                                                </div>
                                                {{-- <div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div> --}}
                                                <div class="change-to-label fr color-grey-8">View:</div>
                                            </div>
                                        </div>
                                        <div class="clearfix grid-content">
                                            <div class="list-item-entry">
                                                <div class="hotel-item style-3 bg-white">
                                                    <div class="table-view">
                                                        <div class="radius-top cell-view">
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in greece</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$703</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in italy</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in miami</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$400</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in USA</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in santorini</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$500</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in paris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in brasil</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monte carlo</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$200</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in bora bora</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$333</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in france</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$250</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in spaine</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$750</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_14.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in marmaris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_15.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$503</span> person</div>
                                                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                href="#">view more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c_pagination clearfix padd-120">
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev
                                                page</a>
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next
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
                                {{-- Tours and Activities --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_tours.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="hotel-filter">
                                        <div class="baner-bar"
                                            style="box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0); position: relative; bottom:0px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>where</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="Destination; Zip Code"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hotels-block">
                                                        <h4>Check in</h4>
                                                        <div class="input-style-1">
                                                            <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                                                alt="">
                                                            <input type="text" placeholder="" class="datepicker "
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>rooms</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hotels-block">
                                                        <h4>Adult</h4>
                                                        <div class="count">
                                                            <a href="#" class="active">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a>
                                                            <a href="#">3+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="range-wrapp">
                                                        <h4>Price range</h4>
                                                        <div class="slider-range" data-counter="$"
                                                            data-position="start" data-from="0" data-to="5000"
                                                            data-min="0" data-max="5000">
                                                            <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                id="slider-range-0" aria-disabled="false">
                                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                    style="left: 0%; width: 81.5%;"></div><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 0%;"></a><a
                                                                    class="ui-slider-handle ui-state-default ui-corner-all"
                                                                    href="#" style="left: 81.5%;"></a>
                                                            </div>
                                                            <input type="text" class="amount-start" readonly=""
                                                                value="$0" id="amount-start-0">
                                                            <input type="text" class="amount-end" readonly=""
                                                                value="$1500" id="amount-end-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="submit">
                                                        <input class="c-button b-60 bg-white hv-orange" type="submit"
                                                            value="search now">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-xs-12 ">
                                        <div class="list-header clearfix">
                                            <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                <div class="drop">
                                                    <b>Sort by price</b>
                                                    <a href="#" class="drop-list"><i
                                                            class="fa fa-angle-down"></i></a>
                                                    <span style="display: none;">
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
                                                    <span style="display: none;">
                                                        <a href="#">ASC</a>
                                                        <a href="#">DESC</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="list-view-change">
                                                {{-- <div class="change-grid color-1 fr active"><i class="fa fa-th"></i>
                                                </div> --}}
                                                <div class="change-list color-1 fr active"><i class="fa fa-bars"></i>
                                                </div>
                                                <div class="change-to-label fr color-grey-8">View:</div>
                                            </div>
                                        </div>
                                        <div class="clearfix list-content">
                                            <div class="list-item-entry">
                                                <div class="hotel-item style-3 bg-white">
                                                    <div class="table-view">
                                                        <div class="radius-top cell-view">
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in greece</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$703</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in italy</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in miami</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$400</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in USA</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in santorini</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$500</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in paris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in brasil</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monte carlo</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$200</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in bora bora</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$333</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in france</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$250</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in spaine</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$750</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_14.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in marmaris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_15.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$503</span> person</div>
                                                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                href="#">view more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c_pagination clearfix padd-120">
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev
                                                page</a>
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next
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
                                {{-- Gallery --}}
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_12a.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 ">
                                        <div class="list-header clearfix">
                                            <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                                                <div class="drop">
                                                    <b>Sort by price</b>
                                                    <a href="#" class="drop-list"><i
                                                            class="fa fa-angle-down"></i></a>
                                                    <span style="display: none;">
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
                                                    <span style="display: none;">
                                                        <a href="#">ASC</a>
                                                        <a href="#">DESC</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="list-view-change">
                                                <div class="change-grid color-1 fr active"><i class="fa fa-th"></i>
                                                </div>
                                                {{-- <div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div> --}}
                                                <div class="change-to-label fr color-grey-8">View:</div>
                                            </div>
                                        </div>
                                        <div class="clearfix grid-content">
                                            <div class="list-item-entry">
                                                <div class="hotel-item style-3 bg-white">
                                                    <div class="table-view">
                                                        <div class="radius-top cell-view">
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in greece</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$703</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in italy</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in miami</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$400</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in USA</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in santorini</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$500</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in paris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in brasil</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$300</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monte carlo</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$200</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in bora bora</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$333</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in france</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$250</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in spaine</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$750</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_14.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in marmaris</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$273</span> person</div>
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
                                                            <img src="https://carnivalguide.co/new/img/tour_list/tour_grid_15.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="title hotel-middle clearfix cell-view">
                                                            <div class="date list-hidden">July <strong>19th</strong> to
                                                                July <strong>26th</strong></div>
                                                            <div class="date grid-hidden"><strong>19.07 - 26.07 /
                                                                    7</strong> night</div>
                                                            <h4><b>tours in monaco</b></h4>
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
                                                            <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue
                                                                arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus
                                                                ac congue arcu.</p>
                                                        </div>
                                                        <div class="title hotel-right clearfix cell-view">
                                                            <div class="hotel-person color-dark-2">from <span
                                                                    class="color-blue">$503</span> person</div>
                                                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                                                href="#">view more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c_pagination clearfix padd-120">
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev
                                                page</a>
                                            <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next
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
                                <div class="tab-info" style="position: relative;">
                                    {{-- <img class="img-responsive"
                                        src="https://carnivalguide.co/new/img/detail/guide_12a.jpg" alt=""> --}}
                                    <div class="carousel">
                                        <div class="carousel-wrapper">
                                            <button class="carousel-control prev">&#10094;</button>
                                            <div class="carousel-slides">
                                                <div class="slide active">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                        alt="Slide 3">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                        alt="Slide 4">
                                                </div>
                                                <div class="slide">
                                                    <img class="img-responsive img-full"
                                                        src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                        alt="Slide 5">
                                                </div>
                                            </div>
                                            <button class="carousel-control next">&#10095;</button>
                                        </div>
                                        <div class="carousel-thumbnails">
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_1.jpg"
                                                    alt="Thumbnail 1">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_2.jpg"
                                                    alt="Thumbnail 2">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_3.jpg"
                                                    alt="Thumbnail 3">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_4.jpg"
                                                    alt="Thumbnail 4">
                                            </div>
                                            <div class="thumbnail">
                                                <img class="img-responsive img-thumb"
                                                    src="https://carnivalguide.co/travel/img/detail/s_slide_5.jpg"
                                                    alt="Thumbnail 5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-grid row">
                                        @foreach ($all_blogs as $item)
                                            {{-- <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                                <div class="s_news-entry style-2">
                                                    <a href="{{ route('front.blog.detail', $item->slug) }}">
                                                        <img class="s_news-img img-responsive"
                                                            src="https://carnivalguide.co/new/img/inner/blog_grid_1.jpg"
                                                            alt="">
                                                    </a>
                                                    <h4 class="s_news-title"><a
                                                            href="blog_detail.html">{{ $item->title }}</a></h4>
                                                    <div class="tour-info-line clearfix">
                                                        <div class="tour-info fl">
                                                            <img src="img/calendar_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                        </div>
                                                        <div class="tour-info fl">
                                                            <img src="img/people_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                        </div>
                                                        <div class="tour-info fl">
                                                            <img src="img/comment_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">10 comments</span>
                                                        </div>
                                                    </div>
                                                    <div class="s_news-text color-grey-3">
                                                        {!! \Illuminate\Support\Str::limit($item->description, 100, '...') !!}
                                                    </div>
                                                    <a href="{{ route('front.blog.detail', $item->slug) }}"
                                                        class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                                            more</span></a>
                                                </div>
                                            </div> --}}
                                            <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                                <div class="s_news-entry style-2">
                                                    <a href="{{ route('front.blog.detail', $item->slug) }}">
                                                        <img class="s_news-img img-responsive"
                                                            src="https://carnivalguide.co/new/img/inner/blog_grid_1.jpg"
                                                            alt="">
                                                    </a>
                                                    <h4 class="s_news-title"><a
                                                            href="{{ route('front.blog.detail', $item->slug) }}">{{ $item->title }}</a>
                                                    </h4>
                                                    <div class="tour-info-line clearfix">
                                                        <div class="tour-info fl">
                                                            <img src="img/calendar_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                        </div>
                                                        <div class="tour-info fl">
                                                            <img src="img/people_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                        </div>
                                                        <div class="tour-info fl">
                                                            <img src="img/comment_icon_grey.png" alt="">
                                                            <span class="font-style-2 color-dark-2">10 comments</span>
                                                        </div>
                                                    </div>
                                                    <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                        labore et dolore magna aliqua.</div>
                                                    <a href="{{ route('front.blog.detail', $item->slug) }}"
                                                        class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                                            more</span></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <div class="blog-grid row">
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html">
                                                    <img class="s_news-img img-responsive" src="img/inner/blog_grid_1.jpg" alt="">
                                                </a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_2.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_3.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_4.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_5.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_6.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_7.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_8.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_9.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_10.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_11.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                        <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                                            <div class="s_news-entry style-2">
                                                <a href="blog_detail.html"><img class="s_news-img img-responsive" src="img/inner/blog_grid_12.jpg" alt=""></a>
                                                <h4 class="s_news-title"><a href="blog_detail.html">Lorem ipsum dolor</a></h4>
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                           <img src="img/calendar_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">03/07/2015</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/people_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">By Emma Stone</span>
                                                       </div>
                                                    <div class="tour-info fl">
                                                           <img src="img/comment_icon_grey.png" alt="">
                                                           <span class="font-style-2 color-dark-2">10 comments</span>
                                                       </div>
                                                </div>
                                                <div class="s_news-text color-grey-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="blog_detail.html" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="c_pagination clearfix">
                                        <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev
                                            page</a>
                                        <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next
                                            page</a>
                                        <ul class="cp_content color-3">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">...</a></li>
                                            <li><a href="#">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <script>
                                    document.querySelectorAll('.carousel').forEach(carousel => {
                                        const slides = carousel.querySelector('.carousel-slides');
                                        const prevButton = carousel.querySelector('.prev');
                                        const nextButton = carousel.querySelector('.next');
                                        let currentSlide = 0;

                                        prevButton.addEventListener('click', () => {
                                            currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.children.length - 1;
                                            console.log(currentSlide);
                                            slides.style.transform = `translateX(${currentSlide * 100}%)`;
                                        });

                                        nextButton.addEventListener('click', () => {
                                            currentSlide = (currentSlide < slides.children.length - 1) ? currentSlide + 1 : 0;
                                            console.log(currentSlide);

                                            slides.style.transform = `translateX(${currentSlide * 100}%)`;
                                        });

                                        carousel.querySelectorAll('.thumbnail').forEach((thumbnail, index) => {
                                            thumbnail.addEventListener('click', () => {
                                                currentSlide = index;
                                                slides.style.transform = `translateX(${index * 100}%)`;
                                            });
                                        });
                                    });
                                </script>
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
                                            class="swiper-pagination-switch"></span>
                                    </div>
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
                                            href="#">BEST
                                            HOTELS REVIEWS</a> by <span class="color-dark-2">Emma
                                            Stone</span></div>
                                    <div class="w-comment-text color-grey-3">Lorem ipsum dolor sit amet, eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="w-comment-entry">
                                    <div class="w-comment-date"><img
                                            src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                            alt=""> july <strong>21th 2015</strong></div>
                                    <div class="w-comment-title color-grey-3"><a class="color-dark-2"
                                            href="#">TOP
                                            BEST HOTELS AND TOURS</a> by <span class="color-dark-2">Emma Stone</span>
                                    </div>
                                    <div class="w-comment-text color-grey-3">Lorem ipsum dolor sit amet, eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="w-comment-entry">
                                    <div class="w-comment-date"><img
                                            src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                            alt=""> july <strong>29th 2015</strong></div>
                                    <div class="w-comment-title color-grey-3"><a class="color-dark-2"
                                            href="#">TOP
                                            BEST HOTELS AND TOURS</a> by <span class="color-dark-2">Emma Stone</span>
                                    </div>
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
            
            <!-- S_NEWS-ENTRY -->
            @include('front.home-template.news')
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
    @include('front.home-template.subscribe')

    @include('partials.brand_showcase')

    <!-- block  showcase-->
    {{-- @include('front.home-template.brand-showcase') --}}
    <!-- block  showcase-->
@endsection
