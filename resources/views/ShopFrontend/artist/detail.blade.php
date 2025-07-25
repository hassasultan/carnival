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
                                </li>
                                <li class="cat-link-orther">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat10.png') }}"
                                                alt="nav-cat"></span>
                                        Sport & Outdoors
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat9.png') }}"
                                                alt="nav-cat"></span>
                                        Watch & Jewellry
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="">
                                        <span class="icon"><img
                                                src="{{ asset('shopAssets/images/icon/index1/nav-cat8.png') }}"
                                                alt="nav-cat"></span>
                                        Flashlights & Lamps
                                    </a>
                                </li> --}}
                                @if ($user->role_id == 2)
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
                                @endif
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

                            @if ($user->role_id == 2)
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
                            @endif

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


        <div class="container">
            <div class="row">

                <div class="col-md-9">

                    <!-- block tab products -->
                    <div class="block-tab-products-opt1">

                        <div class="block-title">
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Recent Albums
                                    </a>
                                </li>
                                {{-- <li role="presentation">
                                    <a href="#tabproduct2" role="tab" id="on-sell" data-toggle="tab">ON SALE</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabproduct3" role="tab" id="new-products" data-toggle="tab">NEW
                                        PRODUCTS</a>
                                </li> --}}
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
                                    @foreach ($musics as $music)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.musics.detail', $music->id) }}"
                                                        style="height: 266px; width: 186px;">
                                                        <img alt="product name"
                                                            src="{{ asset('covers/' . $music->cover_image) }}">
                                                    </a>
                                                    {{-- src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a> --}}
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist"
                                                            href=""><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                                        <a class="btn btn-quickview"
                                                            href=""><span>quickview</span></a>
                                                    </div>
                                                    @if (Auth::check())
                                                        <button type="button" title="Add to Cart"
                                                            class="action btn-cart" data-music_id="{{ $music->id }}">
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    @else
                                                        <a href="{{ route('customer.login') }}" title="Add to Cart"
                                                            class="action btn-cart btn">
                                                            <span>Add to Cart</span>
                                                        </a>
                                                    @endif
                                                    {{-- <span class="product-item-label label-price">30% <span>off</span></span> --}}
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $music->song_title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $music->price }}</span>
                                                        </div>
                                                        {{-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div><!-- tab 1 -->

                            <a href="{{ route('front.myMusicGallery', $user->slug) }}" type="submit"
                                class="btn mb-2 btn-danger" id="">View All</a>

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
                                @foreach ($events as $event)
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="{{ $event->start_date }}"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('eventBanner/' . $event->banner) }}"></a>
                                                {{-- src="{{ asset('shopAssets/images/media/index1/deals-of1.jpg') }}"></a> --}}
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a
                                                        href="">{{ $event->title }}</a></strong>
                                                {{-- <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$108.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div> --}}
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

            <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-0">
                <div class="container">
                    <div class="block-title ">
                        <span class="title"><img alt="img"
                                src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">
                            @if ($user->role_id == 2)
                                {{ $vendor->name }}
                            @endif
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
                                    <li role="presentation"><a href="#floor1-4-women" onclick="genderProduct('women','vendors-women-div')" role="tab" data-toggle="tab">Women</a></li>
                                    <li role="presentation"><a href="#floor1-4-men" onclick="genderProduct('men','vendors-men-div')" role="tab" data-toggle="tab">Men</a></li>
                                    <li role="presentation"><a href="#floor1-4-kids" onclick="genderProduct('kids','vendors-kids-div')" role="tab" data-toggle="tab">Kids</a></li>
                                    <li role="presentation"><a href="#floor1-4-accessories" onclick="genderProduct('accessories','vendors-accessories-div')" role="tab" data-toggle="tab">Accessories</a></li>
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
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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
                                }'
                                    id="new-arrival-products">
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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

                            <!-- tab 4 - Women -->
                            <div class="tab-pane fade" id="floor1-4-women" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'
                                    id="vendors-women-div">
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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

                            <!-- tab 5 - Men -->
                            <div class="tab-pane fade" id="floor1-4-men" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'
                                    id="vendors-men-div">
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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

                            <!-- tab 6 - Kids -->
                            <div class="tab-pane fade" id="floor1-4-kids" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'
                                    id="vendors-kids-div">
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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

                            <!-- tab 7 - Accessories -->
                            <div class="tab-pane fade" id="floor1-4-accessories" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "420":{"items":2},
                                    "600":{"items":3},
                                    "768":{"items":3},
                                    "992":{"items":3},
                                    "1200":{"items":4}
                                }'
                                    id="vendors-accessories-div">
                                    @foreach ($costumes as $costume)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" style="height: 266px; width: 186px;"
                                                        href=""><img alt="product name"
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
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $costume->title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $costume->new_price }}</span>
                                                            @if ($costume->old_price)
                                                                <span class="old-price">${{ $costume->old_price }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $costume->discount }}%"
                                                                    class="rating-result">
                                                                    <span style="width:{{ $costume->discount }}%">
                                                                        <span><span>{{ $costume->discount }}</span>%
                                                                            of <span>100</span></span>
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

                            <!-- tab 8 - Categories -->
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
                                        @foreach ($costumes as $costume)
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" style="height: 266px; width: 186px;"
                                                            href=""><img alt="product name"
                                                                src="{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}"></a>
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
                                                        <strong class="product-item-name"><a
                                                                href="">{{ $costume->title }}</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">${{ $costume->new_price }}</span>
                                                                @if ($costume->old_price)
                                                                    <span
                                                                        class="old-price">${{ $costume->old_price }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="{{ $costume->discount }}%"
                                                                        class="rating-result">
                                                                        <span style="width:{{ $costume->discount }}%">
                                                                            <span><span>{{ $costume->discount }}</span>%
                                                                                of <span>100</span></span>
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
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
            @if ($user->role_id == 2)
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
                                            <li role="presentation"><a href="#floor-women-{{ $row->id }}"
                                                    onclick="subvendorGenderProduct('women','{{ $row->user->id }}','women-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">Women</a></li>
                                            <li role="presentation"><a href="#floor-men-{{ $row->id }}"
                                                    onclick="subvendorGenderProduct('men','{{ $row->user->id }}','men-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">Men</a></li>
                                            <li role="presentation"><a href="#floor-kids-{{ $row->id }}"
                                                    onclick="subvendorGenderProduct('kids','{{ $row->user->id }}','kids-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">Kids</a></li>
                                            <li role="presentation"><a href="#floor-accessories-{{ $row->id }}"
                                                    onclick="subvendorGenderProduct('accessories','{{ $row->user->id }}','accessories-subvendor-{{ $row->id }}')"
                                                    role="tab" data-toggle="tab">Accessories</a></li>
                                            @php
                                                $subCategories = collect();
                                            @endphp
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
                                                <li role="presentation"><a href="#floor2-subcat-{{ $subCategory['id'] }}"
                                                        role="tab"
                                                        onclick="subcatProduct({{ $subCategory['id'] }},'vendors-subcat-div-{{ $subCategory['id'] }}')"
                                                        data-toggle="tab">{{ $subCategory['title'] }}</a></li>
                                            @endforeach
                                            <li role="presentation"><a href="#floor2-7" role="tab"
                                                    data-toggle="tab">Climbing</a></li>
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
                                            @php
                                                $combined = collect();

                                                foreach ($vendor->subvendor as $subVendor) {
                                                    if ($subVendor->user) {
                                                        $events = $subVendor->user->events ?? collect();
                                                        $costumes = $subVendor->user->costumes ?? collect();

                                                        // Merge events and costumes by interleaving items
                                                        $merged = $events->zip($costumes)->flatten()->filter();

                                                        $combined = $combined->merge($merged);
                                                    }
                                                }
                                            @endphp

                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach

                                        </div>
                                    </div>

                                    <!-- tab 2 - Most Viewed -->
                                    <div class="tab-pane fade" id="floor-most-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                            id="most-viewed-subvendor-{{ $row->id }}">
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 3 - New Arrivals -->
                                    <div class="tab-pane fade" id="floor-new-{{ $row->id }}" role="tabpanel">
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
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 4 - Women -->
                                    <div class="tab-pane fade" id="floor-women-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                            id="women-subvendor-{{ $row->id }}">
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 5 - Men -->
                                    <div class="tab-pane fade" id="floor-men-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                            id="men-subvendor-{{ $row->id }}">
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 6 - Kids -->
                                    <div class="tab-pane fade" id="floor-kids-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                            id="kids-subvendor-{{ $row->id }}">
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- tab 7 - Accessories -->
                                    <div class="tab-pane fade" id="floor-accessories-{{ $row->id }}" role="tabpanel">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'
                                            id="accessories-subvendor-{{ $row->id }}">
                                            @foreach ($combined as $item)
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="">
                                                                <img alt="product name"
                                                                    src="{{ asset('shopAssets/images/media/index1/floor2-1.jpg') }}">
                                                            </a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="">
                                                                    <span>wishlist</span>
                                                                </a>
                                                                <a class="btn btn-compare" href="">
                                                                    <span>compare</span>
                                                                </a>
                                                                <a class="btn btn-quickview" href="">
                                                                    <span>quickview</span>
                                                                </a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name">
                                                                <a href="">{{ $item->name ?? 'Product Name' }}</a>
                                                            </strong>
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            <!-- Banner -->
            <div class="block-banner-opt1 effect-banner3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="" class="box-img"><img
                                    src="{{ asset('shopAssets/images/media/index1/banner7-1.jpg') }}" alt="banner"></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="box-img"><img
                                    src="{{ asset('shopAssets/images/media/index1/banner7-2.jpg') }}" alt="banner"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Banner -->

        </div>

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
            function fetchMusic(page = 1, selectedCategories = [], priceRanges = [],
                selectedBrands = [], musicCondition = [], stockCondition = [], sale = null) {
                $('#music-listing').html('');

                // Apply skeleton loading structure
                for (let i = 0; i < 18; i++) { // Assuming 9 musics per page
                    var skeletonHtml = `
                    <li class="col-sm-4 music-item">
                        <div class="skeleton-item">
                            <div class="skeleton-content">
                                <div class="skeleton-line" style="width: 80%;"></div>
                                <div class="skeleton-line" style="width: 60%;"></div>
                                <div class="skeleton-line" style="width: 70%;"></div>
                            </div>
                        </div>
                    </li>
                `;
                    $('#music-listing').append(skeletonHtml);
                }
                $.ajax({
                    url: "{{ route('get.musics.home') }}",
                    type: "GET",
                    data: {
                        page: page,
                        categories: selectedCategories,
                        // music_type: musicType,
                        price_ranges: priceRanges,
                        brands: selectedBrands,
                        music_condition: musicCondition,
                        stock_condition: stockCondition,
                        sale: sale
                    },
                    success: function(response) {
                        console.log(response);
                        $('#music-listing').empty();
                        $('#music-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, music) {
                            var percentageDiscount = music.price;
                            var image = null;
                            console.log(music.image);
                            if (music.image != null && music.image != '') {
                                image = "{{ asset('musicImage/') }}/" + music.image;
                            } else {
                                image =
                                    'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                            }
                            var musicHtml = `
                    <li class="col-sm-4 music-item">
                        <div class="music-item-opt-1">
                            <div class="music-item-info">
                                <div class="music-item-photo">
                                    <a href="{{ route('get.musics.detail', '') }}/${music.id}" class="music-item-img"><img style="width:200px;height:200px;" src="${image}"
                                            alt="${music.song_title}"></a>
                                    <div class="music-item-actions">
                                        <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="#" class="btn btn-compare"><span>compare</span></a>
                                        <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                    <span class="music-item-label label-price">${percentageDiscount}% <span>off</span></span>
                                </div>
                                <div class="music-item-detail">
                                    <strong class="music-item-name"><a href="{{ route('get.musics.detail', '') }}/${music.id}">${music.song_title}</a></strong>
                                    <div class="clearfix">
                                        <div class="music-item-price">
                                            <span class="price">$${music.price}</span>
                                            <span class="old-price">$${music.price}</span>
                                        </div>
                                        <div class="music-reviews-summary">
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
                            $('#music-listing').append(musicHtml);
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

            function getSelectedCategories() {
                let selectedCategories = [];
                $('.category-checkbox:checked').each(function() {
                    selectedCategories.push($(this).val());
                });
                return selectedCategories;
            }

            function getSelectedPriceRanges() {
                let priceRanges = [];
                $('.price-checkbox:checked').each(function() {
                    let min = $(this).data('min');
                    let max = $(this).data('max');
                    priceRanges.push({
                        min: min,
                        max: max
                    });
                });
                return priceRanges;
            }

            function getSelectedBrands() {
                let selectedBrands = [];
                $('.brand-checkbox:checked').each(function() {
                    selectedBrands.push($(this).val());
                });
                return selectedBrands;
            }

            function getSelectedMusicCondition() {
                let musicCondition = [];
                $('.music_condition:checked').each(function() {
                    musicCondition.push($(this).val());
                });
                return musicCondition;
            }

            function getSelectedStockCondition() {
                let stockCondition = [];
                $('.stock_condition:checked').each(function() {
                    stockCondition.push($(this).val());
                });
                return stockCondition;
            }

            function getSaleStatus() {
                return $('#sale').is(':checked') ? 1 : null;
            }

            // Category filter
            $(document).on('click', '.category', function() {
                $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
                    return !value;
                });

                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            // Music type filter
            // $(document).on('click', '.music_type', function() {
            //     let selectedCategories = getSelectedCategories();
            //     let musicType = $(this).is(':checked') ? 1 : null;
            //     let priceRanges = getSelectedPriceRanges();
            //     let selectedBrands = getSelectedBrands();
            //     let musicCondition = getSelectedMusicCondition();
            //     let stockCondition = getSelectedStockCondition();
            //     let sale = getSaleStatus();

            //     fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
            //         musicCondition, stockCondition, sale);
            // });

            // Price filter
            $(document).on('click', '.price-checkbox', function() {
                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            // Brand filter
            $(document).on('click', '.brand-checkbox', function() {
                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            // Event listeners for filter options
            $(document).on('click', '.music_condition', function() {
                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            $(document).on('click', '.stock_condition', function() {
                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            $(document).on('click', '#sale', function() {
                let selectedCategories = getSelectedCategories();
                // let musicType = $('.music_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let musicCondition = getSelectedMusicCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchMusic(1, selectedCategories, priceRanges, selectedBrands,
                    musicCondition, stockCondition, sale);
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                fetchMusic(page);
            });

            // Initial fetch
            fetchMusic();
        });
    </script>

    <script>
        // Gender-based product filtering functions
        function genderProduct(gender, id) {
            $.ajax({
                url: "{{ route('front.vendor.products', '') }}/{{ $user->id }}",
                type: "GET",
                data: {
                    gender: gender,
                },
                success: function(response) {
                    console.log(response);
                    printTiles(id, response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function catProduct(category, id) {
            var attr = "";
            var cat = category;
            getProducts(attr, id, cat);
        }

        function getProducts(attribute, id, category = 0) {
            $.ajax({
                url: "{{ route('front.vendor.products', '') }}/{{ $user->id }}",
                type: "GET",
                data: {
                    attribute: attribute,
                    cat: category,
                },
                success: function(response) {
                    console.log(response);
                    printTiles(id, response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function printTiles(id, products) {
            $('#' + id).empty();
            $.each(products, function(index, product) {
                var image = product.image ? "{{ asset('productImage/') }}/" + product.image : "{{ asset('shopAssets/images/media/index1/sellers1.jpg') }}";
                var productHtml = `
                    <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                            <div class="product-item-photo">
                                <a class="product-item-img" style="height: 266px; width: 186px;" href="">
                                    <img alt="product name" src="${image}">
                                </a>
                                <div class="product-item-actions">
                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                </div>
                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-item-detail">
                                <strong class="product-item-name"><a href="">${product.title}</a></strong>
                                <div class="clearfix">
                                    <div class="product-item-price">
                                        <span class="price">$${product.new_price}</span>
                                        ${product.old_price ? `<span class="old-price">$${product.old_price}</span>` : ''}
                                    </div>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <div title="${product.discount || 0}%" class="rating-result">
                                                <span style="width:${product.discount || 0}%">
                                                    <span><span>${product.discount || 0}</span>% of <span>100</span></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                $('#' + id).append(productHtml);
            });
        }

        // Subvendor gender-based product filtering function
        function subvendorGenderProduct(gender, subVendorSlug, id) {
            $.ajax({
                url: "{{ route('front.vendor.products', '') }}/" + subVendorSlug,
                type: "GET",
                data: {
                    gender: gender,
                },
                success: function(response) {
                    console.log(response);
                    printTiles(id, response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
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
    <script>
        // add to cart
        $(document).ready(function() {
            // var quantity = $('.input-qty').val();
            $('.btn-cart').click(function() {
                var musicId = $(this).data('music_id');
                var quantity = 1;
                auth = "{{ auth()->check() }}";
                console.log(auth);
                if (auth != true) {
                    window.location.href = '/login';
                } else {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('add.to.cart') }}',
                        data: {
                            product_id: musicId,
                            quantity: quantity,
                            type: 'music',
                        },
                        success: function(response) {

                            console.log(response);
                            var cartItems = response;
                            var html = '';
                            var total = 0;
                            var eventHtml = '';
                            $.each(cartItems, function(index, cartItem) {
                                // Construct HTML for each cart item
                                var image = null;
                                if (cartItem.event.banner != null && cartItem.event
                                    .banner != '') {
                                    image = "{{ asset('eventBanner/') }}/" + cartItem
                                        .event.banner;
                                } else {
                                    image =
                                        'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                }
                                eventHtml += `
                                    <li class="product-item cart-row-${cartItem.id}">
                                        <a class="product-item-photo" href="#" title="${cartItem.event.name}">
                                            <img class="product-image-photo" src="${image}" alt="${cartItem.event.name}">
                                        </a>
                                        <div class="product-item-details">
                                            <strong class="product-item-name">
                                                <a href="#">${cartItem.event.name}</a>
                                            </strong>
                                            <div class="product-item-price">
                                                <span class="price">$0</span>
                                            </div>
                                            <div class="product-item-qty">
                                                <span class="label">Qty: </span><span class="number">${cartItem.quantity}</span>
                                            </div>
                                            <div class="product-item-actions">
                                                <a class="action delete delete-cart" data-id="${cartItem.id}" href="javascript:void(0);" title="Remove item">
                                                    <span>Remove</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                `;
                                total += 1 * cartItem.quantity;
                            });
                            $('#minicart-items').html(eventHtml);
                            $('#minicart-items2').html(eventHtml);
                            $('#cart-price').html('$' + total);
                            $('#cart-price2').html('$' + total);
                            $('.counter-price').html('$' + total);
                            $('.counter-number').html(cartItems.length);
                            $('.total-cart-items').html(cartItems.length);
                            $('.counter-label').html(cartItems.length + '<span>Items</span>');

                            // Insert the generated HTML into the designated container
                            alert('Product added to cart successfully!');
                        },
                        error: function(xhr, status, error) {
                            alert('Error adding product to cart:', error);
                            console.error('Error adding product to cart:', error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
