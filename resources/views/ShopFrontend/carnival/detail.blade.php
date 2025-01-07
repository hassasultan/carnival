@extends('ShopFrontend.Layouts.layout')

@section('main')
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
                                <input type="checkbox"><span>Dont’s show this popup again!</span>
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
                                            {{ $row->user->first_name . ' ' . $row->user->last_name }}
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


        <div class="container">
            <div class="row">

                <div class="col-md-9">

                    <!-- block tab products -->
                    <div class="block-tab-products-opt1">

                        <div class="block-title">
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Queen Show
                                    </a>
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
                                    "992":{"items":3}
                                }'
                                    id="best-sell-div">

                                    @foreach ($carnival->mascamps as $item)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name"
                                                            src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                    {{-- <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <span class="product-item-label label-price">30%
                                                        <span>off</span></span> --}}
                                                </div>
                                                <div class="product-item-detail">
                                                    {{-- <strong class="product-item-name"><a href="">{{ $item->name }}</a></strong> --}}
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $item->name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div><!-- tab 1 -->

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
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
            @if (count($carnival->members) > 0)
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Carnival Members
                                        </a>
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
                                        "992":{"items":3}
                                    }'
                                        id="best-sell-div">

                                        @foreach ($carnival->members as $item)
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                        {{-- <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                        <span class="product-item-label label-price">30%
                                                            <span>off</span></span> --}}
                                                    </div>
                                                    <div class="product-item-detail">
                                                        {{-- <strong class="product-item-name"><a href="">{{ $item->name }}</a></strong> --}}
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">{{ $item->fullname }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div><!-- tab 1 -->

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
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
            @if (count($carnival->user->products) > 0)
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Products
                                        </a>
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
                                        "992":{"items":3}
                                    }'
                                        id="best-sell-div">

                                        @foreach ($carnival->user->products as $item)
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
                                                        <strong class="product-item-name"><a href="">{{ $item->title }}</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">{{ $item->new_price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div><!-- tab 1 -->

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
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
            @if (count($carnival->user->blogs) > 0)
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Blogs
                                        </a>
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
                                        "992":{"items":3}
                                    }'
                                        id="best-sell-div">

                                        @foreach ($carnival->user->blogs as $item)
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
                                                        {{-- <div class="product-item-actions">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to
                                                                Cart</span></button>
                                                        <span class="product-item-label label-price">30%
                                                            <span>off</span></span> --}}
                                                    </div>
                                                    <div class="product-item-detail">
                                                        {{-- <strong class="product-item-name"><a href="">{{ $item->name }}</a></strong> --}}
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">{{ $item->title }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div><!-- tab 1 -->

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
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                        @if ($product->brand_id == 1)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}"></a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane " role="tabpanel" id="brand1-2">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                        @if ($product->brand_id == 2)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}"></a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-3">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}"></a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-4">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}"></a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-5">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}"></a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-6">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-7">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-8">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  " role="tabpanel" id="brand1-9">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="{{ asset('shopAssets/images/media/index1/logo-showcase.jpg') }}"
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
                                                                        <a class="product-item-img" href=""><img
                                                                                alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name"><a
                                                                                href="">{{ $product->name }}</a></strong>
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
                                                                                                of
                                                                                                <span>100</span></span>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div><!-- block  showcase-->

        <!-- block  hot categories-->
        <div class="block-hot-categories-opt1">
            <div class="container">

                <div class="block-title ">
                    <span class="title">Hot categories</span>
                </div>

                <div class="block-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="item">

                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories1.png') }})">
                                    <div class="title"><span>Electronics</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Batteries & Chargers</a></li>
                                    <li><a href="">Headphone, Headset</a></li>
                                    <li><a href="">Home Audio</a></li>
                                    <li><a href="">Mp3 Player Accessories</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories2.png') }})">
                                    <div class="title"><span>Jewelry & <br>Watches</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Men Watches</a></li>
                                    <li><a href="">Wedding Rings</a></li>
                                    <li><a href="">Earring</a></li>
                                    <li><a href="">Necklaces</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories3.png') }})">
                                    <div class="title"><span>Sport & <br>Outdoors</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Golf Supplies</a></li>
                                    <li><a href="">Outdoor & Traveling Supplies</a></li>
                                    <li><a href="">Camping & Hiking</a></li>
                                    <li><a href="">Fishing</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories4.png') }})">
                                    <div class="title"><span>Digital</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Accessories for iPhone</a></li>
                                    <li><a href="">Accessories for iPad</a></li>
                                    <li><a href="">Accessories for Tablet PC</a></li>
                                    <li><a href="">Tablet PC</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories5.png') }})">
                                    <div class="title"><span>Fashion</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Batteries & Chargers</a></li>
                                    <li><a href="">Headphone, Headset</a></li>
                                    <li><a href="">Home Audio</a></li>
                                    <li><a href="">Mp3 Player Accessories</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories6.png') }})">
                                    <div class="title"><span>Furniture</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Batteries & Chargers </a></li>
                                    <li><a href="">Headphone, Headset</a></li>
                                    <li><a href="">Home Audio</a></li>
                                    <li><a href="">Mp3 Player Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories7.png') }})">
                                    <div class="title"><span>Health & <br>Beauty</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Bath & Body</a></li>
                                    <li><a href="">Shaving & Hair Removal</a></li>
                                    <li><a href="">Fragrances</a></li>
                                    <li><a href="">Salon & Spa Equipment</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <div class="description"
                                    style="background-image: url({{ asset('shopAssets/images/media/index1/hot-categories8.png') }})">
                                    <div class="title"><span>Toys & <br>Hobbies</span></div>
                                    <a href="" class="btn">shop now</a>
                                </div>
                                <ul>
                                    <li><a href="">Walkera</a></li>
                                    <li><a href="">Fpv System & Parts</a></li>
                                    <li><a href="">RC Cars & Parts</a></li>
                                    <li><a href="">Helicopters & Part</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!--block  hot categories-->

    </main><!-- end MAIN -->
@endsection

@section('script')
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

        function printTiles(id, response) {
            // console.log(response);
            $.each(response, function(index, product) {
                var percentageDiscount = Math.round(((product.old_price - product
                    .new_price) / product.old_price) * 100);
                var productHtml = `
                        <div class="product-item product-item-opt-1">
                            <div class="product-item-info">
                                <div class="product-item-photo">`;
                if (product.image != null && product.image != '') {
                    productHtml +=
                        `
                                        <a href="{{ route('get.products.detail', '') }}/${product.slug}" class="product-item-img"><img style="height:266px;" src="{{ asset('productImage/${product.image}') }}" alt="${product.title}"></a>`;
                } else {
                    productHtml +=
                        `
                                        <a href="{{ route('get.products.detail', '') }}/${product.slug}" class="product-item-img"><img style="height:266px;" src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg" alt="${product.title}"></a>`;
                }
                productHtml += `
                                    <div class="product-item-actions">
                                        <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="#" class="btn btn-compare"><span>compare</span></a>
                                        <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                    <span class="product-item-label label-price">${percentageDiscount}% <span>off</span></span>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="${product.slug}">${product.title}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$${product.new_price}</span>
                                            <span class="old-price">$${product.old_price}</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="${percentageDiscount}%">
                                                    <span style="width:${percentageDiscount}%">
                                                        <span><span>${percentageDiscount}</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                $('#' + id + ' .owl-item').html(productHtml);

            });
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
        }

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
