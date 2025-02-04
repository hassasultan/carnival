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
                    <div class="swiper-container main-slider-5 home-top-banner"  data-autoplay="0"
                        data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            <style>
                                .slider-extra {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    min-height: auto;
                                    background-color: #f3f3f3;
                                }

                                .slider {
                                    position: relative;
                                    width: 500px;
                                    height: 100%;
                                    overflow: hidden;
                                    border-radius: 0px;
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
                                    height: auto;
                                    border-radius: 0px;
                                    margin-top: 70px;
                                }

                                .slide-new video {
                                    width: 100%;
                                    height: 100%;
                                    border-radius: 0px;
                                    object-fit: cover;
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

                                .d-none {
                                    display: none !important;
                                }
                                @media screen and (max-width: 480px) {
                                    .slider-extra {
                                        min-height: auto;
                                    }
                                    .slide-new img {
                                        margin-top: 0px;
                                    }
                                }
                            </style>
                            @foreach ($carnivals as $key => $row)
                                <div class="swiper-slide @if ($key == 0) active @endif {{ $key }}"
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
                                                                                <div class="nav-tab-item d-none flight">
                                                                                    Flights
                                                                                </div>
                                                                                <div class="nav-tab-item d-none hotel">
                                                                                    Hotels
                                                                                </div>
                                                                                <div class="nav-tab-item d-none events">
                                                                                    Events
                                                                                </div>
                                                                                <div class="nav-tab-item d-none costume">
                                                                                    Costume
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tabs-content clearfix">
                                                                            <div class="tab-info active d-none flight-tab">
                                                                            </div>
                                                                            <div class="tab-info active d-none hotel-tab">
                                                                            </div>
                                                                            <div class="tab-info active d-none events-tab">
                                                                            </div>
                                                                            <div class="tab-info active d-none costume-tab">
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
                                                                        <img src="https://carnivalguide.co/new/img/home/vincymas-2024.jpg"
                                                                            alt="Image 1">
                                                                    </div>
                                                                    <div class="slide-new">
                                                                        <img src="https://carnivalguide.co/new/img/home/testimonal_3.jpg"
                                                                            alt="Image 2">
                                                                    </div>
                                                                    <div class="slide-new">
                                                                        {{-- <video  controls loop autoplay muted>
                                                                            <source src="https://www.shutterstock.com/shutterstock/videos/3433223239/preview/stock-footage-cozumel-mexico-behold-the-majesty-a-carnival-cruise-ship-sails-gracefully-across.webm" type="video/webm"><source src="https://www.shutterstock.com/shutterstock/videos/3433223239/preview/stock-footage-cozumel-mexico-behold-the-majesty-a-carnival-cruise-ship-sails-gracefully-across.mp4" type="video/mp4">
                                                                        </video> --}}
                                                                        <video
                                                                            src="https://carnivalguide.co/travel/video/soca.mp4"
                                                                            controls loop autoplay muted></video>
                                                                    </div>
                                                                    <div class="slide-new">
                                                                        <img src="https://carnivalguide.co/new/img/home/testimonal_3.jpg"
                                                                            alt="Image 4">
                                                                    </div>
                                                                </div>

                                                                <!-- Navigation buttons -->
                                                                <button class="prev"
                                                                    onclick="prevSlide()">&#10094;</button>
                                                                <button class="next"
                                                                    onclick="nextSlide()">&#10095;</button>
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
                                                            <h4 class="sb-title"><span
                                                                    style="">{{ $row->name }}</span>
                                                            </h4>
                                                            <div class="sb-price color-dark-2">
                                                                <span>$100</span> / per
                                                                {{-- <span>${{ $row->tickets[0]->price }}</span> / per --}}
                                                                person
                                                            </div>
                                                            <div class="sb-text">{!! $row->description !!}
                                                            </div>
                                                            <a href="{{ route('events.view.more', $row->id) }}"
                                                                class="c-button b-50 bg-green hv-green-o ">view
                                                                more</a>
                                                            <div class="slide-preview">
                                                                <a href="javacript:void(0);"
                                                                    onclick="showActionBox('flight', {{ $row->id }})"
                                                                    class="show-action-box" data-id="flight">
                                                                    <img class="img-responsive"
                                                                        src="https://carnivalguide.co/new/img/home/slide_preview_1.jpg"
                                                                        alt="">
                                                                </a>
                                                                <a href="javacript:void(0);"
                                                                    onclick="showActionBox('hotel', {{ $row->id }})"
                                                                    class="show-action-box" data-id="hotel"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_2.jpg"
                                                                        alt=""></a>
                                                                <a href="javacript:void(0);"
                                                                    onclick="showActionBox('costume', {{ $row->id }})"
                                                                    class="show-action-box" data-id="costume"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="slide-preview">
                                                                <a href="javacript:void(0);" class="show-action-box"
                                                                    data-id="flight"
                                                                    onclick="showActionBox('flight', {{ $row->id }})"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_4.jpg"
                                                                        alt=""></a>
                                                                <a href="javacript:void(0);" class="show-action-box"
                                                                    data-id="events"
                                                                    onclick="showActionBox('events', {{ $row->id }})"><img
                                                                        class="img-responsive"
                                                                        src="https://carnivalguide.co/travel/img/home/slide_preview_5.jpg"
                                                                        alt=""></a>
                                                                <a href="javacript:void(0);" class="show-action-box"
                                                                    data-id="hotel"
                                                                    onclick="showActionBox('hotel', {{ $row->id }})"><img
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
