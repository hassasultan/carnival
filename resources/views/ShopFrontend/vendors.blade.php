@extends('ShopFrontend.Layouts.layout')

@section('title') Mas Camps @endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">Mascamps</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    <div class="category-view">
                        <div class="owl-carousel " data-nav="true" data-dots="false" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item ">
                                <a href=""><img src="{{ asset('shopAssets/images/media/category-images1.jpg') }}"
                                        alt="category-images"></a>
                            </div>
                            <div class="item ">
                                <a href=""><img src="{{ asset('shopAssets/images/media/category-images2.jpg') }}"
                                        alt="category-images"></a>
                            </div>
                        </div>
                    </div><!-- images categori -->

                    <!-- link categori -->
                    <ul class="category-links">
                        <li class="current-cate"><a href="">Caribbean</a></li>
                        <li><a href="">North America</a></li>
                        <li><a href="">South America</a></li>
                        <li><a href="">Europe</a></li>
                        <li><a href="">Africa</a></li>
                        <li><a href="">Asia</a></li>
                        <li><a href="">Australia</a></li>
                    </ul>
                    <!-- link categori -->

                    <!-- Toolbar -->
                    <div class=" toolbar-products toolbar-top">

                        <div class="btn-filter-products">
                            <span>Filter</span>
                        </div>

                        <h1 class="cate-title">Mascamps</h1>

                        {{-- <div class="modes">
                            <strong class="label">View as:</strong>
                            <strong class="modes-mode active mode-grid" title="Grid">
                                <span>grid</span>
                            </strong>
                            <a href="Category2.html" title="List" class="modes-mode mode-list">
                                <span>list</span>
                            </a>
                        </div><!-- View as --> --}}

                    </div><!-- Toolbar -->

                    <!-- List Products -->
                    <div class="products  products-grid">
                        <ol class="product-items row product-listing" id="product-listing">
                            <li class="col-sm-4 product-item ">
                                <div class="product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img
                                                    src="{{ asset('shopAssets/images/media/product9.jpg') }}"
                                                    alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Vendor Name</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00-$500</span>
                                                </div>
                                                {{-- <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="80%">
                                                            <span style="width:80%">
                                                                <span><span>80</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol><!-- list product -->
                    </div> <!-- List Products -->

                    <!-- Toolbar -->
                    <div class=" toolbar-products toolbar-bottom">

                        <div class="modes">
                            <strong class="label">View as:</strong>
                            <strong class="modes-mode active mode-grid" title="Grid">
                                <span>grid</span>
                            </strong>
                            <a href="Category2.html" title="List" class="modes-mode mode-list">
                                <span>list</span>
                            </a>
                        </div><!-- View as -->

                        <div class="toolbar-option">

                            <div class="toolbar-sorter ">
                                <label class="label">Short by:</label>
                                <select class="sorter-options form-control">
                                    <option selected="selected" value="position">Product name</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                                <a href="" class="sorter-action"></a>
                            </div><!-- Short by -->

                            <div class="toolbar-limiter">
                                <label class="label">
                                    <span>Show:</span>
                                </label>

                                <select class="limiter-options form-control">
                                    <option selected="selected" value="9"> Show 18</option>
                                    <option value="15">Show 15</option>
                                    <option value="30">Show 30</option>
                                </select>

                            </div><!-- Show per page -->

                        </div>

                        <ul class="pagination">


                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li class="action action-next">
                                <a href="#">
                                    Next <span><i aria-hidden="true" class="fa fa-angle-double-right"></i></span>
                                </a>
                            </li>
                        </ul>

                    </div><!-- Toolbar -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9  col-sidebar">


                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-844px, 0px, 0px); transition: all 0.8s ease 0s; width: 1477px;">
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="images/adspc5d.jpg" alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot active"><span></span></div>
                            </div>
                        </div>
                    </div><!-- block slide top -->
                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-844px, 0px, 0px); transition: all 0.8s ease 0s; width: 1477px;">
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="images/adspc5d.jpg" alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot active"><span></span></div>
                            </div>
                        </div>
                    </div><!-- block slide top -->
                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-844px, 0px, 0px); transition: all 0.8s ease 0s; width: 1477px;">
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="images/adspc5d.jpg" alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 211px;">
                                        <div class="item item3">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item1">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 211px;">
                                        <div class="item item2">
                                            <img src="{{ asset('shopAssets/images/media/banner-sidebar1.jpg') }}"
                                                alt="images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot active"><span></span></div>
                            </div>
                        </div>
                    </div><!-- block slide top -->





                </div>
                <!-- Sidebar -->



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
                    url: "{{ route('get.vendors.front') }}",
                    type: "GET",
                    data: {
                        page: page
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty();
                        $('#product-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, vendor) {
                            var logo = null;
                            if(vendor.logo != null)
                            {
                                logo = "{{ asset('storage/image/')}}/"+vendor.logo;
                            }
                            else if(vendor.user.image != null)
                            {
                                logo = "{{ asset('storage/image/')}}/"+vendor.user.image;

                            }
                            else
                            {
                                logo = "{{ asset('shopAssets/images/media/product9.jpg') }}";
                            }
                            var vendorHtml = `
                                <li class="col-sm-4 product-item">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <div class="product-item-photo">
                                                    <a href="{{ route('front.vendor.detail','') }}/${vendor.user.slug}" class="product-item-img"><img
                                                    src="${logo}"
                                                    alt="product name"></a>
                                                </div>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">${vendor.name}</a></strong>`;
                                                if(vendor.user.products.length > 0)
                                                {
                                                    vendorHtml += `
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$${vendor.user.products[0].min_price}-$${vendor.user.products[0].max_price}</span>
                                                        </div>
                                                        
                                                    </div>`;
                                                }
                                                vendorHtml +=`
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `;

                            $('#product-listing').append(vendorHtml);
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
    </script>
@endsection
