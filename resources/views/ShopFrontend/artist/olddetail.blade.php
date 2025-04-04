@extends('ShopFrontend.Layouts.layout')

@section('title')
    product deatil
@endsection

@section('body_classes')
    catalog-product-view catalog-view_op1
@endsection
@section('main')
    <style>
        .product-preview {
            position: relative;
        }

        .zoom-container {
            overflow: hidden;
            position: relative;
        }

        .main-image {
            transition: transform 0.3s ease;
        }

        .main-image:hover {
            transform: scale(1.5);
            cursor: crosshair;
        }

        .zoomed {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            display: none;
        }

        .zoomed img {
            position: absolute;
            transition: none;
        }

        .view-larger-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #fff;
            border: 1px solid #333;
            padding: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .product-thumbnails img {
            width: 80px;
            height: auto;
            margin-right: 5px;
            cursor: pointer;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            position: relative;
            max-width: 80%;
            max-height: 90%;
            margin: auto;
            text-align: center;
            /* overflow-y: scroll; */

        }

        .modal-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 5px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            color: white;
            cursor: pointer;
        }

        .zoomIn {
            position: absolute;
            right: 50px;
            cursor: pointer;
        }

        .zoomOut {
            position: absolute;
            right: 90px;
            cursor: pointer;
        }

        .full-screen {
            position: absolute;
            right: 128px;
            cursor: pointer;
        }

        .fun-btn {
            top: 15px;
            font-size: 20px;
            color: white;
            background: transparent;
            border: none;

        }

        .fun-btn:focus,
        .fun-btn:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            filter: alpha(opacity=50);
            opacity: .5;
            background: white;
            padding: 5px;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            color: white;
            font-weight: bold;
            font-size: 24px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            user-select: none;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .bg-transparent {
            background: transparent;
            font-weight: bold;
        }

        .space {
            padding: 5px;
        }

        .modal-image {
            transition: transform 0.2s;
            /* Smooth zoom transition */
        }
    </style>
    <style>
        .countdown-container {
            display: flex;
            /* background: #333; */
            padding: 10px 0px;
            border-radius: 5px;
        }

        .time-segment {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 5px;
        }

        .time {
            color: #fff;
            font-size: 20px;
            background: #ccc;
            padding: 5px 10px;
            border-radius: 3px;
            width: 50px;
            text-align: center;
        }

        .label {
            color: #000;
            font-size: 12px;
            margin-top: 4px;
        }

        .ovic-share-socials .inner {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .social-btn {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 5px;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .social-btn .icon {
            margin-right: 8px;
        }

        .social-btn.facebook {
            background-color: #3b5998;
        }

        .social-btn.twitter {
            background-color: #1da1f2;
        }

        .social-btn.instagram {
            background-color: #e1306c;
        }

        .social-btn.linkedin {
            background-color: #0077b5;
        }

        .social-btn.youtube {
            background-color: #ff0000;
        }

        .social-btn.tiktok {
            background-color: #000000;
        }

        .social-btn.whatsapp {
            background-color: #25d366;
        }

        .social-btn:hover {
            opacity: 0.85;
        }

        .contact-details {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .contact-item .icon {
            margin-right: 8px;
            color: #333;
        }

        .contact-item .text {
            font-weight: bold;
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li><a href="#">Vendor </a></li>
                <li class="active">Product</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">
                {{-- {{ dd($event->start_date .'T'. $event->start_time) }} --}}
                {{-- {{ dd(\Carbon\Carbon::createFromFormat('d/m/Y H:i', $event->start_date . ' ' . $event->start_time)->format('Y-m-d\TH:i:s')) }} --}}
                <!-- Main Content -->
                {{-- <div class="col-md-9 col-md-push-3  col-main"> --}}
                <div class="col-md-12 col-main">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="product-gallery">
                                <div class="col-sm-12">
                                    <div class="product-preview position-relative">
                                        <div class="zoom-container">
                                            @php
                                                $image = null;

                                                if ($user->vendor && $user->vendor->logo) {
                                                    $image = asset('images/' . $user->vendor->logo);
                                                } elseif ($user->image) {
                                                    $image = asset('images/' . $user->image);
                                                } else {
                                                    $image = asset('shopAssets/images/media/product9.jpg');
                                                }
                                            @endphp
                                            <img id="mainImage" src="{{ $image }}" alt="Main Image"
                                                class="main-image main-image-fix" />
                                        </div>
                                        <button class="view-larger-btn bg-transparent" onclick="openModal(0)"><i
                                                class="fas fa-expand"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="imageModal" class="modal">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <button onclick="zoomIn()" class="fun-btn zoomIn"><i class="fas fa-search-plus"></i></button>
                            <button onclick="zoomOut()" class="fun-btn zoomOut"><i class="fas fa-search-minus"></i></button>
                            <button onclick="viewFullScreen()" class="fun-btn full-screen"><i
                                    class="fas fa-expand"></i></button>
                            <div class="modal-content">
                                <img id="modalImage" alt="Modal Image" class="modal-image">

                            </div>
                            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                            <button class="next" onclick="changeSlide(1)">&#10095;</button>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">
                                <h1 class="page-title">
                                    {{ optional($user->vendor)->name ?? (optional($user->subvendor)->name ?? 'N/A') }}
                                </h1>

                                <div class="ovic-share-socials">
                                    <div class="inner">
                                        <a class="social-btn facebook"
                                            href="{{ optional($user->vendor)->facebook ?? optional($user->subvendor)->facebook }}">
                                            <span class="icon fab fa-facebook"></span>
                                            <span class="text">Facebook</span>
                                        </a>
                                        <a class="social-btn twitter"
                                            href="{{ optional($user->vendor)->twitter ?? optional($user->subvendor)->twitter }}">
                                            <span class="icon fab fa-twitter"></span>
                                            <span class="text">Twitter</span>
                                        </a>
                                        <a class="social-btn instagram"
                                            href="{{ optional($user->vendor)->insta ?? optional($user->subvendor)->insta }}">
                                            <span class="icon fab fa-instagram"></span>
                                            <span class="text">Instagram</span>
                                        </a>
                                        <a class="social-btn linkedin"
                                            href="{{ optional($user->vendor)->linkedin ?? optional($user->subvendor)->linkedin }}">
                                            <span class="icon fab fa-linkedin"></span>
                                            <span class="text">LinkedIn</span>
                                        </a>
                                        <a class="social-btn youtube"
                                            href="{{ optional($user->vendor)->youtube ?? optional($user->subvendor)->youtube }}">
                                            <span class="icon fab fa-youtube"></span>
                                            <span class="text">YouTube</span>
                                        </a>
                                        <a class="social-btn tiktok"
                                            href="{{ optional($user->vendor)->tiktok ?? optional($user->subvendor)->tiktok }}">
                                            <span class="icon fab fa-tiktok"></span>
                                            <span class="text">TikTok</span>
                                        </a>
                                        <a class="social-btn whatsapp"
                                            href="{{ optional($user->vendor)->wa_business_page ?? optional($user->subvendor)->wa_business_page }}">
                                            <span class="icon fab fa-whatsapp"></span>
                                            <span class="text">WhatsApp</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="contact-details">
                                    <div class="contact-item">
                                        <span class="icon fas fa-envelope"></span>
                                        <span class="text">Email:</span>
                                        <a href="mailto:{{ optional($user->vendor)->email ?? optional($user->subvendor)->email }}"
                                            class="text">
                                            {{ optional($user->vendor)->email ?? (optional($user->subvendor)->email ?? 'N/A') }}
                                        </a>
                                    </div>

                                    <div class="contact-item">
                                        <span class="icon fas fa-phone"></span>
                                        <span class="text">Phone:</span>
                                        <a href="tel:{{ optional($user->vendor)->phone ?? optional($user->subvendor)->phone }}"
                                            class="text">
                                            {{ optional($user->vendor)->phone ?? (optional($user->subvendor)->phone ?? 'N/A') }}
                                        </a>
                                    </div>

                                    <div class="contact-item">
                                        <span class="icon fas fa-map-marker-alt"></span>
                                        <span class="text">Address:</span>
                                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode(optional($user->vendor)->address ?? optional($user->subvendor)->address) }}"
                                            target="_blank" class="text">
                                            {{ optional($user->vendor)->address ?? (optional($user->subvendor)->address ?? 'N/A') }}
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div><!-- Main detail -->

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab"
                                    data-toggle="tab">Product Details </a></li>
                            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">Section Details
                                </a>
                            </li>
                            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>
                            <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Payment
                                    Plan</a></li>
                            <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Additional
                                    Info</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Product Details</div>
                                <div class="block-content">
                                    {!! $event->description !!}

                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane" id="tags">
                                <div class="block-title">information</div>
                                <div class="block-content">
                                    @if ($event->information != null)
                                        {!! $event->information !!}
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="block-title">reviews</div>
                                <div class="block-content">
                                    @if ($event->reviews != null)
                                        {!! $event->reviews !!}
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="additional">
                                <div class="block-title">Extra Tabs</div>
                                <div class="block-content">
                                    @if ($event->extra != null)
                                        {!! $event->extra !!}
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-cust">
                                <div class="block-title">Guarantees</div>
                                <div class="block-content">
                                    @if ($event->guarantee != null)
                                        {!! $event->guarantee !!}
                                    @endif
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- product tab info -->

                    <!-- block-related product -->
                    <div class="block-related ">
                        <div class="block-title">
                            <strong class="title">RELATED Events</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30"
                                data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>

                                @foreach ($related as $row)
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="{{ route('get.myEvent.detail', $row->slug) }}"
                                                    class="event-item-img">
                                                    @if ($row->banner != '' && $row->banner != null)
                                                        <img src="{{ asset('eventBanner/' . $row->banner) }}"
                                                            alt="product name">
                                                    @else
                                                        <img src="{{ asset('shopAssets/images/media/detail/related2-2.jpg') }}"
                                                            alt="product name">
                                                    @endif
                                                </a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                @if (Auth::check())
                                                    <button type="submit" title="Add to Cart" class="action btn-cart"
                                                        data-event_id="{{ $row->id }}">
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
                                                        href="">{{ $row->name }}</a></strong>
                                                {{-- <div class="clearfix">
                                                    <div class="product-item-price">

                                                        @php
                                                            $oldPrice = $row->old_price;
                                                            $newPrice = $row->new_price;
                                                            if ($oldPrice > 0) {
                                                                $percentageDiscount = round(
                                                                    (($oldPrice - $newPrice) / $oldPrice) * 100,
                                                                );
                                                            } else {
                                                                $percentageDiscount = 0;
                                                            }
                                                        @endphp
                                                        <span class="price">${{ $row->new_price }}</span>
                                                        <span class="old-price">${{ $row->old_price }}</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result"
                                                                title="{{ $percentageDiscount }}%">
                                                                <span style="width:{{ $percentageDiscount }}%">
                                                                    <span><span>{{ $percentageDiscount }}</span>% of
                                                                        <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ol>
                        </div>
                    </div><!-- block-related product -->

                    <!-- block-Upsell Products -->
                    <div class="block-upsell ">
                        <div class="block-title">
                            <strong class="title">You might also like</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30"
                                data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                                @foreach ($same_cat as $row)
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="{{ route('get.myEvent.detail', $row->slug) }}"
                                                    class="event-item-img">
                                                    @if ($row->banner != '' && $row->banner != null)
                                                        <img src="{{ asset('eventBanner/' . $row->banner) }}"
                                                            alt="product name">
                                                    @else
                                                        <img src="{{ asset('shopAssets/images/media/detail/related2-2.jpg') }}"
                                                            alt="product name">
                                                    @endif
                                                </a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button type="submit" title="Add to Cart" class="action btn-cart"
                                                    data-event_id="{{ $row->id }}">
                                                    <span>Add to Cart</span>
                                                </button>

                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a
                                                        href="">{{ $row->name }}</a></strong>
                                                {{-- <div class="clearfix">
                                                    <div class="product-item-price">

                                                        @php
                                                            $oldPrice = $row->old_price;
                                                            $newPrice = $row->new_price;
                                                            if ($oldPrice > 0) {
                                                                $percentageDiscount = round(
                                                                    (($oldPrice - $newPrice) / $oldPrice) * 100,
                                                                );
                                                            } else {
                                                                $percentageDiscount = 0;
                                                            }
                                                        @endphp
                                                        <span class="price">${{ $row->new_price }}</span>
                                                        <span class="old-price">${{ $row->old_price }}</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result"
                                                                title="{{ $percentageDiscount }}%">
                                                                <span style="width:{{ $percentageDiscount }}%">
                                                                    <span><span>{{ $percentageDiscount }}</span>% of
                                                                        <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div><!-- block-Upsell Products -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                {{-- <div class=" col-md-3 col-md-pull-9   col-sidebar">

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-categorie">
                        <div class="block-title">
                            <strong>PRODUCT TYPES</strong>
                        </div>
                        <div class="block-content">
                            <ul class="items">
                                <li class="parent">
                                    <a href="">Dress</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li>
                                            <a href="">subcategory 1</a>

                                        </li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Bags</a>
                                </li>
                                <li class="parent">
                                    <a href="">Cost &amp; Jackets</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Beauty</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jewellery</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Nightwear</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jumpers &amp; Cardigans</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Block  bestseller products-->

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-products">
                        <div class="block-title">
                            <strong>BEST SALES</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0"
                                data-autoplayTimeout="700" data-autoplay="true" data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":1},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                <div class="item">
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best1.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Man’s Within Plus Size
                                                        Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best2.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Woman Within Plus Size
                                                        Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best3.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Plus Size Rock Star
                                                        Skirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best1.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Man’s Within Plus Size
                                                        Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best2.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Woman Within Plus Size
                                                        Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name"
                                                        src="{{ asset('shopAssets/images/media/detail/best3.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Plus Size Rock Star
                                                        Skirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
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
                    </div><!-- Block  bestseller products-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item item1">
                                <img src="{{ asset('shopAssets/images/media/detail/banner-slide2.jpg') }}"
                                    alt="images">
                            </div>
                            <div class="item item2">
                                <img src="{{ asset('shopAssets/images/media/detail/banner-slide2.jpg') }}"
                                    alt="images">
                            </div>
                            <div class="item item3">
                                <img src="{{ asset('shopAssets/images/media/detail/banner-slide2.jpg') }}"
                                    alt="images">
                            </div>
                        </div>
                    </div><!-- block slide top -->

                    <!-- Block  SALE products-->
                    <div class="block-sidebar block-sidebar-products-opt2">
                        <div class="block-title">
                            <strong>SALE PRODUCTS</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0"
                                data-autoplayTimeout="700" data-autoplay="true" data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img
                                                    src="{{ asset('shopAssets/images/media/detail/sale1.jpg') }}"
                                                    alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="" class="btn btn-compare"><span>compare</span></a>
                                                <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-event_id="{{ $event->id }}">
                                                <span>Add to Cart</span>
                                            </button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Luxury Dark Blue
                                                    Coast</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img
                                                    src="{{ asset('shopAssets/images/media/product1.jpg') }}"
                                                    alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="" class="btn btn-compare"><span>compare</span></a>
                                                <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-event_id="{{ $event->id }}">
                                                <span>Add to Cart</span>
                                            </button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Asus Ispiron
                                                    20</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img
                                                    src="{{ asset('shopAssets/images/media/product1.jpg') }}"
                                                    alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="" class="btn btn-compare"><span>compare</span></a>
                                                <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-event_id="{{ $event->id }}">
                                                <span>Add to Cart</span>
                                            </button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Asus Ispiron
                                                    20</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
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
                    </div><!-- Block  SALE products-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-sidebar-testimonials2">

                        <div class="block-content">
                            <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                                data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                                <div class="item ">
                                    <div class="img">
                                        <img src="{{ asset('shopAssets/images/icon/icon1.png') }}" alt="icon1">
                                    </div>
                                    <strong class="title">100% Money Back Guaranteed</strong>
                                    <div class="des">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                        incididunt .
                                    </div>
                                    <a href="" class="btn">Read more <i aria-hidden="true"
                                            class="fa fa-angle-double-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div><!-- block slide top -->


                </div><!-- Sidebar --> --}}

            </div>
        </div>


    </main><!-- end MAIN -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

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
                                    <a href="{{ route('get.musics.detail', '') }}/${music.slug}" class="music-item-img"><img style="width:200px;height:200px;" src="${image}"
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
                                    <strong class="music-item-name"><a href="{{ route('get.musics.detail', '') }}/${music.slug}">${music.song_title}</a></strong>
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

        // add to cart
        $(document).ready(function() {
            // var quantity = $('.input-qty').val();
            $('.btn-cart').click(function() {
                var eventId = $(this).data('event_id');
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
                            product_id: eventId,
                            quantity: quantity,
                            type: 'event',
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

    <script>
        $(document).ready(function() {
            const defaultZoomConfig = {
                initialZoom: 2,
                minZoom: 1,
                maxZoom: 4,
                zoomSpeed: 0.1
            };

            class Zoomable {
                constructor(element, config) {
                    this.element = $(element);
                    this.config = $.extend({}, defaultZoomConfig, config);

                    const {
                        initialZoom,
                        minZoom,
                        maxZoom
                    } = this.config;

                    this.zoomed = false;
                    this.initialZoom = Math.max(Math.min(initialZoom, maxZoom), minZoom);
                    this.zoom = this.initialZoom;

                    this.img = this.element.find(".zoomable__img");
                    this.img.attr("draggable", false);
                    this.element.css("--zoom", this.initialZoom);

                    this._addEventListeners();
                }

                _addEventListeners() {
                    this.element.on("mouseover", () => this._handleMouseover());
                    this.element.on("mousemove", (evt) => this._handleMousemove(evt));
                    this.element.on("mouseout", () => this._handleMouseout());
                    this.element.on("wheel", (evt) => this._handleWheel(evt));

                    this.element.on("touchstart", (evt) => this._handleTouchstart(evt));
                    this.element.on("touchmove", (evt) => this._handleTouchmove(evt));
                    this.element.on("touchend", () => this._handleTouchend());
                }

                _handleMouseover() {
                    if (this.zoomed) {
                        return;
                    }
                    this.element.addClass("zoomable--zoomed");
                    this.zoomed = true;
                }

                _handleMousemove(evt) {
                    if (!this.zoomed) {
                        return;
                    }

                    const elPos = this.element[0].getBoundingClientRect();
                    const percentageX = `${((evt.clientX - elPos.left) * 100) / elPos.width}%`;
                    const percentageY = `${((evt.clientY - elPos.top) * 100) / elPos.height}%`;

                    this.element.css("--zoom-pos-x", percentageX);
                    this.element.css("--zoom-pos-y", percentageY);
                }

                _handleMouseout() {
                    if (!this.zoomed) {
                        return;
                    }

                    this.element.css("--zoom", this.initialZoom);
                    this.element.removeClass("zoomable--zoomed");
                    this.zoomed = false;
                }

                _handleWheel(evt) {
                    if (!this.zoomed) {
                        return;
                    }

                    evt.preventDefault();

                    const newZoom = this.zoom + evt.originalEvent.deltaY * (this.config.zoomSpeed * -1);
                    const {
                        minZoom,
                        maxZoom
                    } = this.config;

                    this.zoom = Math.max(Math.min(newZoom, maxZoom), minZoom);
                    this.element.css("--zoom", this.zoom);
                }

                _handleTouchstart(evt) {
                    evt.preventDefault();
                    this._handleMouseover();
                }

                _handleTouchmove(evt) {
                    if (!this.zoomed) {
                        return;
                    }

                    const elPos = this.element[0].getBoundingClientRect();

                    let percentageX = ((evt.touches[0].clientX - elPos.left) * 100) / elPos.width;
                    let percentageY = ((evt.touches[0].clientY - elPos.top) * 100) / elPos.height;

                    percentageX = Math.max(Math.min(percentageX, 100), 0);
                    percentageY = Math.max(Math.min(percentageY, 100), 0);

                    this.element.css("--zoom-pos-x", `${percentageX}%`);
                    this.element.css("--zoom-pos-y", `${percentageY}%`);
                }

                _handleTouchend(evt) {
                    this._handleMouseout();
                }
            }

            $(".zoomable").each(function() {
                new Zoomable(this);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#mainImage').zoom();

            $('.thumbnail').on('click', function() {
                const fullSizeSrc = $(this).data('full');
                $('#mainImage').attr('src', fullSizeSrc);

                $('#mainImage').trigger('zoom.destroy').zoom();

                $('.thumbnail').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    <script>
        let images = [
            @foreach ($event->images as $row)
                {
                    full: "{{ asset($row->image_url) }}",
                    thumbnail: "{{ asset($row->image_url) }}"
                },
            @endforeach
        ];
        let currentIndex = 0;

        function changeMainImage(index) {
            $("#mainImage").attr("src", images[index].full);
            currentIndex = index;
        }

        function openModal(index) {
            $("#imageModal").css("display", "flex");
            showSlide(index);
        }

        function closeModal() {
            $("#imageModal").css("display", "none");
        }

        function showSlide(index) {
            currentIndex = (index + images.length) % images.length;
            $("#modalImage").attr("src", images[currentIndex].full);
        }

        function changeSlide(step) {
            showSlide(currentIndex + step);
        }

        $(document).keydown(function(event) {
            if ($("#imageModal").css("display") === "flex") {
                if (event.key === "ArrowRight") changeSlide(1);
                if (event.key === "ArrowLeft") changeSlide(-1);
                if (event.key === "Escape") closeModal();
            }
        });
    </script>
    <script>
        let zoomLevel = 1; // Default zoom level

        function zoomIn() {
            zoomLevel += 0.1; // Increase zoom level
            document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
        }

        function zoomOut() {
            if (zoomLevel > 0.1) {
                zoomLevel -= 0.1; // Decrease zoom level
                document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
            }
        }

        function viewFullScreen() {
            const modalImage = document.getElementById("modalImage");
            if (modalImage.requestFullscreen) {
                modalImage.requestFullscreen();
            } else if (modalImage.mozRequestFullScreen) { // For Firefox
                modalImage.mozRequestFullScreen();
            } else if (modalImage.webkitRequestFullscreen) { // For Chrome, Safari, Opera
                modalImage.webkitRequestFullscreen();
            } else if (modalImage.msRequestFullscreen) { // For IE/Edge
                modalImage.msRequestFullscreen();
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            // Set targetDate only if start_date and start_time are valid
            @if (!empty($event->start_date) && !empty($event->start_time))
                let targetDate;
                try {
                    targetDate = new Date(
                        "{{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $event->start_date . ' ' . $event->start_time)->format('Y-m-d\TH:i:s') }}"
                    ).getTime();
                } catch (error) {
                    console.warn("Invalid date format:", error);
                    targetDate = null;
                }
            @else
                let targetDate = null;
                console.warn("Start date or time is missing.");
            @endif

            if (targetDate) {
                function updateCountdown() {
                    const now = new Date().getTime();
                    const timeleft = targetDate - now;

                    const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                    $('#days').text(days < 10 ? '0' + days : days);
                    $('#hours').text(hours < 10 ? '0' + hours : hours);
                    $('#minutes').text(minutes < 10 ? '0' + minutes : minutes);
                    $('#seconds').text(seconds < 10 ? '0' + seconds : seconds);
                }

                setInterval(updateCountdown, 1000);
            } else {
                $('#countdown').text("Countdown unavailable due to missing or invalid date.");
            }
        });

        {{-- $(document).ready(function() {
            // const targetDate = new Date("2024-12-31T23:59:59").getTime();
            const targetDate = new Date(
                "{{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $event->start_date . ' ' . $event->start_time)->format('Y-m-d\TH:i:s') }}"
            ).getTime();
            console.log('targetDate', targetDate);

            function updateCountdown() {
                const now = new Date().getTime();
                const timeleft = targetDate - now;

                const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                $('#days').text(days < 10 ? '0' + days : days);
                $('#hours').text(hours < 10 ? '0' + hours : hours);
                $('#minutes').text(minutes < 10 ? '0' + minutes : minutes);
                $('#seconds').text(seconds < 10 ? '0' + seconds : seconds);
            }

            setInterval(updateCountdown, 1000);
        }); --}}
    </script>
@endsection
