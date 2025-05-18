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

        /* picture view swap */
        .product-gallery {
            display: flex;
            flex-direction: column-reverse;
            /* By default, show main image first */
        }

        @media (min-width: 576px) {
            .product-gallery {
                flex-direction: row;
                /* On larger screens, show thumbnails first */
            }
        }

        .col-sm-10 {
            width: 100%;
        }

        .col-sm-2 {
            width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm-10 {
                width: 83.33%;
                /* 10/12 */
            }

            .col-sm-2 {
                width: 16.66%;
                /* 2/12 */
            }
        }

        @media (max-width: 768px) {
            .product-thumbnails {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                gap: 10px;
                scrollbar-width: thin;
                /* For Firefox */
                -ms-overflow-style: none;
                /* For Internet Explorer/Edge */
            }

            .product-thumbnails::-webkit-scrollbar {
                display: none;
                /* Hide scrollbar in WebKit browsers */
            }

            .thumbnail {
                flex: 0 0 auto;
                /* Prevents shrinking */
                width: 80px;
                /* Adjust as needed */
                height: 80px;
                object-fit: cover;
                border-radius: 5px;
            }
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
                <div class="col-md-12 col-main">

                    <div class="row">
                        <div class="product-gallery">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="product-gallery">
                                    <div class="product-preview position-relative">
                                        <div class="zoom-container">
                                            @php
                                                $image = null;
                                                $image = asset($user->image);
                                            @endphp
                                            <img id="mainImage" src="{{ $image }}" alt="Main Image"
                                                class="main-image main-image-fix" />
                                        </div>
                                        <button class="view-larger-btn bg-transparent" onclick="openModal(0)"><i
                                                class="fas fa-expand"></i></button>
                                    </div>
                                </div>
                            </div>

                            {{-- <div id="imageModal" class="modal">
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
                                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                                <button class="next" onclick="changeSlide(1)">&#10095;</button>
                            </div> --}}

                            <div class="col-sm-6 col-md-6 col-lg-6">

                                <div class="product-info-main">
                                    <h1 class="page-title">
                                        {{ $user->fullname }}
                                    </h1>

                                    <div class="contact-details">
                                        @if (!empty($user->country))
                                            <div class="contact-item">
                                                <span class="icon fas fa-flag"></span>
                                                <span class="text">Country:</span>
                                                <a href="javascript:void(0);">{{ $user->country ?? 'N/A' }}</a>
                                            </div>
                                        @endif

                                        @if (!empty($user->city))
                                            <div class="contact-item">
                                                <span class="icon fas fa-city"></span>
                                                <span class="text">City:</span>
                                                <a href="javascript:void(0);">{{ $user->city ?? 'N/A' }}</a>
                                            </div>
                                        @endif

                                        <div class="contact-item">
                                            @if (!empty($user->designation))
                                                <div class="contact-item">
                                                    <span class="text">Designation:</span>
                                                    <a href="javascript:void(0);">{{ $user->designation }}</a>
                                                </div>
                                            @endif

                                            {{-- @if (!empty($user->bio_description))
                                                <div class="contact-item">
                                                    <span class="text">About:</span>
                                                    <a href="javascript:void(0);">
                                                        {!! \Illuminate\Support\Str::limit(strip_tags($user->bio_description), 200) !!}
                                                    </a>
                                                </div>
                                            @endif --}}
                                            <div class="contact-item">
                                                <span class="text">About:</span>
                                                <a href="javascript:void(0);" class="about-text">
                                                    {{$user->bio_description}}
                                                </a>
                                                @if (strlen($user->bio_description) > 200)
                                                    <a href="javascript:void(0);" class="see-more">See More</a>
                                                    <span class="full-text" style="display: none;">
                                                        {{$user->bio_description}}
                                                        <a href="javascript:void(0);" class="see-less">See Less</a>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ovic-share-socials" style="margin-top: 15px;">
                                        <div class="inner">
                                            @if (!empty($user->facebook))
                                                <a class="social-btn facebook" href="{{ $user->facebook }}">
                                                    <span class="icon fab fa-facebook"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->twitter))
                                                <a class="social-btn twitter" href="{{ $user->twitter }}">
                                                    <span class="icon fab fa-twitter"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->insta))
                                                <a class="social-btn instagram" href="{{ $user->insta }}">
                                                    <span class="icon fab fa-instagram"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->linkedin))
                                                <a class="social-btn linkedin" href="{{ $user->linkedin }}">
                                                    <span class="icon fab fa-linkedin"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->youtube))
                                                <a class="social-btn youtube" href="{{ $user->youtube }}">
                                                    <span class="icon fab fa-youtube"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->tiktok))
                                                <a class="social-btn tiktok" href="{{ $user->tiktok }}">
                                                    <span class="icon fab fa-tiktok"></span>
                                                </a>
                                            @endif
                                            @if (!empty($user->wa_business_page))
                                                <a class="social-btn whatsapp" href="{{ $user->wa_business_page }}">
                                                    <span class="icon fab fa-whatsapp"></span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- Main detail -->
                            </div>
                        </div><!-- Main Content -->
                    </div>
                </div>
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
        let images = [{
            full: "{{ asset($user->image) }}",
            thumbnail: "{{ asset($user->image) }}"
        }, ];
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
