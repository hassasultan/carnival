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
            height: 200px;
            padding-top: 100%;
            background-size: cover;
            background-position: center;
            border-radius: 8px 8px 0px 0px;
            transition: transform 0.3s ease;
        }

        .album-cnt:hover {
            transform: scale(1.05);
        }

        .album-title {
            text-align: center;
            font-weight: bold;
            color: #fff;
            background: #333;
            border-radius: 0px 0px 8px 8px;
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

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 10px;
        }

        .gallery img {
            width: 100%;
            height: 216px;
            display: block;
        }

        .columns {
            box-sizing: border-box;
        }
    </style>
    <style>
        .product-preview {
            position: relative;
        }

        .zoom-container {
            overflow: hidden;
            position: relative;
        }

        .main-image {
            transition: transform 0.3s ease;
        }

        .main-image:hover {
            transform: scale(1.5);
            cursor: crosshair;
        }

        .zoomed {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            display: none;
        }

        .zoomed img {
            position: absolute;
            transition: none;
        }

        .view-larger-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            border: 1px solid #333;
            padding: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .product-thumbnails img {
            width: 80px;
            height: auto;
            margin-right: 5px;
            cursor: pointer;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            position: relative;
            max-width: 80%;
            max-height: 90%;
            margin: auto;
            text-align: center;
            z-index: -9;
        }

        .modal-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 5px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            color: white;
            cursor: pointer;
        }

        .zoomIn {
            position: absolute;
            right: 50px;
            cursor: pointer;
        }

        .zoomOut {
            position: absolute;
            right: 90px;
            cursor: pointer;
        }

        .full-screen {
            position: absolute;
            right: 128px;
            cursor: pointer;
        }

        .fun-btn {
            top: 15px;
            font-size: 20px;
            color: white;
            background: transparent;
            border: none;

        }

        .fun-btn:focus,
        .fun-btn:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            filter: alpha(opacity=50);
            opacity: .5;
            padding: 5px;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            color: white;
            font-weight: bold;
            font-size: 24px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            user-select: none;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .bg-transparent {
            background: transparent;
            font-weight: bold;
        }

        .space {
            padding: 5px;
        }

        .modal-image {
            transition: transform 0.2s;
            /* Smooth zoom transition */
        }

        .album-wrp {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .album-wrp h2
        {
            padding: 10px 0px;
        }
    </style>
    <main class="site-main">
        <div class="columns container">
            <ol class="breadcrumb no-hide">
                @if ($user->vendor)
                    <a href="{{ route('front.vendor.detail', $user->vendor->id) }}">Mascamps</a>
                    {{ $user->vendor->name }} / Music Gallery
                @elseif ($user->subvendor)
                    <a href="{{ route('front.subVendor.detail', $user->subvendor->id) }}">Section Leaders</a>
                    {{ $user->subvendor->name }} / Music Gallery
                @endif
            </ol>
            <div class="row">
                <div class="col-main">
                    <div class="toolbar-gallery toolbar-top">
                        <h1 class="cate-title">Music Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="gallery">
                {{ count($siteGallery) }}
                @if (count($siteGallery) > 0)
                    @foreach ($siteGallery[0]->images as $key => $row)
                        <img src="{{ asset('covers/' . $row->image) }}" alt="Image {{ $key }}"
                            onclick="openModal({{ $key }})">
                    @endforeach
                @endif
            </div>
            <div class="row album-wrp">
                <h2 class="cate-title">Albums</h2>
                @foreach ($siteGallery as $key => $row)
                    <div class="col-md-3 album-cnt" data-id="{{ $row->id }}">
                        <div class="album bg-brown"
                            style="background-image: url('{{ asset('covers/' . $row->images[0]->image) }}');">
                        </div>
                        <div class="album-title">
                            <span>{{ $row->song_title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal();">&times;</span>
                <button onclick="zoomIn()" class="fun-btn zoomIn"><i class="fas fa-search-plus"></i></button>
                <button onclick="zoomOut()" class="fun-btn zoomOut"><i class="fas fa-search-minus"></i></button>
                <button onclick="viewFullScreen()" class="fun-btn full-screen"><i class="fas fa-expand"></i></button>
                <div class="modal-content">
                    <img id="modalImage" alt="Modal Image" class="modal-image">
                    <span class="prev" onclick="changeImage(-1)">&#10094;</span>
                    <span class="next" onclick="changeImage(1)">&#10095;</span>
                </div>
            </div>
            {{-- <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <button onclick="zoomIn()" class="fun-btn zoomIn"><i class="fas fa-search-plus"></i></button>
                <button onclick="zoomOut()" class="fun-btn zoomOut"><i class="fas fa-search-minus"></i></button>
                <button onclick="viewFullScreen()" class="fun-btn full-screen"><i class="fas fa-expand"></i></button>
                <div class="modal-content">
                    <img id="modalImage" alt="Modal Image" class="modal-image">

                </div>
                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>
            </div> --}}
        </div>
    </main>

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let currentImageIndex = 0;
        let images = document.querySelectorAll('.gallery img');
        let modal = document.getElementById('imageModal');
        let modalImage = document.getElementById('modalImage');
        $('.album-cnt').click(function() {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('front.album.imgs') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    var html = '';
                    $('.gallery').html('');
                    $.each(data.images, function(index, row) {
                        html += setImgs(row.image,index)
                    });
                    $('.gallery').html(html);
                    images = document.querySelectorAll('.gallery img');
                    modal = document.getElementById('imageModal');
                    modalImage = document.getElementById('modalImage');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
        function setImgs(img,index)
        {
            return response = `<img src="{{ asset('images') }}/`+img+`" alt="Image `+index+`"
                        onclick="openModal(`+index+`)">`;
        }

        // JavaScript to handle modal and image navigation


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
    <script>
        let zoomLevel = 1; // Default zoom level

        function zoomIn() {
            zoomLevel += 0.1; // Increase zoom level
            document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
        }

        function zoomOut() {
            if (zoomLevel > 0.1) {
                zoomLevel -= 0.1; // Decrease zoom level
                document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
            }
        }

        function viewFullScreen() {
            const modalImage = document.getElementById("modalImage");
            if (modalImage.requestFullscreen) {
                modalImage.requestFullscreen();
            } else if (modalImage.mozRequestFullScreen) { // For Firefox
                modalImage.mozRequestFullScreen();
            } else if (modalImage.webkitRequestFullscreen) { // For Chrome, Safari, Opera
                modalImage.webkitRequestFullscreen();
            } else if (modalImage.msRequestFullscreen) { // For IE/Edge
                modalImage.msRequestFullscreen();
            }
        }
    </script>
@endsection
@endsection
