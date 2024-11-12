@extends('ShopFrontend.Layouts.layout')

@section('main')
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li><a href="#">Electronics </a></li>
                <li class="active">Machine Pro</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    <div class="category-view">
                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" data-items="1"
                            data-autoplaytimeout="700" data-autoplay="true" data-loop="true">

                            <div class="item">
                                <a href="">
                                    <img src="https://carnivalguide.co/shop/images/eventbnr2.jpg" alt="category-images">
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="https://carnivalguide.co/shop/images/eventbnr3.jpg" alt="category-images">
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="https://carnivalguide.co/shop/images/eventbnr1.jpg" alt="category-images">
                                </a>
                            </div>

                        </div>

                    </div><!-- images categori -->

                    {{-- <!-- link categori
                                    <ul class="category-links">
                                        <li class="current-cate"><a href="">Caribbean</a></li>
                                        <li><a href="">North America</a></li>
                                        <li><a href="">South America</a></li>
                                        <li><a href="">Europe</a></li>
                                        <li><a href="">Africa</a></li>
                                        <li><a href="">Asia</a></li>
                                        <li><a href="">Australia</a></li>
                                    </ul>link categori --> --}}

                    <div>
                        <form>
                            <input type="text" fdprocessedid="0nt0dd">
                            <button fdprocessedid="e68vzg">Search</button>
                        </form>
                    </div>


                    <div class=" toolbar-products toolbar-top">

                        <div class="btn-filter-products">
                            <span>Filter</span>
                        </div>



                        <h1 class="cate-title">Events</h1>


                        {{-- <div class="modes">
                            <strong class="label">View as:</strong>
                            <strong class="modes-mode active mode-grid" title="Grid">
                                <span>grid</span>
                            </strong>
                            <a href="Category2.html" title="List" class="modes-mode mode-list">
                                <span>list</span>
                            </a>
                        </div><!-- View as --> --}}



                        <div class="toolbar-option">

                            <div class="toolbar-sorter ">
                                <label class="label">Short by:</label>
                                <select class="sorter-options form-control">
                                    <option selected="selected" value="position">Position</option>
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
                                    <option selected="selected" value="9">Show 18</option>
                                    <option value="15">Show 15</option>
                                    <option value="30">Show 30</option>
                                </select>

                            </div><!-- Show per page -->

                        </div>

                        <ul class="pagination">
                            <li class="action">
                                <a href="#">
                                    <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li class="action">
                                <a href="#">
                                    <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div>
                        <!-- link categori -->
                        <ul class="category-links">
                            <li class="current-cate"><a href="">Caribbean</a></li>
                            <li><a href="">North America</a></li>
                            <li><a href="">South America</a></li>
                            <li><a href="">Europe</a></li>
                            <li><a href="">Africa</a></li>
                            <li><a href="">Asia</a></li>
                            <li><a href="">Australia</a></li>
                        </ul><!-- link categori -->

                    </div>
                    {{-- <div>
                        <!-- link categori -->
                        <ul class="category-links">
                            <li class="current-cate"><a href="">Caribbean</a></li>
                            <li><a href="">North America</a></li>
                            <li><a href="">South America</a></li>
                            <li><a href="">Europe</a></li>
                            <li><a href="">Africa</a></li>
                            <li><a href="">Asia</a></li>
                            <li><a href="">Australia</a></li>
                        </ul><!-- link categori -->

                    </div> --}}


                    <!-- List Events -->
                    <div class="events  events-grid">
                        <ol class="events-items row event-listing" id="event-listing">
                        </ol><!-- list product -->
                    </div> <!-- List Events -->

                    <!-- Toolbar -->
                    <div class=" toolbar-events toolbar-bottom">

                        {{-- <div class="modes">
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
                                <select class="sorter-options form-control" fdprocessedid="d4vl1i">
                                    <option selected="selected" value="position">Event name</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                                <a href="" class="sorter-action"></a>
                            </div><!-- Short by -->

                            <div class="toolbar-limiter">
                                <label class="label">
                                    <span>Show:</span>
                                </label>

                                <select class="limiter-options form-control" fdprocessedid="7nr4uq">
                                    <option selected="selected" value="9"> Show 18</option>
                                    <option value="15">Show 15</option>
                                    <option value="30">Show 30</option>
                                </select>

                            </div><!-- Show per page -->

                        </div> --}}

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
                <div class="col-md-3 col-md-pull-9 col-sidebar">
                    <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                        <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="block-title">
                            <strong>FILTER SELECTION</strong>
                        </div>
                        <div class="block-content">

                            <!-- Filter Item  categori-->
                            <div class="filter-options-item filter-options-categori">
                                <div class="filter-options-title">Categories</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Tops <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Network &amp; Computer <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Batteries &amp; Chargers <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Dresses <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Knitted <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pants <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Best selling <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Headphone &amp; Headset <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item  categori-->

                            <!-- filter price -->
                            <div class="filter-options-item filter-options-price">
                                <div class="filter-options-title">Price</div>
                                <div class="filter-options-content">
                                    <div class="slider-range">

                                        <div id="slider-range"
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                            aria-disabled="false">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                style="left: 0%; width: 60%;"></div><a
                                                class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                                style="left: 0%;"></a><a
                                                class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                                style="left: 60%;"></a>
                                        </div>

                                        <div class="action">
                                            <span class="price">
                                                <span>Range:</span>
                                                $<span id="amount-left">0</span>
                                                -
                                                $<span id="amount-right">300</span>
                                            </span>
                                        </div>
                                    </div>
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$20 - $50 <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$50 - $100 <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$100 - $250 <span class="count">(20)</span>
                                                </span>
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
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Channelo <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Mamypokon <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pamperson <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pradano <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pumano <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>AME <span class="count">(20)</span> </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- filter color-->
                            {{-- <div class="filter-options-item filter-options-color">
                                <div class="filter-options-title">COLOR</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #fca53c;"></span>
                                                    <span class="count">(30)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #6b5a5c;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #000000;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #3063f2;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #f9334a;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #964b00;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #faebd7;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #e84c3d;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #fccacd;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- Filter Item  size-->
                            <div class="filter-options-item filter-options-size">
                                <div class="filter-options-title">SIZE</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>L <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>32 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>36 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>37 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                            </label>
                                        </li>

                                    </ol>
                                </div>
                            </div><!-- Filter Item  size--> --}}

                        </div>
                    </div>



                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat1 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat2 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat3 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
            </div>
        </div>
    </main>
