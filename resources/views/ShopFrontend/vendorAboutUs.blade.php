@extends('ShopFrontend.Layouts.layout')

@section('title')
    About
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
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li><a href="#">Mascamp </a></li>
                <li class="active">About</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-12 col-main">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="product-media media-horizontal">
                                <div class="image_preview_container images-large zoomable">
                                    @php
                                        $image = null;

                                        if ($user->vendor && $user->vendor->logo) {
                                            $image = asset('images/' . $user->vendor->logo);
                                        } elseif ($user->subvendor && $user->subvendor->logo) {
                                            $image = asset('images/' . $user->subvendor->logo);
                                        } elseif ($user->image) {
                                            $image = asset('images/' . $user->image);
                                        } else {
                                            $image = asset('shopAssets/images/media/product9.jpg');
                                        }
                                    @endphp

                                    <img id="img_zoom" class="zoomable__img" data-zoom-image="{{ $image }}"
                                        src="{{ $image }}" alt="">
                                    <button class="btn-zoom open_qv"><span>zoom</span></button>
                                </div>
                            </div><!-- image product -->
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">

                                <h1 class="page-title">
                                    {{ optional($user->vendor)->name ?? (optional($user->subvendor)->name ?? 'N/A') }}
                                </h1>
                                <div class="product-code">
                                    Email:
                                    {{ optional($user->vendor)->email ?? (optional($user->subvendor)->email ?? 'N/A') }}
                                </div>
                                <div class="product-code">
                                    Phone:
                                    {{ optional($user->vendor)->phone ?? (optional($user->subvendor)->phone ?? 'N/A') }}
                                </div>
                                <div class="product-code">
                                    Address:
                                    {{ optional($user->vendor)->address ?? (optional($user->subvendor)->address ?? 'N/A') }}
                                </div>
                                <div class="product-overview">
                                    <div class="overview-content">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div><!-- detail- product -->

                        </div><!-- Main detail -->

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab"
                                    data-toggle="tab">Description </a></li>
                            <li role="presentation"><a href="#social_links" role="tab" data-toggle="tab">Social Links
                                </a>
                            </li>
                            {{-- <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>
                            <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Payment
                                    Plan</a></li>
                            <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Additional
                                    Info</a>
                            </li> --}}
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Description</div>
                                <div class="block-content">
                                    {!! $product->description !!}

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="social_links">
                                <div class="block-title">information</div>
                                <div class="block-content">
                                    <ul>
                                        @if (optional($user->vendor)->insta ?? optional($user->subvendor)->insta)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->insta ?? optional($user->subvendor)->insta }}">
                                                    <i class="fab fa-instagram" style="color: #C13584;"></i> Instagram
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->facebook ?? optional($user->subvendor)->facebook)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->facebook ?? optional($user->subvendor)->facebook }}">
                                                    <i class="fab fa-facebook" style="color: #1877F2;"></i> Facebook
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->twitter ?? optional($user->subvendor)->twitter)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->twitter ?? optional($user->subvendor)->twitter }}">
                                                    <i class="fab fa-twitter" style="color: #1DA1F2;"></i> Twitter
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->linkedin ?? optional($user->subvendor)->linkedin)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->linkedin ?? optional($user->subvendor)->linkedin }}">
                                                    <i class="fab fa-linkedin" style="color: #0077B5;"></i> LinkedIn
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->youtube ?? optional($user->subvendor)->youtube)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->youtube ?? optional($user->subvendor)->youtube }}">
                                                    <i class="fab fa-youtube" style="color: #FF0000;"></i> YouTube
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->tiktok ?? optional($user->subvendor)->tiktok)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->tiktok ?? optional($user->subvendor)->tiktok }}">
                                                    <i class="fab fa-tiktok" style="color: #010101;"></i> TikTok
                                                </a>
                                            </li>
                                        @endif
                                        @if (optional($user->vendor)->wa_business_page ?? optional($user->subvendor)->wa_business_page)
                                            <li>
                                                <a
                                                    href="{{ optional($user->vendor)->wa_business_page ?? optional($user->subvendor)->wa_business_page }}">
                                                    <i class="fab fa-whatsapp" style="color: #25D366;"></i> WA Business Page
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="block-title">reviews</div>
                                <div class="block-content">
                                    @if ($product->reviews != null)
                                        {!! $product->reviews !!}
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="additional">
                                <div class="block-title">Extra Tabs</div>
                                <div class="block-content">
                                    @if ($product->extra != null)
                                        {!! $product->extra !!}
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-cust">
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

                </div><!-- Main Content -->

            </div>
        </div>


    </main><!-- end MAIN -->
@endsection

@section('script')
@endsection
