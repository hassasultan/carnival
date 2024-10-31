@extends('ShopFrontend.Layouts.layout')

@section('title')
    Gallery
@endsection

@section('main')
    <style>
        .album-section {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .album-cnt {
            position: relative;
            cursor: pointer;
        }

        .album {
            width: 100%;
            padding-top: 100%;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .album:hover {
            transform: scale(1.05);
        }

        .album-title {
            text-align: center;
            margin-top: 0.5rem;
            font-weight: bold;
            color: #333;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            text-align: center;
        }

        .modal-image {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 8px;
        }

        .modal .prev,
        .modal .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-radius: 50%;
        }

        .modal .prev {
            left: 10px;
        }

        .modal .next {
            right: 10px;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }

        .close:hover {
            color: #ccc;
        }

        @media (max-width: 768px) {
            .album {
                padding-top: 100%;
            }

            .modal .prev,
            .modal .next {
                font-size: 1.5rem;
            }
        }
    </style>
    <main class="site-main">
        <div class="columns container">
            <ol class="breadcrumb no-hide">
                @if ($user->vendor)
                    <a href="{{ route('front.vendor.detail', $user->vendor->id) }}">Mascamps</a>
                    {{ $user->vendor->name }} Gallery
                @elseif ($user->subvendor)
                    <a href="{{ route('front.subVendor.detail', $user->subvendor->id) }}">Section Leaders</a>
                    {{ $user->subvendor->name }} Gallery
                @endif
            </ol>
            <div class="row">
                <div class="col-main">
                    <div class="toolbar-gallery toolbar-top">
                        <h1 class="cate-title">Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="row album-section">
                @foreach ($siteGallery as $key => $row)
                    <div class="col-md-3 album-cnt">
                        <div class="album bg-brown"
                            style="background-image: url('{{ asset('images/' . $row->images[0]->image) }}');"
                            data-images="{{ json_encode($row->images) }}">
                        </div>
                        <div class="album-title">
                            <span>{{ $row->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="imageModal" class="modal">
                <span class="close">&times;</span>
                <div class="modal-content">
                    <img id="modalImage" alt="Modal Image" class="modal-image">
                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                </div>
            </div>
        </div>
    </main>

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let albumImages = [];
        let currentIndex = 0;

        $('.album').on('click', function() {
            albumImages = $(this).data('images');
            currentIndex = 0;
            showSlide(currentIndex);
            $('#imageModal').fadeIn();
        });

        $('.close').on('click', function() {
            $('#imageModal').fadeOut();
        });

        $('.prev').on('click', function() {
            currentIndex = (currentIndex - 1 + albumImages.length) % albumImages.length;
            showSlide(currentIndex);
        });

        $('.next').on('click', function() {
            currentIndex = (currentIndex + 1) % albumImages.length;
            showSlide(currentIndex);
        });

        function showSlide(index) {
            $('#modalImage').attr('src', '{{ asset('images/') }}/' + albumImages[index].image);
        }

        $(document).on('keydown', function(event) {
            if (event.key === "Escape") $('#imageModal').fadeOut();
        });
    </script>
@endsection
@endsection
