@extends('front.layouts.app')
@section('front-content')
    <style>
        @media (max-width: 480px) {
            .video-wrapper .vertical-align {
                top: 0px !important;
            }
        }
    </style>
    @include('front.home-template.banner-area')
    <!-- CONTRY-ITEM -->

    @include('front.home-template.carnival')
    @include('front.home-template.our-service')
    @include('front.home-template.testimonial')
    @include('front.home-template.our-gallery')

    @include('front.home-template.our-partner')
    <!-- S_NEWS-ENTRY -->
    @include('front.home-template.news')
    @include('front.home-template.brand-showcase')
@endsection
@section('front-script')
    @include('front.home-template.js.carnival-script')
    <script>
        $(document).ready(function() {
            $('.city-entry-new').css('display', 'none');
            // $('.new-slider').css('display','none');

        });

        function showActionBox(id, carnival_id) {
            console.log('id' +  carnival_id);
            // $('.city-entry-new').css('display', 'block');
            $('#new-slider-' + carnival_id).css('display', 'none');
            $('#city-entry-' + carnival_id).attr('style', 'display: block !important');
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

                    // Get the specific city-entry for this carnival
                    var cityEntry = $('#city-entry-' + carnival_id);

                    if (id == "flight") {
                        cityEntry.find('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_1.jpg');
                        cityEntry.find('.flight').removeClass('d-none');
                        cityEntry.find('.flight-tab').removeClass('d-none');
                        cityEntry.find('.flight-tab').html(response);
                        cityEntry.find('.hotel').addClass('d-none');
                        cityEntry.find('.hotel-tab').addClass('d-none');
                        cityEntry.find('.events').addClass('d-none');
                        cityEntry.find('.events-tab').addClass('d-none');
                        cityEntry.find('.costume').addClass('d-none');
                        cityEntry.find('.costume-tab').addClass('d-none');
                    } else if (id == "hotel") {
                        cityEntry.find('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        cityEntry.find('.hotel').removeClass('d-none');
                        cityEntry.find('.hotel-tab').removeClass('d-none');
                        cityEntry.find('.hotel-tab').html(response);
                        cityEntry.find('.flight').addClass('d-none');
                        cityEntry.find('.flight-tab').addClass('d-none');
                        cityEntry.find('.events').addClass('d-none');
                        cityEntry.find('.events-tab').addClass('d-none');
                        cityEntry.find('.costume').addClass('d-none');
                        cityEntry.find('.costume-tab').addClass('d-none');
                    } else if (id == "events") {
                        cityEntry.find('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        cityEntry.find('.hotel').addClass('d-none');
                        cityEntry.find('.hotel-tab').addClass('d-none');
                        cityEntry.find('.flight').addClass('d-none');
                        cityEntry.find('.flight-tab').addClass('d-none');
                        cityEntry.find('.events').removeClass('d-none');
                        cityEntry.find('.events-tab').removeClass('d-none');
                        cityEntry.find('.events-tab').html(response);
                        cityEntry.find('.costume').addClass('d-none');
                        cityEntry.find('.costume-tab').addClass('d-none');
                    } else if (id == "costume") {
                        cityEntry.find('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_2.jpg');
                        cityEntry.find('.hotel').addClass('d-none');
                        cityEntry.find('.hotel-tab').addClass('d-none');
                        cityEntry.find('.flight').addClass('d-none');
                        cityEntry.find('.flight-tab').addClass('d-none');
                        cityEntry.find('.events').addClass('d-none');
                        cityEntry.find('.events-tab').addClass('d-none');
                        cityEntry.find('.costume').removeClass('d-none');
                        cityEntry.find('.costume-tab').removeClass('d-none');
                        cityEntry.find('.costume-tab').html(response);
                    } else {
                        cityEntry.find('.city-entry-new > .tour-block > img').attr('src',
                            'https://carnivalguide.co/travel/img/home/city_3.jpg');
                        cityEntry.find('.events').removeClass('d-none');
                        cityEntry.find('.events-tab').removeClass('d-none');
                        cityEntry.find('.events-tab').html(response);
                        cityEntry.find('.hotel').addClass('d-none');
                        cityEntry.find('.hotel-tab').addClass('d-none');
                        cityEntry.find('.flight').addClass('d-none');
                        cityEntry.find('.flight-tab').addClass('d-none');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function showSlider(carnival_id) {
            $('#city-entry-' + carnival_id).attr('style', 'display: none !important');
            $('#new-slider-' + carnival_id).css('display', 'block');
        }
    </script>
@endsection
