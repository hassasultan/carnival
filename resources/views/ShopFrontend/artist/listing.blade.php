@extends('ShopFrontend.Layouts.layout')

@section('title')
    Artists
@endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">Artists</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    {{-- <div class="category-view">
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
                    </div><!-- images categori --> --}}

                    <div class="category-view">
                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($mascamp_banners as $banner)
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset($banner->banner_image) }}" alt="{{ $banner->description }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- images category -->

                    <!-- link categori -->
                    <ul class="category-links">
                        {{-- <li class="current-cate"><a href="">Caribbean</a></li>
                        <li><a href="">North America</a></li>
                        <li><a href="">South America</a></li>
                        <li><a href="">Europe</a></li>
                        <li><a href="">Africa</a></li>
                        <li><a href="">Asia</a></li>
                        <li><a href="">Australia</a></li> --}}
                        @foreach ($regions as $region)
                            <li>
                                <a class="getWithRegion" href="javascript:void(0)">
                                    {{ $region->name }}
                                    <input type="hidden" class="region_name" value="{{ $region->id }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- link categori -->

                    <div>
                        <form>
                            <input type="text" name="searchVal" fdprocessedid="3rmjh">
                            <button fdprocessedid="l2xg94" id="getSearchVal">Search</button>
                        </form>
                    </div>

                    <!-- Toolbar -->
                    <div class="catalog-view_op1">
                        <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>

                            <h1 class="cate-title">Artists</h1>

                            <div class="modes">
                                <strong class="label">View as:</strong>
                                <strong class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->

                        </div>
                    </div>
                    <!-- Toolbar -->

                    <!-- List Products -->
                    <div class="products  products-grid">
                        <ol class="product-items row product-listing" id="product-listing">
                            {{-- <li class="col-sm-4 product-item ">
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
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="80%">
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
                            </li> --}}
                        </ol><!-- list product -->
                    </div> <!-- List Products -->

                    <!-- Toolbar -->
                    <div class="catalog-view_op1">
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

                        </div>
                    </div>
                    <!-- Toolbar -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9  col-sidebar">
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($adv1 as $key => $row)
                                <div class="item">
                                    <img src="{{ asset('images/' . $row->image) }}" alt="{{ $row->alt_text }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($adv2 as $key => $row)
                                <div class="item">
                                    <img src="{{ asset('images/' . $row->image) }}" alt="{{ $row->alt_text }}">
                                </div>
                            @endforeach
                        </div>
                    </div><!-- block slide top -->
                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($adv3 as $key => $row)
                                <div class="item">
                                    <img src="/images/{{ $row->image }}" alt="images">
                                </div>
                            @endforeach
                        </div>
                    </div><!-- block slide top -->
                </div>
                <!-- Sidebar -->
            </div>
        </div>
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
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_1.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_2.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_3.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_4.png') }}"
                                alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('shopAssets/CarnivalCommitees/partner_5.png') }}"
                                alt="brand"></a>
                    </div>
                </div>
            </div>
        </div><!-- block-brand -->


    </main><!-- end MAIN -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            var getRegion = '';

            // Handle region selection
            $(document).on('click', '.getWithRegion', function() {
                var region = $(this).find($('.region_name')).val();
                getRegion = region;
                console.log('Selected Region:', getRegion);
                fetchProducts();
            });

            function fetchProducts(page = 1) {
                var searchVal = $('input[name="searchVal"]').val(); // Get search input value

                $('#product-listing').html('');
                for (let i = 0; i < 9; i++) {
                    var skeletonHtml = `
        <li class="col-sm-4 product-item">
            <div class="skeleton-item">
                <div class="skeleton-content">
                    <div class="skeleton-line" style="width: 80%;"></div>
                    <div class="skeleton-line" style="width: 60%;"></div>
                    <div class="skeleton-line" style="width: 70%;"></div>
                </div>
            </div>
        </li>`;
                    $('#product-listing').append(skeletonHtml);
                }

                $.ajax({
                    url: "{{ route('get.vendors.front') }}",
                    type: "GET",
                    data: {
                        page: page,
                        vendor_type: 'Artistes',
                        getRegion: getRegion,
                        getSearchVal: searchVal // Include search value in the request
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty().removeClass('blur-effect');

                        $.each(response.data, function(index, vendor) {
                            var logo = vendor.logo ? "{{ asset('images/') }}/" + vendor.logo :
                                vendor.user.image ? "{{ asset('images/') }}/" + vendor.user
                                .image :
                                "{{ asset('shopAssets/images/media/product9.jpg') }}";

                            var vendorDetailUrl = "{{ route('front.vendor.detail', ':slug') }}"
                                .replace(':slug', vendor.user.slug);

                            var vendorName = vendor.name || (vendor.user.first_name && vendor
                                .user.last_name ? vendor.user.first_name + ' ' + vendor.user
                                .last_name : 'Unknown');

                            var vendorHtml = `+
                                <li class="col-sm-4 product-item">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="${vendorDetailUrl}" class="product-item-img">
                                                    <img style="width:200px;height:200px" src="${logo}" alt="product name">
                                                </a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name">
                                                    <a href="${vendorDetailUrl}">${vendorName}</a>
                                                </strong>`;

                            if (vendor.user.products.length > 0) {
                                vendorHtml += `
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$${vendor.user.products[0].min_price}-$${vendor.user.products[0].max_price}</span>
                                        </div>
                                    </div>`;
                            }

                            vendorHtml += `</div></div></div></li>`;

                            $('#product-listing').append(vendorHtml);
                        });

                        // Pagination
                        $('.pagination').empty();
                        var pre = response.current_page - 1;
                        var nxt = response.current_page + 1;
                        $('.pagination').append(
                            `<li class="action"><a href="#" data-page="${pre}"><i class="fa fa-angle-left"></i></a></li>`
                        );

                        for (let i = 1; i <= response.last_page; i++) {
                            $('.pagination').append(
                                `<li class="${i === response.current_page ? 'active' : ''}"><a href="#" data-page="${i}">${i}</a></li>`
                            );
                        }

                        $('.pagination').append(
                            `<li class="action"><a href="#" data-page="${nxt}"><i class="fa fa-angle-right"></i></a></li>`
                        );
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            fetchProducts();

            // Pagination Click Event
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                fetchProducts($(this).data('page'));
            });

            // Search Button Click Event
            $('#getSearchVal').on('click', function(e) {
                e.preventDefault();
                fetchProducts(); // Call fetchProducts to include search value
            });

        });
    </script>
    {{-- <script>
        $(document).ready(function() {

            var getRegion = '';

            $(document).on('click', '.getWithRegion', function(e) {
                var region = $(this).find($('.region_name')).val();

                getRegion = region
                console.log('regionregion', getRegion);

                fetchProducts();
            });

            console.log('regionregion22', getRegion);

            function fetchProducts(page = 1) {
                $('#product-listing').html('');
                for (let i = 0; i < 9; i++) {
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
                        page: page,
                        vendor_type: 'Artistes',
                        getRegion: getRegion
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty();
                        $('#product-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, vendor) {
                            var logo = null;
                            var vendorDetailUrl = "{{ route('front.vendor.detail', ':slug') }}".replace(':slug', vendor.user.slug);
                            if (vendor.logo != null) {
                                logo = "{{ asset('images/') }}/" + vendor.logo;
                            } else if (vendor.user.image != null) {
                                logo = "{{ asset('images/') }}/" + vendor.user.image;

                            } else {
                                logo = "{{ asset('shopAssets/images/media/product9.jpg') }}";
                            }
                            var vendorHtml =
                                `
                                <li class="col-sm-4 product-item">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <div class="product-item-photo">
                                                    <a href=${vendorDetailUrl}" class="product-item-img">
                                                        <img style="width:200px;height:200px" src="${logo}"
                                                    alt="product name"></a>
                                                </div>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="${vendorDetailUrl}">${vendor.user.first_name} ${vendor.user.last_name} ${vendor.user.slug}</a></strong>`;
                            if (vendor.user.products.length > 0) {
                                vendorHtml += `
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$${vendor.user.products[0].min_price}-$${vendor.user.products[0].max_price}</span>
                                                        </div>

                                                    </div>`;
                            }
                            vendorHtml += `
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `;

                            $('#product-listing').append(vendorHtml);
                        });

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

            fetchProducts();

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                fetchProducts(page);
            });
        });
    </script> --}}

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

    <script>
        $(document).ready(function() {});
    </script>
@endsection
