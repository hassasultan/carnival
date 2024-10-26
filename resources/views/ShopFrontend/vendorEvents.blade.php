@extends('ShopFrontend.Layouts.layout')

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li><a href="#">Mascamp </a></li>
                <li class="active">Events</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    <div class="category-view">
                        <div class="owl-carousel " data-nav="true" data-dots="false" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            {{-- <div class="item ">
                                <a href=""><img src="{{ asset('shopAssets/images/media/category-images1.jpg') }}"
                                        alt="category-images"></a>
                            </div>
                            <div class="item ">
                                <a href=""><img src="{{ asset('shopAssets/images/media/category-images2.jpg') }}"
                                        alt="category-images"></a>
                            </div> --}}
                            @foreach ($banners as $banner)
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset($banner->banner_image) }}" alt="{{ $banner->description }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- images categori -->

                    <!-- link categori -->
                    <ul class="category-links">
                        <li class="current-cate"><a href="">All Events</a></li>
                        <li><a href="">Tops</a></li>
                        <li><a href="">Dresses</a></li>
                        <li><a href="">Bags & Shoes</a></li>
                        <li><a href="">Scaves</a></li>
                        <li><a href="">Pants</a></li>
                        <li><a href="">Blouses</a></li>
                    </ul><!-- link categori -->

                    <!-- Toolbar -->
                    <div class=" toolbar-events toolbar-top">

                        <div class="btn-filter-events">
                            <span>Filter</span>
                        </div>

                        <h1 class="cate-title">Events</h1>

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

                    </div><!-- Toolbar -->

                    <!-- List Events -->
                    <div class="events  events-grid">
                        <ol class="event-items row event-listing" id="event-listing">

                        </ol><!-- list event -->
                    </div> <!-- List Events -->

                    <!-- Toolbar -->
                    <div class=" toolbar-events toolbar-bottom">

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

                    <!-- Block  bestseller events-->
                    <div class="block-sidebar block-sidebar-categorie">
                        <div class="block-title">
                            <strong>Event TYPES</strong>
                        </div>
                        <div class="block-content">
                            <ul class="items">
                                <li class="parent">
                                    <a href="">Dress</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li>
                                            <a href="">subcategory 1</a>

                                        </li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Bags</a>
                                </li>
                                <li class="parent">
                                    <a href="">Cost &amp; Jackets</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Beauty</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jewellery</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Nightwear</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jumpers &amp; Cardigans</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Block  bestseller events-->

                    <!-- block filter events -->
                    <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                        <div class="close-filter-events"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="block-title">
                            <strong>FILTER SELECTION</strong>
                        </div>
                        <div class="block-content">

                            <!-- Filter Item  categori-->
                            <div class="filter-options-item filter-options-categori">
                                <div class="filter-options-title">Categories</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        @foreach ($categories as $category)
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox" class="category-checkbox"
                                                        value="{{ $category['id'] }}">
                                                    <span>{{ $category['category'] }} <span
                                                            class="count">({{ $category['count'] }})</span></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div><!-- Filter Item  categori-->

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
                            <div class="filter-options-item filter-options-color">
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
                            </div><!-- Filter Item  size-->

                        </div>
                    </div><!-- Filter -->

                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item item1">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                            <div class="item item2">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                            <div class="item item3">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                        </div>
                    </div><!-- block slide top -->

                    <!-- Block  bestseller events-->
                    <div class="block-sidebar block-sidebar-events">
                        <div class="block-title">
                            <strong>SPECIAL EventS</strong>
                        </div>
                        <div class="block-content">
                            <div class="event-item event-item-opt-1">
                                <div class="event-item-info">
                                    <div class="event-item-photo">
                                        <a class="event-item-img" href=""><img alt="event name"
                                                src="images/media/floor5-1.jpg"></a>
                                    </div>
                                    <div class="event-item-detail">
                                        <strong class="event-item-name"><a href="">Security Camera Size
                                                Flared</a></strong>
                                        <div class="clearfix">
                                            <div class="event-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="event-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="" class="btn all-events">All events <i aria-hidden="true"
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Block  bestseller events-->

                    <!-- Block  tags-->
                    <div class="block-sidebar block-sidebar-tags">
                        <div class="block-title">
                            <strong>event tags</strong>
                        </div>
                        <div class="block-content">
                            <ul>
                                <li><a href="" class="lv2">actual</a></li>
                                <li><a href="" class="lv1">adorable</a></li>
                                <li><a href="" class="lv3">amaze</a></li>
                                <li><a href="" class="lv5">change</a></li>
                                <li><a href="" class="lv2">consider</a></li>
                                <li><a href="" class="lv1">delivery</a></li>
                                <li><a href="" class="lv1">Top</a></li>
                                <li><a href="" class="lv4">flexib</a></li>
                                <li><a href="" class="lv1">phenomenon </a></li>
                            </ul>
                        </div>
                    </div><!-- Block  tags-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-sidebar-testimonials">
                        <div class="block-title">
                            <strong>Testimonials</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                                data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your event needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your event needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your event needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- block slide top -->
                </div><!-- Sidebar -->
            </div>
        </div>

    </main><!-- end MAIN -->
@endsection

@section('script')
    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
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
                            var eventHtml = `
                        <li class="col-sm-4 event-item">
                            <div class="event-item-opt-1">
                                <div class="event-item-info">
                                    <div class="event-item-photo">
                                        <a href="" class="event-item-img">
                                            <img style="width:200px;height:200px;" src="${image}" alt="${event.name}">
                                        </a>
                                        <span class="event-item-label label-date">${event.start_date}</span>
                                    </div>
                                    <div class="event-item-detail">
                                        <strong class="event-item-name"><a href="">${event.name}</a></strong>
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

            $(document).on('change', '.category-checkbox', function() {
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
