@extends('ShopFrontend.Layouts.layout')

@section('title')
    Gallery
@endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">
        <div class="columns container">
            <!-- Block  Breadcrumb-->
            <ol class="breadcrumb no-hide">
                @if ($user->vendor)
                    <a href="{{ route('front.vendor.detail', $user->vendor->id) }}">Mascamps</a>
                    {{ $user->vendor->name }} Gallery
                @elseif ($user->subvendor)
                    <a href="{{ route('front.subVendor.detail', $user->subvendor->id) }}">Section Leaders</a>
                    {{ $user->subvendor->name }} Gallery
                @endif
            </ol><!-- Block  Breadcrumb-->

            <div class="row">
                <!-- Main Content -->
                <div class="col-main">
                    <!-- Toolbar -->
                    <div class="toolbar-gallery toolbar-top">
                        <h1 class="cate-title">Gallery</h1>
                    </div><!-- Toolbar -->

                    <!-- List Products -->
                    <div class="gallery gallery-grid">
                        <ol class="product-items row gallery-listing" id="gallery-listing">
                            @foreach ($siteGallery as $row)
                                <li class="col-sm-4 product-item gallery-image" data-index="{{ $loop->index }}">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="javascript:void(0)" class="product-item-img">
                                                    <img src="{{ asset('images/' . $row->image) }}"
                                                        alt="{{ $row->image }}" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ol><!-- List Products -->
                    </div> <!-- List Products -->

                    <!-- Modal -->
                    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
                        aria-labelledby="galleryModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="galleryModalLabel">Gallery</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-slider">
                                        <img id="modalImage" class="img-fluid" src="" alt="Image">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary prev-image">Previous</button>
                                    <button type="button" class="btn btn-secondary next-image">Next</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- Modal -->

                    <!-- Toolbar -->
                    <div class="toolbar-gallery toolbar-bottom">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="action action-next">
                                <a href="#">Next <span><i aria-hidden="true"
                                            class="fa fa-angle-double-right"></i></span></a>
                            </li>
                        </ul>
                    </div><!-- Toolbar -->
                </div><!-- Main Content -->
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var currentIndex = 0;
            var images = [];

            // Collect all images
            $('.gallery-image').each(function() {
                images.push($(this).find('img').attr('src'));
            });

            // Open modal on image click
            $('.gallery-image').on('click', function() {
                currentIndex = $(this).data('index');
                showImage(currentIndex);
                $('#galleryModal').modal('show');
            });

            // Show the image in the modal
            function showImage(index) {
                $('#modalImage').attr('src', images[index]);
            }

            // Next image
            $('.next-image').on('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            });

            // Previous image
            $('.prev-image').on('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            });
        });
    </script>
@endsection
