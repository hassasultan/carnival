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
            console.log('id: ' + id + ', carnival_id: ' + carnival_id);
            // Hide slider and show city-entry
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
                    console.log('AJAX Response:', response);
                    
                    // Get the specific city-entry for this carnival
                    var cityEntry = $('#city-entry-' + carnival_id);
                    console.log('City entry found:', cityEntry.length);
                    
                    // First, hide ALL tabs and nav items
                    cityEntry.find('.nav-tab-item').addClass('d-none');
                    cityEntry.find('.tab-info').addClass('d-none');
                    
                    console.log('Hiding all tabs and nav items');
                    
                    if (id == "flight") {
                        console.log('Showing flight tab');
                        cityEntry.find('.flight').removeClass('d-none');
                        cityEntry.find('.flight-tab').removeClass('d-none');
                        cityEntry.find('.flight-tab').html(response);
                    } else if (id == "hotel") {
                        console.log('Showing hotel tab');
                        cityEntry.find('.hotel').removeClass('d-none');
                        cityEntry.find('.hotel-tab').removeClass('d-none');
                        cityEntry.find('.hotel-tab').html(response);
                    } else if (id == "events") {
                        console.log('Showing events tab');
                        cityEntry.find('.events').removeClass('d-none');
                        cityEntry.find('.events-tab').removeClass('d-none');
                        cityEntry.find('.events-tab').html(response);
                    } else if (id == "costume") {
                        console.log('Showing costume tab');
                        cityEntry.find('.costume').removeClass('d-none');
                        cityEntry.find('.costume-tab').removeClass('d-none');
                        cityEntry.find('.costume-tab').html(response);
                    }
                    
                    console.log('Tab switching completed');
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        function showSlider(carnival_id) {
            $('#city-entry-' + carnival_id).attr('style', 'display: none !important');
            $('#new-slider-' + carnival_id).css('display', 'block');
        }

        function switchTab(tabType, carnival_id) {
            console.log('Switching to tab: ' + tabType + ' for carnival: ' + carnival_id);
            
            // Get the specific city-entry for this carnival
            var cityEntry = $('#city-entry-' + carnival_id);
            
            // Hide all tabs and nav items
            cityEntry.find('.nav-tab-item').addClass('d-none');
            cityEntry.find('.tab-info').addClass('d-none');
            
            // Show the selected tab
            cityEntry.find('.' + tabType).removeClass('d-none');
            cityEntry.find('.' + tabType + '-tab').removeClass('d-none');
        }
    </script>
@endsection
