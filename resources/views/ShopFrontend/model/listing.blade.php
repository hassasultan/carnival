@extends('ShopFrontend.Layouts.layout')

@section('title')
    Models
@endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">Models</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">
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
                            <input type="text" name="searchValName" fdprocessedid="3rmjh">
                            <select name="gender" id="genderFilter">
                                <option value="">-- Select Gender --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Other</option>
                            </select>
                            <button fdprocessedid="l2xg94" id="getSearchVal">Search</button>
                        </form>
                    </div>

                    <!-- Toolbar -->
                    <div class="catalog-view_op1">
                        <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>

                            <h1 class="cate-title">Models</h1>

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
            var getSearchVal = '';
            var getGender = '';

            $(document).on('click', '.getWithRegion', function() {
                var region = $(this).find($('.region_name')).val();
                getRegion = region;
                console.log('Selected Region:', getRegion);
                fetchProducts();
            });

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
                </li>`;
                    $('#product-listing').append(skeletonHtml);
                }

                $.ajax({
                    url: "{{ route('get.vendors.front') }}",
                    type: "GET",
                    data: {
                        page: page,
                        vendor_type: 'Models',
                        getRegion: getRegion,
                        getSearchVal: getSearchVal,
                        getGender: getGender,
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty().removeClass('blur-effect');

                        $.each(response.data, function(index, vendor) {
                            var logo = vendor.logo ?
                                "{{ asset('images/') }}/" + vendor.logo :
                                (vendor.user.image ?
                                    "{{ asset('images/') }}/" + vendor.user.image :
                                    "{{ asset('shopAssets/images/media/product9.jpg') }}");

                            var vendorDetailUrl = "{{ route('front.vendor.detail', ':slug') }}"
                                .replace(':slug', vendor.user.slug);
                            var vendorHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="{{ route('details.aboutUs', '') }}/${vendor.user.slug}" class="product-item-img">
                                            <img style="width:200px;height:200px" src="${logo}" alt="product name">
                                        </a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name">
                                            <a href="{{ route('details.aboutUs', '') }}/${vendor.user.slug}">
                                                ${vendor.user.first_name} ${vendor.user.last_name}
                                            </a><br>
                                            <span class="price">${vendor.user.city} ${vendor.user.country}</span>
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
                        var previousPageHtml = `
                    <li class="action">
                        <a href="#" data-page="${pre}"><span><i aria-hidden="true" class="fa fa-angle-left"></i></span></a>
                    </li>`;
                        $('.pagination').append(previousPageHtml);

                        for (let i = 1; i <= response.last_page; i++) {
                            var activeClass = i === response.current_page ? 'active' : '';
                            var paginationHtml = `
                        <li class="${activeClass}">
                            <a href="#" data-page="${i}">${i}</a>
                        </li>`;
                            $('.pagination').append(paginationHtml);
                        }

                        var nxt = response.current_page + 1;
                        var nextPageHtml = `
                    <li class="action">
                        <a href="#" data-page="${nxt}"><span><i aria-hidden="true" class="fa fa-angle-right"></i></span></a>
                    </li>`;
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

            $(document).on('click', '#getSearchVal', function(e) {
                e.preventDefault();
                getGender = $('#genderFilter').val();
                getSearchVal = $('input[name="searchValName"]').val();
                fetchProducts();
            });
        });
    </script>

    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
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
