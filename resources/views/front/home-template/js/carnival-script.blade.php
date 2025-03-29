<script>
    $(document).ready(function() {
        $(document).on('click', '.contry-item', function(e) {
            e.preventDefault();

            // Get the region ID from the clicked item
            let regionId = $(this).data('region');
            let url = `/get-carnivals-by-region/${regionId}`;
            @if (Route::is('front.home'))
                url = `/get-carnivals-by-region-for-home/${regionId}`;
            @endif

            // AJAX call to fetch carnivals by region
            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    // Empty the #carnival-wrapper to load new data

                    // Check if data contains data
                    let carnivalWrapper = $('#carnival-wrapper');
                    carnivalWrapper.empty();
                    if (data.length > 0) {

                        let listingContainer = $('<div class="carnival-listing"></div>');
                        carnivalWrapper.append(listingContainer);

                        $.each(data, function(index, carnival) {
                            console.log('carnival', carnival);
                            // Append each item to the listing

                            let carnivalId = carnival.id;
                            let url = "{{ route('events.view.more', ':slug') }}"
                                .replace(':slug', carnivalId);
                            listingContainer.append(`
                            <div class="carnival-item">
                                <div class="city-entry bg-grey-2">
                                    <div class="tour-block tour-block-s-9 hover-green radius-5 underline-block">
                                        <div class="tour-layer delay-1"></div>
                                        <img src="${carnival.image_url}" class="res-img" alt="">
                                        <div class="tour-caption">
                                            <div class="vertical-align">
                                                <h3 class="underline hover-it">${carnival.name}</h3>
                                                <div class="weth-icon">
                                                    <img src="https://carnivalguide.co/travel/img/weather_icon_small.png" alt="">
                                                    <b>+32<sup>o</sup>C</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="city-desc">
                                                <div class="tab-wrapper">
                                                <div class="tab-nav-wrapper">
                                                    <div class="nav-tab  clearfix">
                                                        <div class="nav-tab-item active">
                                                            Flights
                                                        </div>
                                                        <div class="nav-tab-item ">
                                                            Hotels
                                                        </div>
                                                        <div class="nav-tab-item ">
                                                            Events
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabs-content clearfix">
                                                    <div class="tab-info active">
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">1. bristol
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">2. Mykonos
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">3. bristol
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-info">
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">1. luxury Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">2. bristol
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">3. bristol
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-info">
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">1. bristol
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">2. Mykonos
                                                                    Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                        <div class="hotel-line clearfix">
                                                            <a class="hotel-img black-hover" href="#">
                                                                <img class="img-responsive"
                                                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                                                    alt="">
                                                                <div class="tour-layer delay-1"></div>
                                                            </a>
                                                            <div class="hotel-line-content">
                                                                <a class="hotel-line-title" href="#">3. luxury Hotel</a>
                                                                <div class="rate-wrap">
                                                                    <div class="rate">
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                        <span class="fa fa-star color-yellow"></span>
                                                                    </div>
                                                                    <i>485 Rewies</i>
                                                                </div>
                                                                <div class="hotel-line-price">from $273</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="discover-more">
                                                        <a href="${url}">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                        });


                    } else {
                        $('#carnival-wrapper').append(
                            '<p>No carnivals found for this region.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching carnivals:', error);
                    $('#carnival-wrapper').html(
                        '<p>Something went wrong. Please try again.</p>');
                }
            });
        });


        let imageMap = {
            'Flights': "{{ asset('shopAssets/images/carnival/flight.jpeg') }}",
            'Hotels': "{{ asset('shopAssets/images/carnival/hotel.jpeg') }}",
            'Events': "{{ asset('shopAssets/images/carnival/event2.jpeg') }}"
        };

        $(document).on('click', '.carnival-cover', function() {
            let selectedTab = $(this).text().trim();
            let carnivalId = $(this).data('id');
            console.log("Selected Tab:", selectedTab);
            let selectedTabImage = $(this).attr('data-img');
            let parentContainer = $(this).closest('.city-desc').siblings('.tour-block');
            let imageElement = parentContainer.find('.res-img');

            if (selectedTabImage) {
                imageElement.attr('src', selectedTabImage);
                // console.log("Updated Image:", selectedTabImage);
            } else {
                imageElement.attr('src', imageMap[selectedTab]);
                // console.log("No matching image found for:", selectedTab);
            }

            $.ajax({
                url: "{{ route('get.carnival.things') }}",
                method: "GET",
                data: {
                    _token: "{{ csrf_token() }}",
                    selectedTab: selectedTab,
                    carnivalId: carnivalId,
                },
                success: function(response) {
                    console.log('responseThings', response.things);
                    var html = `
                        <div class="hotel-line clearfix">
                            <a class="hotel-img black-hover" href="#">
                                <img class="img-responsive"
                                    src="https://carnivalguide.co/travel/images/hotelroomt.jpg"
                                    alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="hotel-line-content">
                                <a class="hotel-line-title" href="#">1. ${things.name}</a>
                                <div class="rate-wrap">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <i>485 Rewies</i>
                                </div>
                                <div class="hotel-line-price">from $273</div>
                            </div>
                        </div>
                    `;
                    // alert(response.success);
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.errors.email[0]);
                }
            });
        });
    });
</script>
