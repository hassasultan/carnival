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
                            </div><!-- detail- product -->

                        </div><!-- Main detail -->

                    </div>

                    <!-- product tab info -->

                    {{-- <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab"
                                    data-toggle="tab">Description </a></li>
                            <li role="presentation"><a href="#social_links" role="tab" data-toggle="tab">Social Links
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
                        </div>
                    </div> --}}
                    <!-- product tab info -->

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
