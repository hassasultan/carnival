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
        /* margin-top: 46px; */
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
<div class="full-height" style="height: auto !important;">
    <div class="video-wrapper">
        @foreach ($banners as $banner)
            @php
                $filePath = asset($banner->banner_image);
                $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
            @endphp

            @if (in_array($fileExtension, ['mp4', 'ogv', 'webm']))
                <!-- Video -->
                <video loop autoplay muted poster="https://carnivalguide.co/travel/img/poster.jpg" class="bgvid"
                    id="bgvid">
                    <source src="{{ $filePath }}" type="video/{{ $fileExtension }}" />
                </video>
            @else
                <!-- Image -->
                <img src="{{ $filePath }}" alt="Banner Image" class="banner-image">
            @endif
        @endforeach
        <div class="vertical-align">
            <div class="container" style="margin-top:30px">

                <div class="arrows">
                    <div class="swiper-container main-slider-5 home-top-banner" data-autoplay="0" data-loop="1"
                        data-speed="900" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            @foreach ($carnivals as $key => $row)
                                <div class="swiper-slide @if ($key == 0) active @endif {{ $key }}"
                                    data-val="{{ $key }}">
                                    <div class="vertical-align">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                    <div class="slider-block clearfix">
                                                        <div class="slider-block-left slider-extra">
                                                            <div class="city-entry bg-grey-2 city-entry-new"
                                                                id="city-entry-{{ $key }}">
                                                                <div
                                                                    class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                                                    <div class="tour-layer delay-1"></div>
                                                                    <img src="https://carnivalguide.co/travel/img/home/city_1.jpg"
                                                                        class="res-img" alt="">
                                                                    <div class="tour-caption">
                                                                        <div class="vertical-align">
                                                                            <h3 class="underline hover-it">
                                                                                St.Vincent
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
                                                                                <div
                                                                                    class="nav-tab-item d-none costume">
                                                                                    Costume
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tabs-content clearfix">
                                                                            <div
                                                                                class="tab-info active d-none flight-tab">
                                                                            </div>
                                                                            <div
                                                                                class="tab-info active d-none hotel-tab">
                                                                            </div>
                                                                            <div
                                                                                class="tab-info active d-none events-tab">
                                                                            </div>
                                                                            <div
                                                                                class="tab-info active d-none costume-tab">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="slider new-slider">
                                                                <div class="slides">
                                                                    @foreach ($row->images as $image)
                                                                        <div
                                                                            class="slide-new {{ $loop->first ? 'active' : '' }}">
                                                                            @php
                                                                                $extension = pathinfo(
                                                                                    $image->image,
                                                                                    PATHINFO_EXTENSION,
                                                                                );
                                                                                $imageUrl = asset(
                                                                                    'images/carnivalImages/' .
                                                                                        $image->image,
                                                                                );
                                                                            @endphp

                                                                            @if (in_array($extension, ['mp4', 'webm', 'ogg']))
                                                                                <video src="{{ $imageUrl }}"
                                                                                    controls loop autoplay
                                                                                    muted></video>
                                                                            @else
                                                                                <img src="{{ $imageUrl }}"
                                                                                    alt="Carnival Image">
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
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
                                                            <h4 class="sb-title" style="margin-bottom: 0px;">
                                                                <span style="">{{ $row->name }}</span>
                                                            </h4>
                                                            <div
                                                                style="color: #222;opacity: 0.6; font-size: 10px; font-family: 'Open Sans', sans-serif;">
                                                                @if ($row->city != null)
                                                                    {{ $row->city->name }},
                                                                @endif
                                                                {{ $row->country?->name ?? 'Country Not Set' }}
                                                            </div>
                                                            @php
                                                                $getDaySuffix = function ($day) {
                                                                    return match ($day % 10) {
                                                                        1 => $day == 11 ? 'th' : 'st',
                                                                        2 => $day == 12 ? 'th' : 'nd',
                                                                        3 => $day == 13 ? 'th' : 'rd',
                                                                        default => 'th',
                                                                    };
                                                                };

                                                                $startDate = Carbon\Carbon::parse($row->start_date);
                                                                $endDate = Carbon\Carbon::parse($row->end_date);

                                                                $startDay = $startDate->day;
                                                                $startMonth = $startDate->format('M');
                                                                $startSuffix = $getDaySuffix($startDay);

                                                                $endDay = $endDate->day;
                                                                $endMonth = $endDate->format('M');
                                                                $endSuffix = $getDaySuffix($endDay);
                                                            @endphp

                                                            <div class="sb-price color-dark-2">
                                                                <strong>
                                                                    {{ $startMonth }}{{ $startDay }}<sup>{{ $startSuffix }}</sup>
                                                                    -
                                                                    {{ $endMonth }}{{ $endDay }}<sup>{{ $endSuffix }}</sup>
                                                                </strong>
                                                            </div>
                                                            <div class="sb-text">{!! Str::limit($row->description, 250, ' rest ...') !!}
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
                        </div>
                        <div class="pagination pagination-hidden poin-style-1"></div>
                        <div class="arrow-wrapp arr-s-2">
                            <div class="cont-1170">
                                <div class="swiper-arrow-left sw-arrow" onclick="resetBanner()"><span
                                        class="fa fa-angle-left"></span>
                                </div>
                                <div class="swiper-arrow-right sw-arrow" onclick="resetBanner()"><span
                                        class="fa fa-angle-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

    function resetBanner() {
        console.log('yhi yhii haa');
    }

    // Initialize Swiper
    const swiper = new Swiper('.home-top-banner', {
        loop: true, // enable looping
        speed: 900, // slide transition speed
        slidesPerView: 1,
        on: {
            slideChange: function() {
                // When the slide changes (either via drag or button click)
                resetBanner();
            },
        },
    });

    function resetBanner() {
        console.log('Carousel slide has changed');
        // Your existing resetBanner functionality
    }

    document.querySelector('.swiper-arrow-left').addEventListener('click', () => {
        swiper.slidePrev(); // Go to previous slide
        resetBanner(); // Trigger reset
    });

    document.querySelector('.swiper-arrow-right').addEventListener('click', () => {
        swiper.slideNext(); // Go to next slide
        resetBanner(); // Trigger reset
    });
</script>
