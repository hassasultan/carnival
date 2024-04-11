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
                <div class="form-group">
                    <label for="video">Video</label>
                    <input type="text" class="form-control" id="video" name="video">
                </div>
                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
                <div class="form-group">
                    <label for="music_file">Music File</label>
                    <input type="file" class="form-control" id="music_file" name="music_file" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
                <div class="form-group">
                    <label for="region">Region</label>
                    <input type="text" class="form-control" id="region" name="region" required>
                </div>
                <div class="form-group">
                    <label for="carnival">Carnival</label>
                    <input type="text" class="form-control" id="carnival" name="carnival" required>
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image" required>
                </div>
                <div class="form-group">
                    <label for="show_size_requirement">Show Size Requirement</label>
                    <input type="checkbox" class="form-control" id="show_size_requirement" name="show_size_requirement">
                </div>
                <div class="form-group">
                    <label for="for_sale">For Sale</label>
                    <input type="checkbox" class="form-control" id="for_sale" name="for_sale">
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
                    <!-- Form for editing music -->
                </div>
            </div>
        </div>
    </div>

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
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('musics.store') }}',
                    type: 'POST',
                    data: formData,
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
                    url: '{{ route('musics.destroy', ['music' => ':id']) }}'.replace(':id', musicId),
                    type: 'DELETE',
                    data: formData,
                    success: function(response) {
                        $('#deleteConfirmationModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#musicMessage').html(
                            '<div class="alert alert-success" role="alert">' + response.message + '</div>'
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
        });
    </script>
@endsection
