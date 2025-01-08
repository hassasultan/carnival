<div class="main-wraper bg-grey-2 padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title" style="padding-top: 0px;">
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
