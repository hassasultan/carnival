@extends('ShopFrontend.Layouts.layout')

@section('title')
    About
@endsection

@section('body_classes')
    catalog-product-view catalog-view_op1
@endsection
@section('main')
    {{-- <style>
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
    </style> --}}
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

        .product-info-main {
            font-family: Arial, sans-serif;
        }

        .page-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
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
                                    {{-- <button class="btn-zoom open_qv"><span>zoom</span></button> --}}
                                    <button class="view-larger-btn bg-transparent" onclick="openModal(0)"><i
                                            class="fas fa-expand"></i></button>


                                    <div id="imageModal" class="modal">
                                        <span class="close" onclick="closeModal()">&times;</span>
                                        <button onclick="zoomIn()" class="fun-btn zoomIn"><i
                                                class="fas fa-search-plus"></i></button>
                                        <button onclick="zoomOut()" class="fun-btn zoomOut"><i
                                                class="fas fa-search-minus"></i></button>
                                        <button onclick="viewFullScreen()" class="fun-btn full-screen"><i
                                                class="fas fa-expand"></i></button>
                                        <div class="modal-content">
                                            <img id="modalImage" alt="Modal Image" class="modal-image">

                                        </div>
                                    </div>
                                </div>
                            </div><!-- image product -->
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
                                    data-toggle="tab">Description </a></li>
                            <li role="presentation"><a href="#gallery" role="tab" data-toggle="tab">Gallery
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Description</div>
                                <div class="block-content">
                                    Description

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="gallery">
                                <div class="block-title">Gallery</div>
                                <div class="block-content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product tab info -->

                    <div class="block-related ">
                        <div class="block-title">
                            <strong class="title">RELATED products</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30"
                                data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>

                                @foreach ($user->products as $row)
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
                                                {{-- @if (Auth::check())
                                                    <button type="submit" title="Add to Cart" class="action btn-cart"
                                                        data-product_id="{{ $row->id }}">
                                                        <span>Add to Cart</span>
                                                    </button>
                                                @else
                                                    <a href="{{ route('customer.login') }}" title="Add to Cart"
                                                        class="action btn-cart btn">
                                                        <span>Add to Cart</span>
                                                    </a>
                                                @endif --}}

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
                    </div>

                </div><!-- Main Content -->

            </div>
        </div>


    </main><!-- end MAIN -->
@endsection

@section('script')
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
        function openModal() {
            const imageSrc = $('#img_zoom').attr('data-zoom-image');
            $('#modalImage').attr('src', imageSrc);
            $('#imageModal').css('display', 'flex');
        }

        function closeModal() {
            $('#imageModal').css('display', 'none');
        }
    </script>
    <!-- Custom scripts -->
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

        $(document).keydown(function(event) {
            if ($("#imageModal").css("display") === "flex") {
                if (event.key === "ArrowRight") changeSlide(1);
                if (event.key === "ArrowLeft") changeSlide(-1);
                if (event.key === "Escape") closeModal();
            }
        });
    </script>
@endsection
