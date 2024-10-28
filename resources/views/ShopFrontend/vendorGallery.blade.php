@extends('ShopFrontend.Layouts.layout')

@section('title')
    Gallery
@endsection

@section('main')
    <style>
        /* Gallery Layout */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 10px;
            margin-bottom: 15px;
        }

        .gallery img {
            width: 100%;
            height: 200px;
            display: block;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
        }

        .close,
        .prev,
        .next {
            position: absolute;
            color: white;
            font-size: 2em;
            cursor: pointer;
        }

        .close {
            top: 20px;
            right: 30px;
        }

        .prev {
            top: 50%;
            left: 30px;
            transform: translateY(-50%);
        }

        .next {
            top: 50%;
            right: 30px;
            transform: translateY(-50%);
        }
        .album-cnt
        {
            padding: 10px;
        }
        .album
        {
            height: 200px;
        }
    </style>
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
                </div>
            </div>
            <div class="gallery">
                @foreach ($siteGallery as $key => $row)
                    <img src="{{ asset('images/' . $row->image) }}" alt="Image 1" onclick="openModal({{ $key }})">
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-4 album-cnt">
                    <div class="album bg-dark"></div>
                </div>
                <div class="col-md-4 album-cnt">
                    <div class="album bg-primary"></div>
                </div>
                <div class="col-md-4 album-cnt">
                    <div class="album bg-danger"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal" id="imageModal">
        <span class="close" onclick="closeModal()">&times;</span>
        <span class="prev" onclick="changeImage(-1)">&#10094;</span>
        <span class="next" onclick="changeImage(1)">&#10095;</span>
        <img id="modalImage" src="" alt="Large Image">
    </div>


    {{-- <!-- MAIN -->
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
    </main><!-- end MAIN --> --}}
@endsection

@section('script')
    <script>
        // JavaScript to handle modal and image navigation
        let currentImageIndex = 0;
        const images = document.querySelectorAll('.gallery img');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        function openModal(index) {
            currentImageIndex = index;
            modalImage.src = images[currentImageIndex].src;
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        function changeImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex < 0) {
                currentImageIndex = images.length - 1;
            } else if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }
            modalImage.src = images[currentImageIndex].src;
        }

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
@endsection
