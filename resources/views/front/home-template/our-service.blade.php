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