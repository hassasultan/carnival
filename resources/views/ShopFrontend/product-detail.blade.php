@extends('ShopFrontend.Layouts.layout')

@section('title')
    product deatil
@endsection

@section('body_classes')
    catalog-product-view catalog-view_op1
@endsection
@section('main')
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
                <div class="col-md-9 col-md-push-3  col-main">

                    <div class="row">

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-media media-horizontal">

                                <div class="image_preview_container images-large">

                                    <img id="img_zoom" data-zoom-image="{{ asset('productImage/' . $product->image) }}"
                                        src="{{ asset('productImage/' . $product->image) }}" alt="">

                                    <button class="btn-zoom open_qv"><span>zoom</span></button>

                                </div>

                                <div class="product_preview images-small">
                                    <div class="owl-carousel thumbnails_carousel" id="thumbnails" data-nav="true"
                                        data-dots="false" data-margin="10"
                                        data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                        @foreach ($product->product_varient as $key => $row)
                                            {{-- {{ dd($product->product_varient[0]->product_image->toArray(), $row->product_image) }} --}}
                                            @foreach ($row->product_image as $key => $row)
                                                {{-- {{ dd('variant_images/' . $row->image) }} --}}
                                                <a href="#" data-image="{{ asset('variant_images/' . $row->image) }}"
                                                    data-zoom-image="{{ asset('variant_images/' . $row->image) }}">

                                                    {{-- <img src="{{ asset('shopAssets/images/media/detail/thumb-lag1.jpg') }}" --}}
                                                    <img src="{{ asset('variant_images/' . $row->image) }}"
                                                        data-large-image="{{ asset('variant_images/' . $row->image) }}"
                                                        alt="">

                                                </a>
                                            @endforeach
                                        @endforeach
                                        {{-- <a href="#"
                                            data-image="{{ asset('shopAssets/images/media/detail/thumb-img2.jpg') }}"
                                            data-zoom-image="{{ asset('shopAssets/images/media/detail/thumb-lag2.jpg') }}">

                                            <img src="{{ asset('shopAssets/images/media/detail/thumb2.jpg') }}"
                                                data-large-image="{{ asset('shopAssets/images/media/detail/thumb-img2.jpg') }}"
                                                alt="">

                                        </a>
                                        <a href="#"
                                            data-image="{{ asset('shopAssets/images/media/detail/thumb-img3.jpg') }}"
                                            data-zoom-image="{{ asset('shopAssets/images/media/detail/thumb-lag3.jpg') }}">

                                            <img src="{{ asset('shopAssets/images/media/detail/thumb3.jpg') }}"
                                                data-large-image="{{ asset('shopAssets/images/media/detail/thumb-img3.jpg') }}"
                                                alt="">

                                        </a>
                                        <a href="#"
                                            data-image="{{ asset('shopAssets/images/media/detail/thumb-img1.jpg') }}"
                                            data-zoom-image="{{ asset('shopAssets/images/media/detail/thumb-lag1.jpg') }}">

                                            <img src="{{ asset('shopAssets/images/media/detail/thumb1.jpg') }}"
                                                data-large-image="{{ asset('shopAssets/images/media/detail/thumb-img1.jpg') }}"
                                                alt="">

                                        </a> --}}

                                    </div><!--/ .owl-carousel-->

                                </div><!--/ .product_preview-->

                            </div><!-- image product -->
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">

                                <h1 class="page-title">
                                    {{ $product->title }}
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

                                <div class="product-info-price">
                                    <div class="price-box">
                                        <span class="price">${{ $product->new_price }} </span>
                                        <span class="old-price">${{ $product->old_price }}</span>
                                        @php
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
                                        <span class="label-sale">{{ $percentageDiscount }}%</span>
                                    </div>
                                </div>
                                <div class="product-code">
                                    Item Code: #453217907 :
                                </div>
                                <div class="product-info-stock">
                                    <div class="stock available">
                                        <span class="label">Availability: </span>{{ $product->stock_condition }}
                                    </div>
                                </div>
                                <div class="product-condition">
                                    Condition: {{ $product->condition }}
                                </div>
                                <div class="product-overview">
                                    <div class="overview-content">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                {{-- {{ dd($product->product_varient->toArray()) }} --}}
                                <div class="product-add-form">
                                    <p>Available Options:</p>
                                    <form>

                                        {{-- {{ dd($row->product_image->toArray()) }} --}}
                                        <div class="product-options-wrapper">
                                            @foreach ($product->product_varient as $key => $row)
                                                @if ($row->type == 'color')
                                                    <div class="swatch-opt">
                                                        <div class="swatch-attribute color">
                                                            <span class="swatch-attribute-label">Color:</span>
                                                            <div class="swatch-attribute-options clearfix">
                                                                <div class="swatch-option color @if ($key == 0) selected @endif"
                                                                    style="background-color: #0c3b90 ;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($row->type == 'size')
                                                    <div class="form-configurable">
                                                        <label for="forSize" class="label">Size: </label>
                                                        <div class="control">
                                                            <select id="forSize" class="form-control attribute-select">
                                                                <option value="{{ $row['id'] }}">{{ $row['name'] }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="" class="size-chart">Size chart</a>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="form-qty">
                                                <label class="label">Qty: </label>
                                                <div class="control">
                                                    <input type="text" readonly class="form-control input-qty" value='1'
                                                        id="qty1" name="qty1" maxlength="{{ $row->value }}"
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

                                                <button type="button" title="Add to Cart" class="action btn-cart"
                                                    data-product_id="{{ $product->id }}">
                                                    <span>Add to Cart</span>
                                                </button>
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
                                <div class="product-addto-links-second">
                                    <a href="" class="action action-print">Print</a>
                                    <a href="" class="action action-friend">Send to a friend</a>
                                </div>
                                <div class="share">
                                    <img src="{{ asset('shopAssets/images/media/index1/share.png') }}" alt="share">
                                </div>
                            </div><!-- detail- product -->

                        </div><!-- Main detail -->

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab"
                                    data-toggle="tab">Product Details </a></li>
                            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">information </a>
                            </li>
                            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>
                            <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Extra
                                    Tabs</a></li>
                            <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Guarantees</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Product Details</div>
                                <div class="block-content">
                                    {!! $product->description !!}

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tags">
                                <div class="block-title">information</div>
                                <div class="block-content">
                                    @if ($product->information != null)
                                        {!! $product->information !!}
                                    @endif
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p> --}}

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="block-title">reviews</div>
                                <div class="block-content">
                                    @if ($product->reviews != null)
                                        {!! $product->reviews !!}
                                    @endif
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p> --}}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="additional">
                                <div class="block-title">Extra Tabs</div>
                                <div class="block-content">
                                    @if ($product->extra != null)
                                        {!! $product->extra !!}
                                    @endif
                                    {{--                                     
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p> --}}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-cust">
                                <div class="block-title">Guarantees</div>
                                <div class="block-content">
                                    @if ($product->guarantee != null)
                                        {!! $product->guarantee !!}
                                    @endif
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also Aldus PageMaker including versions
                                        of Lorem Ipsum</p> --}}
                                </div>
                            </div>
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

                                @foreach ($related as $row)
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
                                                {{-- <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> --}}
                                                <button type="submit" title="Add to Cart" class="action btn-cart"
                                                    data-product_id="{{ $product->id }}">
                                                    <span>Add to Cart</span>
                                                </button>

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
                                                {{-- <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> --}}
                                                <button type="submit" title="Add to Cart" class="action btn-cart"
                                                    data-product_id="{{ $product->id }}">
                                                    <span>Add to Cart</span>
                                                </button>

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
                                @endforeach
                            </ol>
                        </div>
                    </div><!-- block-Upsell Products -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class=" col-md-3 col-md-pull-9   col-sidebar">

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
                                            {{-- <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> --}}
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-product_id="{{ $product->id }}">
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
                                            {{-- <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> --}}
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-product_id="{{ $product->id }}">
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
                                            {{-- <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> --}}
                                            <button type="submit" title="Add to Cart" class="action btn-cart"
                                                data-product_id="{{ $product->id }}">
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


                </div><!-- Sidebar -->

            </div>
        </div>


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

            $('.qtyplus').click(function(){
                stock =  parseInt($('#qty1').val());
                if(stock < $('#qty1').attr('maxlength'))
                {
                    $('#qty1').val(stock + 1);
                }
            });
            $('.qtyminus').click(function(){
                stock =  $('#qty1').val();
                if(stock > 0)
                {
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
                if(auth != true)
                {
                    window.location.href= '/login';
                }
                else
                {
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
                                    if(cartItem.product.image != null && cartItem.product.image != '')
                                    {
                                        image = "{{ asset('productImage/') }}/"+cartItem.product.image;
                                    }
                                    else
                                    {
                                        image = 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
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
                            $('#cart-price').html('$'+total);
                            $('.counter-price').html('$'+total);
                            $('.counter-number').html(cartItems.length);
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
