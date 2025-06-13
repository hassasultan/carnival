@extends('ShopFrontend.Layouts.layout')

@section('main')

<style>
    img[alt="product name"] {
        width: 230px !important;
        height: 236px !important;
        object-fit: cover !important;
    }
    .description {
        width: 100%;
        max-width: 270px;
        height: 110px;
        background-size: cover;      /* makes the image cover the entire box */
        background-position: center; /* centers the image */
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto; /* centers the box in its column */
    }
    .description .title {
        position: absolute;
        bottom: 40px;
        left: 10px;
        color: #fff;
    }
    .description .btn {
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    @media (max-width: 576px) {
        .description {
            max-width: 100%;
            height: auto; /* Let height adapt to screen if needed */
            aspect-ratio: 27 / 11; /* optional, preserves aspect ratio */
        }
        .block-hot-categories-opt1 .item {
            margin-left: auto;
            margin-right: auto;
        }
    }


</style>

    <main class="site-main">

        <!--  Popup Newsletter-->
        <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content"
                    style="background-image: url({{ asset('shopAssets/images/media/index1/Popup.jpg') }});">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="block-newletter">
                        <div class="block-title">signup for our newsletter & promotions</div>
                        <div class="block-content">
                            <p class="text-title">GET <span>50% <span>off</span></span></p>
                            <form>
                                <label>on your next purchase</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="checkbox btn-checkbox">
                            <label>
                                <input type="checkbox"><span>Dont's show this popup again!</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  Popup Newsletter-->

        <div class="block-section-top block-section-top1">
            <div class="container">
                <div class="box-section-top">

                    <!-- categori -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>

                        <div class="block-content">
                            <ul class="ui-categori">
                                @foreach ($vendor->subvendor as $row)
                                    <li class="">
                                        <a href="{{ route('front.subVendor.detail', $row->user->slug) }}">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                    alt="nav-cat"></span>
                                            {{ $row->name ?? $row->user->first_name . ' ' . $row->user->last_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($vendor->user->banners as $key => $banner)
                                <div class="item item{{ ++$key }}"
                                    style="background-image: url('{{ asset($banner->banner) }}');"
                                    data-dot="{{ $loop->iteration }}">
                                    <div class="description">
                                        <span class="title">{{ $banner->title }}</span>
                                        <span class="subtitle">{{ $banner->subtitle }}</span>
                                        <span class="des">{{ $banner->description }}</span>
                                        <a href="{{ $banner->button_link ?? '#' }}"
                                            class="btn">{{ $banner->button_text ?? 'Shop Now' }}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                    <!-- banner -->
                    <div class="banner-slide">
                        @foreach ($ads as $row)
                            <a href="" class="box-img"><img src="{{ asset('images/' . $row->image) }}"
                                    alt="banner-slide"></a>
                        @endforeach
                    </div><!-- banner -->

                </div>
            </div>
        </div>

        <!-- block  service-->
        <div class="container ">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service1.png') }}" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service2.png') }}" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service3.png') }}" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service4.png') }}" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- block  service-->

        @if (!is_null($carnival))
            <div class="container">
                @if (count($carnival->packageVendors('Events')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            {{-- {{ dd($carnival->mascamps->toArray(), $carnival->event_mascamps->toArray()) }} --}}
                            @if (count($carnival->events) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            {{-- <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Events
                                                </a>
                                            </li> --}}
                                             <li role="presentation" class="active"><a href="#floor1-1-events" id="best-seller-tab-events"
                                                    role="tab" data-toggle="tab">Event, On Trending </a></li>
                                            <li role="presentation"><a href="#floor1-2-events" id="new-events-tab" role="tab" data-toggle="tab">New Events </a></li>
                                            <li role="presentation"><a href="#floor1-3-events" id="best-seller-events-tab" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a></li>
                                        </ul>
                                    </div>

                                    <div class="block-content">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="floor1-1-events">
                                                <div class="owl-carousel owl-theme owl-categori owl-categori-opt1">
                                                    @foreach ($carnival->events as $row)
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="block-product-opt1">
                                                                    <div class="block-product-inner">
                                                                        <div class="product-item">
                                                                            <div class="product-item-inner">
                                                                                <div class="product-thumb">
                                                                                    <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                        class="product-thumb-link">
                                                                                        <img alt="product name"
                                                                                            src="{{ asset($row->image) }}"
                                                                                            class="img-responsive">
                                                                                    </a>
                                                                                    <div class="product-extra-link">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="product-link">
                                                                                            <i class="fa fa-link"
                                                                                                aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-info">
                                                                                    <h3 class="product-name">
                                                                                        <a
                                                                                            href="{{ route('front.event.detail', $row->slug) }}">
                                                                                            {{ $row->title }}
                                                                                        </a>
                                                                                    </h3>
                                                                                    <div class="product-price">
                                                                                        <span
                                                                                            class="price">{{ $row->price }}</span>
                                                                                    </div>
                                                                                    <div class="product-action">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="btn btn-add-to-cart">
                                                                                            <span>View</span>
                                                                                        </a>
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
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="floor1-2-events">
                                                <div class="owl-carousel owl-theme owl-categori owl-categori-opt1">
                                                    @foreach ($carnival->events as $row)
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="block-product-opt1">
                                                                    <div class="block-product-inner">
                                                                        <div class="product-item">
                                                                            <div class="product-item-inner">
                                                                                <div class="product-thumb">
                                                                                    <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                        class="product-thumb-link">
                                                                                        <img alt="product name"
                                                                                            src="{{ asset($row->image) }}"
                                                                                            class="img-responsive">
                                                                                    </a>
                                                                                    <div class="product-extra-link">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="product-link">
                                                                                            <i class="fa fa-link"
                                                                                                aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-info">
                                                                                    <h3 class="product-name">
                                                                                        <a
                                                                                            href="{{ route('front.event.detail', $row->slug) }}">
                                                                                            {{ $row->title }}
                                                                                        </a>
                                                                                    </h3>
                                                                                    <div class="product-price">
                                                                                        <span
                                                                                            class="price">{{ $row->price }}</span>
                                                                                    </div>
                                                                                    <div class="product-action">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="btn btn-add-to-cart">
                                                                                            <span>View</span>
                                                                                        </a>
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
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="floor1-3-events">
                                                <div class="owl-carousel owl-theme owl-categori owl-categori-opt1">
                                                    @foreach ($carnival->events as $row)
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="block-product-opt1">
                                                                    <div class="block-product-inner">
                                                                        <div class="product-item">
                                                                            <div class="product-item-inner">
                                                                                <div class="product-thumb">
                                                                                    <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                        class="product-thumb-link">
                                                                                        <img alt="product name"
                                                                                            src="{{ asset($row->image) }}"
                                                                                            class="img-responsive">
                                                                                    </a>
                                                                                    <div class="product-extra-link">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="product-link">
                                                                                            <i class="fa fa-link"
                                                                                                aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-info">
                                                                                    <h3 class="product-name">
                                                                                        <a
                                                                                            href="{{ route('front.event.detail', $row->slug) }}">
                                                                                            {{ $row->title }}
                                                                                        </a>
                                                                                    </h3>
                                                                                    <div class="product-price">
                                                                                        <span
                                                                                            class="price">{{ $row->price }}</span>
                                                                                    </div>
                                                                                    <div class="product-action">
                                                                                        <a href="{{ route('front.event.detail', $row->slug) }}"
                                                                                            class="btn btn-add-to-cart">
                                                                                            <span>View</span>
                                                                                        </a>
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
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- block tab products -->
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Carnival Members
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-8" id="best-seller-tab-8"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-8" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-8" id="new-arr-tab-8" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-8"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-8')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-1-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Queen Show
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-9" id="best-seller-tab-9"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-9" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-9" id="new-arr-tab-9" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-9"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-9')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-2-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-2-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Mascamps
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-10" id="best-seller-tab-10"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-10" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-10" id="new-arr-tab-10" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-10"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-10')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-3-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-3-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Artistes
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-11" id="best-seller-tab-11"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-11" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-11" id="new-arr-tab-11" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-11"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-11')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-4-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-4-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Products
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-12" id="best-seller-tab-12"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-12" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-12" id="new-arr-tab-12" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-12"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-12')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-5-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-5-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Blogs
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-13" id="best-seller-tab-13"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-13" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-13" id="new-arr-tab-13" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-13"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-13')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-6-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-6-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Services
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-14" id="best-seller-tab-14"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-14" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-14" id="new-arr-tab-14" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-14"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-14')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-7-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-7-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Videos
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-15" id="best-seller-tab-15"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-15" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-15" id="new-arr-tab-15" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-15"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-15')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-8-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-8-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Photos
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-16" id="best-seller-tab-16"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-16" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-16" id="new-arr-tab-16" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-16"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-16')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-9-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-9-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Audios
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-17" id="best-seller-tab-17"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-17" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-17" id="new-arr-tab-17" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-17"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-17')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-10-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-10-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Documents
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-18" id="best-seller-tab-18"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-18" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-18" id="new-arr-tab-18" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-18"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-18')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-11-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-11-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Others
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-19" id="best-seller-tab-19"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-19" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-19" id="new-arr-tab-19" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-19"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-19')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-12-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-12-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Contact Us
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-20" id="best-seller-tab-20"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-20" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-20" id="new-arr-tab-20" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-20"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-20')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-13-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-13-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    About Us
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-21" id="best-seller-tab-21"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-21" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-21" id="new-arr-tab-21" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-21"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-21')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-14-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-14-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Terms & Conditions
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-22" id="best-seller-tab-22"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-22" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-22" id="new-arr-tab-22" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-22"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-22')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
                                aria-hidden="true"></i></a>
                        <a href="#floor0-15-8" class="action action-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-15-8">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"
                            src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                    Privacy Policy
                    </span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#floor1-1-23" id="best-seller-tab-23"
                                        role="tab" data-toggle="tab">Best Seller </a></li>
                                <li role="presentation"><a href="#floor1-2-23" role="tab" data-toggle="tab">Most
                                        Viewed </a></li>
                                <li role="presentation"><a href="#floor1-3-23" id="new-arr-tab-23" role="tab"
                                        data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                @foreach ($categories as $row)
                                    <li role="presentation"><a href="#floor1-4-{{ $row->id }}-23"
                                            onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}-23')"
                                            role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="" class="action action-up"><i class="fa fa-angle-up"
@extends('ShopFrontend.Layouts.layout')

@section('main')

<style>
    img[alt="product name"] {
        width: 230px !important;
        height: 236px !important;
        object-fit: cover !important;
    }
    .description {
        width: 100%;
        max-width: 270px;
        height: 110px;
        background-size: cover;      /* makes the image cover the entire box */
        background-position: center; /* centers the image */
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto; /* centers the box in its column */
    }
    .description .title {
        position: absolute;
        bottom: 40px;
        left: 10px;
        color: #fff;
    }
    .description .btn {
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    @media (max-width: 576px) {
        .description {
            max-width: 100%;
            height: auto; /* Let height adapt to screen if needed */
            aspect-ratio: 27 / 11; /* optional, preserves aspect ratio */
        }
        .block-hot-categories-opt1 .item {
            margin-left: auto;
            margin-right: auto;
        }
    }


</style>

    <main class="site-main">

        <!--  Popup Newsletter-->
        <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content"
                    style="background-image: url({{ asset('shopAssets/images/media/index1/Popup.jpg') }});">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="block-newletter">
                        <div class="block-title">signup for our newsletter & promotions</div>
                        <div class="block-content">
                            <p class="text-title">GET <span>50% <span>off</span></span></p>
                            <form>
                                <label>on your next purchase</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="checkbox btn-checkbox">
                            <label>
                                <input type="checkbox"><span>Dont's show this popup again!</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  Popup Newsletter-->

        <div class="block-section-top block-section-top1">
            <div class="container">
                <div class="box-section-top">

                    <!-- categori -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>

                        <div class="block-content">
                            <ul class="ui-categori">
                                @foreach ($vendor->subvendor as $row)
                                    <li class="">
                                        <a href="{{ route('front.subVendor.detail', $row->user->slug) }}">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                    alt="nav-cat"></span>
                                            {{ $row->name ?? $row->user->first_name . ' ' . $row->user->last_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($vendor->user->banners as $key => $banner)
                                <div class="item item{{ ++$key }}"
                                    style="background-image: url('{{ asset($banner->banner) }}');"
                                    data-dot="{{ $loop->iteration }}">
                                    <div class="description">
                                        <span class="title">{{ $banner->title }}</span>
                                        <span class="subtitle">{{ $banner->subtitle }}</span>
                                        <span class="des">{{ $banner->description }}</span>
                                        <a href="{{ $banner->button_link ?? '#' }}"
                                            class="btn">{{ $banner->button_text ?? 'Shop Now' }}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                    <!-- banner -->
                    <div class="banner-slide">
                        @foreach ($ads as $row)
                            <a href="" class="box-img"><img src="{{ asset('images/' . $row->image) }}"
                                    alt="banner-slide"></a>
                        @endforeach
                    </div><!-- banner -->

                </div>
            </div>
        </div>

        <!-- block  service-->
        <div class="container ">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service1.png') }}" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service2.png') }}" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service3.png') }}" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service4.png') }}" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- block  service-->

        @if (!is_null($carnival))
            <div class="container">
                @if (count($carnival->packageVendors('Events')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            {{-- {{ dd($carnival->mascamps->toArray(), $carnival->event_mascamps->toArray()) }} --}}
                            @if (count($carnival->events) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            {{-- <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Events
                                                </a>
                                            </li> --}}
                                             <li role="presentation" class="active"><a href="#floor1-1-events" id="best-seller-tab-events"
                                                    role="tab" data-toggle="tab">Event, On Trending </a></li>
                                            <li role="presentation"><a href="#floor1-2-events" id="new-events-tab" role="tab" data-toggle="tab">New Events </a></li>
                                            <li role="presentation"><a href="#floor1-3-events" id="best-seller-events-tab" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a></li>
@extends('ShopFrontend.Layouts.layout')

@section('main')

<style>
    img[alt="product name"] {
        width: 230px !important;
        height: 236px !important;
        object-fit: cover !important;
    }
    .description {
        width: 100%;
        max-width: 270px;
        height: 110px;
        background-size: cover;      /* makes the image cover the entire box */
        background-position: center; /* centers the image */
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto; /* centers the box in its column */
    }
    .description .title {
        position: absolute;
        bottom: 40px;
        left: 10px;
        color: #fff;
    }
    .description .btn {
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    @media (max-width: 576px) {
        .description {
            max-width: 100%;
            height: auto; /* Let height adapt to screen if needed */
            aspect-ratio: 27 / 11; /* optional, preserves aspect ratio */
        }
        .block-hot-categories-opt1 .item {
            margin-left: auto;
            margin-right: auto;
        }
    }


</style>

    <main class="site-main">

        <!--  Popup Newsletter-->
        <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content"
                    style="background-image: url({{ asset('shopAssets/images/media/index1/Popup.jpg') }});">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="block-newletter">
                        <div class="block-title">signup for our newsletter & promotions</div>
                        <div class="block-content">
                            <p class="text-title">GET <span>50% <span>off</span></span></p>
                            <form>
                                <label>on your next purchase</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="checkbox btn-checkbox">
                            <label>
                                <input type="checkbox"><span>Dont's show this popup again!</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  Popup Newsletter-->

        <div class="block-section-top block-section-top1">
            <div class="container">
                <div class="box-section-top">

                    <!-- categori -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>

                        <div class="block-content">
                            <ul class="ui-categori">
                                @foreach ($vendor->subvendor as $row)
                                    <li class="">
                                        <a href="{{ route('front.subVendor.detail', $row->user->slug) }}">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                    alt="nav-cat"></span>
                                            {{ $row->name ?? $row->user->first_name . ' ' . $row->user->last_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($vendor->user->banners as $key => $banner)
                                <div class="item item{{ ++$key }}"
                                    style="background-image: url('{{ asset($banner->banner) }}');"
                                    data-dot="{{ $loop->iteration }}">
                                    <div class="description">
                                        <span class="title">{{ $banner->title }}</span>
                                        <span class="subtitle">{{ $banner->subtitle }}</span>
                                        <span class="des">{{ $banner->description }}</span>
                                        <a href="{{ $banner->button_link ?? '#' }}"
                                            class="btn">{{ $banner->button_text ?? 'Shop Now' }}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                    <!-- banner -->
                    <div class="banner-slide">
                        @foreach ($ads as $row)
                            <a href="" class="box-img"><img src="{{ asset('images/' . $row->image) }}"
                                    alt="banner-slide"></a>
                        @endforeach
                    </div><!-- banner -->

                </div>
            </div>
        </div>

        <!-- block  service-->
        <div class="container ">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service1.png') }}" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service2.png') }}" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service3.png') }}" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service4.png') }}" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- block  service-->

        @if (!is_null($carnival))
            <div class="container">
                @if (count($carnival->packageVendors('Events')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            {{-- {{ dd($carnival->mascamps->toArray(), $carnival->event_mascamps->toArray()) }} --}}
                            @if (count($carnival->events) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            {{-- <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Events
                                                </a>
                                            </li> --}}
                                             <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-1"
                                                    role="tab" data-toggle="tab">Event, On Trending </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">New Events </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-1" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a></li>
                                                </ul>
                                            </div>

                                    <div class="block-content tab-content">

                                        <!-- tab 1 -->
                                        <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1-6">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "480":{"items":2},
                                                "480":{"items":2},
                                                "768":{"items":3},
                                                "992":{"items":4}
                                            }'
                                                id="best-sell-div-6">
                                                @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div><!-- tab 1 -->

                                        <!-- tab 2-->
                                        <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'>
                                                 @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <!-- tab 3 -->
                                        <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="new-arrival-products-1">
                                                 @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>

                                </div><!-- block tab products -->
                            @endif
                        </div>
                        <div class="col-md-3">

                            <!-- block deals  of -->
                            <div class="block-deals-of block-deals-of-opt1">
                                <div class="block-title ">
                                    <span class="icon"></span>
                                    <div class="heading-title">latest deals</div>
                                </div>
                                <div class="block-content">

                                    <div class="owl-carousel" data-nav="false" data-dots="false" data-margin="30"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":1},
                                        "1200":{"items":1}
                                        }'>

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/12/25"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$108.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/11/25"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Sale Couple of
                                                            Smartphones</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/12/30"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Sale Couple of
                                                            Smartphones</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- block deals  of -->

                        </div>
                    </div>
                @endif
                @if (count($carnival->members) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-1">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Carnival Members
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-1"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-1" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":4},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor-2">
                                            @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                            {{-- <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button> --}}
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                             @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products-2">
                                         @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-2" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}-2">
                                                 @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-1">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"
                                    src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                            Queen Show
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-1"
                                                role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3" id="new-arr-tab-1" role="tab"
                                                data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        @foreach ($categories as $row)
                                            <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                    onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i></a>
                                <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">

                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                            </div>

                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img
                                        src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                        alt="label-featured"></span>
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                        alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1-2" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'
                                        id="best-seller-floor-2">
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane  fade" id="floor1-2-2" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane  fade" id="floor1-3-2" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'
                                        id="new-arrival-products-2">
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                @foreach ($categories as $row)
                                    <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'
                                            id="vendors-cat-div-{{ $row->id }}-2">
                                            <div class=" product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                        <span class="product-item-label label-price">30%
                                                            <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>

                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas
                                                            consequat mauris</a></strong>
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
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas
                                                            consequat mauris</a></strong>
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
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
                @if (count($carnival->packageVendors('MasBands - Leader')) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-3">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Mascamps
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-2"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-2" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor-3">
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products-3">
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-3" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}-3">
                                                    @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                @if (count($carnival->packageVendors('Artistes')) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-4">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Artistes
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-3"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-3" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1-4" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor-4">
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2-4" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3-4" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products-4">
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-4" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}-4">
                                            @foreach ($carnival->members as $member)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href=""><img alt="product name"
                                                                        src="{{ asset($member->image) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="">{{ $member->fullname }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                @if (count($carnival->user->products) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-5">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">Products</span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1"
                                                    id="best-seller-tab-4" role="tab" data-toggle="tab">On Sale </a>
                                            </li>
                                            <li role="presentation"><a href="#floor1-2" role="tab"
                                                    data-toggle="tab">New Product </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-4" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a>
                                            </li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}"
                                            alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}"
                                            alt="banner"></a>
                                </div>
                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1-5" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'
                                            id="best-seller-floor-5">
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2-5" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'>
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3-5" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'
                                            id="new-arrival-products-5">
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-5" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":2},
                                                    "600":{"items":3},
                                                    "768":{"items":3},
                                                    "992":{"items":4},
                                                    "1200":{"items":4}
                                                }'
                                                id="vendors-cat-div-{{ $row->id }}-5">
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>

                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                @if (count($carnival->user->blogs) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-6">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Blogs
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab-5"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab-5" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1-6" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor-6">
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('blog_images/' . $blog->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2-6" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('blog_images/' . $blog->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3-6" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products-6">
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->slug) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}-6" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}-6">
                                                    @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
            </div>
        @else
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1" role="tab" id="best-sell-main" data-toggle="tab">best
                                            SELLERS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct2" role="tab" id="on-sell-tab-6" data-toggle="tab">ON
                                            SALE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct3" role="tab" id="new-products-tab-6" data-toggle="tab">NEW
                                            PRODUCTS</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="block-content tab-content">

                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1-6">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                                            "0":{"items":1},
                                            "480":{"items":2},
                                            "480":{"items":2},
                                            "768":{"items":3},
                                            "992":{"items":4}
                                        }'
                                        id="best-sell-div-6">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-new">New</span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 1 -->

                                <!-- tab 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct2-6">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "480":{"items":2},
                            "768":{"items":3},
                            "992":{"items":4}
                        }'
                                        id="on-sell-div-6">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 2 -->

                                <!-- tab 3-->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct3-6">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "480":{"items":2},
                            "768":{"items":3},
                            "992":{"items":4}
                        }'
                                        id="new-product-div-6">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 3-->

                            </div>

                        </div><!-- block tab products -->

                    </div>

                    <div class="col-md-3">

                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">latest deals</div>
                            </div>
                            <div class="block-content">

                                <div class="owl-carousel" data-nav="false" data-dots="false" data-margin="30"
                                    data-responsive='{
                        "0":{"items":1},
                        "480":{"items":2},
                        "768":{"items":3},
                        "992":{"items":1},
                        "1200":{"items":1}
                        }'>

                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/12/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of1.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Maecenas consequat
                                                        mauris</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$108.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/11/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of2.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of
                                                        Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/12/30"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of3.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of
                                                        Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- block deals  of -->

                    </div>

                </div>
            </div>

            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0-7">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"
                                    src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">{{ $vendor->name }}</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li role="presentation" class="active"><a href="#floor1-1"
                                                id="best-seller-tab-7" role="tab" data-toggle="tab">Best Seller </a>
                                        </li>
                                        <li role="presentation"><a href="#floor1-2" role="tab"
                                                data-toggle="tab">Most
                                                Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3" id="new-arr-tab-7" role="tab"
                                                data-toggle="tab">New Arrivals <span class="label-cat">12</span></a>
                                        </li>
                                        @foreach ($categories as $row)
                                            <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                    onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i></a>
                                <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">

                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}"
                                        alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                            </div>

                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img
                                        src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                        alt="label-featured"></span>
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                        alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1-7" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'
                                        id="best-seller-floor-7">
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
@extends('ShopFrontend.Layouts.layout')

