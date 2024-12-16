@extends($layout)

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Musics</h2>
            <p class="card-text">Music table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Music Messages -->
                            <div id="musicMessage"></div>
                            <form id="createMusicForm">
                                @csrf
                                @if (Auth::user()->isAdmin())
                                    <div class="form-group mb-3">
                                        <label for="user_id">User</label>
                                        <select id="user_id" value="{{ old('user_id') }}" name="user_id"
                                            class="form-control" required>
                                            <option value="">Select User</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->vendor && $user->vendor->name ? 'Vendor: ' . $user->vendor->name : ($user->subVendor && $user->subVendor->name ? 'SubVendor: ' . $user->subVendor->name : ($user->vendor ? 'Vendor' : 'SubVendor')) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="artiste_name">Artiste Name</label>
                                    <input type="text" class="form-control" id="artiste_name" name="artiste_name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="real_name">Real Name</label>
                                    <input type="text" class="form-control" id="real_name" name="real_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="producer">Producer</label>
                                    <input type="text" class="form-control" id="producer" name="producer" required>
                                </div>
                                <div class="form-group">
                                    <label for="writer">Writer</label>
                                    <input type="text" class="form-control" id="writer" name="writer" required>
                                </div>
                                <div class="form-group">
                                    <label for="song_title">Song Title</label>
                                    <input type="text" class="form-control" id="song_title" name="song_title" required>
                                </div>
                                <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" class="form-control" id="release_date" name="release_date"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="music">Music</label>
                                    <input type="text" class="form-control" id="music" name="music" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" required>
                                </div>
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" id="region" name="region" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="event">Event</label>
                                    <select class="form-control" id="event" name="event_id" required>
                                        <option value="">Select Event</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group mb-3">
                                    <label for="cover_image">Album Cover Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cover_image_input"
                                            name="cover_image">
                                        <label class="custom-file-label" for="cover_image_input"
                                            id="cover_image_label">Choose
                                            file</label>
                                    </div>
                                </div>
                                <div class="border border-white p-3 rounded mb-3">
                                    <button class="btn btn-primary btn-sm add-doc float-right" type="button">Add
                                        More</button>
                                    <div class="form-group mb-3">
                                        <label for="images">Document Cover Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images_input"
                                                name="images[]">
                                            <label class="custom-file-label" for="images_input" id="images_label">Choose
                                                file</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="video">Document</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="video_input"
                                                name="video[]" multiple accept="audio/*,video/*">
                                            <label class="custom-file-label" for="video_input" id="video_label">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="document-container">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="for_sale">For Sale</label>
                                        <input type="radio" class="form-control" id="for_sale" name="for_sale"
                                            value="for_sale">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="free_upload">Free Upload</label>
                                        <input type="radio" class="form-control" id="free_upload" name="for_sale"
                                            value="free">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <button type="submit" class="btn btn-primary" id="saveMusicBtn">Save Music</button>
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
            $('#createMusicForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                var userRole =
                    '{{ Auth::user()->role->name }}';
                var url;
                if (userRole === 'Admin') {
                    url = '{{ route('musics.store') }}';
                } else if (userRole === 'Vendor') {
                    url = '{{ route('vendor.musics.store') }}';
                } else if (userRole === 'SubVendor') {
                    url = '{{ route('subvendor.musics.store') }}';
                }
                $.ajax({
                    url: url,
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

                        console.log(response.route);
                        var userRole =
                            '{{ Auth::user()->role->name }}';

                        var route;
                        if (userRole === 'Admin') {
                            route = '{{ route('musics.index') }}';
                        } else if (userRole === 'Vendor') {
                            route = '{{ route('vendor.musics.index') }}';
                        } else if (userRole === 'SubVendor') {
                            route = '{{ route('subvendor.musics.index') }}';
                        }

                        window.location.href = route;
                        // window.location.href = response.route;
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#musicMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create music</div>'
                        );
                    }
                });
            });

            // Handle deletion of music records
            $('#confirmDeleteBtn').click(function() {
                var formData = $('#deleteConfirmationModal form').serialize();
                $.ajax({
                    url: '{{ route('musics.destroy', ['music' => ':id']) }}'.replace(':id',
                        musicId),
                    type: 'DELETE',
                    data: formData,
                    success: function(response) {
                        $('#deleteConfirmationModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#musicMessage').html(
                            '<div class="alert alert-success" role="alert">' + response
                            .message + '</div>'
                        );
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#musicMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to delete music</div>'
                        );
                    }
                });
            });

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

            // display name of selected files
            $(document).on('change', '.custom-file-input', function() {
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

            // Handle deletion of music records
            $('.deleteMusicBtn').click(function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form'); // Find the closest form element
                var deleteConfirmationModal = $('#deleteConfirmationModal');
                var musicId = $(this).data('music-id'); // Get the music id from the data attribute

                deleteConfirmationModal.modal('show');

                // When the user confirms deletion
                $('#confirmDeleteBtn').off('click').on('click', function() {
                    var formData = deleteForm.serialize(); // Serialize the form data
                    $.ajax({
                        url: '{{ route('musics.destroy', ['music' => ':id']) }}'.replace(
                            ':id', musicId),
                        type: 'DELETE',
                        data: formData, // Use the serialized form data
                        success: function(response) {
                            deleteConfirmationModal.modal(
                                'hide'); // Hide the confirmation modal
                            $('#tableData').html(response
                                .table_html); // Update the table data
                            $('#musicMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>'); // Display success message
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#musicMessage').html(
                                '<div class="alert alert-danger" role="alert">Failed to delete music</div>'
                            ); // Display error message
                        }
                    });
                });
            });
        });
    </script>
@endsection
