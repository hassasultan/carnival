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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            position: relative;
            width: 80%;
            max-width: 600px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            font-size: 24px;
        }

        #mediaContainer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        audio,
        video {
            max-width: 100%;
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

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 10px;
        }

        .image-container {
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 216px;
            display: block;
            transition: opacity 0.3s ease;
        }

        .image-container:hover img {
            opacity: 0.5;
        }

        .image-container .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: black;
            display: none;
            pointer-events: none;
        }

        .image-container:hover .play-btn {
            display: block;
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

        .album-wrp h2 {
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
            {{-- <div class="gallery">
                @if (count($siteGallery) > 0)
                    @foreach ($siteGallery[1]->imagesRelation as $key => $row)
                        <img src="{{ asset('images/' . $row->image) }}" alt="Image {{ $key }}"
                            onclick="openModal({{ $key }})">
                    @endforeach
                @endif
            </div> --}}
            <div class="gallery">
                {{-- @if (count($siteGallery) > 0)
                    @foreach ($siteGallery[0]->imagesRelation as $key => $row)
                        <div class="image-container" data-index="{{ $key }}">
                            <img src="{{ asset('images/' . $row->image) }}" alt="Image {{ $key }}">
                            <div class="play-btn"><i class="fas fa-play-circle"></i></div>
                        </div>
                    @endforeach
                @endif --}}
                @if (count($siteGallery) > 0)
                    @foreach ($siteGallery[1]->imagesRelation as $key => $row)
                        <div class="image-container" data-index="{{ $key }}" onclick="openModal('{{ asset($row->document) }}', '{{ pathinfo($row->document, PATHINFO_EXTENSION) }}')">>
                            <!-- For Image -->
                            <img src="{{ asset($row->image) }}" alt="Image {{ $key }}" class="image">

                            <!-- Check if the document is audio or video -->
                            @if (strpos($row->document, '.mp3') !== false || strpos($row->document, '.wav') !== false)
                                <!-- Audio -->
                                <audio class="media" controls style="display: none;">
                                    <source src="{{ asset($row->document) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            @elseif (strpos($row->document, '.mp4') !== false ||
                                    strpos($row->document, '.avi') !== false ||
                                    strpos($row->document, '.mov') !== false)
                                <!-- Video -->
                                <video class="media" controls style="display: none;">
                                    <source src="{{ asset($row->document) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif

                            <!-- Play Button -->
                            <div class="play-btn"><i class="fas fa-play-circle"></i></div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row album-wrp">
                <h2 class="cate-title">Albums</h2>
                @foreach ($siteGallery as $key => $row)
                    <div class="col-md-3 album-cnt" data-id="{{ $row->id }}">
                        <div class="album bg-brown"
                            style="background-image: url('{{ asset('images/' . $row->imagesRelation[0]->image) }}');">
                        </div>
                        <div class="album-title">
                            <span>{{ $row->song_title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal();">&times;</span>
                <button onclick="zoomIn()" class="fun-btn zoomIn"><i class="fas fa-search-plus"></i></button>
                <button onclick="zoomOut()" class="fun-btn zoomOut"><i class="fas fa-search-minus"></i></button>
                <button onclick="viewFullScreen()" class="fun-btn full-screen"><i class="fas fa-expand"></i></button>
                <div class="modal-content">
                    <img id="modalImage" alt="Modal Image" class="modal-image">
                    <span class="prev" onclick="changeImage(-1)">&#10094;</span>
                    <span class="next" onclick="changeImage(1)">&#10095;</span>
                </div>
            </div> --}}
            <div id="mediaModal" class="modal" style="display: none;">
                <div class="modal-content">
                    <span class="close-btn" onclick="closeModal()">×</span>
                    <div id="mediaContainer"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

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
                url: "{{ route('front.album.music') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {

                    if (data && data.images_relation && Array.isArray(data.images_relation)) {
                        var html = '';
                        $('.gallery').html('');

                        $.each(data.images_relation, function(index, row) {
                            console.log('row', row);
                            html += setImgs(row.image, index, row.document);
                        });

                        $('.gallery').html(html);

                        images = document.querySelectorAll('.gallery img');
                        modal = document.getElementById('imageModal');
                        modalImage = document.getElementById('modalImage');
                    } else {
                        console.error('images_relation is not available or is not an array');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        function setImgs(img, index, document = null) {
            let mediaType = '';
            let onClickAction = '';

            if (document) {
                if (document.endsWith('.mp3') || document.endsWith('.wav')) {
                    mediaType = 'audio';
                } else if (document.endsWith('.mp4') || document.endsWith('.avi') || document.endsWith('.mov')) {
                    mediaType = 'video';
                }

                onClickAction = `onclick="openModal('${document}', '${mediaType}')"`
            }

            return `
            <div class="image-container" data-index="${index}">
                <img src="${img}" alt="Image ${index}" class="image" ${onClickAction}>
                <div class="play-btn"><i class="fas fa-play-circle"></i></div>
            </div>`;
        }

        function openModal(mediaSrc, mediaType) {
            const mediaContainer = document.getElementById('mediaContainer');
            const modal = document.getElementById('mediaModal');

            // Clear any existing content
            mediaContainer.innerHTML = '';

            // Add the appropriate media element
            if (mediaType === 'audio') {
                mediaContainer.innerHTML = `
                <audio controls autoplay>
                    <source src="${mediaSrc}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>`;
            } else if (mediaType === 'video') {
                mediaContainer.innerHTML = `
                <video controls autoplay>
                    <source src="${mediaSrc}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>`;
            }

            // Show the modal
            modal.style.display = 'flex';
        }

        function closeModal() {
            const modal = document.getElementById('mediaModal');
            modal.style.display = 'none';

            // Stop playback
            const media = document.querySelector('#mediaContainer audio, #mediaContainer video');
            if (media) {
                media.pause();
            }
        }

        // function setImgs(img, index) {
        //     return response = `<img src="{{ asset('images') }}/` + img + `" alt="Image ` + index + `"
    //                 onclick="openModal(` + index + `)">`;
        // }

        // JavaScript to handle modal and image navigation
        // function openModal(index) {
        //     currentImageIndex = index;
        //     modalImage.src = images[currentImageIndex].src;
        //     modal.style.display = 'flex';
        // }

        // function closeModal() {
        //     modal.style.display = 'none';
        // }

        // function changeImage(direction) {
        //     currentImageIndex += direction;
        //     if (currentImageIndex < 0) {
        //         currentImageIndex = images.length - 1;
        //     } else if (currentImageIndex >= images.length) {
        //         currentImageIndex = 0;
        //     }
        //     modalImage.src = images[currentImageIndex].src;
        // }

        // // Close modal when clicking outside the image
        // modal.addEventListener('click', (e) => {
        //     if (e.target === modal) {
        //         closeModal();
        //     }
        // });
    </script>
    <script>
        let zoomLevel = 1;

        function zoomIn() {
            zoomLevel += 0.1;
            document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
        }

        function zoomOut() {
            if (zoomLevel > 0.1) {
                zoomLevel -= 0.1;
                document.getElementById("modalImage").style.transform = `scale(${zoomLevel})`;
            }
        }

        function viewFullScreen() {
            const modalImage = document.getElementById("modalImage");
            if (modalImage.requestFullscreen) {
                modalImage.requestFullscreen();
            } else if (modalImage.mozRequestFullScreen) {
                modalImage.mozRequestFullScreen();
            } else if (modalImage.webkitRequestFullscreen) {
                modalImage.webkitRequestFullscreen();
            } else if (modalImage.msRequestFullscreen) {
                modalImage.msRequestFullscreen();
            }
        }

        $('.image-container').hover(
            function() {
                const index = $(this).data('index');
            },
            function() {}
        );

        $(document).on('click', '.image-container', function() {
            console.log('okokok');
            var container = $(this).closest('.image-container');
            var media = container.find('.media');

            $('.media').each(function() {
                this.pause();
                // $(this).hide();
            });

            container.find('img').hide();

            media.show();
            media[0].play();
        });
    </script>
@endsection
