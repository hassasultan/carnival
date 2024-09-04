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
                                {{-- <style>
                                    .slider-extra {
                                        margin: 0;
                                        padding: 0;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        height: 100vh;
                                        background-color: #f0f0f0;
                                    }

                                    .slider-container {
                                        position: relative;
                                        width: 80%;
                                        max-width: 800px;
                                        overflow: hidden;
                                        border-radius: 10px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    }

                                    .slider {
                                        display: flex;
                                        transition: transform 0.5s ease-in-out;
                                    }

                                    .slide {
                                        min-width: 100%;
                                        box-sizing: border-box;
                                    }

                                    .slide img,
                                    .slide video {
                                        width: 100%;
                                        border-radius: 10px;
                                    }

                                    button.prev,
                                    button.next {
                                        position: absolute;
                                        top: 50%;
                                        transform: translateY(-50%);
                                        background-color: rgba(0, 0, 0, 0.5);
                                        color: white;
                                        border: none;
                                        padding: 10px;
                                        cursor: pointer;
                                        border-radius: 50%;
                                        z-index: 10;
                                        /* Ensure buttons are on top */
                                    }

                                    button.prev {
                                        left: 10px;
                                    }

                                    button.next {
                                        right: 10px;
                                    }
                                </style> --}}
                                <style>
                                    .slider-extra {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f3f3f3;
}

.slider {
    position: relative;
    width: 500px;
    height: 100%;
    overflow: hidden;
    border-radius: 10px;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
    height: 100%;

}

.slide-new {
    min-width: 100%;
    transition: opacity 0.5s ease-in-out;
}

.slide-new img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}
.slide-new video {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

button.prev, button.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
}

button.prev {
    left: 10px;
}

button.next {
    right: 10px;
}

