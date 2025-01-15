<div class="main-wraper bg-grey-5 padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dr-blue-2 underline">our services</h4>
                    <h2>we are the best</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000"
                data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                <div class="swiper-wrapper">
                    {{-- @foreach ($services as $service)
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="{{ asset('images/' . $service->icon) }}" alt="">
                                <h5 class="icon-title color-dark-2">{{ $service->title }}</h5>
                                <div class="icon-text color-dark-2-light">{{ $service->description }}</div>
                                <a href="javascript:void(0);" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view
                                        more</span></a>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach ($services as $service)
                        <div class="swiper-slide">
                            <div class="icon-block style-2 bg-white">
                                <img class="icon-img bg-dr-blue-2 border-grey-2"
                                    src="{{ asset('images/' . $service->icon) }}" alt="">
                                <h5 class="icon-title color-dark-2">{{ $service->title }}</h5>
                                <div class="icon-text color-dark-2-light">{{ $service->description }}</div>
                                <button
                                    class="c-button small bg-dr-blue-2 hv-dr-blue-2-o view-more-service-btn"
                                    data-title="{{ $service->title }}" data-description="{{ $service->description }}"
                                    data-image="{{ asset('images/' . $service->icon) }}">
                                    <span>view more</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination poin-style-2"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="serviceModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="serviceModalImage" src="" class="img-fluid mb-3" alt="">
                <p id="serviceModalDescription"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        console.log('Script loaded'); // Debugging
        console.log($('.view-more-service-btn').length);
        $(document).on('click', '.view-more-service-btn', function() {
            alert('Button clicked!'); // Basic feedback
        });

        // $(document).on('click', '.view-more-service-btn', function(e) {
        //     console.log('Button clicked'); // Debugging

        //     let title = $(this).data('title');
        //     let description = $(this).data('description');
        //     let image = $(this).data('image');

        //     console.log({
        //         title,
        //         description,
        //         image
        //     }); // Debugging

        //     $('#serviceModalTitle').text(title);
        //     $('#serviceModalDescription').text(description);
        //     $('#serviceModalImage').attr('src', image);

        //     $('#serviceModal').modal('show');
        // });
    });
</script>
