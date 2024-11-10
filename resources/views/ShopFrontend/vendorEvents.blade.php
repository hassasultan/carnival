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

                    <!-- link categori
                                <ul class="category-links">
                                    <li class="current-cate"><a href="">Caribbean</a></li>
                                    <li><a href="">North America</a></li>
                                    <li><a href="">South America</a></li>
                                    <li><a href="">Europe</a></li>
                                    <li><a href="">Africa</a></li>
                                    <li><a href="">Asia</a></li>
                                    <li><a href="">Australia</a></li>
                                </ul>link categori -->

                    {{-- <div>
                        <form>
                            <input type="text" fdprocessedid="0nt0dd">
                            <button fdprocessedid="e68vzg">Search</button>
                        </form>
                    </div>


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

                    </div><!-- Toolbar --> --}}

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