button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
                                </style>
                                @foreach ($events as $key => $row)
                                    <div class="swiper-slide @if($key == 0) active @endif {{ $key }}"
                                        data-val="{{ $key }}">
                                        <div class="vertical-align">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                        <div class="slider-block clearfix">
                                                            <div class="slider-block-left slider-extra">
                                                                {{-- <img class="center-image" src="{{ asset($row->banner) }}"
                                                                    alt=""> --}}
                                                                <div class="city-entry bg-grey-2 city-entry-new"
                                                                    id="city-entry-{{ $key }}">
                                                                    <div
                                                                        class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                                                        <div class="tour-layer delay-1"></div>
                                                                        <img src="https://carnivalguide.co/travel/img/home/city_1.jpg"
                                                                            class="res-img" alt="">
                                                                        <div class="tour-caption">
                                                                            <div class="vertical-align">
                                                                                <h3 class="underline hover-it">St.Vincent
                                                                                </h3>
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
                                                                                    <div class="nav-tab-item ">
                                                                                        Flights
                                                                                    </div>
                                                                                    <div class="nav-tab-item ">
                                                                                        Hotels
                                                                                    </div>
                                                                                    <div class="nav-tab-item active">
                                                                                        Events
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tabs-content clearfix">
                                                                                <div class="tab-info ">
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">1. bristol
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">2. Mykonos
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">3. bristol
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-info ">
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">1. luxury
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">2. bristol
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">3. bristol
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-info active">
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">1. bristol
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">2. Mykonos
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hotel-line clearfix">
                                                                                        <a class="hotel-img black-hover"
                                                                                            href="#">
                                                                                            <img class="img-responsive"
                                                                                                src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                                                alt="">
                                                                                            <div
                                                                                                class="tour-layer delay-1">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="hotel-line-content">
                                                                                            <a class="hotel-line-title"
                                                                                                href="#">3. luxury
                                                                                                Hotel</a>
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
                                                                                                <i>485 Rewies</i>
                                                                                            </div>
                                                                                            <div class="hotel-line-price">
                                                                                                from $273</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="slider-container new-slider"
                                                                    id="new-slider-{{ $key }}">
                                                                    <div class="slider">
                                                                        <div class="slide">
                                                                            <img src="https://carnivalguide.co/new/img/home/vincymas-2024.jpg"
                                                                                alt="Image 1">
                                                                        </div>
                                                                        <div class="slide">
                                                                            <video
                                                                                src="https://carnivalguide.co/travel/video/soca.mp4"
                                                                                controls loop autoplay muted></video>
                                                                        </div>
                                                                        <div class="slide">
                                                                            <img src="http://127.0.0.1:8000/testimonial/cover/1721141270_testimonal_1.jpg"
                                                                                alt="Image 2">
                                                                        </div>
                                                                        <div class="slide">
                                                                            <video
                                                                                src="https://carnivalguide.co/travel/video/soca.mp4"
                                                                                controls loop autoplay muted></video>
                                                                        </div>
                                                                    </div>
                                                                    <button class="prev">❮</button>
                                                                    <button class="next">❯</button>
                                                                </div> --}}
                                                                
                                                                <div class="slider new-slider">
                                                                    <div class="slides">
                                                                        <div class="slide-new active">
                                                                            <img src="https://carnivalguide.co/new/img/home/vincymas-2024.jpg" alt="Image 1">
                                                                        </div>
                                                                        <div class="slide-new">
                                                                            <img src="https://carnivalguide.co/new/img/home/testimonal_3.jpg" alt="Image 2">
                                                                        </div>
                                                                        <div class="slide-new">
                                                                            <video src="https://carnivalguide.co/travel/video/soca.mp4" controls loop autoplay muted></video>
                                                                        </div>
                                                                        <div class="slide-new">
                                                                            <img src="https://carnivalguide.co/new/img/home/testimonal_3.jpg" alt="Image 4">
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Navigation buttons -->
                                                                    <button class="prev" onclick="prevSlide()">&#10094;</button>
                                                                    <button class="next" onclick="nextSlide()">&#10095;</button>
                                                                </div>
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
                                                                <h4 class="sb-title">{{ $row->name }} <span
                                                                        style="">Spice
                                                                        Mas</span>
                                                                </h4>
                                                                <div class="sb-price color-dark-2">
                                                                    <span>${{ $row->tickets[0]->price }}</span> / per
                                                                    person
                                                                </div>
                                                                <div class="sb-text">Spicemas is the premier cultural event
                                                                    in Grenada. It's the party everyone waits all year to
                                                                    participate in, watch, and enjoy.
                                                                    Spicemas events are colourful, funny, surprising, and
                                                                    energetic, linking back to Grenada's African, French,
                                                                    British, and Caribbean heritage.
                                                                </div>
                                                                <a href="{{ route('events.view.more', $row->id) }}"
                                                                    class="c-button b-50 bg-green hv-green-o ">view
                                                                    more</a>
                                                                <div class="slide-preview">
                                                                    @foreach ($row->images as $item)
                                                                        <a href="javacript:void(0);"
                                                                            class="show-action-box"
                                                                            data-id="{{ $key }}"
                                                                            onclick="showActionBox({{ $key }})"><img
                                                                                class="img-responsive "
                                                                                src="{{ asset($item->image_url) }}"
                                                                                alt=""></a>
                                                                    @endforeach
                                                                    <a href="javacript:void(0);"
                                                                        onclick="showActionBox({{ $key }})"
                                                                        class="show-action-box"
                                                                        data-id="{{ $key }}">
                                                                        <img class="img-responsive"
                                                                            src="https://carnivalguide.co/new/img/home/slide_preview_1.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <a href="javacript:void(0);"
                                                                        onclick="showActionBox({{ $key }})"
                                                                        class="show-action-box"
                                                                        data-id="{{ $key }}"><img
                                                                            class="img-responsive"
                                                                            src="https://carnivalguide.co/travel/img/home/slide_preview_2.jpg"
                                                                            alt=""></a>
                                                                    <a href="javacript:void(0);"
                                                                        onclick="showActionBox({{ $key }})"
                                                                        class="show-action-box"
                                                                        data-id="{{ $key }}"><img
                                                                            class="img-responsive"
                                                                            src="https://carnivalguide.co/travel/img/home/slide_preview_3.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="slide-preview">
                                                                    <a href="javacript:void(0);" class="show-action-box"
                                                                        data-id="{{ $key }}"><img
                                                                            class="img-responsive"
                                                                            src="https://carnivalguide.co/travel/img/home/slide_preview_4.jpg"
                                                                            alt=""></a>
                                                                    <a href="javacript:void(0);" class="show-action-box"
                                                                        data-id="{{ $key }}"><img
                                                                            class="img-responsive"
                                                                            src="https://carnivalguide.co/travel/img/home/slide_preview_5.jpg"
                                                                            alt=""></a>
                                                                    <a href="javacript:void(0);" class="show-action-box"
                                                                        data-id="{{ $key }}"><img
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
                                <script>
                                    let currentIndex = 0;

