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
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        padding-top: 115px;
        z-index: 1;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Darker overlay */
        z-index: -1;
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
    <div class="swiper-container main-slider-5 " data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
        data-slides-per-view="1">
        <div class="swiper-wrapper">
            {{-- <div class="swiper-slide adjust-height" data-val="0">
                <div class="video-container">
                    @php
                        $videoUrl = asset('videos/sample-video.mp4');
                    @endphp
                    <div class="hero"
                        style="background-image: url('https://carnivalguide.co/new/img/home/vincymas-2024.jpg')">
                        <h4>NORWAY TOURS</h4>
                        <h1>ROMANTIC HOLIDAYS IN NORWAY</h1>
                        <p class="text-orange">FROM <span>$400</span> PER PERSON</p>
                        <div class="play-button" onclick="openVideoPopup('{{ asset('files/1721143691.mp4') }}')">
                            <i class="fa fa-play"></i>
                        </div>
                        <p>JULY <span>19TH</span> TO JULY <span>26TH</span></p>
                        <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                        </p>
                        <div class="buttons">
                            <a href="#" class="c-button b-60 bg-red hv-red-o delay-2"><span>view more</span></a>
                            <a href="#" class="c-button b-60 bg-tr-1 hv-red delay-2"><span>book now</span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            @foreach ($carnivals->images as $image)
            {{ dd($image->toArray(), $image->city) }}
                <div class="swiper-slide adjust-height">
                    <div class="video-container">
                        <div class="hero"
                            style="background-image: url('{{ asset('images/carnivalImages/' . $image->image) }}')">
                            {{-- <h4>NORWAY TOURS</h4> --}}
                            <h4>{{ $image->carnival->city->name }} TOURS</h4>
                            <h1>ROMANTIC HOLIDAYS IN {{ $image->carnival->city->name }}</h1>
                            <p class="text-orange">FROM <span>$440</span> PER PERSON</p>

                            @php
                                $fileExt = pathinfo($image->image, PATHINFO_EXTENSION);
                            @endphp

                            @if (in_array($fileExt, ['mp4', 'avi', 'mov']))
                                <div class="play-button"
                                    onclick="openVideoPopup('{{ asset('images/carnivalImages/' . $image->image) }}')">
                                    <i class="fa fa-play"></i>
                                </div>
                            @endif

                            <p>JULY <span>19TH</span> TO JULY <span>26TH</span></p>
                            <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue bibendum
                                nulla.</p>
                            <div class="buttons">
                                <a href="#" class="c-button b-60 bg-red hv-red-o delay-2"><span>view
                                        more</span></a>
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
        videoContainer.innerHTML = "";
    }

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
