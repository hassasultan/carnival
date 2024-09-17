@extends('ShopFrontend.Layouts.layout')

@section('title')
    product deatil
@endsection

@section('body_classes')
    catalog-product-view catalog-view_op1
@endsection
@section('main')
    <style>
        .zoomable {
            position: relative;
            overflow: hidden;
            border-radius: 30px;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .zoomable__img {
            transform-origin: var(--zoom-pos-x, 0%) var(--zoom-pos-y, 0%);
            transition: transform 0.15s linear;
        }

        .zoomable--zoomed .zoomable__img {
            cursor: zoom-in;
            transform: scale(var(--zoom, 2));
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <!-- MAIN -->
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



                <!-- Main Content -->
                <div class="col-md-12   col-main">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="product-media media-horizontal">
                                <div class="image_preview_container images-large zoomable">
                                    <img id="img_zoom" class="zoomable__img"
                                        data-zoom-image="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/fa-h1-01-1.jpg"
                                        src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/fa-h1-01-1.jpg"
                                        alt="">
                                    <button class="btn-zoom open_qv"><span>zoom</span></button>
                                </div>
                                {{-- <div class="product_preview images-small">
                                    <div class="owl-carousel thumbnails_carousel" id="thumbnails" data-nav="true"
                                        data-dots="false" data-margin="10"
                                        data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                        <a href="#" data-image="https://growdentaltest5.info/application/themes/syed_tio_site/inset.html"
                                            data-zoom-image="https://growdentaltest5.info/application/themes/syed_tio_site/inset.html">
                                            <img src="https://growdentaltest5.info/application/themes/syed_tio_site/inset.html" width="100%"
                                                data-large-image="https://growdentaltest5.info/application/themes/syed_tio_site/inset.html" alt="">
                                        </a>
                                        
                                    </div><!--/ .owl-carousel-->
                                </div><!--/ .product_preview--> --}}
                            </div><!-- image product -->
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">

                                <h1 class="page-title">
                                    Dresses-Summer Floral
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
                                        <ul>
                                            <li>Brand name: Cartier</li>
                                            <li>Item Name: C de Cartier bag MM 2way shoulder bag</li>
                                            <li>Model No: L1002063</li>
                                            <li>Size: W40.5 × H28 × D15.5cm（W15.9′ × H11.0′ × D6.1’/Shoulder
                                            </li>
                                            <li>Condition: Pre-owned used bag in&nbsp;<span class="desc_bold">excellent
                                                    condition</span></li>
                                            <li>Inside condition: Unnoticeable scratches</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr />

                                <div class="product-info-stock">
                                    <div class="stock available">
                                        <span class="label">Availability: </span>In Stock
                                    </div>
                                </div>
                                <div class="product-info-price">
                                    <div class="price-box">
                                        <span class="price">$250.00</span>
                                        {{-- <span class="old-price">${{ $product->old_price }}</span> --}}
                                        {{-- @php
                                            $oldPrice = $product->old_price;
                                            $newPrice = $product->new_price;
                                            if ($oldPrice > 0) {
                                                $percentageDiscount = round(
                                                    (($oldPrice - $newPrice) / $oldPrice) * 100,
                                                );
                                            } else {
                                                $percentageDiscount = 0;
                                            }
                                        @endphp
                                        <span class="label-sale">{{ $percentageDiscount }}%</span> --}}
                                    </div>
                                </div>
                                <div class="product-add-form">
                                    <p>Available Options:</p>
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

                                        </div>



                                        <div class="product-options-bottom clearfix">

                                            <div class="actions">

                                                @if (Auth::check())
                                                    <button type="button" title="Add to Cart" class="action btn-cart"
                                                        data-product_id="1">
                                                        <span>Add to Cart</span>
                                                    </button>
                                                    {{-- <button type="button" title="Add to Cart" class="action btn-cart"
                                                        data-product_id="{{ $product->id }}">
                                                        <span>Add to Cart</span>
                                                    </button> --}}
                                                @else
                                                    <a href="{{ route('customer.login') }}" title="Add to Cart"
                                                        class="action btn-cart btn">
                                                        <span>Add to Cart</span>
                                                    </a>
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

                        </div><!-- Main detail -->
                        <div class="box-border">
                            <div class="table-responsive">
                                <table class="table table-bordered  cart_summary">
                                    <thead>
                                        <tr>
                                            <th class="cart_product">Product</th>
                                            <th>Qty</th>
                                            <th>price</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="ovic_bundle-product" data-id="2233" data-price="250" data-qty="1"
                                            data-sale="0">
                                            <td class="ovic_bundle-check check-column">
                                                <label for="ovic_bundle-checkbox-2233">
                                                    <input type="checkbox" id="ovic_bundle-checkbox-2233"
                                                        class="input-text check" checked="" disabled="">
                                                </label>
                                            </td>
                                            <td class="ovic_bundle-thumb column-thumb">
                                                <div class="thumb">
                                                    <img loading="lazy" width="60" height="60"
                                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-01-1-650x650.jpg"
                                                        class="attachment-60x60 size-60x60 wp-post-image" alt=""
                                                        decoding="async"
                                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-01-1-650x650.jpg 650w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-01-1-844x844.jpg 844w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-01-1-800x800.jpg 800w"
                                                        sizes="(max-width: 60px) 100vw, 60px">
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-title column-name">
                                                <div class="ovic_bundle-title-inner"><a
                                                        href="https://kuteshop.kutethemes.net/product/dresses-summer-floral/"
                                                        target="_blank">Dresses-Summer Floral</a></div>
                                            </td>
                                            <td class="ovic_bundle-qty column-qty">
                                                <div class="quantity">
                                                    <a href="#" class="arrow minus quantity-minus"></a> <label
                                                        class="screen-reader-text"
                                                        for="quantity_66e80c2b064e0">Dresses-Summer Floral quantity</label>
                                                    <input type="number" id="quantity_66e80c2b064e0"
                                                        class="input-text qty text" name="quantity" value="1"
                                                        aria-label="Product quantity" size="4" min="1"
                                                        max="" step="1" placeholder="" inputmode="numeric"
                                                        autocomplete="off">
                                                    <a href="#" class="arrow plus quantity-plus"></a>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-price column-price">
                                                <div class="price">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>250.00</bdi></span>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-total column-discount">
                                                <div class="discount">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>250.00</bdi></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="ovic_bundle-product" data-id="2213" data-price="230" data-qty="1"
                                            data-sale="10">
                                            <td class="ovic_bundle-check check-column">
                                                <label for="ovic_bundle-checkbox-2213">
                                                    <input type="checkbox" id="ovic_bundle-checkbox-2213"
                                                        class="input-text check" checked="">
                                                </label>
                                            </td>
                                            <td class="ovic_bundle-thumb column-thumb">
                                                <div class="thumb">
                                                    <img loading="lazy" width="50" height="60"
                                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-06.jpg"
                                                        class="attachment-60x60 size-60x60 wp-post-image" alt=""
                                                        decoding="async">
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-title column-name">
                                                <div class="ovic_bundle-title-inner"><a
                                                        href="https://kuteshop.kutethemes.net/product/daily-womens-dress/"
                                                        target="_blank">Daily Women’s Dress</a>
                                                    <div class="ovic_bundle-sale">-10%</div>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-qty column-qty">
                                                <div class="quantity">
                                                    <a href="#" class="arrow minus quantity-minus"></a> <label
                                                        class="screen-reader-text" for="quantity_66e80c2b07f55">Daily
                                                        Women’s Dress quantity</label>
                                                    <input type="number" id="quantity_66e80c2b07f55"
                                                        class="input-text qty text" name="quantity" value="1"
                                                        aria-label="Product quantity" size="4" min="0"
                                                        max="86" step="1" placeholder="" inputmode="numeric"
                                                        autocomplete="off">
                                                    <a href="#" class="arrow plus quantity-plus"></a>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-price column-price">
                                                <div class="price">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>230.00</bdi></span>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-total column-discount">
                                                <div class="discount">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>207.00</bdi></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="ovic_bundle-product" data-id="2225" data-price="250" data-qty="1"
                                            data-sale="15">
                                            <td class="ovic_bundle-check check-column">
                                                <label for="ovic_bundle-checkbox-2225">
                                                    <input type="checkbox" id="ovic_bundle-checkbox-2225"
                                                        class="input-text check" checked="">
                                                </label>
                                            </td>
                                            <td class="ovic_bundle-thumb column-thumb">
                                                <div class="thumb">
                                                    <img loading="lazy" width="60" height="60"
                                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-11-650x650.jpg"
                                                        class="attachment-60x60 size-60x60 wp-post-image" alt=""
                                                        decoding="async"
                                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-11-650x650.jpg 650w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-11-844x844.jpg 844w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-11-800x800.jpg 800w"
                                                        sizes="(max-width: 60px) 100vw, 60px">
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-title column-name">
                                                <div class="ovic_bundle-title-inner"><a
                                                        href="https://kuteshop.kutethemes.net/product/black-autum-dresses/"
                                                        target="_blank">Black Autum Dresses</a>
                                                    <div class="ovic_bundle-sale">-15%</div>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-qty column-qty">
                                                <div class="quantity">
                                                    <a href="#" class="arrow minus quantity-minus"></a> <label
                                                        class="screen-reader-text" for="quantity_66e80c2b08f5c">Black
                                                        Autum Dresses quantity</label>
                                                    <input type="number" id="quantity_66e80c2b08f5c"
                                                        class="input-text qty text" name="quantity" value="1"
                                                        aria-label="Product quantity" size="4" min="0"
                                                        max="" step="1" placeholder="" inputmode="numeric"
                                                        autocomplete="off">
                                                    <a href="#" class="arrow plus quantity-plus"></a>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-price column-price">
                                                <div class="price">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>250.00</bdi></span>
                                                </div>
                                            </td>
                                            <td class="ovic_bundle-total column-discount">
                                                <div class="discount">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>212.50</bdi></span>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <style>
                                .cart-container {
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    width: 100%;
                                    /* max-width: 1173px; */
                                    /* Adjust width as per your layout requirement */
                                }

                                .quantity input {
                                    width: 100%;
                                    text-align: center;
                                    border: 1px solid #ccc;
                                    padding: 5px;
                                }

                                .add-to-cart button {
                                    background-color: #ff5a5f;
                                    color: white;
                                    border: none;
                                    padding: 10px 20px;
                                    cursor: pointer;
                                }

                                .pricing-info {
                                    display: flex;
                                    gap: 20px;
                                    /* Adjust spacing between the price and discount */
                                }

                                .pricing-info span {
                                    color: black;
                                    font-size: 1rem;
                                }

                                .pricing-info strong {
                                    font-weight: bold;
                                }

                                /* Responsive adjustments */
                                @media (max-width: 768px) {
                                    .cart-container {
                                        flex-direction: column;
                                        align-items: flex-start;
                                    }

                                    .pricing-info {
                                        flex-direction: column;
                                        align-items: flex-start;
                                        gap: 10px;
                                    }
                                }
                            </style>
                            <div class="footer-bundle row">
                                <div class="cart-container row">
                                    <div class="quantity col-md-1">
                                        <input type="number" value="1" min="1">
                                    </div>
                                    <div class="add-to-cart col-md-9">
                                        <button>Add to Cart</button>
                                    </div>
                                    <div class="pricing-info col-md-2">
                                        <span>Bundle price: <strong>$669.50</strong></span>
                                        <span>You save: <strong>$60.50</strong></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab"
                                    data-toggle="tab">Product Details </a></li>
                            {{-- <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">Section Details
                                </a>
                            </li> --}}
                            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>
                            <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Brands</a>
                            </li>
                            {{-- <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Additional
                                    Info</a>
                            </li> --}}
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Product Details</div>
                                <div class="block-content">
                                    <p>The C de Cartier satchel from Cartier defines feminine elegance and classic allure.
                                        Crafted from leather, it is impressive with its functional elements and durable
                                        construction. It can be carried in a chic way with dual handles at the top and the
                                        brand signature on the front offers it a recognisable sign-off. . Lined with fabric,
                                        it makes for a luxurious abode for your essentials.</p>
                                    <p>100% of items sold are checked by our experts. Before sending you your new purchase,
                                        our dedicated team verifies. authenticity and quality standards. Conformity with the
                                        seller’s description. the condition mentioned by the seller. A real reliable
                                        guarantee for all our customers! Except for Brand Approved items Vestiaire
                                        Collective has no association and/or affiliation with the brands whose items are
                                        offered for sale on its website/app. Except for Brand Approved items the
                                        authentication is performed independently by Vestiaire Collective.</p>
                                    <p>Nike Storm-FIT ADV technology combines together windproof and waterproof fabric with
                                        advanced engineering and features to help keep you comfortable in harsh weather
                                        conditions. It is combined with lightweight fabric for a smooth feel. Sealed seams
                                        help keep water out.</p>

                                    <p>Find Your Fit<br>
                                        The jacket is fully adjustable with cords on the hood and a bungee on the neck and
                                        middle of the back to help customise your coverage. A bungee cord in the hem lets
                                        you find the right fit and feel.</p>
                                    <p><img loading="lazy" decoding="async" class="alignnone wp-image-59 size-full"
                                            src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1.jpg"
                                            alt="" width="1410" height="309"
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1.jpg 1410w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-300x66.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-1024x224.jpg 1024w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-768x168.jpg 768w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-220x48.jpg 220w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-800x175.jpg 800w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-86x19.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-64x14.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/product-content-1-84x18.jpg 84w"
                                            sizes="(max-width: 1410px) 100vw, 1410px"></p>
                                    <table class="custom-desc-1">
                                        <tbody>
                                            <tr>
                                                <th rowspan="4">DETAILS</th>
                                                <td>Brand:</td>
                                                <td>Cartier</td>
                                            </tr>
                                            <tr>
                                                <td>Item Name:</td>
                                                <td>C de Cartier bag MM 2way shoulder bag</td>
                                            </tr>
                                            <tr>
                                                <td>Model No.</td>
                                                <td>L1002063</td>
                                            </tr>
                                            <tr>
                                                <td>Size:</td>
                                                <td>W40.5 × H28 × D15.5cm（W15.9′ × H11.0′ × D6.1’/Shoulder strap:72cm（28.3’）
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="custom-desc-1">
                                        <tbody>
                                            <tr>
                                                <th rowspan="2">
                                                    <p class="title">CONDITION</p>
                                                </th>
                                                <td>Card slot</td>
                                                <td>Pre-owned used bag</td>
                                            </tr>
                                            <tr>
                                                <td>Internal</td>
                                                <td>in&nbsp;<span class="desc_bold">excellent condition</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="custom-desc-1">
                                        <tbody>
                                            <tr>
                                                <th rowspan="3">
                                                    <p class="desc_subtitle">INSIDE</p>
                                                </th>
                                                <td>Scratches</td>
                                                <td>Unnoticeable scratches</td>
                                            </tr>
                                            <tr>
                                                <td>Stains</td>
                                                <td>Unnoticeable stains</td>
                                            </tr>
                                            <tr>
                                                <td>Accessories</td>
                                                <td>Dustbag/Strap</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane" id="tags">
                                <div class="block-title">information</div>
                                <div class="block-content">
                                    @if ($product->information != null)
                                        {!! $product->information !!}
                                    @endif
                                </div>
                            </div> --}}
                            <style>
                                .review-container {
                                    /* max-width: 600px; */
                                    margin: 20px auto;
                                    padding: 20px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                }

                                .rating-summary,
                                .reviews,
                                .add-review {
                                    margin-bottom: 20px;
                                }

                                .rating-bars li {
                                    list-style: none;
                                    margin-bottom: 5px;
                                }

                                progress {
                                    width: 150px;
                                    margin-left: 10px;
                                    vertical-align: middle;
                                }

                                .review {
                                    border-top: 1px solid #ccc;
                                    padding-top: 10px;
                                    margin-top: 10px;
                                }

                                .product-tab-brands .brand-item img {
                                    max-height: 60px;
                                    width: auto;
                                }

                                .brand-item {
                                    margin: 10px 0px;
                                }
                            </style>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="block-title">reviews</div>
                                <div class="block-content">
                                    <div class="review-container row">
                                        <div class="rating-summary col-md-4">
                                            <h2>5.00★ Rating</h2>
                                            <ul class="rating-bars">
                                                <li>5★ <progress value="1" max="1"></progress> 1</li>
                                                <li>4★ <progress value="0" max="1"></progress> 0</li>
                                                <li>3★ <progress value="0" max="1"></progress> 0</li>
                                                <li>2★ <progress value="0" max="1"></progress> 0</li>
                                                <li>1★ <progress value="0" max="1"></progress> 0</li>
                                            </ul>
                                        </div>
                                        <div class="reviews col-md-8">
                                            <h2>1 review for "Dresses-Summer Floral"</h2>
                                            <div class="review">
                                                <p><strong>Admin – August 29, 2021</strong></p>
                                                <p>It is beautiful and high quality. I will continue to buy to give to
                                                    friends and relatives</p>
                                            </div>
                                        </div>
                                        <div class="add-review">
                                            <h2>Add a review</h2>
                                            <p>You must be logged in to post a review.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="additional">
                                <div class="block-title">Extra Tabs</div>
                                <div class="block-content">
                                    <div class="product-tab-brands">
                                        <div class="brand-item row ">
                                            <div class="term-thumbnail col-md-4">
                                                <a href="https://kuteshop.kutethemes.net/product-brand/market/fashion/chanel/?demo=21"
                                                    class="brand-link">
                                                    <figure><img width="180" height="100"
                                                            src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel.png"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            decoding="async"
                                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-84x47.png 84w"
                                                            sizes="(max-width: 180px) 100vw, 180px"></figure>
                                                </a>
                                            </div>
                                            <h3 class="term-name col-md-2">
                                                <a href="https://kuteshop.kutethemes.net/product-brand/market/fashion/chanel/?demo=21"
                                                    class="brand-link">
                                                    Chanel </a>
                                            </h3>
                                            <div class="term-description col-md-6">
                                                <p>Whatever the occasion, complete your outfit with one of Hermes Fashion’s
                                                    stylish women’s bags. Discover our spring collection</p>
                                            </div>
                                        </div>
                                        <div class="brand-item row ">
                                            <div class="term-thumbnail col-md-4">
                                                <a href="https://kuteshop.kutethemes.net/product-brand/market/fashion/gucci/?demo=21"
                                                    class="brand-link">
                                                    <figure><img width="180" height="100"
                                                            src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci.png"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            decoding="async"
                                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-84x47.png 84w"
                                                            sizes="(max-width: 180px) 100vw, 180px"></figure>
                                                </a>
                                            </div>
                                            <h3 class="term-name col-md-2">
                                                <a href="https://kuteshop.kutethemes.net/product-brand/market/fashion/gucci/?demo=21"
                                                    class="brand-link">
                                                    Gucci </a>
                                            </h3>
                                            <div class="term-description col-md-6">
                                                <p>Whatever the occasion, complete your outfit with one of Hermes Fashion’s
                                                    stylish women’s bags. Discover our spring collection.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane" id="tab-cust">
                                <div class="block-title">Guarantees</div>
                                <div class="block-content">
                                    @if ($product->guarantee != null)
                                        {!! $product->guarantee !!}
                                    @endif
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- product tab info -->

                    <!-- block-related product -->
                    <div class="block-related ">
                        <div class="block-title">
                            <strong class="title">RELATED products</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30"
                                data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>

                                {{-- @foreach ($related as $row)
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="{{ route('get.products.detail', $row->slug) }}"
                                                    class="product-item-img">
                                                    @if ($row->image != '' && $row->image != null)
                                                        <img src="{{ asset('productImage/' . $row->image) }}"
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
                                                        data-product_id="{{ $row->id }}">
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
                                                        href="">{{ $row->title }}</a></strong>
                                                <div class="clearfix">
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
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach --}}

                            </ol>
                        </div>
                    </div><!-- block-related product -->

                </div><!-- Main Content -->

            </div>
        </div>


    </main><!-- end MAIN --><!-- end MAIN -->
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
            $('.btn-cart').click(function() {
                var productId = $(this).data('product_id');
                var quantity = $('.input-qty').val();
                auth = "{{ auth()->check() }}";
                console.log(auth);
                if (auth != true) {
                    window.location.href = '/login';
                } else {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('add.to.cart') }}',
                        data: {
                            product_id: productId,
                            quantity: quantity
                        },
                        success: function(response) {

                            console.log(response);
                            var cartItems = response;
                            var html = '';
                            var total = 0;
                            var productHtml = '';
                            $.each(cartItems, function(index, cartItem) {
                                // Construct HTML for each cart item
                                var image = null;
                                console.log(cartItem.product.image);
                                if (cartItem.product.image != null && cartItem.product
                                    .image != '') {
                                    image = "{{ asset('productImage/') }}/" + cartItem
                                        .product.image;
                                } else {
                                    image =
                                        'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                }
                                productHtml += `
                                    <li class="product-item cart-row-${cartItem.id}">
                                        <a class="product-item-photo" href="#" title="${cartItem.product.title}">
                                            <img class="product-image-photo" src="${image}" alt="${cartItem.product.title}">
                                        </a>
                                        <div class="product-item-details">
                                            <strong class="product-item-name">
                                                <a href="#">${cartItem.product.title}</a>
                                            </strong>
                                            <div class="product-item-price">
                                                <span class="price">$${cartItem.product.new_price.toFixed(2)}</span>
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
                                total += cartItem.product.new_price * cartItem.quantity;
                            });
                            $('#minicart-items').html(productHtml);
                            $('#minicart-items2').html(productHtml);
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
@endsection
