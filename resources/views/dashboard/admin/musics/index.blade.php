@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Musics</h2>
            <p class="card-text">Music table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="openMusicModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New Music</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Music Messages -->
                            <div id="musicMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                @include('dashboard.admin.musics.table')
                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>

    <!-- New Music modal -->
    <div class="modal fade" id="musicModal" tabindex="-1" role="dialog" aria-labelledby="musicModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="musicModalLabel">New Music</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createMusicForm">
                        @csrf
                        <div class="form-group">
                            <label for="artiste_name">Artiste Name</label>
                            <input type="text" class="form-control" id="artiste_name" name="artiste_name" required>
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
                            <input type="date" class="form-control" id="release_date" name="release_date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="video">Document</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="video_input" name="video" multiple>
                                <label class="custom-file-label" for="video_input" id="video_label">Choose file</label>
                            </div>
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
                            <label for="cover_image">Cover Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="cover_image_input"
                                    name="cover_image">
                                <label class="custom-file-label" for="cover_image_input" id="cover_image_label">Choose
                                    file</label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="images">Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="images_input" name="images[]"
                                    multiple>
                                <label class="custom-file-label" for="images_input" id="images_label">Choose file</label>
                            </div>
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
                                    value="for_sale">
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
        </div>
    </div>

    <!-- Edit Music modal -->
    <div class="modal fade" id="editMusicModal" tabindex="-1" role="dialog" aria-labelledby="editMusicModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMusicModalLabel">Edit Music</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createMusicForm">
                        @csrf
                        <div class="form-group">
                            <label for="artiste_name">Artiste Name</label>
                            <input type="text" class="form-control" id="edit_artiste_name" name="artiste_name" required>
                        </div>
                        <div class="form-group">
                            <label for="real_name">Real Name</label>
                            <input type="text" class="form-control" id="edit_real_name" name="real_name" required>
                        </div>
                        <div class="form-group">
                            <label for="producer">Producer</label>
                            <input type="text" class="form-control" id="edit_producer" name="producer" required>
                        </div>
                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input type="text" class="form-control" id="edit_writer" name="writer" required>
                        </div>
                        <div class="form-group">
                            <label for="song_title">Song Title</label>
                            <input type="text" class="form-control" id="edit_song_title" name="song_title" required>
                        </div>
                        <div class="form-group">
                            <label for="release_date">Release Date</label>
                            <input type="date" class="form-control" id="edit_release_date" name="release_date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="video">Document</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_video_input" name="video" multiple>
                                <label class="custom-file-label" for="video_input" id="edit_video_label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="music">Music</label>
                            <input type="text" class="form-control" id="edit_music" name="music" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="edit_country" name="country" required>
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="edit_region" name="region" required>
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
                            <label for="cover_image">Cover Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_cover_image_input"
                                    name="cover_image">
                                <label class="custom-file-label" for="cover_image_input" id="edit_cover_image_label">Choose
                                    file</label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="images">Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_images_input" name="images[]"
                                    multiple>
                                <label class="custom-file-label" for="images_input" id="edit_images_label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="for_sale">For Sale</label>
                                <input type="radio" class="form-control" id="edit_for_sale" name="for_sale"
                                    value="for_sale">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="free_upload">Free Upload</label>
                                <input type="radio" class="form-control" id="edit_free_upload" name="for_sale"
                                    value="for_sale">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="edit_price" name="price">
                        </div>
                        <button type="submit" class="btn btn-primary" id="edit_saveMusicBtn">Save Music</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Edit Music modal -->
    <div class="modal fade" id="editMusicModal" tabindex="-1" role="dialog" aria-labelledby="editMusicModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMusicModalLabel">Edit Music</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form id="editMusicForm">
                            @csrf
                            <div class="form-group">
                                <label for="artiste_name">Artiste Name</label>
                                <input type="text" class="form-control" id="edit_artiste_name" name="artiste_name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="real_name">Real Name</label>
                                <input type="text" class="form-control" id="edit_real_name" name="real_name" required>
                            </div>
                            <div class="form-group">
                                <label for="producer">Producer</label>
                                <input type="text" class="form-control" id="edit_producer" name="producer" required>
                            </div>
                            <div class="form-group">
                                <label for="writer">Writer</label>
                                <input type="text" class="form-control" id="edit_writer" name="writer" required>
                            </div>
                            <div class="form-group">
                                <label for="song_title">Song Title</label>
                                <input type="text" class="form-control" id="edit_song_title" name="song_title" required>
                            </div>
                            <div class="form-group">
                                <label for="release_date">Release Date</label>
                                <input type="date" class="form-control" id="edit_release_date" name="release_date"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="video">Video</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_video_input" name="video"
                                        multiple>
                                    <label class="custom-file-label" for="video_input" id="video_label">Choose
                                        file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="music">Music</label>
                                <input type="text" class="form-control" id="edit_music" name="music" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="edit_country" name="country" required>
                            </div>
                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="edit_region" name="region" required>
                            </div>
                            <div class="form-group">
                                <label for="event">Event</label>
                                <select class="form-control" id="edit_event" name="event_id" required>
                                    <option value="">Select Event</option>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="cover_image">Cover Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_cover_image_input"
                                        name="cover_image">
                                    <label class="custom-file-label" for="cover_image_input"
                                        id="cover_image_label">Choose
                                        file</label>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="images">Images</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_images_input" name="images[]"
                                        multiple>
                                    <label class="custom-file-label" for="images_input" id="images_label">Choose
                                        file</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="for_sale">For Sale</label>
                                    <input type="radio" class="form-control" id="edit_for_sale" name="for_sale"
                                        value="for_sale">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="free_upload">Free Upload</label>
                                    <input type="radio" class="form-control" id="edit_free_upload" name="for_sale"
                                        value="for_sale">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="edit_price" name="price">
                            </div>
                            <button type="submit" class="btn btn-primary" id="saveMusicBtn">Save Music</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Delete Music Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this music?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
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
                $.ajax({
                    url: '{{ route('musics.store') }}',
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