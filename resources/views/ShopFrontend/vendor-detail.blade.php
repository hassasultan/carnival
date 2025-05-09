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
                                {{-- <li class="parent">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat1.png') }}"
                                                alt="nav-cat"></span>
                                        Electronics
                                    </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu"
                                        style="background-image: url({{ asset('shopAssets/images/media/index1/bgmenu.jpg') }});">
                                        <ul class="categori-list clearfix">

                                            <li class="col-sm-3">
                                                <strong class="title"><a href="">TElevision</a></strong>
                                                <ul>
                                                    <li><a href="">Skirts </a></li>
                                                    <li><a href="">Jackets</a></li>
                                                    <li><a href="">Jumpusuits</a></li>
                                                    <li><a href="">Scarvest</a></li>
                                                    <li><a href="">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="">Camera</a></strong>
                                                <ul>
                                                    <li><a href="">Skirts </a></li>
                                                    <li><a href="">Jackets</a></li>
                                                    <li><a href="">Jumpusuits</a></li>
                                                    <li><a href="">Scarvest</a></li>
                                                    <li><a href="">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}
                                {{-- <li class="">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat10.png') }}"
                                                alt="nav-cat"></span>
                                        Sport & Outdoors
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat9.png') }}"
                                                alt="nav-cat"></span>
                                        Watch & Jewellry
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                alt="nav-cat"></span>
                                        Flashlights & Lamps
                                    </a>
                                </li> --}}
                                {{-- {{ dd($vendor->user->events, $vendor->id, $vendor->user->id, \App\Models\Event::all()->pluck('user_id')) }}
                                @foreach ($vendor->user->events as $row)
                                    <li class="">
                                        <a href="{{ route('get.myEvent.detail', $row->slug) }}">
                                            <span class="icon"><img
                                                    src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                    alt="nav-cat"></span>
                                            {{ $row->name }}
                                        </a>
                                    </li>
                                @endforeach --}}
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

                            {{-- <div class="view-all-categori">
                                <a class="open-cate btn-view-all">All Categories</a>
                                @foreach ($subvendors as $row)
                                    <a href="{{ route('front.subVendor.detail', $row->user->slug) }}" class="open-cate btn-view-all">{{ $row->name }}</a>
                                @endforeach
                            </div> --}}
                        </div>

                    </div><!-- categori -->

                    <!-- block slide top -->
                    {{-- <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item item2"
                                style="background-image: url({{ asset('shopAssets/images/media/index1/slide2.jpg') }});"
                                data-dot="1">

                                <div class="description">
                                    <span class="title">NEW COLLECTION </span>
                                    <span class="subtitle">BIG SALE</span>
                                    <span class="des"> ENJOY UP TO 35% OFF</span>
                                    <a href="" class="btn">SHOP NOW</a>
                                </div>

                            </div>

                            <div class="item item1"
                                style="background-image: url({{ asset('shopAssets/images/media/index1/slide1.jpg') }});"
                                data-dot="2">

                                <div class="description">
                                    <span class="title">We’ve Take A Further </span>
                                    <span class="subtitle">20% Off <br> Accessories</span>
                                    <a href="" class="btn">shop now</a>
                                </div>

                            </div>

                            <div class="item item3"
                                style="background-image: url({{ asset('shopAssets/images/media/index1/slide3.jpg') }});"
                                data-dot="3">

                                <div class="description">
                                    <span class="title">Spring Fashion </span>
                                    <span class="subtitle">Fashion Colection Style 2016 </span>
                                    <a href="" class="btn">Now In Stock</a>
                                </div>

                            </div>
                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                    <!-- banner -->
                    <div class="banner-slide">
                        <a href="" class="box-img"><img
                                src="{{ asset('shopAssets/images/media/index1/banner-slide1.jpg') }}"
                                alt="banner-slide"></a>
                        <a href="" class="box-img"><img
                                src="{{ asset('shopAssets/images/media/index1/banner-slide2.jpg') }}"
                                alt="banner-slide"></a>
                    </div><!-- banner --> --}}

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
                        {{-- <a href="" class="box-img"><img
                                src="{{ asset('shopAssets/images/media/index1/banner-slide1.jpg') }}"
                                alt="banner-slide"></a>
                        <a href="" class="box-img"><img
                                src="{{ asset('shopAssets/images/media/index1/banner-slide2.jpg') }}"
                                alt="banner-slide"></a> --}}
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
                            @if (count($carnival->mascamps) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Events
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
                                                {{-- @foreach ($carnival->packageVendors('Events') as $item) --}}
                                                @foreach ($carnival->user->events as $item)
                                                {{-- {{ dd($item->user->events->toArray()) }} --}}
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
                                                                <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->slug) }}">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <a class="product-item-img" href="{{ route('get.myEvent.detail', $item->slug) }}">
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
                    <div class="row">
                        <div class="col-md-9">

                            <!-- block tab products -->
                            <div class="block-tab-products-opt1">

                                <div class="block-title">
                                    <ul class="nav" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tabproduct1" role="tab" id="best-sell"
                                                data-toggle="tab">Carnival Members
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
                                                            <a class="product-item-img"
                                                                href="{{ route('carnivalMember.detail', $item->id) }}"><img
                                                                    alt="product name"
                                                                    src="{{ asset($item->image) }}"></a>
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
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-9">
                        @if (count($carnival->mascamps) > 0)
                            <!-- block tab products -->
                            <div class="block-tab-products-opt1">

                                <div class="block-title">
                                    <ul class="nav" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Queen
                                                Show
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
                                            {{-- {{ dd($carnival->mascamps->toArray(), $carnival->members->toArray(), $carnival->user->products->toArray()) }} --}}
                                            @foreach ($carnival->mascamps as $item)
                                                @if ($item->package->title == 'Models')
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                @php
                                                                    $image = null;

                                                                    if ($item->logo) {
                                                                        $image = asset('images/' . $item->logo);
                                                                    } elseif ($item->user->image) {
                                                                        $image = asset('images/' . $item->user->image);
                                                                    } else {
                                                                        $image = asset(
                                                                            'shopAssets/images/media/product9.jpg',
                                                                        );
                                                                    }
                                                                @endphp
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name" src="{{ $image }}"></a>
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
                                                @endif
                                            @endforeach

                                        </div>
                                    </div><!-- tab 1 -->

                                </div>

                            </div><!-- block tab products -->
                        @endif
                    </div>

                </div>
                @if (count($carnival->packageVendors('MasBands - Leader')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            @if (count($carnival->mascamps) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Mascamps
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
                                                @foreach ($carnival->packageVendors('MasBands - Leader') as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->logo)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">{{ $vendorName }}</span>
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
                            @endif
                        </div>
                    </div>
                @endif
                @if (count($carnival->packageVendors('Artistes')) > 0)
                    <div class="row">
                        <div class="col-md-9">
                            @if (count($carnival->mascamps) > 0)
                                <!-- block tab products -->
                                <div class="block-tab-products-opt1">

                                    <div class="block-title">
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">
                                                    Artistes
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
                                                @foreach ($carnival->packageVendors('Artistes') as $item)
                                                    @php
                                                        $vendorLogo = $item->logo
                                                            ? asset('images/' . $item->logo)
                                                            : asset('images/' . $item->user->image);
                                                        $vendorName =
                                                            $item->name ?:
                                                            $item->user->first_name . ' ' . $item->user->last_name;
                                                    @endphp
                                                    <div class="product-item product-item-opt-1">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="">
                                                                    <img alt="product name" src="{{ $vendorLogo }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">{{ $vendorName }}</span>
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
                            @endif
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
                                            <a href="#tabproduct1" role="tab" id="best-sell"
                                                data-toggle="tab">Products
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
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
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
                                                            <strong class="product-item-name"><a
                                                                    href="">{{ $item->title }}</a></strong>
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
                                                            <a class="product-item-img" href=""><img
                                                                    alt="product name"
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
                            "992":{"items":3}
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
                            "992":{"items":3}
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
                            "992":{"items":3}
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
                                        {{-- <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">Men</a></li>
                            <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab">Kids </a></li>
                            <li role="presentation"><a href="#floor1-7"  role="tab" data-toggle="tab">Accessories</a></li> --}}
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
                            "992":{"items":3},
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
                            "992":{"items":3},
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
                            "992":{"items":3},
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
                                "992":{"items":3},
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
                                            {{-- <li role="presentation"><a href="#floor2-5"  role="tab" data-toggle="tab">Football           </a></li>
                                <li role="presentation"><a href="#floor2-6"  role="tab" data-toggle="tab">Swimming            </a></li>
                                <li role="presentation"><a href="#floor2-7"  role="tab" data-toggle="tab">Climbing</a></li> --}}
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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
                                "992":{"items":3},
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

                {{-- <div class="block-floor-products block-floor-products-opt1 floor-products3" id="floor0-3">
        <div class="container">
            <div class="block-title ">
                <span class="title"><img alt="img"  src="{{asset('shopAssets/images/media/index1/floor3.png')}}">Section Leader 2</span>
                <div class="links dropdown">
                    <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" >
                        <ul  >
                            <li role="presentation" class="active"><a href="#floor3-1"  role="tab" data-toggle="tab">Most Viewed   </a></li>
                            <li role="presentation"><a href="#floor3-2"  role="tab" data-toggle="tab">Television  </a></li>
                            <li role="presentation"><a href="#floor3-3"  role="tab" data-toggle="tab">Air Conditional      <span class="label-cat">12</span></a></li>
                            <li role="presentation"><a href="#floor3-4"  role="tab" data-toggle="tab">ARM       </a></li>
                            <li role="presentation"><a href="#floor3-5"  role="tab" data-toggle="tab">    Theater            </a></li>
                            <li role="presentation"><a href="#floor3-6"  role="tab" data-toggle="tab">Accessories          </a></li>
                        </ul>
                    </div>
                </div>
                <div class="actions">
                    <a href="#floor0-2" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                    <a href="#floor0-4" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Banner -->
            <div class="block-banner-floor">

                <div class="col-sm-6">
                    <a href="" class="box-img"><img src="{{asset('shopAssets/images/media/index1/banner3-1.jpg')}}" alt="banner"></a>
                </div>
                <div class="col-sm-6">
                    <a href="" class="box-img"><img src="{{asset('shopAssets/images/media/index1/banner3-2.jpg')}}" alt="banner"></a>
                </div>

            </div><!-- Banner -->

            <div class="block-content">

                <div class="col-banner">
                    <span class="label-featured"><img src="{{asset('shopAssets/images/icon/index1/label-featured.png')}}" alt="label-featured"></span>
                    <a href="" class="box-img"><img src="{{asset('shopAssets/images/media/index1/baner-floor3.jpg')}}" alt="baner-floor"></a>
                </div>

                <div class="col-products tab-content">

                    <!-- tab 1 -->
                    <div class="tab-pane active in  fade " id="floor3-1" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                    <div class="tab-pane fade " id="floor3-2" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                    <div class="tab-pane fade " id="floor3-3" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                    <div class="tab-pane fade " id="floor3-4" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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

                    <!-- tab 5 -->
                    <div class="tab-pane fade " id="floor3-5" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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

                    <!-- tab 6 -->
                    <div class="tab-pane fade " id="floor3-6" role="tabpanel">
                        <div class="owl-carousel"
                            data-nav="true"
                            data-dots="false"
                            data-margin="0"
                            data-responsive='{
                            "0":{"items":1},
                            "420":{"items":2},
                            "600":{"items":3},
                            "768":{"items":3},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-1.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-2.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-3.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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
                            <div class=" product-item  product-item-opt-1 ">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/index1/floor3-4.jpg')}}"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
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

                </div>

            </div>

        </div>
    </div> --}}

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

        @include('ShopFrontend.components.sponsers')

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
