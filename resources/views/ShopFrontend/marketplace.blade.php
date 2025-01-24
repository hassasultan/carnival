@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
    <style>
        .circle-image-gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .circle-image-gallery .item {
            text-align: center;
            margin: 20px;
        }

        .circle-image-gallery .thumb {
            border-radius: 50%;
            border: 2px solid #000;
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: transform 0.3s ease-in-out, border-width 0.3s ease-in-out;
        }

        .circle-image-gallery .thumb:hover {
            transform: scale(1.1);
            border-width: 4px;
        }

        .circle-image-gallery img {
            max-width: 100%;
            max-height: 100%;
        }

        .circle-image-gallery .title,
        .circle-image-gallery .count {
            display: block;
            margin-top: 10px;
            font-size: 1.2rem;
            color: #333;
            transition: color 0.3s ease-in-out;
        }

        .circle-image-gallery .count {
            font-size: 0.9rem;
            color: #777;
        }

        .circle-image-gallery .highlighted {
            color: red;
        }

        .circle-image-gallery .item:hover .title,
        .circle-image-gallery .item:hover .count {
            color: #ff3366;
        }
    </style>
    <main class="site-main">
        <div class="block-section-top block-section-top5">
            <div class="container">
                <div class="box-section-top">

                    <!-- block slide top -->
                    <div class="block-slide-main slide-opt-5">

                        <!-- slide -->
                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" data-items="1"
                            data-autoplaytimeout="700" data-autoplay="true" data-loop="true">

                            <div class="item">
                                <div class="img-lag">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr2.jpg" alt="girl"
                                        class="img-2">
                                </div>
                                <div class="img-sm">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr1a.jpg" alt="img"
                                        class="img-1">
                                </div>
                                <div class="description">
                                    <span class="subtitle"><span>Advanced COSMETICS</span></span>
                                    <span class="title">up to <span>50% off</span><i class="fa fa-long-arrow-down"
                                            aria-hidden="true"></i> </span>
                                    <span class="des"><span>All Creams of the season</span><span class="view-opt5"><a
                                                href="">SHOP NOW</a></span></span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="img-lag">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr3.jpg" alt="girl"
                                        class="img-2">
                                </div>
                                <div class="img-sm">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr1a.jpg" alt="img"
                                        class="img-1">
                                </div>
                                <div class="description">
                                    <span class="subtitle"><span>Advanced COSMETICS</span></span>
                                    <span class="title">up to <span>50% off</span><i class="fa fa-long-arrow-down"
                                            aria-hidden="true"></i> </span>
                                    <span class="des"><span>All Creams of the season</span><span class="view-opt5"><a
                                                href="">SHOP NOW</a></span></span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="img-lag">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr1.jpg" alt="girl"
                                        class="img-2">
                                </div>
                                <div class="img-sm">
                                    <img src="https://carnivalguide.co/shop/images/marketplacebnr1a.jpg" alt="img"
                                        class="img-1">
                                </div>
                                <div class="description">
                                    <span class="subtitle"><span>Advanced COSMETICS</span></span>
                                    <span class="title">up to <span>50% off</span><i class="fa fa-long-arrow-down"
                                            aria-hidden="true"></i> </span>
                                    <span class="des"><span>All Creams of the season</span><span class="view-opt5"><a
                                                href="">SHOP NOW</a></span></span>
                                </div>
                            </div>

                        </div> <!-- slide -->

                    </div><!-- block slide top -->

                </div>
            </div>
        </div>
        <div class="container ">
            <div class="block-deals-of-opt2">
                <div class="block-title ">
                    <span class="title">Latest Deals</span>
                    <div class="deals-of-countdown">
                        <span class="title">End In</span>
                        <div class="count-down-time" data-countdown="2016/8/27">
                            <div class="box-count box-days">
                                <div class="number">00</div>
                                <div class="text">Days</div>
                            </div>
                            <div class="box-count box-hours">
                                <div class="number">00</div>
                                <div class="text">Hrs</div>
                            </div>
                            <div class="box-count box-min">
                                <div class="number">00</div>
                                <div class="text">Mins</div>
                            </div>
                            <div class="box-count box-secs">
                                <div class="number">00</div>
                                <div class="text">Secs</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="8"
                        data-responsive='{
                        "0":{"items":1},
                        "480":{"items":2},
                        "640":{"items":3},
                        "992":{"items":4},
                        "1200":{"items":5}
                        }'>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals1.jpg"></a>
                                    <div class="product-item-actions">
                                        <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                        <a class="btn btn-compare" href=""><span>compare</span></a>
                                        <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                    </div>
                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    <span class="product-item-label label-sale-off">-30% <span>0ff</span></span>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Maecenas consequat
                                            mauris</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals2.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals3.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals4.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals5.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/mktpldeals6.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/media/index2/deals3.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href=""><img alt="product name"
                                            src="https://carnivalguide.co/shop/images/media/index2/deals4.jpg"></a>
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
                                            <span class="price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-banner-lag effect-banner2">
            <div class="container">
                <div class="clearfix">
                    <div class="col-sm-6 no-padding">
                        <a href="" class="box-img"><img
                                src="https://carnivalguide.co/shop/images/marketplacead1.jpg" alt="banner"></a>
                    </div>
                    <div class="col-sm-6 no-padding">
                        <a href="" class="box-img"><img
                                src="https://carnivalguide.co/shop/images/marketplacead2.jpg" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="circle-image-gallery">
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/download(1).png') }}" alt="Image Armchair 1">
                    </div>
                    <span class="title">Armchair 1</span>
                    <span class="count">(2)</span>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/download(2).png') }}" alt="Image Armchair 2">
                    </div>
                    <span class="title">Armchair 2</span>
                    <span class="count">(5)</span>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/download(3).png') }}" alt="Image Armchair 3">
                    </div>
                    <span class="title ">Armchair 3</span>
                    <span class="count">(3)</span>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/download(4).png') }}" alt="Image Armchair 4">
                    </div>
                    <span class="title">Armchair 4</span>
                    <span class="count">(1)</span>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/download(5).png') }}" alt="Image Armchair 5">
                    </div>
                    <span class="title">Armchair 5</span>
                    <span class="count">(4)</span>
                </div>
            </div>
        </div>
        <div class="clearfix" style="background-color: #eaeaea;margin-bottom: 30px; padding-top:30px;">

            <!-- block -floor -products / floor 1 -->
            <div class="block-floor-products block-floor-products-opt2 floor-products7" id="floor0-1">
                <div class="container">
                    <div class="block-title ">
                        <span class="title">
                            <span class="icon"><img alt="img"
                                    src="https://carnivalguide.co/shop/images/media/index2/floor1.png"></span>
                            <span class="text" id="hair">HAIR</span>
                        </span>
                        <div class="links dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" style="right: 0px; left: auto;">
                                <ul>
                                    <li role="presentation" class="active"><a href="#floor1-1" role="tab"
                                            data-toggle="tab">Best Seller </a></li>
                                    <li role="presentation"><a href="#floor1-2" role="tab"
                                            data-toggle="tab">Specials </a></li>
                                    <li role="presentation"><a href="#floor1-3" role="tab" data-toggle="tab">New
                                            Arrivals <span class="label-cat">12</span></a></li>
                                    <li role="presentation"><a href="#floor1-4" role="tab" data-toggle="tab">Most
                                            Reviews </a></li>
                                    <li role="presentation"><a href="#floor1-5" role="tab" data-toggle="tab"> On
                                            Sales </a></li>
                                    <li role="presentation"><a href="#floor1-6" role="tab" data-toggle="tab">
                                            Trending </a></li>
                                    <li role="presentation"><a href="#floor1-7" role="tab"
                                            data-toggle="tab">Recommendatation</a></li>
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

                    <div class="block-content">

                        <div class="col-categori">
                            <ul>
                                <li><a href="store.html">Store #1</a></li>
                                <li><a href="store.html">Store #2</a></li>
                                <li><a href="">--</a></li>
                                <li><a href="">Accessories</a></li>
                                <li><a href="">Manicure &amp; Pedicure</a></li>
                                <li><a href="">Bath &amp; Spa</a></li>
                                <li><a href="">Hair Care</a></li>
                                <li class="cat-orther"><a href="">Girf Sets</a></li>
                                <li class="cat-orther"><a href="">ARM</a></li>
                                <li class="cat-orther"><a href="">Accessories</a></li>
                                <li class="cat-orther"><a href="">Hair Care</a></li>
                            </ul>
                            <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true"
                                    class="fa fa-angle-double-right"></i></a>
                        </div>

                        <div class="col-banner">
                            <a href="" class="box-img"><img src="https://carnivalguide.co/shop/images/hair1.jpg"
                                    alt="baner-floor"></a>
                        </div>

                        <div class="col-products tab-content">

                            <!-- tab 1 -->
                            <div class="tab-pane active in fade" id="floor1-1" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                            <div class="tab-pane fade" id="floor1-2" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                            <div class="tab-pane fade" id="floor1-3" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                            <div class="tab-pane fade" id="floor1-4" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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

                            <!-- tab 5 -->
                            <div class="tab-pane fade" id="floor1-5" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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

                            <!-- tab 6 -->
                            <div class="tab-pane fade" id="floor1-6" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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

                            <!-- tab 7 -->
                            <div class="tab-pane fade" id="floor1-7" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair3.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview"
                                                        href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair4.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
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
                                                <strong class="product-item-name"><a href="home1.html">Maecenas
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

                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor1 :-->

            <!-- block -floor -products / floor 2 :-->
            <div class="block-floor-products block-floor-products-opt2 floor-products8" id="floor0-2">
                <div class="container">
                    <div class="block-title">

                        <span class="title">
                            <span class="icon"><img alt="img"
                                    src="https://carnivalguide.co/shop/images/media/index2/floor2.png"></span>
                            <span class="text" id="nails">NAILS</span>
                        </span>
                        <div class="links dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" style="right: 0px; left: auto;">
                                <ul>
                                    <li role="presentation" class="active"><a href="#floor2-1" role="tab"
                                            data-toggle="tab">Best salers </a></li>
                                    <li role="presentation"><a href="#floor2-2" role="tab"
                                            data-toggle="tab">Specials </a></li>
                                    <li role="presentation"><a href="#floor2-3" role="tab" data-toggle="tab">New
                                            Arrivals <span class="label-cat">12</span></a></li>
                                    <li role="presentation"><a href="#floor2-4" role="tab"
                                            data-toggle="tab">Most Reviews </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#floor0-1" class="action action-up"><i class="fa fa-angle-up"
                                    aria-hidden="true"></i></a>
                            <a href="#floor0-3" class="action action-down"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="block-content">

                        <div class="col-categori">
                            <ul>
                                <li><a href="store.html">Store #3</a></li>
                                <li><a href="store.html">Store #4</a></li>
                                <li><a href="">--</a></li>
                                <li><a href="">Accessories</a></li>
                                <li><a href="">Manicure &amp; Pedicure</a></li>
                                <li><a href="">Bath &amp; Spa</a></li>
                                <li><a href="">Hair Care</a></li>
                                <li class="cat-orther"><a href="">Girf Sets</a></li>
                                <li class="cat-orther"><a href="">ARM</a></li>
                                <li class="cat-orther"><a href="">Accessories</a></li>
                                <li class="cat-orther"><a href="">Hair Care</a></li>
                            </ul>
                            <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true"
                                    class="fa fa-angle-double-right"></i></a>
                        </div>

                        <div class="col-banner">
                            <a href="" class="box-img"><img
                                    src="https://carnivalguide.co/shop/images/nails1.jpg" alt="baner-floor"></a>
                        </div>

                        <div class="col-products tab-content">

                            <!-- tab 1 -->
                            <div class="tab-pane active in fade" id="floor2-1" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails2.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails3.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails7.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails8.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/nails1.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/hair7.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-6.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="home1.html"><img alt="product name"
                                                        src="https://carnivalguide.co/shop/images/media/index2/floor1-5.jpg"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="home1.html">Maecenas consequat
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
                            <div class="tab-pane fade" id="floor2-2" role="tabpanel">
                                <div class="owl-carousel owl-loaded owl-drag" data-nav="true" data-dots="false" data-margin="0" data-responsive='{
                                    "0": {"items": 1},
                                    "420": {"items": 2},
                                    "600": {"items": 3},
                                    "768": {"items": 3},
                                    "992": {"items": 3},
                                    "1200": {"items": 3}
                                }'>
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 776px;">
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <!-- Product Item -->
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <!-- Product Item -->
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <!-- Product Item -->
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <!-- Product Item -->
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 194px;">
                                                <div class="item">
                                                    <!-- Product Item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"></div>
                                        <div class="owl-next"></div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="floor2-2" role="tabpanel">
                                <div class="owl-carousel owl-loaded owl-drag" data-nav="true" data-dots="false" data-margin="0" data-responsive='{
                                    "0": {"items": 1},
                                    "420": {"items": 2},
                                    "600": {"items": 3},
                                    "768": {"items": 3},
                                    "992": {"items": 3},
                                    "1200": {"items": 3}
                                }'>
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 776px;">
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                            <div class="owl-item" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"></div>
                                        <div class="owl-next"></div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                            

                            <!-- tab 3 -->
                            <div class="tab-pane fade " id="floor2-3" role="tabpanel">
                                <div class="owl-carousel owl-loaded owl-drag" data-nav="true" data-dots="false"
                                    data-margin="0"
                                    data-responsive="{
                                    &quot;0&quot;:{&quot;items&quot;:1},
                                    &quot;420&quot;:{&quot;items&quot;:2},
                                    &quot;600&quot;:{&quot;items&quot;:3},
                                    &quot;768&quot;:{&quot;items&quot;:3},
                                    &quot;992&quot;:{&quot;items&quot;:3},
                                    &quot;1200&quot;:{&quot;items&quot;:3}
                                }">




                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 776px;">
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                                        href="">Maecenas consequat
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                                        href="">Maecenas consequat
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"></div>
                                        <div class="owl-next"></div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>

                            <!-- tab 4 -->
                            <div class="tab-pane fade " id="floor2-4" role="tabpanel">
                                <div class="owl-carousel owl-loaded owl-drag" data-nav="true" data-dots="false"
                                    data-margin="0"
                                    data-responsive="{
                                    &quot;0&quot;:{&quot;items&quot;:1},
                                    &quot;420&quot;:{&quot;items&quot;:2},
                                    &quot;600&quot;:{&quot;items&quot;:3},
                                    &quot;768&quot;:{&quot;items&quot;:3},
                                    &quot;992&quot;:{&quot;items&quot;:3},
                                    &quot;1200&quot;:{&quot;items&quot;:3}
                                }">




                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 776px;">
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                                        href="">Maecenas consequat
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item active" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-1.jpg"></a>
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
                                                                        href="">Maecenas consequat
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-2.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                            <div class="owl-item" style="width: 194px;">
                                                <div class="item">
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-3.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                                    <div class="product-item product-item-opt-2">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img
                                                                        alt="product name"
                                                                        src="https://carnivalguide.co/shop/images/media/index1/floor2-4.jpg"></a>
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
                                                                        href="">Maecenas consequat
                                                                        mauris</a></strong>
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
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"></div>
                                        <div class="owl-next"></div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor :2-->
        </div>
        
        @include('partials.brand_showcase')

        {{-- <!-- block  showcase-->
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
                                        <img src="https://carnivalguide.co/travel/images/digicel.jpg" alt="logo"
                                            class="logo-showcase">
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product image"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/flowt2.jpg" alt="logo"
                                            class="logo-showcase">
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                        <div class="tab-pane" role="tabpanel" id="brand1-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
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
                                                                        <a class="product-item-img" href="">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </strong>
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
                                                                                                of <span>100</span></span>
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
    </main>
@endsection
