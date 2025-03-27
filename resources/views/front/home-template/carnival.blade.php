<style>
    .carnival-listing {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .carnival-item {
        flex: 1 1 calc(33.333% - 20px);
        max-width: 300px;
        box-sizing: border-box;
    }

    .carnival-main-wraper {
        margin-bottom: 60px;
        text-align: center;
    }

    .discover-more {
        margin-top: 20px;
    }

    .discover-more a {
        border: 2px solid #ff6600;
        transition: all 0.3s ease;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #ff6600;
        color: #fff;
    }

    .discover-more a:hover {
        background-color: #fff;
        color: #ff6600;
        border-color: #ff6600;
    }

    .res-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 5px;
    }
</style>
<div class="main-wraper content-area-start">
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
                            <a class="contry-item" data-region="{{ $region->id }}">
                                <img class="img-responsive" src="{{ asset('images/' . $region->icon) }}" alt="">
                                <h5>{{ $region->name }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-wraper carnival-main-wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="color-dark-2-light">upcoming carnivals</h4>
                    <h2>most popular carnivals</h2>
                </div>
            </div>
        </div>
        <div class="row" id="carnival-wrapper">
            <div class="carnival-listing">
                @foreach ($carnivals as $key => $row)
                    <div class="carnival-item">
                        <div class="city-entry bg-grey-2">
                            <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                <div class="tour-layer delay-1"></div>
                                @if ($row->city->airport != null)
                                    <img src="{{ asset($row->city->airport) }}" class="res-img" alt="">
                                @else
                                    <img src="{{ asset('shopAssets/images/carnival/flight.jpeg') }}" class="res-img"
                                        alt="">
                                @endif
                                <div class="tour-caption">
                                    <div class="vertical-align">
                                        <h3 class="underline hover-it">{{ $row->name }}</h3>
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
                                            <div class="nav-tab-item active carnival-cover" data-img="{{ asset($row->city->airport) }}">
                                                Flights
                                            </div>
                                            <div class="nav-tab-item carnival-cover" data-img="{{ asset($row->city->hotel) }}">
                                                Hotels
                                            </div>
                                            <div class="nav-tab-item carnival-cover" data-img="{{ asset($row->city->event) }}">
                                                Events
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-content clearfix">
                                        <div class="tab-info active">
                                            <div class="hotel-line clearfix">
                                                <a class="hotel-img black-hover" href="#">
                                                    {{-- @if ($row->city->airport != null)
                                                        <img class="img-responsive" src="{{ asset($row->city->airport) }}"
                                                            alt="">
                                                    @else --}}
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                    {{-- @endif --}}

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
                                                    @if ($row->city->hotel != null)
                                                        <img class="img-responsive"
                                                            src="{{ asset($row->city->hotel) }}"
                                                            alt="">
                                                    @else
                                                        <img class="img-responsive"
                                                            src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                            alt="">
                                                    @endif

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
                                        <div class="discover-more">
                                            <a href="{{ route('events.view.more', $row->id) }}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (Route::is('front.home'))
            <a href="{{ route('front.carnival.listing') }}"
                class="c-button b-50 bg-green hv-green-o discover-more">DISCOVER MORE</a>
        @endif
    </div>
</div>