@endsection

@section('script')
    <!-- Custom scripts -->
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

                    slide: function (event, ui) {

                        $('#amount-left').text(ui.values[0] );
                        $('#amount-right').text(ui.values[1] );

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            });

        })(jQuery);

    </script>
    <script>
        $(document).ready(function() {
            $('body').addClass('catalog-category-view catalog-view_op1');

            function fetchEvents(page = 1, selectedCategories = []) {
                $('#event-listing').html('');

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
                </li>
            `;
                    $('#event-listing').append(skeletonHtml);
                }

                $.ajax({
                    url: "{{ route('get.events') }}",
                    type: "GET",
                    data: {
                        page: page,
                        categories: selectedCategories
                    },
                    success: function(response) {
                        $('#event-listing').empty();
                        $.each(response.data, function(index, event) {
                            var image = event.banner ? "{{ asset('eventBanner/') }}/" + event
                                .banner :
                                'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                            var href =
                                "{{ route('get.myEvent.detail', ['event_slug' => 'event_slug_placeholder']) }}";
                            href = href.replace('event_slug_placeholder', event.slug);
                            var eventHtml = `
                                <li class="col-sm-4 event-item">
                                    <div class="event-item-opt-1">
                                        <div class="event-item-info">
                                            <div class="event-item-photo">
                                                <a href="${href}" class="event-item-img">
                                                    <img style="width:200px;height:200px;" src="${image}" alt="${event.name}">
                                                </a>
                                                <span class="event-item-label label-date">${event.start_date}</span>
                                            </div>
                                            <div class="event-item-detail">
                                                <strong class="event-item-name"><a href="${href}">${event.name}</a></strong>
                                                <div class="clearfix">
                                                    <div class="event-item-description">
                                                        <p>${event.description.substring(0, 100)}...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `;
                            $('#event-listing').append(eventHtml);
                        });

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

            // $(document).on('change', '.category-checkbox', function() {
            //     let selectedCategories = [];
            //     $('.category-checkbox:checked').each(function() {
            //         selectedCategories.push($(this).val());
            //     });
            //     fetchEvents(1, selectedCategories);
            // });

            $(document).on('click', '.category', function() {
                $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
                    return !value;
                });

                let selectedCategories = [];
                $('.category-checkbox:checked').each(function() {
                    selectedCategories.push($(this).val());
                });

                fetchEvents(1, selectedCategories);
            });


            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).data('page');
                let selectedCategories = [];
                $('.category-checkbox:checked').each(function() {
                    selectedCategories.push($(this).val());
                });
                fetchEvents(page, selectedCategories);
            });

            fetchEvents();
        });
    </script>
@endsection