@section('main')

<style>
    img[alt="product name"] {
        width: 230px !important;
        height: 236px !important;
        object-fit: cover !important;
    }
    .description {
        width: 100%;
        max-width: 270px;
        height: 110px;
        background-size: cover;      /* makes the image cover the entire box */
        background-position: center; /* centers the image */
        background-repeat: no-repeat;
        position: relative;
        margin: 0 auto; /* centers the box in its column */
    }
    .description .title {
        position: absolute;
        bottom: 40px;
        left: 10px;
        color: #fff;
    }
    .description .btn {
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    @media (max-width: 576px) {
        .description {
            max-width: 100%;
            height: auto; /* Let height adapt to screen if needed */
            aspect-ratio: 27 / 11; /* optional, preserves aspect ratio */
        }
        .block-hot-categories-opt1 .item {
            margin-left: auto;
            margin-right: auto;
        }
    }


</style>

    <main class="site-main">

        <!--  Popup Newsletter-->
        <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content"
                    style="background-image: url({{ asset('shopAssets/images/media/index1/Popup.jpg') }});">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="block-newletter">
                        <div class="block-title">signup for our newsletter & promotions</div>
                        <div class="block-content">
                            <p class="text-title">GET <span>50% <span>off</span></span></p>
                            <form>
                                <label>on your next purchase</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="checkbox btn-checkbox">
                            <label>
                                <input type="checkbox"><span>Dont's show this popup again!</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  Popup Newsletter-->

        <div class="block-section-top block-section-top1">
            <div class="container">
                <div class="box-section-top">

                    <!-- categori -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>

                        <div class="block-content">
                            <ul class="ui-categori">
                                @foreach ($vendor->subvendor as $row)
                                    <li class="">
                                        <a href="{{ route('front.subVendor.detail', $row->user->slug) }}">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                    alt="nav-cat"></span>
                                            {{ $row->name ?? $row->user->first_name . ' ' . $row->user->last_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($vendor->user->banners as $key => $banner)
                                <div class="item item{{ ++$key }}"
                                    style="background-image: url('{{ asset($banner->banner) }}');"
                                    data-dot="{{ $loop->iteration }}">
                                    <div class="description">
                                        <span class="title">{{ $banner->title }}</span>
                                        <span class="subtitle">{{ $banner->subtitle }}</span>
                                        <span class="des">{{ $banner->description }}</span>
                                        <a href="{{ $banner->button_link ?? '#' }}"
                                            class="btn">{{ $banner->button_text ?? 'Shop Now' }}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                    <!-- banner -->
                    <div class="banner-slide">
                        @foreach ($ads as $row)
                            <a href="" class="box-img"><img src="{{ asset('images/' . $row->image) }}"
                                    alt="banner-slide"></a>
                        @endforeach
                    </div><!-- banner -->

                </div>
            </div>
        </div>

        <!-- block  service-->
        <div class="container ">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service1.png') }}" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service2.png') }}" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service3.png') }}" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{ asset('shopAssets/images/media/index1/service4.png') }}" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- block  service-->

        @if (!is_null($carnival))
            <div class="container">
                @if (count($carnival->packageVendors('Events')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            {{-- {{ dd($carnival->mascamps->toArray(), $carnival->event_mascamps->toArray()) }} --}}
                            @if (count($carnival->events) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            {{-- <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Events
                                                </a>
                                            </li> --}}
                                             <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                    role="tab" data-toggle="tab">Event, On Trending </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">New Events </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a></li>
                                                </ul>
                                            </div>

                                    <div class="block-content tab-content">

                                        <!-- tab 1 -->
                                        <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "480":{"items":2},
                                                "480":{"items":2},
                                                "768":{"items":3},
                                                "992":{"items":4}
                                            }'
                                                id="best-sell-div">
                                                @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div><!-- tab 1 -->

                                        <!-- tab 2-->
                                        <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'>
                                                 @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <!-- tab 3 -->
                                        <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="new-arrival-products">
                                                 @foreach ($carnival->events as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->banner)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->user->slug) }}">
                                                                            <span class="price">{{ $vendorName }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>

                                </div><!-- block tab products -->
                            @endif
                        </div>
                        <div class="col-md-3">

                            <!-- block deals  of -->
                            <div class="block-deals-of block-deals-of-opt1">
                                <div class="block-title ">
                                    <span class="icon"></span>
                                    <div class="heading-title">latest deals</div>
                                </div>
                                <div class="block-content">

                                    <div class="owl-carousel" data-nav="false" data-dots="false" data-margin="30"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":1},
                                        "1200":{"items":1}
                                        }'>

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/12/25"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$108.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/11/25"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Sale Couple of
                                                            Smartphones</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="deals-of-countdown">

                                                <div class="count-down-time" data-countdown="2016/12/30"></div>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/deals-of3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Sale Couple of
                                                            Smartphones</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                            <span class="old-price">(-20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- block deals  of -->

                        </div>
                    </div>
                @endif
                @if (count($carnival->members) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Carnival Members
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor">
                                            @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                            {{-- <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button> --}}
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                             @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products">
                                         @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('carnivalMember.detail', $member->id) }}"><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('carnivalMember.detail', $member->id) }}">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}">
                                                 @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"
                                    src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                            Queen Show
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        @foreach ($categories as $row)
                                            <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                    onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i></a>
                                <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">

                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                            </div>

                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img
                                        src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                        alt="label-featured"></span>
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                        alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                        id="best-seller-floor">
                                        @foreach ($carnival->mascamps as $mascamp)
                                            @if ($mascamp->package->title == "Models")
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('details.aboutUs', $mascamp->user->slug) }}">
                                                                @if($mascamp->logo)
                                                                    <img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                                @else
                                                                    <img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->user->image) }}"></a>
                                                                @endif
                                                            {{-- <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button> --}}
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        @foreach ($carnival->mascamps as $mascamp)
                                            @if ($mascamp->package->title == "Models")
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                        id="new-arrival-products">
                                        @foreach ($carnival->mascamps as $mascamp)
                                            @if ($mascamp->package->title == "Models")
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                @foreach ($categories as $row)
                                    <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="vendors-cat-div-{{ $row->id }}">
                                                @foreach ($carnival->members as $member)
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" style="height: 266px; width: 186px;"
                                                            href=""><img alt="product name"
                                                                src="{{ asset($member->image) }}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a
                                                                href="">{{ $member->fullname }}</a></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
                @if (count($carnival->packageVendors('MasBands - Leader')) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Mascamps
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor">
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products">
                                            @foreach ($carnival->packageVendors('MasBands - Leader') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.vendor.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.vendor.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}">
                                                    @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                @if (count($carnival->packageVendors('Artistes')) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Artistes
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor">
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products">
                                            @foreach ($carnival->packageVendors('Artistes') as $mascamp)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href="{{ route('artist.detail', $mascamp->user->slug) }}"><img alt="product name"
                                                                        src="{{ asset('images/' . $mascamp->logo) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="{{ route('artist.detail', $mascamp->user->slug) }}">{{ $mascamp->name }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}">
                                            @foreach ($carnival->members as $member)
                                                @if ($mascamp->slug != null)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                    href=""><img alt="product name"
                                                                        src="{{ asset($member->image) }}"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a
                                                                        href="">{{ $member->fullname }}</a></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
                @if (count($carnival->user->products) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">Products</span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1"
                                                    id="best-seller-tab" role="tab" data-toggle="tab">On Sale </a>
                                            </li>
                                            <li role="presentation"><a href="#floor1-2" role="tab"
                                                    data-toggle="tab">New Product </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">Best Seller <span class="label-cat">12</span></a>
                                            </li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}"
                                            alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}"
                                            alt="banner"></a>
                                </div>
                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'
                                            id="best-seller-floor">
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'>
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":4},
                                                "1200":{"items":4}
                                            }'
                                            id="new-arrival-products">
                                            @foreach ($carnival->user->products as $item)
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{ route('get.products.detail',$item->slug) }}"><img alt="product name"
                                                                    src="{{ asset('productImage/' . $item->image) }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="{{ route('get.products.detail',$item->slug) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">${{ $item->new_price }}</span>
                                                                    <span class="old-price">${{ $item->old_price }}</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>{{ $item->discount }}</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":2},
                                                    "600":{"items":3},
                                                    "768":{"items":3},
                                                    "992":{"items":4},
                                                    "1200":{"items":4}
                                                }'
                                                id="vendors-cat-div-{{ $row->id }}">
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                            <span class="product-item-label label-price">30%
                                                                <span>off</span></span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>

                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (count($carnival->user->blogs) > 0)
                    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                        <div class="container">
                            <div class="block-title ">
                                <span class="title"><img alt="img"
                                        src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                                Blogs
                                </span>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a href="#floor1-1" id="best-seller-tab"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                                    Viewed </a></li>
                                            <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                    data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                            @foreach ($categories as $row)
                                                <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                        onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                        role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="" class="action action-up"><i class="fa fa-angle-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}" alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}" alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="best-seller-floor">
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('blog_images/' . $blog->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'>
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('blog_images/' . $blog->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                        }'
                                            id="new-arrival-products">
                                            @foreach ($carnival->user->blogs as $blog)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href="{{ route('front.blog.detail', $blog->slug) }}"><img alt="product name"
                                                                    src="{{ asset('images/' . $mascamp->slug) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($categories as $row)
                                        <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'
                                                id="vendors-cat-div-{{ $row->id }}">
                                                    @foreach ($carnival->members as $member)
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" style="height: 266px; width: 186px;"
                                                                href=""><img alt="product name"
                                                                    src="{{ asset($member->image) }}"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $member->fullname }}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                @endif
            </div>
        @else
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">best
                                            SELLERS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct2" role="tab" id="on-sell" data-toggle="tab">ON
                                            SALE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct3" role="tab" id="new-products" data-toggle="tab">NEW
                                            PRODUCTS</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="block-content tab-content">

                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                                            "0":{"items":1},
                                            "480":{"items":2},
                                            "480":{"items":2},
                                            "768":{"items":3},
                                            "992":{"items":4}
                                        }'
                                        id="best-sell-div">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-new">New</span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 1 -->

                                <!-- tab 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "480":{"items":2},
                            "768":{"items":3},
                            "992":{"items":4}
                        }'
                                        id="on-sell-div">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 2 -->

                                <!-- tab 3-->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                        data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "480":{"items":2},
                            "768":{"items":3},
                            "992":{"items":4}
                        }'
                                        id="new-product-div">

                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                                            mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- tab 3-->

                            </div>

                        </div><!-- block tab products -->

                    </div>

                    <div class="col-md-3">

                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">latest deals</div>
                            </div>
                            <div class="block-content">

                                <div class="owl-carousel" data-nav="false" data-dots="false" data-margin="30"
                                    data-responsive='{
                        "0":{"items":1},
                        "480":{"items":2},
                        "768":{"items":3},
                        "992":{"items":1},
                        "1200":{"items":1}
                        }'>

                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/12/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of1.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Maecenas consequat
                                                        mauris</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$108.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/11/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of2.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of
                                                        Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/12/30"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/index1/deals-of3.jpg') }}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of
                                                        Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- block deals  of -->

                    </div>

                </div>
            </div>

            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"
                                    src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">{{ $vendor->name }}</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li role="presentation" class="active"><a href="#floor1-1"
                                                id="best-seller-tab" role="tab" data-toggle="tab">Best Seller </a>
                                        </li>
                                        <li role="presentation"><a href="#floor1-2" role="tab"
                                                data-toggle="tab">Most
                                                Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3" id="new-arr-tab" role="tab"
                                                data-toggle="tab">New Arrivals <span class="label-cat">12</span></a>
                                        </li>
                                        @foreach ($categories as $row)
                                            <li role="presentation"><a href="#floor1-4-{{ $row->id }}"
                                                    onclick="catProduct({{ $row->id }},'vendors-cat-div-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">{{ $row->title }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i></a>
                                <a href="#floor0-1" class="action action-down"><i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">

                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-1.jpg') }}"
                                        alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner1-2.jpg') }}"
                                        alt="banner"></a>
                            </div>

                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img
                                        src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                        alt="label-featured"></span>
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/baner-floor1.jpg') }}"
                                        alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'
                                        id="best-seller-floor">
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                        data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":4}
                        }'
                                        id="new-arrival-products">
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>

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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
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
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare"
                                                            href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
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
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                @foreach ($categories as $row)
                                    <div class="tab-pane  fade" id="floor1-4-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'
                                            id="vendors-cat-div-{{ $row->id }}">
                                            <div class=" product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                        <span class="product-item-label label-price">30%
                                                            <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>

                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor1-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Maecenas
                                                            consequat mauris</a></strong>
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
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
                @foreach ($vendor->subvendor as $key => $row)
                    <div class="block-floor-products block-floor-products-opt1 floor-products2"
                        id="floor0-{{ ++$key }}">
                        <div class="container">
                            <div class="block-title">
                                <a href="{{ route('front.subVendor.detail', $row->user->slug) }}">
                                    <span class="title"><img alt="img"
                                            src="{{ asset('shopAssets/images/media/index1/floor2.png') }}">{{ $row->user->first_name }}
                                        {{ $row->user->last_name }}</span>

                                </a>
                                <div class="links dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li role="presentation" class="active"><a
                                                    href="#floor-seller-{{ $row->id }}"
                                                    onclick="subvendorProduct('bestSale','{{ $row->user->id }}','best-seller-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">Best Seller </a></li>
                                            <li role="presentation"><a href="#floor-most-{{ $row->id }}"
                                                    role="tab" data-toggle="tab">Most Viewed </a></li>
                                            <li role="presentation"><a href="#floor-new-{{ $row->id }}"
                                                    onclick="subvendorProduct('new','{{ $row->user->id }}','new-arrival-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">New Arrivals <span
                                                        class="label-cat">12</span></a></li>
                                            @php
                                                $subCategories = collect();
                                            @endphp
                                            {{-- {{ dd($row->products->toArray()) }} --}}
                                            @foreach ($row->products as $product)
                                                @if ($product->subcategory)
                                                    @php
                                                        $subCategoryTitle = $product->subcategory->title;
                                                        $subCategoryId = $product->subcategory->id;
                                                        $subCategories->push([
                                                            'id' => $subCategoryId,
                                                            'title' => $subCategoryTitle,
                                                        ]);
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @foreach ($subCategories->unique() as $subCategory)
                                                <li role="presentation"><a
                                                        href="#floor2-subcat-{{ $subCategory['id'] }}" role="tab"
                                                        onclick="subcatProduct({{ $subCategory['id'] }},'vendors-subcat-div-{{ $subCategory['id'] }}')"
                                                        data-toggle="tab">{{ $subCategory['title'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @php
                                    $pre = $key - 1;
                                    $nxt = $key + 1;
                                @endphp
                                <div class="actions">
                                    <a href="#floor0-{{ $pre }}" class="action action-up"><i
                                            class="fa fa-angle-up" aria-hidden="true"></i></a>
                                    <a href="#floor0-{{ $nxt }}" class="action action-down"><i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="block-banner-floor">

                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner2-1.jpg') }}"
                                            alt="banner"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/banner2-2.jpg') }}"
                                            alt="banner"></a>
                                </div>

                            </div><!-- Banner -->

                            <div class="block-content">

                                <div class="col-banner">
                                    <span class="label-featured"><img
                                            src="{{ asset('shopAssets/images/icon/index1/label-featured.png') }}"
                                            alt="label-featured"></span>
                                    <a href="" class="box-img"><img
                                            src="{{ asset('shopAssets/images/media/index1/baner-floor2.jpg') }}"
                                            alt="baner-floor"></a>
                                </div>

                                <div class="col-products tab-content">

                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor-seller-{{ $row->id }}"
                                        role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'
                                            id="best-seller-subvendor-{{ $row->id }}">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                    <!-- tab 2-->
                                    <div class="tab-pane fade " id="floor-most-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'
                                            id="most-viwed-subvendor-{{ $row->id }}">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane fade " id="floor-new-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'
                                            id="new-arrival-subvendor-{{ $row->id }}">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                    <!-- tab 4 -->
                                    @foreach ($subCategories->unique() as $subCategory)
                                        <div class="tab-pane fade " id="floor2-subcat-{{ $subCategory['id'] }}"
                                            role="tabpanel">
                                            <div class="owl-carousel" data-nav="true" data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'id="vendors-subcat-div-{{ $subCategory['id'] }}">
                                                <div class="product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist"
                                                                    href=""><span>wishlist</span></a>
                                                                <a class="btn btn-compare"
                                                                    href=""><span>compare</span></a>
                                                                <a class="btn btn-quickview"
                                                                    href=""><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Maecenas
                                                                    consequat mauris</a></strong>
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
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- tab 5 -->
                                    <div class="tab-pane fade " id="floor2-5" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                    <!-- tab 6 -->
                                    <div class="tab-pane fade " id="floor2-6" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                    <!-- tab 7 -->
                                    <div class="tab-pane fade " id="floor2-7" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":4},
                                "1200":{"items":4}
                            }'>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img
                                                                alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-2.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-4.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                                                src="{{ asset('shopAssets/images/media/index1/floor2-3.jpg') }}"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare"
                                                                href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Maecenas
                                                                consequat mauris</a></strong>
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
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach

                <!-- Banner -->
                <div class="block-banner-opt1 effect-banner3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner7-1.jpg') }}"
                                        alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img
                                        src="{{ asset('shopAssets/images/media/index1/banner7-2.jpg') }}"
                                        alt="banner"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Banner -->

            </div>
        @endif

        @if (count($user->sponsors) > 1)
            @include('ShopFrontend.components.sponsers')
        @endif

        <!-- block  showcase-->
        @include('partials.brand_showcase')
        <!-- block  showcase-->

        <!-- block  hot categories-->

                {{-- {{ dd($all_categories->toArray()) }} --}}
                {{-- <div class="block-content">
                    <div class="row">
                        @foreach ($all_categories->chunk(2) as $categoryChunk)
                            <div class="col-md-3 col-sm-6">
                                @foreach ($categoryChunk as $category)
                                    <div class="item">
                                        <div class="description"
                                            style="background-image: url({{ $category->icon ? asset($category->icon) : asset('shopAssets/images/media/index1/default-category.png') }})">
                                            <div class="title"><span>{{ $category->title }}</span></div>
                                            <a href="" class="btn">shop now</a>
                                        </div>
                                        <ul>
                                            @foreach ($category->subcategories as $subcategory)
                                                <li><a href="">{{ $subcategory->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                <div class="block-hot-categories-opt1">
                    <div class="container">

                        <div class="block-title text-center">
                            <span class="title">Hot categories</span>
                        </div>

                        <div class="block-content">
                            <div class="row justify-content-center">
                                @foreach ($all_categories->chunk(4) as $categoryChunk)
                                    @foreach ($categoryChunk as $category)
                                        <div class="col-md-3 col-sm-6 col-10 mx-auto mb-4">
                                            <div class="item text-center">
                                                <div class="description"
                                                    style="background-image: url({{ $category->icon ? asset($category->icon) : asset('shopAssets/images/media/index1/default-category.png') }}); background-size: cover; background-position: center;">
                                                    <div class="title"><span>{{ $category->title }}</span></div>
                                                    <a href="" class="btn btn-primary mt-2">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

        {{-- <div class="block-hot-categories-opt1">
            <div class="container">

                <div class="block-title ">
                    <span class="title">Hot categories</span>
                </div>
               <div class="block-content">
                    <div class="row">
                        @foreach ($all_categories->chunk(4) as $categoryChunk)
                            @foreach ($categoryChunk as $category)
                                <div class="col-md-3 col-sm-6">
                                    <div class="item">
                                        <div class="description"
                                            style="background-image: url({{ $category->icon ? asset($category->icon) : asset('shopAssets/images/media/index1/default-category.png') }})">
                                            <div class="title"><span>{{ $category->title }}</span></div>
                                            <a href="" class="btn">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!--block  hot categories--> --}}

    </main><!-- end MAIN -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let carnival = @json($carnival);

            if (carnival !== null) {
                // Run your code here
                console.log("Carnival is not null:", carnival);

                // Example: show a modal
                $('#myModal').modal('show');
            }
        });
    </script>

    <!-- Custom scripts -->
    <script>
        var slug = '{{ $vendor->user_id }}';
        var cat = 0;
        var subcat = 0;
        @foreach ($vendor->subvendor as $row)
            subvendorProduct('bestSale', '{{ $row->user->id }}', 'best-seller-subvendor-{{ $row->id }}');
        @endforeach
        function subvendorProduct(attr, subVendorSlug, id) {
            slug = subVendorSlug;
            getProducts(attr, id);
            slug = '{{ $vendor->user_id }}';

        }

        function subcatProduct(subcategory, id) {
            var attr = "";
            subcat = subcategory;
            getProducts(attr, id);
            subcat = 0;
        }

        function catProduct(category, id) {
            var attr = "";
            cat = category;
            getProducts(attr, id);
            cat = 0;

        }
        // $(document).ready(function() {
        getProducts('bestSale', 'best-sell-div');
        getProducts('bestSale', 'best-seller-floor');
        $("#best-sell").click(function() {
            getProducts('bestSale', 'best-sell-div');
        });
        $("#best-seller-tab").click(function() {
            getProducts('bestSale', 'best-seller-floor');
        });
        $("#on-sell").click(function() {
            getProducts('onsale', 'on-sell-div');
        });
        $("#new-products").click(function() {
            getProducts('new', 'new-product-div');
        });
        $("#new-arr-tab").click(function() {
            getProducts('new', 'new-arrival-products');
        });

        function getProducts(attribute, id) {
            $.ajax({
                url: "{{ route('front.vendor.products', '') }}/" + slug,
                type: "GET",
                data: {
                    attribute: attribute,
                    cat: cat,
                    subcat: subcat,
                },
                success: function(response) {
                    console.log(response);
                    $('#product-listing').empty();
                    $('#product-listing').removeClass('blur-effect');

                    printTiles(id, response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Pagination click event handler
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            var page = $(this).data('page'); // Get the page number from the clicked link
            fetchProducts(page);
        });
        // });
    </script>

    <script>
        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function(event, ui) {

                        $('#amount-left').text(ui.values[0]);
                        $('#amount-right').text(ui.values[1]);

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            });

        })(jQuery);
    </script>
@endsection
