{{-- <style>
    .top-baner .pagination {
        text-align: left !important;
    }
</style>
<div class="top-baner">
    <div class="swiper-container main-slider-3" data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
        data-slides-per-view="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide active" data-val="0">
                <div class="clip">
                    <div class="bg bg-bg-chrome act"
                        style="background-image:url({{ asset('assets/images/slide.jpg') }})"></div>
                </div>
                <div class="vertical-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="main-title style-2 left">
                                    <h3>from <span class="color-blue-2 f-32">$400</span> / person</h3>
                                    <h1>popular sea tour</h1>
                                    <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue
                                        bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo
                                        elementum. Lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-val="1">
                <div class="clip">
                    <div class="bg bg-bg-chrome act"
                        style="background-image:url({{ asset('assets/images/slide.jpg') }})"></div>
                </div>
                <div class="vertical-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="main-title style-2 left">
                                    <h3>from <span class="color-blue-2 f-32">$400</span> / person</h3>
                                    <h1>popular sea tour</h1>
                                    <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue
                                        bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo
                                        elementum. Lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination pagination-left-2 poin-style-1"></div>
    </div>
</div> --}}

<style>
    .top-baner .pagination {
        text-align: left !important;
    }
</style>

<div class="top-baner">
    <div class="swiper-container main-slider-3" data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
        data-slides-per-view="1">
        <div class="swiper-wrapper">
            @foreach($banners as $index => $banner)
            <div class="swiper-slide {{ $index == 0 ? 'active' : '' }}" data-val="{{ $index }}">
                <div class="clip">
                    <div class="bg bg-bg-chrome act"
                        style="background-image:url({{ asset($banner->banner_image) }})"></div>
                </div>
                <div class="vertical-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="main-title style-2 left">
                                    <h3>from <span class="color-blue-2 f-32">$400</span> / person</h3>
                                    <h1>popular sea tour</h1>
                                    <p class="color-white-light">{{ $banner->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination pagination-left-2 poin-style-1"></div>
    </div>
</div>
