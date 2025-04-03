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
            width: 100%;
            text-align: center;
        }

        .label {
            color: #000;
            font-size: 12px;
            margin-top: 4px;
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
                                <div class="col-sm-4">
                                    <div class="product-thumbnails">
                                        @foreach ($event->images as $key => $row)
                                            <img class="thumbnail" src="{{ asset($row->image_url) }}"
                                                data-full="{{ asset($row->image_url) }}" alt="Thumbnail {{ $key + 1 }}"
                                                onclick="changeMainImage({{ $key }})" />
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="product-preview position-relative">
                                        <div class="zoom-container">
                                            <img id="mainImage"
                                                src="{{ $event->banner ? asset('eventBanner/' . $event->banner) : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg' }}"
                                                alt="Main Image" class="main-image main-image-fix" />
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
                                    {{ $event->name }}
                                </h1>
                                <div class="product-reviews-summary">
                                    <div class="rating-summary">
                                        <div class="rating-result" title="70%">
                                            <span style="width:70%">
                                                <span><span>70</span>% of <span>100</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="reviews-actions">
                                        <a href="" class="action view">Based on 3 ratings</a>
                                        <a href="" class="action add"><img alt="img"
                                                src="{{ asset('shopAssets/images/icon/write.png') }}">&#160;&#160;write a
                                            review</a>
                                    </div>
                                </div>


                                <div class="product-overview">
                                    <div class="overview-content">
                                        {{-- <ul>
                                            <li>Brand name: Cartier</li>
                                            <li>Item Name: C de Cartier bag MM 2way shoulder bag</li>
                                            <li>Model No: L1002063</li>
                                            <li>Size: W40.5 × H28 × D15.5cm（W15.9′ × H11.0′ × D6.1’/Shoulder
                                            </li>
                                            <li>Condition: Pre-owned used bag in&nbsp;<span class="desc_bold">excellent
                                                    condition</span></li>
                                            <li>Inside condition: Unnoticeable scratches</li>
                                        </ul> --}}
                                        @php
                                            $dresscode = explode(',', $event->dress_code);
                                        @endphp
                                        <p>
                                            <span class="label">Dresscode: </span>
                                            @foreach ($dresscode as $item)
                                                <span class="badge badge-primary tag badge-lg"
                                                    style="font-size: 1.25em;">{{ $item }}</span>
                                            @endforeach
                                            <br>
                                            <span class="label">Event Type: </span>{{ $event->eventType }}
                                            <br>
                                            <span class="label">Venue: </span>{{ $event->venue }}
                                            <br>
                                            <span class="label">Address: </span>{{ $event->address }}
                                            <br>
                                            <span class="label">Description: </span>{!! $event->description !!}
                                        </p>
                                    </div>
                                </div>
                                <hr />
                                {{-- <div class="product-info-stock">
                                    <div class="stock available">
                                        <span class="label">Availability: </span>In Stock

                                    </div>
                                </div>
                                <div class="product-info-price">
                                    <div class="price-box">
                                        <span class="price">$250.00</span>
                                    </div>
                                </div> --}}
                                <div class="product-add-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{-- <p>Available Options:</p>
                                            <form>
                                                <div class="product-options-wrapper">
                                                    <div class="form-qty">
                                                        <label class="label">Qty: </label>
                                                        <div class="control">
                                                            <input type="text" readonly class="form-control input-qty"
                                                                value='1' id="qty1" name="qty1" maxlength="10"
                                                                minlength="1">
                                                            <button class="btn-number  qtyminus" data-type="minus"
                                                                data-field="qty1"><span>-</span></button>
                                                            <button class="btn-number  qtyplus" data-type="plus"
                                                                data-field="qty1"><span>+</span></button>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            <div class="product-options-bottom clearfix">

                                                <div class="actions">

                                                    @if (Auth::check())
                                                        <button type="button" title="Add to Cart" class="action btn-cart"
                                                            data-event_id="1">
                                                            <span>Add to Cart</span>
                                                        </button>
                                                    @else
                                                        <a href="{{ route('customer.login') }}" title="Add to Cart"
                                                            class="action btn-cart btn">
                                                            <span>Add to Cart</span>
                                                        </a>
                                                    @endif
                                                    @if (count($event->tickets) > 0)
                                                        <h5>from <strong>${{ $event->tickets[0]->price }}</strong> /
                                                            person</h5>
                                                    @else
                                                        <h5>from <strong>FREE</strong></h5>
                                                    @endif
                                                    <div class="product-addto-links">

                                                        <a href="#" class="action btn-wishlist" title="Wish List">
                                                            <span>Wishlist</span>
                                                        </a>
                                                        <a href="#" class="action btn-compare" title="Compare">
                                                            <span>Compare</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            </form>
                                        </div>
                                        <div class="col-md-8">
                                            <span class="label">Available Till </span>
                                            <div class="countdown-container">
                                                <div class="time-segment">
                                                    <span class="time" id="days">00</span>
                                                    <span class="label">DAYS</span>
                                                </div>
                                                <div class="time-segment">
                                                    <span class="time" id="hours">00</span>
                                                    <span class="label">HOURS</span>
                                                </div>
                                                <div class="time-segment">
                                                    <span class="time" id="minutes">00</span>
                                                    <span class="label">MIN</span>
                                                </div>
                                                <div class="time-segment">
                                                    <span class="time" id="seconds">00</span>
                                                    <span class="label">SEC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product_meta">
                                    <span class="sku_wrapper"><span class="title">SKU:</span> <span
                                            class="sku">MK-FS-0010</span></span>
                                    <span class="posted_in"><span class="title">Categories:</span><a
                                            href="https://kuteshop.kutethemes.net/product-category/market/fashion/for-women/?demo=21"
                                            rel="tag">For Women</a>, <a
                                            href="https://kuteshop.kutethemes.net/product-category/market/fashion/summer-dresses/?demo=21"
                                            rel="tag">Summer Dresses</a></span>
                                    <span class="tagged_as"><span class="title">Tag:</span><a
                                            href="https://kuteshop.kutethemes.net/product-tag/market/?demo=21"
                                            rel="tag">Market</a></span>
                                </div>
                                <div class="payment-info">
                                    <div class="item">
                                        <span class="text">Guarantee safe &amp; Secure checkout</span>
                                        <span class="image"><img
                                                src="https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/product-payment.svg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async"></span>
                                    </div>
                                </div>
                                <div class="delivery-info">
                                    <div class="item post-meta post-views">
                                        <span class="icon main-icon-quickview-2"></span> <span class="text">
                                            <b> 7854 views </b> this product. </span>
                                    </div>
                                    <div class="item">
                                        <span class="icon main-icon-truck"></span>
                                        <span class="text">Estimate delivery times: <b>12-26 days</b>
                                            (International).</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon main-icon-sield"></span>
                                        <span class="text">Return within <b>30 days</b> of purchase. Taxes are
                                            non-refundable.</span>
                                    </div>
                                </div>
                                <div class="share">
                                    <img src="{{ asset('shopAssets/images/media/index1/share.png') }}" alt="share">
                                </div>
                            </div><!-- detail- product -->

                        </div>
                        {{-- <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">

                                <h1 class="page-title">
                                    {{ $event->name }}
                                </h1>
                                <div class="product-overview">
                                    <div class="overview-content">
                                        {!! $event->description !!}
                                    </div>
                                </div>
                                <div class="product-addto-links-second">
                                    <a href="" class="action action-print">Print</a>
                                    <a href="" class="action action-friend">Send to a friend</a>
                                </div>
                                <div class="share">
                                    <img src="{{ asset('shopAssets/images/media/index1/share.png') }}" alt="share">
                                </div>
                            </div><!-- detail- product -->

                        </div><!-- Main detail --> --}}

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed col-md-9">

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
                    <div class="col-md-3">
                        <h2>Location</h2>
                        <div class="map-div col-lg-12 col-sm-12 col-md-12 col-xs-12 eventview-no-padding map-setting">
                            <a href="https://www.ticketgateway.com/venues/mystic-lounge" target="_blank"
                                class="hidden-xs">
                                Mystic Lounge,<br> 50 Kennedy Road S, Canada</a>
                            <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=50%2BKennedy%2BRoad%2BS%2C%2BCanada&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="400px"
                                width="100%"></iframe>


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

            </div>
        </div>


    </main><!-- end MAIN -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            // Function to fetch and display products
            function fetchProducts(page = 1) {
                $('#product-listing').html('');

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
                            var eventHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="${product.slug}" class="product-item-img"><img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg')}}"
                                                alt="${event.name}"></a>
                                        <div class="product-item-actions">
                                            <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                            <a href="#" class="btn btn-compare"><span>compare</span></a>
                                            <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                        </div>
                                        <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                        <span class="product-item-label label-price">${percentageDiscount}% <span>off</span></span>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="${product.slug}">${event.name}</a></strong>
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
                            $('#product-listing').append(eventHtml);
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
                var page = $(this).data('page');
                fetchProducts(page);
            });

            $('.qtyplus').click(function() {
                stock = parseInt($('#qty1').val());
                if (stock < $('#qty1').attr('maxlength')) {
                    $('#qty1').val(stock + 1);
                }
            });
            $('.qtyminus').click(function() {
                stock = $('#qty1').val();
                if (stock > 0) {
                    $('#qty1').val(stock - 1);
                }
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
