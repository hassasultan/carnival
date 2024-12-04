@extends('dashboard.admin.layouts.app')

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
                            <form id="editMusicForm">
                                @csrf
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
                                <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" class="form-control" id="edit_release_date"
                                        value="{{ $music->release_date }}" name="release_date" required>
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
                                    <input type="text" class="form-control" id="edit_region" value="{{ $music->region }}"
                                        name="region" required>
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
                                        <label class="custom-file-label" for="cover_image_input"
                                            id="edit_cover_image_label">Choose
                                            file</label>
                                    </div>
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
                                <button type="submit" class="btn btn-primary" id="edit_saveMusicBtn">Update Music</button>
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
                $.ajax({
                    url: '{{ route('musics.update') }}',
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
        });
    </script>
@endsection
