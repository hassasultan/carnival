<!-- block  showcase-->
<div class="block-showcase block-showcase-opt1 block-brand-tabs">
    <div class="container">
        <div class="block-title">
            <span class="title">brand showcase</span>
        </div>
        <div class="block-content">
            <ul class="nav-brand owl-carousel" data-nav="true" data-loop="true" data-dots="false" data-margin="1"
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product image"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
                                    <a href="{{ route('front.product_listing') }}" class="btn btn-default">shop this brand <i aria-hidden="true"
                                            class="fa fa-caret-right"></i></a>
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
                                                                <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                    <img alt="product name"
                                                                        src="{{ asset('productImage/' . $product->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name">
                                                                    <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
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
</div><!-- block  showcase-->