function getActiveSlides() {
    // Select all elements with the class 'slide-new'
    const slides = document.querySelectorAll('.slide-new');

    // Filter slides to only include those with an ancestor that has both '.swiper-slide' and '.active'
    return Array.from(slides).filter(slide => {
        return slide.closest('.swiper-slide-visible') !== null;
    });
}

function showSlide(index) {
    const slides = getActiveSlides(); // Get only the active slides
    console.log(slides);
    const totalSlides = slides.length;

    if (totalSlides === 0) return; // If there are no active slides, do nothing

    // Hide all slides
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });

    // Ensure index is within bounds
    if (index >= totalSlides) index = 0;
    if (index < 0) index = totalSlides - 1;

    // Show the current slide
    slides[index].style.display = 'block';
}

function prevSlide() {
    currentIndex--;

    // Ensure index wraps around
    const slides = getActiveSlides();
    if (currentIndex < 0) {
        currentIndex = slides.length - 1;
    }

    showSlide(currentIndex);
}

function nextSlide() {
    currentIndex++;

    // Ensure index wraps around
    const slides = getActiveSlides();
    if (currentIndex >= slides.length) {
        currentIndex = 0;
    }

    showSlide(currentIndex);
}

// Show the first slide initially
showSlide(currentIndex);

                                </script>

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
                        @foreach ($regions as $region)
                            <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
                                <a class="contry-item">
                                    <img class="img-responsive" src="{{ asset('images/' . $region->icon) }}"
                                        alt="">
                                    <h5>{{ $region->name }}</h5>
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
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
                        </div> --}}
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
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <div class="icon-block style-2 bg-white">
                                    <img class="icon-img bg-dr-blue-2 border-grey-2"
                                        src="{{ asset('images/' . $service->icon) }}" alt="">
                                    <h5 class="icon-title color-dark-2">{{ $service->title }}</h5>
                                    <div class="icon-text color-dark-2-light">{{ $service->description }}</div>
                                    <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                            more</span></a>
                                </div>
                            </div>
                        @endforeach
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
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide" data-val="{{ $testimonial->key }}">
                                    <div class="tour-item style-3">
                                        <div class="radius-top">
                                            <img src="{{ asset('testimonial/cover/' . $testimonial->cover_image) }}"
                                                alt="">
                                            <div class="tour-weather">{{ $testimonial->location }}</div>
                                        </div>
                                        <div class="tour-desc bg-white">
                                            <div class="rate">
                                                @foreach (range(1, $testimonial->rating) as $rating)
                                                    <span class="fa fa-heart color-green"></span>
                                                @endforeach
                                            </div>
                                            <img class="tm-people"
                                                src="{{ asset('testimonial/image/' . $testimonial->image) }}"
                                                alt="">
                                            <h4><a class="tour-title color-dark-2 link-green"
                                                    href="#">{{ $testimonial->name }}</a></h4>
                                            <div class="tour-text color-grey-3">{{ $testimonial->description }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                            @foreach ($siteGallery as $row)
                                <div class="swiper-slide" data-val="{{ $row->key }}">
                                    <div class="tour-item style-3">
                                        <div class="radius-top">
                                            <img src="{{ asset('images/' . $row->image) }}" alt="">

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide" data-val="1">
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
                            </div> --}}
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
                @foreach ($investors as $investor)
                    <div class="swiper-slide text-center">
                        <div class="partner-entry">
                            <a href="#"><img class="img-responsive"
                                    src="{{ asset('images/' . $investor->icon) }}" alt=""></a>
                        </div>
                    </div>
                @endforeach
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
@section('front-script')
    <script>
        $(document).ready(function() {
            $('.city-entry-new').css('display', 'none');
            // $('.new-slider').css('display','none');

        });

        function showActionBox(id) {
            $('.city-entry-new').css('display','block');
            $('.new-slider').css('display','none');
        }
    </script>
@endsection
