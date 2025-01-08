@extends('front.layouts.app')
@section('front-content')
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
            let more_description = '<Strong>Detail: </strong>'+description;
            document.getElementById('testimonialDescription').innerHTML = more_description;
            document.getElementById('testimonialImage').src = image;

            // Show the modal (Bootstrap v3 syntax)
            $('#testimonialModal').modal('show');
        }

        $(document).ready(function() {
            $('.city-entry-new').css('display', 'none');
            // $('.new-slider').css('display','none');

        });

        function showActionBox(id) {
            $('.city-entry-new').css('display', 'block');
            $('.new-slider').css('display', 'none');
            if (id == "flight") {
                $('.city-entry-new > .tour-block > img').attr('src', 'https://carnivalguide.co/travel/img/home/city_1.jpg');
                $('.flight').removeClass('d-none');
                $('.flight-tab').removeClass('d-none');
                $('.hotel').addClass('d-none');
                $('.hotel-tab').addClass('d-none');
                $('.events').addClass('d-none');
                $('.events-tab').addClass('d-none');
            } else if (id == "hotel") {
                $('.city-entry-new > .tour-block > img').attr('src', 'https://carnivalguide.co/travel/img/home/city_2.jpg');
                $('.hotel').removeClass('d-none');
                $('.hotel-tab').removeClass('d-none');
                $('.flight').addClass('d-none');
                $('.flight-tab').addClass('d-none');
                $('.events').addClass('d-none');
                $('.events-tab').addClass('d-none');
            } else {
                $('.city-entry-new > .tour-block > img').attr('src', 'https://carnivalguide.co/travel/img/home/city_3.jpg');
                $('.events').removeClass('d-none');
                $('.events-tab').removeClass('d-none');
                $('.hotel').addClass('d-none');
                $('.hotel-tab').addClass('d-none');
                $('.flight').addClass('d-none');
                $('.flight-tab').addClass('d-none');

            }

        }
    </script>
@endsection
