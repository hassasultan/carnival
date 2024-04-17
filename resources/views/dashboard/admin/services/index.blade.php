@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Services</h2>
            <p class="card-text">Service table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    {{-- <button type="button" class="btn btn-primary" id="openServiceModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New Service</button> --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Service Messages -->
                            <div id="serviceMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                @include('dashboard.admin.services.table')
                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>

    <!-- New Service modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createServiceForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="poster">Poster Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="poster" name="poster">
                                <label class="custom-file-label" for="poster" id="poster_label">Choose file</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="edit_saveServiceBtn">Save Changes</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Service modal -->
    <div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editServiceModalLabel">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editServiceForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="form-group">
                            <label for="edit_name">Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_description">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="poster">Poster Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="poster" name="poster">
                                <label class="custom-file-label" for="poster" id="poster_label">Choose file</label>
                            </div>
                        </div>
                        <!-- You can include other fields here if needed -->
                        <button type="submit" class="btn btn-primary" id="edit_saveServiceBtn">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Service Confirmation Modal -->
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
                    Are you sure you want to delete this service?
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
            // Open the service modal when clicking the "New Service" button
            $('#openServiceModal').click(function() {
                $('#serviceModal').modal('show');
            });

            $('.editServiceBtn').click(function(event) {
                event.preventDefault();
                var serviceId = $(this).data('id');
                console.log('serviceId', serviceId);

                $.ajax({
                    url: '{{ route('services.edit', ':id') }}'.replace(':id', serviceId),
                    type: 'GET',
                    success: function(response) {
                        var service = response.service;
                        console.log('serviceservice', service);
                        $('#editServiceModal').modal('show');
                        $('#edit_id').val(response.service.id);
                        $('#edit_name').val(service.name);
                        $('#edit_description').val(service.description);
                        // You can also populate other fields here if needed
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#serviceMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to fetch service data for editing</div>'
                        );
                    }
                });
            });

            // Handle form submission via AJAX for creating a new service
            $('#createServiceForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                    url: '{{ route('services.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#serviceModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#serviceMessage').html(
                            '<div class="alert alert-success" role="alert">Service created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#serviceMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#serviceMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create service</div>'
                        );
                    }
                });
            });

            // Handle form submission via AJAX for editing a service
            $('#editServiceForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                var serviceId = $(this).find('#edit_id').val();
                console.log('serviceId', serviceId);
                var url = '{{ route('services.update', ['service' => ':id']) }}'.replace(':id', serviceId);
                $.ajax({
                    url: url, // Adjust the URL as per your route
                    type: 'POST', // Use POST method for updating
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#editServiceModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#serviceMessage').html(
                            '<div class="alert alert-success" role="alert">Service updated successfully</div>'
                        );
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#serviceMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to update service</div>'
                        );
                    }
                });
            });

            // Handle deletion of service records
            $('#confirmDeleteBtn').click(function() {
                var formData = $('#deleteConfirmationModal form').serialize();
                $.ajax({
                    url: '{{ route('services.destroy', ['service' => ':id']) }}'.replace(':id',
                        serviceId),
                    type: 'DELETE',
                    data: formData,
                    success: function(response) {
                        $('#deleteConfirmationModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#serviceMessage').html(
                            '<div class="alert alert-success" role="alert">' + response
                            .message + '</div>'
                        );
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#serviceMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to delete service</div>'
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

            // Handle deletion of service records
            $('.deleteServiceBtn').click(function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form'); // Find the closest form element
                var deleteConfirmationModal = $('#deleteConfirmationModal');
                var serviceId = $(this).data('service-id'); // Get the service id from the data attribute

                deleteConfirmationModal.modal('show');

                // When the user confirms deletion
                $('#confirmDeleteBtn').off('click').on('click', function() {
                    var formData = deleteForm.serialize(); // Serialize the form data
                    $.ajax({
                        url: '{{ route('services.destroy', ['service' => ':id']) }}'
                            .replace(
                                ':id', serviceId),
                        type: 'DELETE',
                        data: formData, // Use the serialized form data
                        success: function(response) {
                            deleteConfirmationModal.modal(
                                'hide'); // Hide the confirmation modal
                            $('#tableData').html(response
                                .table_html); // Update the table data
                            $('#serviceMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>'); // Display success message
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#serviceMessage').html(
                                '<div class="alert alert-danger" role="alert">Failed to delete service</div>'
                            ); // Display error message
                        }
                    });
                });
            });
        });
    </script>
@endsection
