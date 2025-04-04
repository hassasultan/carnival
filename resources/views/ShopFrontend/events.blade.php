@extends('ShopFrontend.Layouts.layout')

@section('title')
    Mas Camps
@endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">
                    @if (Route::is('front.shop_listing'))
                        Events
                    @else
                        Carnivals
                    @endif
                </li>
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

                            <h1 class="cate-title">
                                @if (Route::is('front.shop_listing'))
                                    Events
                                @else
                                    Carnivals
                                @endif
                            </h1>

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
                        <ol class="product-items row product-listing" id="event-listing">
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

                    <!-- block filter events -->
                    <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                        <div class="block-title">
                            <strong>FILTER SELECTION</strong>
                        </div>
                        <div class="block-content">
                            <!-- filter price -->
                            <div class="filter-options-item filter-options-price">
                                <div class="filter-options-title">Price</div>
                                <div class="filter-options-content">
                                    {{-- <div class="slider-range">

                                        <div id="slider-range"></div>

                                        <div class="action">
                                            <span class="price">
                                                <span>Range:</span>
                                                $<span id="amount-left"></span>
                                                -
                                                $<span id="amount-right"></span>
                                            </span>
                                        </div>
                                    </div> --}}
                                    <ol class="items">
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="20"
                                                    data-max="50">
                                                <span>$20 - $50 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="50"
                                                    data-max="100">
                                                <span>$50 - $100 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="100"
                                                    data-max="250">
                                                <span>$100 - $250 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- filter price -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">BRAND</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        @foreach ($countries as $country)
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox" class="brand-checkbox"
                                                        value="{{ $country->id }}">
                                                    <span>{{ $country->name }} <span
                                                            class="count">({{ $country->events_count }})</span></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->
                        </div>
                    </div><!-- Filter -->

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
            $(document).ready(function() {
                function fetchEvents(page = 1, selectedCategories = [], eventType = null, priceRanges = [],
                    searchVal = '') {
                    $('#event-listing').html('');

                    // Display skeleton loaders
                    for (let i = 0; i < 18; i++) {
                        var skeletonHtml = `
                <li class="col-sm-4 event-item">
                    <div class="skeleton-item">
                        <div class="skeleton-content">
                            <div class="skeleton-line" style="width: 80%;"></div>
                            <div class="skeleton-line" style="width: 60%;"></div>
                            <div class="skeleton-line" style="width: 70%;"></div>
                        </div>
                    </div>
                </li>`;
                        $('#event-listing').append(skeletonHtml);
                    }

                    // AJAX call to fetch events
                    $.ajax({
                        url: "{{ route('get.events') }}",
                        type: "GET",
                        data: {
                            page: page,
                            categories: selectedCategories,
                            event_type: eventType,
                            price_ranges: priceRanges,
                            getSearchVal: searchVal
                        },
                        success: function(response) {
                            $('#event-listing').empty();
                            $.each(response.data, function(index, event) {
                                var image = event.banner ?
                                    "{{ asset('eventBanner/') }}/" + event.banner :
                                    'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                                var href =
                                    "{{ route('get.myEvent.detail', ['event_slug' => 'event_slug_placeholder']) }}"
                                    .replace('event_slug_placeholder', event.slug);
                                var eventHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="${href}" class="product-item-img">
                                            <img style="width:200px;height:200px;" src="${image}" alt="${event.name}">
                                        </a>
                                        <div class="product-item-actions">
                                            <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                            <a href="#" class="btn btn-compare"><span>compare</span></a>
                                            <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                        </div>
                                        <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                        <span class="product-item-label label-date">${event.start_date}</span>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="${href}">${event.name}</a></strong>
                                        <div class="clearfix">
                                             <div class="product-item-price">
                                                <span class="price">$${event.tickets[0].price}</span>
                                            </div>
                                            <div class="product-item-description">
                                                <p>${event.country.name}</p>
                                                <p>${event.address}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>`;
                                $('#event-listing').append(eventHtml);
                            });

                            // Pagination logic
                            $('.pagination').empty();
                            if (response.current_page > 1) {
                                $('.pagination').append(
                                    `<li class="action"><a href="#" data-page="${response.current_page - 1}"><i class="fa fa-angle-left"></i></a></li>`
                                );
                            }
                            for (let i = 1; i <= response.last_page; i++) {
                                let activeClass = i === response.current_page ? 'active' : '';
                                $('.pagination').append(
                                    `<li class="${activeClass}"><a href="#" data-page="${i}">${i}</a></li>`
                                );
                            }
                            if (response.current_page < response.last_page) {
                                $('.pagination').append(
                                    `<li class="action"><a href="#" data-page="${response.current_page + 1}"><i class="fa fa-angle-right"></i></a></li>`
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }

                function getSelectedCategories() {
                    let selectedCategories = [];
                    $('.category-checkbox:checked').each(function() {
                        selectedCategories.push($(this).val());
                    });
                    return selectedCategories;
                }

                function getSelectedBrands() {
                    let selectedBrands = [];
                    $('.brand-checkbox:checked').each(function() {
                        selectedBrands.push($(this).val());
                    });
                    return selectedBrands;
                }

                function getSelectedPriceRanges() {
                    let priceRanges = [];
                    $('.price-checkbox:checked').each(function() {
                        let min = $(this).data('min');
                        let max = $(this).data('max');
                        priceRanges.push({
                            min: min,
                            max: max
                        });
                    });
                    return priceRanges;
                }

                // Search button click event
                $(document).on('click', '#getSearchVal', function(e) {
                    e.preventDefault(); // Prevent form submission

                    let searchVal = $('input[name="searchVal"]').val();
                    let selectedCategories = getSelectedCategories();
                    let eventType = $('#event_type').is(':checked') ? 1 : null;
                    let priceRanges = getSelectedPriceRanges();

                    fetchEvents(1, selectedCategories, eventType, priceRanges, searchVal);
                });

                // Category filter
                $(document).on('click', '.category', function() {
                    $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
                        return !value;
                    });

                    let selectedCategories = getSelectedCategories();
                    let eventType = $('#event_type').is(':checked') ? 1 : null;
                    let priceRanges = getSelectedPriceRanges();
                    let searchVal = $('input[name="searchVal"]').val();

                    fetchEvents(1, selectedCategories, eventType, priceRanges, searchVal);
                });

                // Event type filter
                $(document).on('click', '#event_type', function() {
                    let eventType = $(this).is(':checked') ? 1 : null;
                    let selectedCategories = getSelectedCategories();
                    let priceRanges = getSelectedPriceRanges();
                    let searchVal = $('input[name="searchVal"]').val();

                    fetchEvents(1, selectedCategories, eventType, priceRanges, searchVal);
                });

                // Price filter
                $(document).on('click', '.price-checkbox', function() {
                    let eventType = $('#event_type').is(':checked') ? 1 : null;
                    let selectedCategories = getSelectedCategories();
                    let priceRanges = getSelectedPriceRanges();
                    let selectedBrands = getSelectedBrands();
                    let searchVal = $('input[name="searchVal"]').val();

                    fetchEvents(1, selectedCategories, eventType, priceRanges, searchVal,
                        selectedBrands);
                });

                $(document).on('click', '.brand-checkbox', function() {
                    let selectedCategories = getSelectedCategories();
                    // let productType = $('.product_type').is(':checked') ? 1 : null;
                    let priceRanges = getSelectedPriceRanges();
                    let selectedBrands = getSelectedBrands();
                    let searchVal = $('input[name="searchVal"]').val();
                    let eventType = $('#event_type').is(':checked') ? 1 : null;

                    fetchEvents(1, selectedCategories, priceRanges, selectedBrands, searchVal,
                        eventType);
                });

                // Pagination click
                $(document).on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    let page = $(this).data('page');
                    let selectedCategories = getSelectedCategories();
                    let eventType = $('#event_type').is(':checked') ? 1 : null;
                    let priceRanges = getSelectedPriceRanges();
                    let searchVal = $('input[name="searchVal"]').val();
                    let selectedBrands = getSelectedBrands();

                    fetchEvents(page, selectedCategories, eventType, priceRanges, searchVal,
                        selectedBrands);
                });

                // Initial fetch
                fetchEvents();
            });

            // function fetchEvents(page = 1, selectedCategories = [], eventType = null, priceRanges = []) {
            //     $('#event-listing').html('');

            //     // Display skeleton loaders
            //     for (let i = 0; i < 18; i++) {
            //         var skeletonHtml = `
        // <li class="col-sm-4 event-item">
        //     <div class="skeleton-item">
        //         <div class="skeleton-content">
        //             <div class="skeleton-line" style="width: 80%;"></div>
        //             <div class="skeleton-line" style="width: 60%;"></div>
        //             <div class="skeleton-line" style="width: 70%;"></div>
        //         </div>
        //     </div>
        // </li>`;
            //         $('#event-listing').append(skeletonHtml);
            //     }

            //     // AJAX call to fetch events
            //     $.ajax({
            //         url: "{{ route('get.events') }}",
            //         type: "GET",
            //         data: {
            //             page: page,
            //             categories: selectedCategories,
            //             event_type: eventType,
            //             price_ranges: priceRanges,
            //             getSearchVal: getSearchVal
            //         },
            //         success: function(response) {
            //             $('#event-listing').empty();
            //             $.each(response.data, function(index, event) {
            //                 var image = event.banner ? "{{ asset('eventBanner/') }}/" + event
            //                     .banner :
            //                     'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
            //                 var href =
            //                     "{{ route('get.myEvent.detail', ['event_slug' => 'event_slug_placeholder']) }}"
            //                     .replace('event_slug_placeholder', event.slug);
            //                 var eventHtml = `
        //         <li class="col-sm-4 event-item">
        //             <div class="event-item-opt-1">
        //                 <div class="event-item-info">
        //                     <div class="event-item-photo">
        //                         <a href="${href}" class="event-item-img">
        //                             <img style="width:200px;height:200px;" src="${image}" alt="${event.name}">
        //                         </a>
        //                         <span class="event-item-label label-date">${event.start_date}</span>
        //                     </div>
        //                     <div class="event-item-detail">
        //                         <strong class="event-item-name"><a href="${href}">${event.name}</a></strong>
        //                         <div class="clearfix">
        //                             <div class="event-item-description">
        //                                 <p>${event.description.substring(0, 100)}...</p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </li>`;
            //                 $('#event-listing').append(eventHtml);
            //             });

            //             // Pagination logic
            //             $('.pagination').empty();
            //             if (response.current_page > 1) {
            //                 $('.pagination').append(
            //                     `<li class="action"><a href="#" data-page="${response.current_page - 1}"><i class="fa fa-angle-left"></i></a></li>`
            //                 );
            //             }
            //             for (let i = 1; i <= response.last_page; i++) {
            //                 let activeClass = i === response.current_page ? 'active' : '';
            //                 $('.pagination').append(
            //                     `<li class="${activeClass}"><a href="#" data-page="${i}">${i}</a></li>`
            //                 );
            //             }
            //             if (response.current_page < response.last_page) {
            //                 $('.pagination').append(
            //                     `<li class="action"><a href="#" data-page="${response.current_page + 1}"><i class="fa fa-angle-right"></i></a></li>`
            //                 );
            //             }
            //         },
            //         error: function(xhr, status, error) {
            //             console.error(error);
            //         }
            //     });
            // }

            // function getSelectedCategories() {
            //     let selectedCategories = [];
            //     $('.category-checkbox:checked').each(function() {
            //         selectedCategories.push($(this).val());
            //     });
            //     return selectedCategories;
            // }

            // function getSelectedPriceRanges() {
            //     let priceRanges = [];
            //     $('.price-checkbox:checked').each(function() {
            //         let min = $(this).data('min');
            //         let max = $(this).data('max');
            //         priceRanges.push({
            //             min: min,
            //             max: max
            //         });
            //     });
            //     return priceRanges;
            // }

            // $(document).on('click', '.category', function() {
            //     $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
            //         return !value;
            //     });

            //     let selectedCategories = getSelectedCategories();
            //     let eventType = $('#event_type').is(':checked') ? 1 : null;
            //     let priceRanges = getSelectedPriceRanges();

            //     fetchEvents(1, selectedCategories, eventType, priceRanges);
            // });

            // // Event type filter
            // $(document).on('click', '#event_type', function() {
            //     let eventType = $(this).is(':checked') ? 1 : null;
            //     let selectedCategories = getSelectedCategories();
            //     let priceRanges = getSelectedPriceRanges();

            //     fetchEvents(1, selectedCategories, eventType, priceRanges);
            // });

            // // Price filter
            // $(document).on('click', '.price-checkbox', function() {
            //     let eventType = $('#event_type').is(':checked') ? 1 : null;
            //     let selectedCategories = getSelectedCategories();
            //     let priceRanges = getSelectedPriceRanges();

            //     fetchEvents(1, selectedCategories, eventType, priceRanges);
            // });
            // $(document).on('click', '.pagination a', function(e) {
            //     e.preventDefault();
            //     var page = $(this).data('page');
            //     fetchEvents(page);
            // });
            // // Initial fetch
            // fetchEvents();
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

    <script>
        $(document).ready(function() {});
    </script>
@endsection
