@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        .modal-lg {
            max-width: 90%;
            /* Increase modal width */
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Carnivals</h2>
            <p class="card-text">Carnivals table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="openCarnivalModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New Carnival</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Carnival Messages -->
                            <div id="carnivalMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                @include('dashboard.admin.carnivals.table')
                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>

    <!-- New Carnival modal -->
    <div class="modal fade" id="carnivalModal" tabindex="-1" role="dialog" aria-labelledby="carnivalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carnivalModalLabel">New Carnival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createCarnivalForm" enctype="multipart/form-data">
                        <div class="error"></div>
                        @csrf
                        <div class="form-group">
                            <label for="head">Head</label>
                            <input type="number" class="form-control" id="head" name="head" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <select class="form-control" id="region_id" name="region_id" required>
                                <option value="">Select Region</option>
                                @foreach ($region as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="create_image">Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="create_image" name="images[]" multiple
                                    accept="image/*">
                                <label class="custom-file-label" for="create_image">Choose files</label>
                            </div>
                            <div id="createImagePreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Image previews will be added here -->
                            </div>
                        </div>
                        <div class="file-upload-container">
                            <div class="mb-2 p-3 border rounded file-upload-row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyerNew" name="flyerNew[]"
                                                class="custom-file-input form-control file-input flyerNew"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="flyerNew">Flyer Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="banner_image" name="banner_image[]"
                                                class="custom-file-input form-control file-input banner_image"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="banner_image">Banner Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6 poster-input d-none">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyer_image" name="flyer_image[]"
                                                class="custom-file-input form-control flyer_image" accept="image/*">
                                            <label class="custom-file-label" for="flyer_image">Poster Image</label>
                                        </div>
                                        {{-- <div id="flyerImagesPreviewContainer" class="mt-2 d-flex flex-wrap flyerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="text" name="btn_text[]" class="form-control"
                                                placeholder="Button text">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="url" name="btn_url[]" class="form-control"
                                                placeholder="Button url">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-2 add-more-btn">Add More</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="banner_image">Banner Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="banner_image" name="banner_images[]"
                                    multiple accept="image/*">
                                <label class="custom-file-label" for="banner_image">Choose files</label>
                            </div>
                            <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Image previews will be added here -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="flyer_image">Flyer Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="flyer_image" name="flyer_images[]"
                                    multiple accept="image/*">
                                <label class="custom-file-label" for="flyer_image">Choose files</label>
                            </div>
                            <div id="flyerImagesPreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Image previews will be added here -->
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea name="description" class="form-control" id="description" cols="40" rows="10">Add description here</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="saveCarnivalBtn">Save Carnival</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Carnival modal -->
    <div class="modal fade" id="editCarnivalModal" tabindex="-1" role="dialog"
        aria-labelledby="editCarnivalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCarnivalModalLabel">Edit Carnival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCarnivalForm" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="error"></div>
                        <input type="hidden" id="edit_id" name="edit_id">
                        {{-- <div class="form-group">
                            <label for="edit_head">Head</label>
                            <select class="form-control" id="edit_head" name="head">
                                <option value="" selected disabled>Select</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="edit_name">Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="edit_start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="edit_end_date" name="end_date" required>
                        </div>
                        <div class="form-group">
                            <label for="region">region</label>
                            <select class="form-control" id="edit_region" name="region_id" required>
                                <option value="">Select Region</option>
                                @foreach ($region as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="edit_country_id" name="country_id" required>
                                <option value="">Select Country</option>
                                @foreach ($countries as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control" id="edit_city_id" name="city_id" required>
                                <option value="">Select City</option>
                                @foreach ($cities as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_image">Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_image" name="images[]" multiple
                                    accept="image/*">
                                <label class="custom-file-label" for="edit_image">Choose files</label>
                            </div>
                            <div id="existingImagesContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Existing images will be loaded here -->
                            </div>
                            <div id="editImagePreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- New image previews will be added here -->
                            </div>
                        </div>
                        <div class="file-upload-container">
                            <div class="mb-2 p-3 border rounded file-upload-row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyerNew" name="flyerNew[]"
                                                class="custom-file-input form-control file-input flyerNew"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="flyerNew">Flyer Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="banner_image" name="banner_image[]"
                                                class="custom-file-input form-control file-input banner_image"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="banner_image">Banner Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6 poster-input d-none">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyer_image" name="flyer_image[]"
                                                class="custom-file-input form-control flyer_image" accept="image/*">
                                            <label class="custom-file-label" for="flyer_image">Poster Image</label>
                                        </div>
                                        {{-- <div id="flyerImagesPreviewContainer" class="mt-2 d-flex flex-wrap flyerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="text" name="btn_text[]" class="form-control"
                                                placeholder="Button text">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="url" name="btn_url[]" class="form-control"
                                                placeholder="Button url">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-2 add-more-btn">Add More</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="edit_banner_image">Banner Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_banner_image"
                                    name="banner_images[]" multiple accept="image/*">
                                <label class="custom-file-label" for="edit_banner_image">Choose files</label>
                            </div>
                            <div id="existingBannerImagesContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Existing images will be loaded here -->
                            </div>
                            <div id="bannerImagesEditPreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Image previews will be added here -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_flyer_image">Flyer Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="edit_flyer_image"
                                    name="flyer_images[]" multiple accept="image/*">
                                <label class="custom-file-label" for="edit_flyer_image">Choose files</label>
                            </div>
                            <div id="existingFlyerImagesContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Existing images will be loaded here -->
                            </div>
                            <div id="flyerImagesEditPreviewContainer" class="mt-2 d-flex flex-wrap">
                                <!-- Image previews will be added here -->
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea name="description" class="form-control" id="edit_description" cols="30" rows="10">Add description here</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="updateCarnivalBtn">Update Carnival</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="assignMemberModal" tabindex="-1" role="dialog"
        aria-labelledby="assignMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Increased modal width -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="assignMemberModalLabel">Edit Carnival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form id="assignMemberForm">
                        @csrf
                        @method('POST')
                        <input type="hidden" id="carnival_id_member" name="carnival_id">
                        <input type="hidden" id="member_id" name="member_id">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                <input id="firstname" type="text" class="form-control" name="first_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                <input id="lastname" type="text" class="form-control" name="last_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input id="email" type="email" class="form-control" name="email">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input id="phone" type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input id="address" type="text" class="form-control" name="address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <input id="state" type="text" class="form-control" name="state">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input id="country" type="text" class="form-control" name="country">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="designation">Designation</label>
                                <input id="designation" type="text" class="form-control" name="designation">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Bio Description</label>
                                <textarea name="bio_description" class="form-control" id="bio_description" cols="40" rows="4">Add bio description here</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="assignMasscampBtn">Update Carnival</button>
                    </form>

                    <!-- Table -->
                    <h5 class="mt-4">Added Members</h5>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="membersTableBody">
                            <!-- Rows will be dynamically added -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="assignMasscampModal" tabindex="-1" role="dialog"
        aria-labelledby="assignMasscampModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="assignMasscampModalLabel">Edit Carnival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="assignMasscampForm">
                        @csrf
                        @method('POST')
                        <input type="hidden" id="carnival_id" name="carnival_id">
                        <div class="form-group">
                            <label for="mascamp">Mascamps</label><br>
                            <select id="mascamp" name="mascamps[]" class="form-control select2" multiple>
                                @foreach ($mascamps as $row)
                                    <option value="{{ $row->id }}">
                                        {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($packages as $package)
                            <div class="form-group">
                                <label for="{{ $package->id }}">{{ $package->title }}</label><br>
                                <select id="{{ $package->id }}" name="" class="form-control select2" multiple>
                                    @php
                                        $variableName = str_replace(' ', '', str_replace('-', '', $package->title)); // removes spaces and dashes
                                    @endphp

                                    @if (isset($$variableName))
                                        @foreach ($$variableName as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        @endforeach
                        {{-- @foreach ($packages as $package)
                            <div class="form-group">
                                <label for="{{ $package->id }}">{{ $package->title }}</label><br>
                                <select id="{{ $package->id }}" name="" class="form-control select2" multiple>
                                    @if ($package->title == 'Carnival Committees')
                                        @foreach ($CarnivalCommittees as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                            </option>
                                        @endforeach
                                    @elseif ($package->title == 'Event Promoters')
                                        @foreach ($EventPromoters as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                            </option>
                                        @endforeach
                                    @elseif ($package->title == 'MasBands - Leader')
                                        @foreach ($MasBandsLeader as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($package->title as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->user->first_name . ' ' . $row->user->last_name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        @endforeach --}}
                        <button type="submit" class="btn btn-primary" id="assignMasscampBtn">Update Carnival</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Delete Carnival Confirmation Modal -->
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
                    Are you sure you want to delete this carnival?
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
        function clearEditModalFields() {
            $('#edit_head').val('');
            $('#edit_name').val('');
            $('#edit_link').val('');
        }

        $(document).ready(function() {
            var today = new Date().toISOString().split('T')[0];
            $('#start_date, #edit_start_date').attr('min', today);

            $('#start_date, #edit_start_date').on('change', function() {
                var startDate = $(this).val();
                var endDateField = $(this).attr('id') === 'start_date' ? '#end_date' : '#edit_end_date';
                $(endDateField).attr('min', startDate);
            });

            $('#openCarnivalModal').click(function() {
                $('#carnivalModal').modal('show');
            });

            $(document).on('click', '.editCarnivalBtn', function() {
                $('#existingImagesContainer').html('');
                var carnivalId = $(this).data('id');
                $.ajax({
                    url: '{{ route('carnivals.edit', ':id') }}'.replace(':id', carnivalId),
                    type: 'GET',
                    success: function(response) {
                        $('#edit_id').val(response.carnival.id);
                        // $('#edit_head').val(response.carnival.head);
                        $('#edit_name').val(response.carnival.name);
                        $('#edit_link').val(response.carnival.link);
                        $('#edit_start_date').val(response.carnival.start_date);
                        $('#edit_end_date').val(response.carnival.end_date);
                        $('#edit_region').val(response.carnival.region_id);
                        $('#edit_country_id').val(response.carnival.country_id);
                        $('#edit_city_id').val(response.carnival.city_id);
                        $('#edit_description').val(response.carnival.description);
                        if (response.carnival.images && response.carnival.images.length > 0) {
                            response.carnival.images.forEach((image, index) => {
                                console.log(image, index, 'asd');

                                // Ensure the image path is correct
                                const imageUrl = image.full_url ? image.full_url :
                                    '{{ asset('images/carnivalImages/') }}/' + image
                                    .image;

                                const imageWrapper = $('<div>').addClass(
                                    'position-relative mr-2 mb-2');
                                const img = $('<img>').addClass('img-thumbnail').css({
                                    'height': '100px',
                                    'width': '100px',
                                    'object-fit': 'cover'
                                }).attr('src', imageUrl); // Use full URL if available

                                const removeBtn = $('<button>').addClass(
                                        'btn btn-danger btn-sm position-absolute')
                                    .css({
                                        'top': '0',
                                        'right': '0',
                                        'padding': '0.2rem 0.4rem'
                                    })
                                    .html('&times;')
                                    .on('click', function() {
                                        if (confirm(
                                                'Are you sure you want to remove this image?'
                                            )) {
                                            $.ajax({
                                                url: '{{ route('carnivals.delete.image', [':carnivalId', ':imageId']) }}'
                                                    .replace(':carnivalId',
                                                        carnivalId)
                                                    .replace(':imageId',
                                                        image.id),
                                                type: 'DELETE',
                                                headers: {
                                                    'X-CSRF-Token': $(
                                                        'meta[name="csrf-token"]'
                                                    ).attr(
                                                        'content')
                                                },
                                                success: function() {
                                                    imageWrapper
                                                        .remove();
                                                },
                                                error: function(xhr) {
                                                    console.error(
                                                        'Error deleting image:',
                                                        xhr
                                                        .responseText
                                                    );
                                                    alert(
                                                        'Failed to delete image'
                                                    );
                                                }
                                            });
                                        }
                                    });

                                imageWrapper.append(img, removeBtn);
                                $('#existingImagesContainer').append(imageWrapper);
                            });
                        }
                        if (response.carnival.banners && response.carnival.banners.length > 0) {
                            response.carnival.banners.forEach((image, index) => {
                                console.log(image, index, 'asd');

                                // Ensure the image path is correct
                                const imageUrl = image.full_url ? image.full_url :
                                    '{{ asset('images/carnivalBannerImages/') }}/' +
                                    image
                                    .image;

                                const imageWrapper = $('<div>').addClass(
                                    'position-relative mr-2 mb-2');
                                const img = $('<img>').addClass('img-thumbnail').css({
                                    'height': '100px',
                                    'width': '100px',
                                    'object-fit': 'cover'
                                }).attr('src', imageUrl); // Use full URL if available

                                const removeBtn = $('<button>').addClass(
                                        'btn btn-danger btn-sm position-absolute')
                                    .css({
                                        'top': '0',
                                        'right': '0',
                                        'padding': '0.2rem 0.4rem'
                                    })
                                    .html('&times;')
                                    .on('click', function() {
                                        if (confirm(
                                                'Are you sure you want to remove this image?'
                                            )) {
                                            $.ajax({
                                                url: '{{ route('carnivals.delete.banner', [':carnivalId', ':imageId']) }}'
                                                    .replace(':carnivalId',
                                                        carnivalId)
                                                    .replace(':imageId',
                                                        image.id),
                                                type: 'DELETE',
                                                headers: {
                                                    'X-CSRF-Token': $(
                                                        'meta[name="csrf-token"]'
                                                    ).attr(
                                                        'content')
                                                },
                                                success: function() {
                                                    imageWrapper
                                                        .remove();
                                                },
                                                error: function(xhr) {
                                                    console.error(
                                                        'Error deleting image:',
                                                        xhr
                                                        .responseText
                                                    );
                                                    alert(
                                                        'Failed to delete image'
                                                    );
                                                }
                                            });
                                        }
                                    });

                                imageWrapper.append(img, removeBtn);
                                $('#existingBannerImagesContainer').append(
                                    imageWrapper);
                            });
                        }
                        if (response.carnival.flyers && response.carnival.flyers.length > 0) {
                            response.carnival.flyers.forEach((image, index) => {
                                console.log(image, index, 'asd');

                                // Ensure the image path is correct
                                const imageUrl = image.full_url ? image.full_url :
                                    '{{ asset('images/carnivalFlyerImages/') }}/' +
                                    image
                                    .image;

                                const imageWrapper = $('<div>').addClass(
                                    'position-relative mr-2 mb-2');
                                const img = $('<img>').addClass('img-thumbnail').css({
                                    'height': '100px',
                                    'width': '100px',
                                    'object-fit': 'cover'
                                }).attr('src', imageUrl); // Use full URL if available

                                const removeBtn = $('<button>').addClass(
                                        'btn btn-danger btn-sm position-absolute')
                                    .css({
                                        'top': '0',
                                        'right': '0',
                                        'padding': '0.2rem 0.4rem'
                                    })
                                    .html('&times;')
                                    .on('click', function() {
                                        if (confirm(
                                                'Are you sure you want to remove this image?'
                                            )) {
                                            $.ajax({
                                                url: '{{ route('carnivals.delete.flyer', [':carnivalId', ':imageId']) }}'
                                                    .replace(':carnivalId',
                                                        carnivalId)
                                                    .replace(':imageId',
                                                        image.id),
                                                type: 'DELETE',
                                                headers: {
                                                    'X-CSRF-Token': $(
                                                        'meta[name="csrf-token"]'
                                                    ).attr(
                                                        'content')
                                                },
                                                success: function() {
                                                    imageWrapper
                                                        .remove();
                                                },
                                                error: function(xhr) {
                                                    console.error(
                                                        'Error deleting image:',
                                                        xhr
                                                        .responseText
                                                    );
                                                    alert(
                                                        'Failed to delete image'
                                                    );
                                                }
                                            });
                                        }
                                    });

                                imageWrapper.append(img, removeBtn);
                                $('#existingFlyerImagesContainer').append(imageWrapper);
                            });
                        }
                        $('#editCarnivalModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#carnivalMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to fetch carnival details for editing</div>'
                        );
                    }
                });
            });

            $(document).on('click', '.assignMasscamp', function() {
                var carnivalId = $(this).data('id');
                $('#carnival_id').val(carnivalId);
                // $('#assignMasscampModal').modal('show');
                var model = $(this).data('model');
                let data = '';
                let modelInput = '';
                $('#is-model').remove();
                if (model == 'yes') {
                    data = model;
                    modelInput = '<input type="hidden" name="is_model" value="yes" id="is-model"/>'
                }

                // Fetch assigned mascamps for the selected carnival
                $.ajax({
                    url: '{{ route('carnivals.assigned.mascamps', ':id') }}'.replace(':id',
                        carnivalId),
                    data: model,
                    type: 'GET',
                    success: function(response) {
                        // Clear existing selections
                        $('#mascamp').val([]).trigger('change');
                        $('#mascamp').html('');

                        // Set selected values
                        if (response.vendors) {
                            $.each(response.vendors, function(index, row) {
                                var html =
                                    `<option value="${row.id}">${row.user.first_name} ${row.user.last_name}</option>`;
                                $('#mascamp').append(html);
                            });
                            $('.select2').select2({
                                theme: 'bootstrap4',
                            });
                        }
                        $('#assignMasscampForm').append(modelInput);
                        $('#assignMasscampModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to fetch assigned mascamps.');
                    }
                });
            });


            $('#editCarnivalModal').on('hidden.bs.modal', function() {
                clearEditModalFields();
            });

            $('#createCarnivalForm').submit(function(event) {
                event.preventDefault();

                var form = $(this); // Store the form element
                var formData = new FormData(this); // Use FormData for file uploads

                $.ajax({
                    url: '{{ route('carnivals.store') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting the content type
                    success: function(response) {
                        $('#carnivalModal').modal('hide');
                        $('#tableData').html(response.table_html);

                        $('#dataTable-1').DataTable({
                            autoWidth: true,
                            "lengthMenu": [
                                [16, 32, 64, -1],
                                [16, 32, 64, "All"]
                            ]
                        });

                        $('#carnivalMessage').html(
                            '<div class="alert alert-success" role="alert">Carnival created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#carnivalMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        form.find('.error').html( // Use form instead of $(this)
                            '<div class="alert alert-danger" role="alert">' + error +
                            '</div>'
                        );
                    }
                });
            });

            $('#editCarnivalForm').submit(function(event) {
                event.preventDefault();
                var carnivalId = $(this).find('#edit_id').val();

                // Create FormData object instead of serialize()
                var formData = new FormData(this);

                // Add method spoofing for PUT request
                formData.append('_method', 'PUT');

                var url = '{{ route('carnivals.update', ['carnival' => ':id']) }}'.replace(':id',
                    carnivalId);

                $.ajax({
                    url: url,
                    type: 'POST', // Change to POST as FormData doesn't support PUT
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false, // Important for FormData
                    contentType: false, // Important for FormData
                    success: function(response) {
                        $('#editCarnivalModal').modal('hide');
                        $('#tableData').html(response.table_html);

                        $('#dataTable-1').DataTable({
                            autoWidth: true,
                            "lengthMenu": [
                                [16, 32, 64, -1],
                                [16, 32, 64, "All"]
                            ]
                        });

                        $('#carnivalMessage').html(
                            '<div class="alert alert-success" role="alert">Carnival updated successfully</div>'
                        );
                        setTimeout(function() {
                            $('#carnivalMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        console.error('error : ' + error);
                        $(this).find('.error').html(
                            '<div class="alert alert-danger" role="alert">' + error +
                            '</div>'
                        );

                    }
                });
            });
            // $('#editCarnivalForm').submit(function(event) {
            //     var carnivalId = $(this).find('#edit_id').val();
            //     event.preventDefault();
            //     var formData = $(this).serialize();
            //     console.log(formData);
            //     var url = '{{ route('carnivals.update', ['carnival' => ':id']) }}'.replace(':id',
            //         carnivalId);

            //     $.ajax({
            //         url: url,
            //         type: 'PUT',
            //         headers: {
            //             'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         data: formData,
            //         success: function(response) {
            //             $('#editCarnivalModal').modal('hide');
            //             $('#tableData').html(response.table_html);

            //             $('#dataTable-1').DataTable({
            //                 autoWidth: true,
            //                 "lengthMenu": [
            //                     [16, 32, 64, -1],
            //                     [16, 32, 64, "All"]
            //                 ]
            //             });

            //             $('#carnivalMessage').html(
            //                 '<div class="alert alert-success" role="alert">Carnival updated successfully</div>'
            //             );
            //             setTimeout(function() {
            //                 $('#carnivalMessage').html('');
            //             }, 3000);
            //         },
            //         error: function(xhr, status, error) {
            //             console.error(xhr.responseText);
            //             $('#carnivalMessage').html(
            //                 '<div class="alert alert-danger" role="alert">Failed to update carnival</div>'
            //             );
            //         }
            //     });
            // });

            $('#assignMasscampForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('assign.models') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        $('#assignMasscampModal').modal('hide');
                        toastr.success(response.success);

                        // $('#dataTable-1').DataTable({
                        //     autoWidth: true,
                        //     "lengthMenu": [
                        //         [16, 32, 64, -1],
                        //         [16, 32, 64, "All"]
                        //     ]
                        // });

                        $('#carnivalMessage').html(
                            '<div class="alert alert-success" role="alert">Carnival created successfully</div>'
                        );
                        window.location.reload();
                        setTimeout(function() {
                            $('#carnivalMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#carnivalMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create carnival</div>'
                        );
                    }
                });
            });

            $('#assignMemberForm').submit(function(event) {
                event.preventDefault();
                // var formData = $(this).serialize();
                var formData = new FormData(this);
                $.ajax({
                    url: '{{ route('assign.CarnivalMember') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#assignMasscampModal').modal('hide');
                        toastr.success(response.success);

                        // $('#dataTable-1').DataTable({
                        //     autoWidth: true,
                        //     "lengthMenu": [
                        //         [16, 32, 64, -1],
                        //         [16, 32, 64, "All"]
                        //     ]
                        // });

                        $('#carnivalMessage').html(
                            '<div class="alert alert-success" role="alert">Carnival created successfully</div>'
                        );
                        window.location.reload();
                        setTimeout(function() {
                            $('#carnivalMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#carnivalMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create carnival</div>'
                        );
                    }
                });
            });

            $(document).on('click', '.deleteCarnivalBtn', function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form');
                var formData = deleteForm.serialize();
                var url = deleteForm.attr('action');

                $('#deleteConfirmationModal').modal('show');

                $('#confirmDeleteBtn').click(function() {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: formData,
                        success: function(response) {
                            $('#deleteConfirmationModal').modal('hide');
                            $('#carnivalMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>'
                            );

                            deleteForm.closest('tr').remove();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#carnivalMessage').html(
                                '<div class="alert alert-danger" role="alert">Failed to delete carnival</div>'
                            );
                        }
                    });
                });
            });

            $(document).on('click', '.change_head', function() {
                var carnivalId = $(this).data('carnival_id');
                console.log('carnivalId', carnivalId);
                var url = '{{ route('get.head.team', ['id' => ':id']) }}'.replace(':id', carnivalId);

                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        id: carnivalId,
                    },
                    success: function(response) {
                        if (response.head_team.length > 0) {
                            var html = '';
                            $.each(response.head_team, function(index, row) {
                                html += '<option value="' + row.id + '" data-type="' +
                                    row.type + '">' +
                                    row.first_name + ' ' + row.last_name + '</option>';
                            });

                            var selectElement = $('#head_team' + carnivalId);
                            selectElement.append(html);
                            selectElement.show();
                            $(this).hide();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('change', '.head_team', function() {
                console.log("check");
                var carnivalId = $(this).attr('id').replace('head_team', '');
                var selectedOption = $(this).find('option:selected');
                var selectedValue = selectedOption.val();
                var url = '{{ route('update.carnival.head') }}';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        carnival_id: carnivalId,
                        head_team_id: selectedValue,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Update successful', response);
                        $('#head_team' + carnivalId).hide();;
                        $('#change_head' + carnivalId).hide();;
                        $('#narnival_head' + carnivalId).html(response.full_name);;
                    },
                    error: function(xhr, status, error) {
                        console.error('Update failed', xhr.responseText);
                    }
                });
            });

            $('#region_id').change(function() {
                var regionId = $(this).val();
                if (regionId) {
                    $.ajax({
                        url: '{{ route('get.countries') }}',
                        type: 'GET',
                        data: {
                            region_id: regionId
                        },
                        success: function(response) {
                            var countrySelect = $('#country_id');
                            countrySelect.empty();
                            countrySelect.append('<option value="">Select Country</option>');

                            $.each(response.countries, function(key, value) {
                                countrySelect.append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching countries:', error);
                            toastr.error('Failed to fetch countries');
                        }
                    });
                } else {
                    $('#country_id').empty().append('<option value="">Select Country</option>');
                }
            });

            $('#country_id').change(function() {
                var countryId = $(this).val();
                if (countryId) {
                    $.ajax({
                        url: '{{ route('get.cities') }}',
                        type: 'GET',
                        data: {
                            country_id: countryId
                        },
                        success: function(response) {
                            var citySelect = $('#city_id');
                            citySelect.empty();
                            citySelect.append('<option value="">Select City</option>');

                            $.each(response.cities, function(key, value) {
                                citySelect.append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching cities:', error);
                            toastr.error('Failed to fetch cities');
                        }
                    });
                } else {
                    $('#city_id').empty().append('<option value="">Select City</option>');
                }
            });

            $('#edit_region').change(function() {
                var regionId = $(this).val();
                if (regionId) {
                    $.ajax({
                        url: '{{ route('get.countries') }}',
                        type: 'GET',
                        data: {
                            region_id: regionId
                        },
                        success: function(response) {
                            var countrySelect = $('#edit_country_id');
                            countrySelect.empty();
                            countrySelect.append('<option value="">Select Country</option>');

                            $.each(response.countries, function(key, value) {
                                countrySelect.append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching countries:', error);
                            toastr.error('Failed to fetch countries');
                        }
                    });
                } else {
                    $('#edit_country_id').empty().append('<option value="">Select Country</option>');
                }
            });

            $('#edit_country_id').change(function() {
                var countryId = $(this).val();
                if (countryId) {
                    $.ajax({
                        url: '{{ route('get.cities') }}',
                        type: 'GET',
                        data: {
                            country_id: countryId
                        },
                        success: function(response) {
                            var citySelect = $('#edit_city_id');
                            citySelect.empty();
                            citySelect.append('<option value="">Select City</option>');

                            $.each(response.cities, function(key, value) {
                                citySelect.append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching cities:', error);
                            toastr.error('Failed to fetch cities');
                        }
                    });
                } else {
                    $('#edit_city_id').empty().append('<option value="">Select City</option>');
                }
            });

            function handleImagePreview(input, previewContainer) {
                if (input.files) {
                    $(previewContainer).empty();

                    Array.from(input.files).forEach((file, index) => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const previewWrapper = $('<div>').addClass('position-relative mr-2 mb-2');
                            const preview = $('<img>').addClass('img-thumbnail').css({
                                'height': '100px',
                                'width': '100px',
                                'object-fit': 'cover'
                            }).attr('src', e.target.result);

                            const removeBtn = $('<button>').addClass(
                                    'btn btn-danger btn-sm position-absolute')
                                .css({
                                    'top': '0',
                                    'right': '0',
                                    'padding': '0.2rem 0.4rem'
                                })
                                .html('&times;')
                                .on('click', function() {
                                    const dt = new DataTransfer();
                                    const {
                                        files
                                    } = input;

                                    for (let i = 0; i < files.length; i++) {
                                        if (i !== index) {
                                            dt.items.add(files[i]);
                                        }
                                    }

                                    input.files = dt.files;
                                    previewWrapper.remove();
                                    updateFileLabel(input);
                                });

                            previewWrapper.append(preview, removeBtn);
                            $(previewContainer).append(previewWrapper);
                        };

                        reader.readAsDataURL(file);
                    });
                }
            }

            function updateFileLabel(input) {
                const fileCount = input.files.length;
                const label = $(input).next('.custom-file-label');
                label.html(fileCount > 0 ? `${fileCount} files selected` : 'Choose files');
            }

            // Create form image handling
            $('.flyer_image').on('change', function() {
                handleImagePreview(this, '.flyerImagesPreviewContainer');
                updateFileLabel(this);
            });

            // Create form image handling
            $('#edit_flyer_image').on('change', function() {
                handleImagePreview(this, '.flyerImagesEditPreviewContainer');
                updateFileLabel(this);
            });

            // Create form image handling
            $('.banner_image').on('change', function() {
                handleImagePreview(this, '.bannerImagesPreviewContainer');
                updateFileLabel(this);
            });

            // Create form image handling
            $('#edit_banner_image').on('change', function() {
                handleImagePreview(this, '.bannerImagesEditPreviewContainer');
                updateFileLabel(this);
            });

            // Create form image handling
            $('#create_image').on('change', function() {
                handleImagePreview(this, '#createImagePreviewContainer');
                updateFileLabel(this);
            });

            // Edit form image handling
            $('#edit_image').on('change', function() {
                handleImagePreview(this, '#editImagePreviewContainer');
                updateFileLabel(this);
            });
        });
        let members = [];

        function loadMembers(members) {
            const tableBody = document.getElementById("membersTableBody");
            tableBody.innerHTML = ""; // Clear existing rows

            members.forEach(member => {
                const viewMember = `/carnival_member/${member.id}`;
                const row = `
                        <tr>
                            <td>${member.first_name} ${member.last_name}</td>
                            <td>${member.email}</td>
                            <td>${member.phone}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" onclick="editMember(${member.id})">Edit</button>
                                <a href="${viewMember}" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    `;
                tableBody.insertAdjacentHTML("beforeend", row);
            });

            // Save members globally for editing
            window.membersList = members; // Store members globally in a safe place
        }

        function editMember(memberId) {
            // Retrieve the specific member from the global list
            const member = window.membersList.find(m => m.id === memberId);

            if (member) {
                // Populate the form with member details
                document.getElementById("member_id").value = memberId;
                document.getElementById("firstname").value = member.first_name;
                document.getElementById("lastname").value = member.last_name;
                document.getElementById("email").value = member.email;
                document.getElementById("phone").value = member.phone;
                document.getElementById("address").value = member.address;
                document.getElementById("city").value = member.city;
                document.getElementById("state").value = member.state;
                document.getElementById("country").value = member.country;
                document.getElementById("designation").value = member.designation;
                document.getElementById("bio_description").value = member.bio_description;

                // Scroll to the form
                document.getElementById("assignMemberForm").scrollIntoView({
                    behavior: "smooth"
                });
            } else {
                alert("Member not found!");
            }
        }

        $(document).on('click', '.assignMember', function() {
            var carnivalId = $(this).data('id');
            $('#carnival_id_member').val(carnivalId);

            $.ajax({
                url: '{{ route('get.carnivals.members', ':id') }}'.replace(':id', carnivalId),
                type: 'GET',
                success: function(response) {
                    if (response.members) {
                        members = response.members; // Assign globally
                        loadMembers(members);
                    } else {
                        alert('No members found for this carnival.');
                    }

                    $('#assignMemberModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Failed to fetch carnival members.');
                }
            });
            // $('#assignMemberModal').modal('show');
        });

        $(document).ready(function() {
            $(".add-more-btn").click(function() {
                let newRow = `<div class="mb-2 p-3 border rounded file-upload-row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyerNew" name="flyerNew[]"
                                                class="custom-file-input form-control file-input flyerNew"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="flyerNew">Flyer Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="banner_image" name="banner_image[]"
                                                class="custom-file-input form-control file-input banner_image"
                                                accept="image/*,video/*">
                                            <label class="custom-file-label" for="banner_image">Banner Image</label>
                                        </div>
                                        {{-- <div id="bannerImagesPreviewContainer" class="mt-2 d-flex flex-wrap bannerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                    <div class="col-6 poster-input d-none">
                                        <div class="custom-file border p-2 rounded">
                                            <input type="file" id="flyer_image" name="flyer_image[]"
                                                class="custom-file-input form-control flyer_image" accept="image/*">
                                            <label class="custom-file-label" for="flyer_image">Poster Image</label>
                                        </div>
                                        {{-- <div id="flyerImagesPreviewContainer" class="mt-2 d-flex flex-wrap flyerImagesPreviewContainer">
                                            <!-- Image previews will be added here -->
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="text" name="btn_text[]" class="form-control" placeholder="Button text">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border p-2 rounded">
                                            <input type="url" name="btn_url[]" class="form-control" placeholder="Button url">
                                        </div>
                                    </div>
                                    <button class="btn btn-danger remove-btn">Remove</button>
                                </div>
                            </div>`;
                $(this).closest(".file-upload-container").append(newRow);
            });

            $(document).on("change", ".file-input", function() {
                let file = this.files[0];
                let parentRow = $(this).closest(".file-upload-row");

                if (file) {
                    let fileType = file.type.split('/')[0];
                    if (fileType === "video") {
                        parentRow.find(".poster-input").removeClass("d-none");
                    } else {
                        parentRow.find(".poster-input").addClass("d-none");
                    }
                }
            });

            $(document).on("click", ".remove-btn", function() {
                $(this).closest(".file-upload-row").remove();
            });

            $(document).on("click", ".remove-btn", function() {
                $(this).closest(".file-upload-row").remove();
            });
        });
    </script>
@endsection
