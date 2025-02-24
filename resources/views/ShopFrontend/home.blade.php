@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="block-section-top block-section-top3">
            <div class="container" style="width: 100%;padding:0 !important;">
                <div class="box-section-top" style="padding: 0 !important;">

                    <!-- block slide top -->
                    <div class="block-slide-main slide-opt-8" style="width:100%">

                        <!-- slide -->
                        <div class="owl-carousel " data-nav="true" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">

                            @foreach ($banners as $banner)
                                @php
                                    $extension = pathinfo($banner->banner_image, PATHINFO_EXTENSION);
                                    $bannerUrl = asset( $banner->banner_image);
                                @endphp

                                <div class="item">
                                    @if (in_array($extension, ['mp4', 'webm', 'ogg']))
                                        <video src="{{ $bannerUrl }}" autoplay loop muted
                                            style="height: 383px; width: 768px;"></video>
                                    @else
                                        <img src="{{ $bannerUrl }}" alt="banner image" class="img-slide"
                                            style="height: 383px; width: 768px;">
                                    @endif

                                    <div class="description" style="top: 30%;">
                                        <span class="subtitle">Paris fashion week</span>
                                        <span class="title">Fashion talents from Paris</span>
                                        <span class="des">{{ $banner->description }}</span>
                                        <a href="" class="view-opt8">SHOP NOW</a>
                                    </div>
                                </div>
                            @endforeach

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                </div>
            </div>
        </div>
        <div style="margin-top: 5rem;z-index: 999;position: relative;">
            {{-- <div>
                <div class="block-banner-main-opt8 Links_data">
                    <div class="container">
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col-md-4 col-sm-12">
                                    <div class="item item1"><img src="{{ $category->icon }}" alt="img">
                                        <div class="description"><a href="" class="btn btn-shop-now">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            <div>
                <div class="block-banner-main-opt8">
                    <div class="container">
                        <div class="row">
                            @foreach ($oackages as $oackage)
                                @if ($oackage->title != 'Event Promoters' && $oackage->title != 'Blogger')
                                    <div class="col-md-4 col-sm-12">
                                        <div class="item item1">
                                            @if ($oackage->icon != null)
                                                <img src="{{ $oackage->icon }}" alt="img">
                                            @else
                                                <img src="data:image/jpeg;base64,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"
                                                    alt="img">
                                            @endif
                                            <div class="description"><span class="title">{{ $oackage->title }}</span><a
                                                    href="" class="btn btn-shop-now">Discover Now</a></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-hot-deals-opt3">
            <div class="container">
                <div class="box-content">
                    <div class="block-title"><span
                            class="title"><span>H<br>o<br>t</span><span>d<br>e<br>a<br>l<br>s</span></span>
                        <div class="nav-links dropdown"><button class="dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"
                                    aria-hidden="true"></i></button>
                            <div class="dropdown-menu">
                                <ul>
                                    <li role="presentation" class="active"><a href="#hot-1" role="tab"
                                            data-toggle="tab" class="get_discounted">up to 40% off</a></li>
                                    <li role="presentation" class=""><a href="#hot-2" role="tab"
                                            data-toggle="tab" class="get_discounted">up to 40% off</a></li>
                                    <li role="presentation" class=""><a href="#hot-3" role="tab"
                                            data-toggle="tab" class="get_discounted">up to 50% off</a></li>
                                    <li role="presentation" class=""><a href="#hot-4" role="tab"
                                            data-toggle="tab" class="get_discounted">up to 60% off</a></li>
                                    <li role="presentation" class=""><a href="#hot-5" role="tab"
                                            data-toggle="tab" class="get_discounted">up to 70% off</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="deals-of-countdown">
                            <div class="count-down-time" data-countdown="2017/9/25"></div>
                        </div>
                    </div>
                    <div class="block-content ">
                        <div class="tab-content">
                            <div class="tab-pane active in fade" id="hot-1" role="tabpanel">
                                <button type="button" class="slick-arrow slick-prev">Previous</button>
                                <div class="deals-slider" id="shopDiscount">
                                    @include('partials.shop_discount')
                                </div>
                                <button type="button" class="slick-arrow slick-next">Next</button>
                            </div>
                            <div class="tab-pane fade" id="hot-2" role="tabpanel">
                                <button type="button" class="slick-arrow slick-prev">Previous</button>
                                <div class="deals-slider" id="shopDiscount">
                                    @include('partials.shop_discount')
                                </div>
                                <button type="button" class="slick-arrow slick-next">Next</button>
                            </div>
                            <div class="tab-pane fade" id="hot-3" role="tabpanel">
                                <button type="button" class="slick-arrow slick-prev">Previous</button>
                                <div class="deals-slider" id="shopDiscount">
                                    @include('partials.shop_discount')
                                </div>
                                <button type="button" class="slick-arrow slick-next">Next</button>
                            </div>
                            <div class="tab-pane fade" id="hot-4" role="tabpanel">
                                <button type="button" class="slick-arrow slick-prev">Previous</button>
                                <div class="deals-slider" id="shopDiscount">
                                    @include('partials.shop_discount')
                                </div>
                                <button type="button" class="slick-arrow slick-next">Next</button>
                            </div>
                            <div class="tab-pane fade" id="hot-5" role="tabpanel">
                                <button type="button" class="slick-arrow slick-prev">Previous</button>
                                <div class="deals-slider" id="shopDiscount">
                                    @include('partials.shop_discount')
                                </div>
                                <button type="button" class="slick-arrow slick-next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt3 floor-products1">
            <div class="container">
                <div class="block-title"><span class="title">NEW ARRIVALS IN</span>
                    <div class="links dropdown"><button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">All </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">Women Fashion </a>
                                </li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab"> Bags </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">SHOES </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider-container">
                    <div class="block-content new_arrival">
                        <div class="col-banner new_arrival1">
                            <a href="#" class="box-img">
                                <img src="https://carnivalguide.co/shop/images/makeup2.jpg" alt="baner-floor">
                                <div class="des thirtyPercent"><span>up to 30% off</span></div>
                            </a>
                        </div>
                        <div class="col-products tab-content new_arrival2" style="width: 80%;">
                            <button type="button" class="slick-arrow slick-prev">Previous</button>
                            <div class="deals-slider">
                                @foreach ($new_arrivals as $new)
                                    <div>
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="">
                                                        <img alt="{{ $new->title }}"
                                                            src="{{ asset('productImage/' . $new->image ?? 'default_image_path.jpg') }}">
                                                    </a>
                                                    <button type="button" class="btn btn-cart">
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                                @if ($new->discount > 0)
                                                    <span class="product-item-label label-sale-off">{{ $new->discount }}%
                                                        <span>off</span></span>
                                                @endif
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name">
                                                        <a href="">{{ $new->title }}</a>
                                                    </strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span
                                                                class="price">${{ number_format($new->new_price, 2) }}</span>
                                                            @if ($new->old_price)
                                                                <span
                                                                    class="old-price">${{ number_format($new->old_price, 2) }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $new->reviews }}%" class="rating-result">
                                                                    <span><span><span>{{ $new->reviews }}</span>% of
                                                                            <span>100</span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- More slides here -->
                            </div>
                            <button type="button" class="slick-arrow slick-next">Next</button>
                        </div>
                    </div>
                </div>

                <!-- Repeat .slider-container for multiple sliders -->

            </div>
        </div>

        <div class="block-floor-products block-floor-products-opt3 floor-products2">
            <div class="container">
                <div class="block-title"><span class="title">TOP SELLERS IN</span>
                    <div class="links dropdown"><button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">All </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">Women Fashion </a>
                                </li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab"> Bags </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">SHOES </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider-container">
                    <div class="block-content new_arrival">
                        <div class="col-banner new_arrival1">
                            <a href="#" class="box-img">
                                <img src="https://carnivalguide.co/shop/images/topsellersbnr3.jpg" alt="baner-floor">
                                <div class="des"><span>TRENDING STYLE</span></div>
                            </a>
                        </div>
                        <div class="col-products tab-content new_arrival2" style="width: 80%;">
                            <button type="button" class="slick-arrow slick-prev">Previous</button>
                            <div class="deals-slider">
                                @foreach ($top_sellers as $product)
                                    <div>
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#">
                                                        <img alt="{{ $product->title }}"
                                                            src="{{ asset('productImage/' . ($product->image ?? 'default_image_path.jpg')) }}">
                                                    </a>
                                                    <button type="button" class="btn btn-cart">
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                                @if ($product->discount > 0)
                                                    <span
                                                        class="product-item-label label-sale-off">{{ $product->discount }}%
                                                        <span>off</span></span>
                                                @endif
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name">
                                                        <a href="#">{{ $product->title }}</a>
                                                    </strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span
                                                                class="price">${{ number_format($product->new_price, 2) }}</span>
                                                            @if ($product->old_price)
                                                                <span
                                                                    class="old-price">${{ number_format($product->old_price, 2) }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $product->reviews }}%"
                                                                    class="rating-result">
                                                                    <span><span><span>{{ $product->reviews }}</span>% of
                                                                            <span>100</span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- More slides here -->
                            </div>
                            <button type="button" class="slick-arrow slick-next">Next</button>
                        </div>
                    </div>
                </div>

                <!-- Repeat .slider-container for multiple sliders -->

            </div>
        </div>


        <div class="block-banner-lag-opt3  effect-banner1">
            <div class="container">
                <div class="row">
                    @foreach ($brands as $brand)
                        <div class="col-sm-6">
                            <a class="box-img" href="#">
                                <img alt="{{ $brand->title }}" src="{{ asset('images/' . $brand->logo) }}">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>



        <div class="block-floor-products block-floor-products-opt3 floor-products4">
            <div class="container">
                <div class="block-title"><span class="title">RECOMMENDATION FOR YOU</span>
                    <div class="links dropdown"><button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                        <div class="dropdown-menu">
                            <ul>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">All </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">Women Fashion </a>
                                </li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab"> Bags </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">SHOES </a></li>
                                <li role="presentation" class=""><a href="#" role="tab"
                                        data-toggle="tab">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider-container">
                    <div class="block-content new_arrival">
                        <div class="col-banner new_arrival1">
                            <a href="#" class="box-img">
                                <img src="https://carnivalguide.co/shop/images/rotbnr1.jpg" alt="baner-floor">
                                <div class="des"><span>BIG SALE ON FALL</span></div>
                            </a>
                        </div>
                        <div class="col-products tab-content new_arrival2" style="width: 80%;">
                            <button type="button" class="slick-arrow slick-prev">Previous</button>
                            <div class="deals-slider">
                                @foreach ($products as $product)
                                    <div>
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#">
                                                        <img alt="{{ $product->title }}"
                                                            src="{{ asset('productImage/' . ($product->image ?? 'default_image_path.jpg')) }}">
                                                    </a>
                                                    <button type="button" class="btn btn-cart">
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                                @if ($product->discount > 0)
                                                    <span
                                                        class="product-item-label label-sale-off">{{ $product->discount }}%
                                                        <span>off</span></span>
                                                @endif
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name">
                                                        <a href="#">{{ $product->title }}</a>
                                                    </strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span
                                                                class="price">${{ number_format($product->new_price, 2) }}</span>
                                                            @if ($product->old_price)
                                                                <span
                                                                    class="old-price">${{ number_format($product->old_price, 2) }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="{{ $product->reviews }}%"
                                                                    class="rating-result">
                                                                    <span><span><span>{{ $product->reviews }}</span>% of
                                                                            <span>100</span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- More slides here -->
                            </div>
                            <button type="button" class="slick-arrow slick-next">Next</button>
                        </div>
                    </div>
                </div>

                <!-- Repeat .slider-container for multiple sliders -->

            </div>
        </div>

        <div class="block-banner-opt1 effect-banner3">
            <div class="container">
                <div class="row">
                    @foreach ($ads as $item)
                        <div class="col-sm-6">
                            <a href="" class="box-img"><img src="{{ asset('images/' . $item->image) }}"
                                    alt="banner"></a>
                        </div>
                    @endforeach
                    {{-- <div class="col-sm-6">
                        <a href="" class="box-img"><img src="{{ asset('assets/images/580X99.jpeg') }}"
                                alt="banner"></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="block-the-blog">
            <div class="container">
                <div class="block-title">
                    <span class="title">From The Blog</span>
                </div>
                <div class="block-content">
                    <div id="blog-carousel" class="owl-carousel owl-theme" data-nav="true" data-loop="true"
                        data-dots="false" data-margin="30"
                        data-responsive='{
                            "0":{"items":1},
                            "380":{"items":2},
                            "480":{"items":2},
                            "640":{"items":3},
                            "992":{"items":4}
                        }'>
                        @foreach ($blogs as $blog)
                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="https://carnivalguide.co/travel/images/blog1.jpg"
                                            alt="blog"></a>
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">{{ $blog->title }} </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>{{ $blog->created_at->format('d/m/Y') }}</span></div>
                                        <div class="blog-comment"><span>27 comments</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('partials.brand_showcase')

        <!-- block-brand -->
        <div class="block-brand-op6">
            <div class="container">
                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="2" data-loop="true"
                    data-responsive='{
                    "0":{"items":3},
                    "480":{"items":4},
                    "600":{"items":5},
                    "992":{"items":7}
                }'>
                    @foreach ($investors as $investor)
                        <div class="item">
                            <a href=""><img src="{{ asset('images/' . $investor->icon) }}" alt="brand"></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div><!-- block-brand -->

    </main><!-- end MAIN -->
@endsection

@section('script')
    <script>
        $(document).on('click', '.get_discounted', function(event) {
            event.preventDefault();
            var text = $(this).text();
            var match = text.match(/up to (\d+)% off/);
            let target = $(this).attr('href'); // e.g., "#hot-1"

            if (match && match[1]) {
                var discountPercentage = match[1];

                console.log(discountPercentage);

                $.ajax({
                    url: '{{ route('front.get_discounted') }}',
                    type: 'GET',
                    data: {
                        discount: discountPercentage
                    },
                    success: function(response) {
                        console.log('response', response);

                        // Ensure target is selected correctly
                        let $targetTab = $(target);
                        let $slider = $targetTab.find('.deals-slider');

                        // Clear existing content
                        $slider.html('');

                        response.forEach(function(product) {
                            var productHtml = `
                        <div class="item">
                            <div class="product-item product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#">
                                            <img alt="${product.title}"
                                                 src="{{ asset('productImage/') }}/${product.image ?? 'default_image_path.jpg'}">
                                        </a>
                                        <button type="button" class="btn btn-cart">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name">
                                            <a href="#">${product.title}</a>
                                        </strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$${parseFloat(product.new_price).toFixed(2)}</span>
                                                ${product.old_price ? `<span class="old-price">$${parseFloat(product.old_price).toFixed(2)}</span>` : ''}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                            // Append product to the correct slider
                            $slider.append(productHtml);
                        });

                        // Activate the tab and show content
                        $('.tab-pane').removeClass('active in');
                        $targetTab.addClass('active in');

                        // Destroy old slick instance if exists
                        if ($slider.hasClass('slick-initialized')) {
                            $slider.slick('unslick');
                        }

                        // Reinitialize Slick Slider AFTER adding new items
                        $slider.slick({
                            infinite: true,
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            prevArrow: $targetTab.find('.slick-prev'),
                            nextArrow: $targetTab.find('.slick-next')
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching discounted products:', error);
                    }
                });
            }
        });
        $(document).on('click', '.thirtyPercent', function(event) {
            event.preventDefault();
            var text = $(this).text();
            var match = text.match(/up to (\d+)% off/);
            let target = $(this).attr('href'); // e.g., "#hot-1"

            if (match && match[1]) {
                var discountPercentage = match[1];

                console.log(discountPercentage);

                $.ajax({
                    url: '{{ route('front.get_discounted') }}',
                    type: 'GET',
                    data: {
                        discount: discountPercentage
                    },
                    success: function(response) {
                        console.log('response', response);

                        // Ensure target is selected correctly
                        let $targetTab = $(target);
                        let $slider = $targetTab.find('.deals-slider');

                        // Clear existing content
                        $slider.html('');

                        response.forEach(function(product) {
                            var productHtml = `
                        <div class="item">
                            <div class="product-item product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#">
                                            <img alt="${product.title}"
                                                 src="{{ asset('productImage/') }}/${product.image ?? 'default_image_path.jpg'}">
                                        </a>
                                        <button type="button" class="btn btn-cart">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name">
                                            <a href="#">${product.title}</a>
                                        </strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$${parseFloat(product.new_price).toFixed(2)}</span>
                                                ${product.old_price ? `<span class="old-price">$${parseFloat(product.old_price).toFixed(2)}</span>` : ''}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                            // Append product to the correct slider
                            $slider.append(productHtml);
                        });

                        // Activate the tab and show content
                        $('.tab-pane').removeClass('active in');
                        $targetTab.addClass('active in');

                        // Destroy old slick instance if exists
                        if ($slider.hasClass('slick-initialized')) {
                            $slider.slick('unslick');
                        }

                        // Reinitialize Slick Slider AFTER adding new items
                        $slider.slick({
                            infinite: true,
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            prevArrow: $targetTab.find('.slick-prev'),
                            nextArrow: $targetTab.find('.slick-next')
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching discounted products:', error);
                    }
                });
            }
        });
    </script>
@endsection
