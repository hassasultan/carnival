@extends('ShopFrontend.Layouts.layout')

@section('main')
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="{{ route('front.home') }}">Home </a></li>
                <li><a href="{{ route('front.vendor.detail', $user->slug) }}">{{ $user->full_name }} </a></li>
                <li class="active">Events</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    <div class="category-view">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="true" data-dots="false" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1740px, 0px, 0px); transition: all; width: 6090px;">
                                    <div class="owl-item cloned" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr2.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr3.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr1.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr2.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr3.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr1.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 870px;">
                                        <div class="item ">
                                            <a href=""><img src="images/eventbnr2.jpg" alt="category-images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div><!-- images categori -->

                    <div>
                        <!-- link categori -->
                        <ul class="category-links">
                            @foreach ($regions as $region)
                                <li><a href="{{ $region->id }}">{{ $region->name }}</a></li>
                            @endforeach
                            {{-- <li class="current-cate"><a href="">Caribbean</a></li>
                            <li><a href="">North America</a></li>
                            <li><a href="">South America</a></li>
                            <li><a href="">Europe</a></li>
                            <li><a href="">Africa</a></li>
                            <li><a href="">Asia</a></li>
                            <li><a href="">Australia</a></li> --}}
                        </ul><!-- link categori -->

                    </div>

                    <!-- List Events -->
                    <div class="events  events-grid">
                        <ol class="events-items row event-listing" id="event-listing">
                        </ol><!-- list product -->
                    </div> <!-- List Events -->

                    <!-- Toolbar -->
                    <div class=" toolbar-events toolbar-bottom">
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
                                    <div class="slider-range">

                                        <div id="slider-range"></div>

                                        <div class="action">
                                            <span class="price">
                                                <span>Range:</span>
                                                $<span id="amount-left"></span>
                                                -
                                                $<span id="amount-right"></span>
                                            </span>
                                        </div>
                                    </div>
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

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">Event Type</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" id="event_type"><span>Full Day </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->
                        </div>
                    </div><!-- Filter -->

                </div>
                <!-- Sidebar -->
            </div>
        </div>
    </main>
@endsection

@section('script')
    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            function fetchEvents(page = 1, selectedCategories = [], eventType = null, priceRanges = []) {
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
                        price_ranges: priceRanges
                    },
                    success: function(response) {
                        $('#event-listing').empty();
                        $.each(response.data, function(index, event) {
                            var image = event.banner ? "{{ asset('eventBanner/') }}/" + event
                                .banner :
                                'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                            var href =
                                "{{ route('get.myEvent.detail', ['event_slug' => 'event_slug_placeholder']) }}"
                                .replace('event_slug_placeholder', event.slug);
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

            $(document).on('click', '.category', function() {
                $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
                    return !value;
                });

                let selectedCategories = getSelectedCategories();
                let eventType = $('#event_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();

                fetchEvents(1, selectedCategories, eventType, priceRanges);
            });

            // Event type filter
            $(document).on('click', '#event_type', function() {
                let eventType = $(this).is(':checked') ? 1 : null;
                let selectedCategories = getSelectedCategories();
                let priceRanges = getSelectedPriceRanges();

                fetchEvents(1, selectedCategories, eventType, priceRanges);
            });

            // Price filter
            $(document).on('click', '.price-checkbox', function() {
                let eventType = $('#event_type').is(':checked') ? 1 : null;
                let selectedCategories = getSelectedCategories();
                let priceRanges = getSelectedPriceRanges();

                fetchEvents(1, selectedCategories, eventType, priceRanges);
            });

            // Initial fetch
            fetchEvents();
        });
    </script>
@endsection
