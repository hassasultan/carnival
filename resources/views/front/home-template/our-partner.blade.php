{{-- <div class="main-wraper padd-90">
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
        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4"
        data-lg-slides="5" data-add-slides="6">
        <div class="swiper-wrapper">
            @foreach ($investors as $investor)
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="javascript:void(0);"><img class="img-responsive"
                                src="{{ asset('images/' . $investor->icon) }}" alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination pagination-hidden"></div>
    </div>
</div> --}}


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
        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4"
        data-lg-slides="5" data-add-slides="6">
        <div class="swiper-wrapper">
            @foreach ($carnival_commitee as $row)
                <div class="swiper-slide text-center">
                    <div class="partner-entry">
                        <a href="{{ route('front.vendor.detail', $row->user->slug) }}"><img class="img-responsive" style="height: 91px; width:115px;"  src="{{ asset("images/" . $row->logo) }}"
                                alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination pagination-hidden"></div>
    </div>
</div>
