@extends('front.layouts.app')
@section('front-content')
    @include('front.home-template.banner-area')
    <!-- CONTRY-ITEM -->

    @include('front.home-template.carnival')
    @include('front.home-template.our-service')
    @include('front.home-template.testimonial')
    <div class="main-wraper bg-grey-2 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title" style="padding-top: 0px;">
                        <h4 class="subtitle color-blue-2 underline">our gallery</h4>
                        <h2>photos our customers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                        <div class="swiper-wrapper">
                            @foreach ($siteGallery as $row)
                                <div class="swiper-slide" data-val="{{ $row->key }}">
                                    <div class="tour-item style-3">
                                        <div class="radius-top">
                                            <img src="{{ asset('images/' . $row->image) }}" alt="">

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide" data-val="1">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_1.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="2">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_2.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="3">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_3.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="4">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_4.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="5">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_5.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="6">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_6.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="7">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_7.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-val="8">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="https://carnivalguide.co/travel/img/home/gal_8.jpg" alt="">

                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="pagination  poin-style-1 pagination-hidden"></div>
                    </div>
                    <div class="swiper-arrow-left offers-arrow color-3"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right offers-arrow color-3"><span class="fa fa-angle-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front.home-template.our-partner')
    <!-- S_NEWS-ENTRY -->
    @include('front.home-template.news')
    @include('front.home-template.brand-showcase')
@endsection
@section('front-script')
    @include('front.home-template.js.carnival-script')
    <script>
        function showTestimonialModal(name, location, rating, description, image) {
            // Set the modal title and body with the passed testimonial data
            document.getElementById('testimonialModalLabel').textContent = name;
            document.getElementById('testimonialLocation').innerHTML = `<strong>Location:</strong> ${location}`;

            // Dynamically generate the rating
            let ratingHtml = '<strong>Rating:</strong> ';
            for (let i = 1; i <= rating; i++) {
                ratingHtml += '<span class="fa fa-heart color-green"></span>';
            }
            document.getElementById('testimonialRating').innerHTML = ratingHtml;
            let more_description = '<Strong>Detail: </strong>' + description;
            document.getElementById('testimonialDescription').innerHTML = more_description;
            document.getElementById('testimonialImage').src = image;

            // Show the modal (Bootstrap v3 syntax)
            $('#testimonialModal').modal('show');
        }

        $(document).ready(function() {
            $('.city-entry-new').css('display', 'none');
            // $('.new-slider').css('display','none');

        });

        function showActionBox(id, carnival_id) {
            $('.city-entry-new').css('display', 'block');
            $('.new-slider').css('display', 'none');
            console.log('carrr', id, carnival_id);
            $.ajax({
                url: "{{ route('front.carnival.banner_details') }}",
                type: "GET",
                data: {
                    type: id,
                    carnival_id: carnival_id,
                },
                success: function(response) {
                    console.log(response);
                    // $('.tabs-content').html(response);

                    if (id == "flight") {
                        $('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_1.jpg');
                        $('.flight').removeClass('d-none');
                        $('.flight-tab').removeClass('d-none');
                        $('.flight-tab').html(response);
                        $('.hotel').addClass('d-none');
                        $('.hotel-tab').addClass('d-none');
                        $('.events').addClass('d-none');
                        $('.events-tab').addClass('d-none');
                        $('.costume').addClass('d-none');
                        $('.costume-tab').addClass('d-none');
                    } else if (id == "hotel") {
                        $('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        $('.hotel').removeClass('d-none');
                        $('.hotel-tab').removeClass('d-none');
                        $('.hotel-tab').html(response);
                        $('.flight').addClass('d-none');
                        $('.flight-tab').addClass('d-none');
                        $('.events').addClass('d-none');
                        $('.events-tab').addClass('d-none');
                        $('.costume').addClass('d-none');
                        $('.costume-tab').addClass('d-none');
                    } else if (id == "events") {
                        $('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        $('.hotel').addClass('d-none');
                        $('.hotel-tab').addClass('d-none');
                        $('.flight').addClass('d-none');
                        $('.flight-tab').addClass('d-none');
                        $('.events').removeClass('d-none');
                        $('.events-tab').removeClass('d-none');
                        $('.events-tab').html(response);
                        $('.costume').addClass('d-none');
                        $('.costume-tab').addClass('d-none');
                    } else if (id == "costume") {
                        $('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        $('.hotel').addClass('d-none');
                        $('.hotel-tab').addClass('d-none');
                        $('.flight').addClass('d-none');
                        $('.flight-tab').addClass('d-none');
                        $('.events').addClass('d-none');
                        $('.events-tab').addClass('d-none');
                        $('.costume').removeClass('d-none');
                        $('.costume-tab').removeClass('d-none');
                        $('.costume-tab').html(response);
                    } else {
                        $('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_3.jpg');
                        $('.events').removeClass('d-none');
                        $('.events-tab').removeClass('d-none');
                        $('.events-tab').html(response);
                        $('.hotel').addClass('d-none');
                        $('.hotel-tab').addClass('d-none');
                        $('.flight').addClass('d-none');
                        $('.flight-tab').addClass('d-none');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
@endsection
