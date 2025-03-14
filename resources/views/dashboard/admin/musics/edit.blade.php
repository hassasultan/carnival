@extends($layout)

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Music Edit</h2>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Music Messages -->
                            <div id="musicMessage"></div>
                            <!-- Table Data -->
                            @php
                                $route = '#'; // Default route
                                if (Auth::user()->isAdmin()) {
                                    $route = route('musics.update', ['music' => $music->id]);
                                } elseif (Auth::user()->isVendor()) {
                                    $route = route('vendor.musics.update', ['music' => $music->id]); // Ensure the music ID is passed
                                } elseif (Auth::user()->isSubVendor()) {
                                    $route = route('subvendor.musics.update', ['music' => $music->id]); // Ensure the music ID is passed
                                }
                            @endphp

                            <form id="editMusicForm" action="{{ $route }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="artiste_name">Artiste Name</label>
                                    <input type="text" class="form-control" id="edit_artiste_name"
                                        value="{{ $music->artiste_name }}" name="artiste_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="real_name">Real Name</label>
                                    <input type="text" class="form-control" id="edit_real_name"
                                        value="{{ $music->real_name }}" name="real_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="producer">Producer</label>
                                    <input type="text" class="form-control" id="edit_producer"
                                        value="{{ $music->producer }}" name="producer" required>
                                </div>
                                <div class="form-group">
                                    <label for="writer">Writer</label>
                                    <input type="text" class="form-control" id="edit_writer" value="{{ $music->writer }}"
                                        name="writer" required>
                                </div>
                                <div class="form-group">
                                    <label for="song_title">Song Title</label>
                                    <input type="text" class="form-control" id="edit_song_title"
                                        value="{{ $music->song_title }}" name="song_title" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" class="form-control" id="edit_release_date"
                                        value="{{ $music->release_date }}" name="release_date" required>
                                </div> --}}
                                <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" class="form-control" id="edit_release_date"
                                        value="{{ \Carbon\Carbon::parse($music->release_date)->format('Y-m-d') }}"
                                        name="release_date" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="video">Document</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="edit_video_input"
                                            value="{{ $music->video }}" name="video" multiple>
                                        <label class="custom-file-label" for="video_input" id="edit_video_label">Choose
                                            file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="music">Music</label>
                                    <input type="text" class="form-control" id="edit_music" value="{{ $music->music }}"
                                        name="music" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="edit_country"
                                        value="{{ $music->country }}" name="country" required>
                                </div>
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" id="edit_region"
                                        value="{{ $music->region }}" name="region" required>
                                </div>
                                {{-- <div class="form-group">
                                <label for="event">Event</label>
                                <select class="form-control" id="edit_event" name="event_id" required>
                                    <option value="">Select Event</option>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                                <div class="form-group mb-3">
                                    <label for="cover_image">Album Cover Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="edit_cover_image_input"
                                            name="cover_image">
                                        <label class="custom-file-label" for="cover_image_input"
                                            id="edit_cover_image_label">Choose
                                            file</label>
                                    </div>
                                </div>

                                <div class="border border-white p-3 rounded mb-3">
                                    <button class="btn btn-primary btn-sm add-doc float-right" type="button">Add
                                        More</button>
                                    @foreach ($music->imagesRelation as $row)
                                        <div class="form-group mb-3">
                                            <label for="images">Document Cover Image</label>
                                            <div class="custom-fileasd">
                                               <img src="{{ $row->image }}" width="100px" height="100px" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="video">Document</label>
                                            <div class="custom-fileasd">
                                                <video controls controlsList="nodownload" style="width: 400px;" id="modalVideoTag">
                                                    <source src="{{ $row->document }}" id="modalVideo" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="document-container">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="images">Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="edit_images_input"
                                            name="images[]" multiple>
                                        <label class="custom-file-label" for="images_input" id="edit_images_label">Choose
                                            file</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="for_sale">For Sale</label>
                                        <input type="radio" @if ($music->for_sale == 'for_sale')
                                            checked
                                        @endif class="form-control" id="edit_for_sale" name="for_sale"
                                            value="for_sale">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="free_upload">Free Upload</label>
                                        <input type="radio" @if ($music->for_sale == 'free')
                                            checked
                                        @endif class="form-control" id="edit_free_upload" name="for_sale"
                                            value="free">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="edit_price" name="price"
                                        value="{{ $music->price }}">
                                </div>
                                <button type="submit" class="btn btn-primary" id="edit_saveMusicBtn">Update
                                    Music</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            // Open the music modal when clicking the "New Music" button
            $('#openMusicModal').click(function() {
                $('#musicModal').modal('show');
            });

            // Handle form submission via AJAX for creating a new music
            $('#editMusicForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                // var userRole = '{{ Auth::user()->role->name }}';
                // var url;

                // var musicId = '{{ $music->id }}';

                // if (userRole === 'Admin') {
                //     url = '{{ route('musics.update', ['music' => '__music_id__']) }}'.replace(
                //         '__music_id__', musicId);
                // } else if (userRole === 'Vendor') {
                //     url = '{{ route('vendor.musics.update', ['music' => '__music_id__']) }}'.replace(
                //         '__music_id__', musicId);
                // } else if (userRole === 'SubVendor') {
                //     url = '{{ route('subvendor.musics.update', ['music' => '__music_id__']) }}'.replace(
                //         '__music_id__', musicId);
                // }

                $.ajax({
                    url: $('#editMusicForm').attr('action'),
                    // url: url'{{ route('musics.update', ['music' => $music->id]) }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#musicModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#musicMessage').html(
                            '<div class="alert alert-success" role="alert">Music created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#musicMessage').html('');
                        }, 3000);
                        // var userRole =
                        //     '{{ Auth::user()->role->name }}';

                        // var route;
                        // if (userRole === 'Admin') {
                        //     route = '{{ route('musics.index') }}';
                        // } else if (userRole === 'Vendor') {
                        //     route = '{{ route('vendor.musics.index') }}';
                        // } else if (userRole === 'SubVendor') {
                        //     route = '{{ route('subvendor.musics.index') }}';
                        // }

                        // window.location.href = route;
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#musicMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create music</div>'
                        );
                    }
                });
            });

            // display name of selected files
            $('.custom-file-input').on('change', function() {
                let fileNames = [];
                $.each(this.files, function(index, file) {
                    fileNames.push(file.name);
                });
                let label = $(this).next('.custom-file-label');
                if (this.files.length > 1) {
                    label.text(this.files.length + ' files selected');
                } else {
                    label.text(fileNames.join(', '));
                }
            });

            // display name of selected files
            $('.add-doc').on('click', function() {
                var uniqueId = Date.now();
                var html = `<div class="border border-white p-3 rounded mb-3">
                    <button class="btn btn-danger btn-sm remove-doc float-right" type="button">Remove</button>
                    <div class="form-group mb-3">
                        <label for="images_${uniqueId}">Document Cover Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="images_${uniqueId}" name="images[]">
                            <label class="custom-file-label" for="images_${uniqueId}">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="video_${uniqueId}">Document</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="video_${uniqueId}" name="video[]" multiple accept="audio/*,video/*">
                            <label class="custom-file-label" for="video_${uniqueId}">Choose file</label>
                        </div>
                    </div>
                </div>`;

                $('.document-container').append(html);
            });


            $(document).on('click', '.remove-doc', function() {
                $(this).closest('.border').remove();
            });

            $(document).ready(function() {
                $('#video_input').on('change', function() {
                    const files = $(this)[0].files;
                    let label = 'Choose file';

                    if (files.length > 1) {
                        label = `${files.length} files selected`;
                    } else if (files.length === 1) {
                        label = files[0].name;
                    }

                    $('#video_label').text(label);
                });
            });
        });
    </script>
@endsection
