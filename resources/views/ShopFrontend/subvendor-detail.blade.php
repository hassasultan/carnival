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
                                <li class="parent">
                                    <a href="{{ route('front.vendor.detail', $subvendor->vendor->user->slug) }}">
                                        {{ $subvendor->vendor->name ?? $subvendor->user->full_name }}
                                    </a>
                                </li>
                            </ul>
                            {{-- <div class="view-all-categori">
                                <a class="open-cate btn-view-all">All Categories</a>
                            </div> --}}
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0"
                            data-items='1' data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($subvendor->user->banners as $key => $banner)
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
                                    <a href="#tabproduct1" role="tab" data-toggle="tab">best SELLERS </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabproduct3" role="tab" data-toggle="tab">NEW PRODUCTS</a>
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
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    {{-- <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/sellers1.jpg')}}"></a> --}}
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                            </div><!-- tab 1 -->

                            <!-- tab 2 -->
                            <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":3}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    {{-- <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/sellers1.jpg')}}"></a> --}}
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                            </div><!-- tab 2 -->

                            <!-- tab 3-->
                            <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":3}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    {{-- <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/sellers1.jpg')}}"></a> --}}
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                            </div><!-- tab 3-->

                        </div>

                    </div><!-- block tab products -->

                </div>

                <div class="col-md-3">

                    <!-- block deals  of -->
                    <div class="block-deals-of block-deals-of-opt1">
                        <div class="block-title ">
                            <span class="icon"></span>
                            <div class="heading-title">latest events</div>
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

                                @foreach ($subvendor->user->events as $item)
                                    @php
                                        $vendorLogo = asset('eventBanner/' . $item->banner);
                                        $vendorName = $item->title;
                                    @endphp
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="2016/12/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img"
                                                    href="{{ route('get.myEvent.detail', $item->slug) }}">
                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                </a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name">
                                                    <a href="{{ route('get.myEvent.detail', $item->slug) }}">
                                                        {{ $vendorName }}
                                                    </a>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div><!-- block deals  of -->

                </div>

            </div>
        </div>

        <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

            <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
                <div class="container">
                    <div class="block-title ">
                        <span class="title"><img alt="img"
                                src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">{{ $subvendor->name }}</span>
                        <div class="links dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <ul>
                                    <li role="presentation" class="active"><a href="#floor1-1" role="tab"
                                            data-toggle="tab">Best Seller </a></li>
                                    <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most
                                            Viewed </a></li>
                                    <li role="presentation"><a href="#floor1-3" role="tab" data-toggle="tab">New
                                            Arrivals <span class="label-cat">12</span></a></li>
                                    <li role="presentation"><a href="#floor1-4" role="tab" data-toggle="tab">Women
                                        </a></li>
                                    <li role="presentation"><a href="#floor1-5" role="tab" data-toggle="tab">Men</a>
                                    </li>
                                    <li role="presentation"><a href="#floor1-6" role="tab" data-toggle="tab">Kids
                                        </a></li>
                                    <li role="presentation"><a href="#floor1-7" role="tab"
                                            data-toggle="tab">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="" class="action action-up"><i class="fa fa-angle-up"
                                    aria-hidden="true"></i></a>
                            <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down"
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
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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
                            <div class="tab-pane  fade" id="floor1-4" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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

                            <!-- tab 5 -->
                            <div class="tab-pane fade " id="floor1-5" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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

                            <!-- tab 6 -->
                            <div class="tab-pane  fade" id="floor1-6" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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

                            <!-- tab 7 -->
                            <div class="tab-pane  fade" id="floor1-7" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'>
                                    @foreach ($subvendor->products as $row)
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.products.detail', $row->slug) }}"><img
                                                            alt="product name"
                                                            src="{{ asset('productImage/', $row->image) }}"></a>
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
                                                    <strong class="product-item-name"><a
                                                            href="{{ route('get.products.detail', $row->slug) }}">{{ $row->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{ $row->new_price }}</span>
                                                            <span class="old-price">{{ $row->old_price }}</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>{{ $row->discount }}</span>% of
                                                                            <span>100</span></span>
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

                        </div>

                    </div>

                </div>
            </div>

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

        @if (count($user->sponsors) > 1)
            @include('ShopFrontend.components.sponsers')
        @endif

        <!-- block  showcase-->
        @include('partials.brand_showcase')
        <!-- block  showcase-->

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
        $(document).ready(function() {
            // Function to fetch and display products
            function fetchProducts(page = 1) {

                // Apply skeleton loading structure
                for (let i = 0; i < 9; i++) { // Assuming 9 products per page
                    var skeletonHtml = `
                <li class="col-sm-4 product-item">
                    <div class="skeleton-item">
                        <div class="skeleton-content">
                            <div class="skeleton-line" style="width: 80%;"></div>
                            <div class="skeleton-line" style="width: 60%;"></div>
                            <div class="skeleton-line" style="width: 70%;"></div>
                        </div>
                    </div>
                </li>
            `;
                    $('#product-listing').append(skeletonHtml);
                }
                $.ajax({
                    url: "{{ route('get.products.home') }}",
                    type: "GET",
                    data: {
                        page: page
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty();
                        $('#product-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, product) {
                            var percentageDiscount = Math.round(((product.old_price - product
                                .new_price) / product.old_price) * 100);
                            var productHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="${product.slug}" class="product-item-img"><img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg')}}"
                                                alt="${product.title}"></a>
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
                        </li>
                    `;
                            $('#product-listing').append(productHtml);
                        });

                        // Display pagination links
                        $('.pagination').empty();
                        pre = 0;
                        nxt = 0;
                        pre = response.current_page - 1;
                        var previousPageHtml = `
                            <li class="action">
                                <a href="#" data-page="${pre}"><span><i aria-hidden="true" class="fa fa-angle-left"></i></span></a>
                            </li>
                        `;
                        $('.pagination').append(previousPageHtml);
                        for (let i = 1; i <= response.last_page; i++) {
                            var activeClass = i === response.current_page ? 'active' : '';
                            var paginationHtml = `
                            <li class="${activeClass}">
                                <a href="#" data-page="${i}">${i}</a>
                            </li>
                        `;
                            $('.pagination').append(paginationHtml);
                        }
                        nxt = response.current_page + 1;
                        var nextPageHtml = `
                            <li class="action">
                                <a href="#" data-page="${nxt}"><span><i aria-hidden="true" class="fa fa-angle-right"></i></span></a>
                            </li>
                        `;
                        $('.pagination').append(nextPageHtml);

                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Initial call to fetch products
            fetchProducts();

            // Pagination click event handler
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page'); // Get the page number from the clicked link
                fetchProducts(page);
            });
        });
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
