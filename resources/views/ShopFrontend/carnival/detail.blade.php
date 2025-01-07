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
                            {{-- <ul class="ui-categori">
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
                            </ul> --}}
                        </div>

                    </div><!-- categori -->

                    <div class="block-slide-main slide-opt-1">

                        <!-- slide -->
                        <div class="owl-carousel dotsData" data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            {{-- @foreach ($vendor->user->banners as $key => $banner)
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
                            @endforeach --}}

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
                                    <a href="#tabproduct1" role="tab" id="best-sell" data-toggle="tab">Recent Albums
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
                                    {{-- @foreach ($musics as $music)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img"
                                                        href="{{ route('get.musics.detail', $music->id) }}"
                                                        style="height: 266px; width: 186px;">
                                                        <img alt="product name"
                                                            src="{{ asset('covers/' . $music->cover_image) }}">
                                                    </a>
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
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a
                                                            href="">{{ $music->song_title }}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">${{ $music->price }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach --}}
                                </div>
                            </div><!-- tab 1 -->

                            {{-- <a href="{{ route('front.myMusicGallery', $user->slug) }}" type="submit"
                                class="btn mb-2 btn-danger" id="">View All</a> --}}

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
                                {{-- @foreach ($events as $event)
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">

                                            <div class="count-down-time" data-countdown="{{ $event->start_date }}"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('eventBanner/' . $event->banner) }}"></a>
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
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
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
                                src="{{ asset('shopAssets/images/media/index1/floor1.png') }}">{{ $carnival->name }}</span>
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
            {{-- @foreach ($vendor->subvendor as $key => $row)
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
                                        <li role="presentation"><a href="#floor-most-{{ $row->id }}" role="tab"
                                                data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor-new-{{ $row->id }}"
                                                onclick="subvendorProduct('new','{{ $row->user->id }}','new-arrival-subvendor-{{ $row->id }}')"
                                                role="tab" data-toggle="tab">New Arrivals <span
                                                    class="label-cat">12</span></a></li>
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
                                <a href="#floor0-{{ $pre }}" class="action action-up"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach --}}

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
        {{-- <div class="block-showcase block-showcase-opt1 block-brand-tabs">
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
        </div><!-- block  showcase--> --}}

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
@endsection
