<div class="main-wraper bg-grey-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="color-dark-2-light">testimonials</h4>
                    <h2>what our clients say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="top-baner arrows">
                <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500"
                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            @php
                                $string = $testimonial->description;
                                $limit = 50;

                                // Limit the string to 20 characters
                                $limited_string = substr($string, 0, $limit);

                                // Optionally, append '...' to indicate truncation
                                if (strlen($string) > $limit) {
                                    $limited_string .= '...';
                                }
                            @endphp
                            <div class="swiper-slide" data-val="{{ $testimonial->key }}">
                                <div class="tour-item style-3">
                                    <div class="radius-top">
                                        <img src="{{ asset('testimonial/cover/' . $testimonial->cover_image) }}"
                                            alt="">
                                        <div class="tour-weather">{{ $testimonial->location }}</div>
                                    </div>
                                    <div class="tour-desc bg-white">
                                        <div class="rate">
                                            @foreach (range(1, $testimonial->rating) as $rating)
                                                <span class="fa fa-heart color-green"></span>
                                            @endforeach
                                        </div>
                                        <img class="tm-people"
                                            src="{{ asset('testimonial/image/' . $testimonial->image) }}"
                                            alt="">
                                        <h4>
                                            <a class="tour-title color-dark-2 link-green" href="javascript:void(0);"
                                                title="See More..."
                                                onclick="showTestimonialModal('{{ $testimonial->name }}', '{{ $testimonial->location }}', '{{ $testimonial->rating }}', '{{ $testimonial->description }}', '{{ asset('testimonial/image/' . $testimonial->image) }}')">
                                                {{ $testimonial->name }}
                                            </a>
                                        </h4>
                                        <div class="tour-text color-grey-3">{{ $limited_string }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
<!-- Modal Structure for Bootstrap 3 -->
<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel"
    style="z-index: 105050;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="testimonialModalLabel"></h4>
            </div>
            <div class="modal-body">
                <img id="testimonialImage" src="" alt="" class="img-responsive" width="100"
                    style="border-radius:50%;">
                <div class="location" style="margin: 10px; 0px" id="testimonialLocation"></div>
                <div id="testimonialRating" class="rate" style="margin: 10px; 0px"></div>
                <div id="testimonialDescription" style="margin: 10px; 0px"></div>
            </div>
        </div>
    </div>
</div>
