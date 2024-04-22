@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">AppointmentSlotss</h2>
            <p class="card-text">Appointment Slots table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="openAppointmentSlotsModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New AppointmentSlots</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- AppointmentSlots Messages -->
                            <div id="appointment_slotstMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                @include('dashboard.admin.appointment_slots.table')
                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>

    <!-- New AppointmentSlots modal -->
    <div class="modal fade" id="appointment_slotstModal" tabindex="-1" role="dialog" aria-labelledby="appointment_slotstModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointment_slotstModalLabel">New AppointmentSlots</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createAppointmentSlotsForm">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            {{-- <input type="text" class="form-control" id="type" name="type" required> --}}
                            <select class="form-control" id="type" name="type" required>
                                <option value="">Select</option>
                                <option value="text">Text</option>
                                <option value="color">Color</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="saveAppointmentSlotsBtn">Save AppointmentSlots</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit AppointmentSlots modal -->
    <div class="modal fade" id="editAppointmentSlotsModal" tabindex="-1" role="dialog" aria-labelledby="editAppointmentSlotsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAppointmentSlotsModalLabel">Edit AppointmentSlots</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editAppointmentSlotsForm">
                        @csrf
                        @method('GET')
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="form-group">
                            <label for="edit_title">Title</label>
                            <input type="text" class="form-control" id="edit_title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_type">Type</label>
                            <select class="form-control" id="edit_type" name="type" required>
                                <option value="">Select</option>
                                <option value="text">Text</option>
                                <option value="color">Color</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_description">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_category">Category</label>
                            <select class="form-control" id="edit_category" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="updateAppointmentSlotsBtn">Update AppointmentSlots</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete AppointmentSlots Confirmation Modal -->
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
                    Are you sure you want to delete this appointment_slotst?
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
        // Function to clear edit modal fields
        function clearEditModalFields() {
            $('#edit_title').val('');
            $('#edit_type').val('');
            $('#edit_description').val('');
            $('#edit_category').val('');
            $('#edit_status').val('');
        }

        $(document).ready(function() {
            // Open the appointment_slotst modal when clicking the "New AppointmentSlots" button
            $('#openAppointmentSlotsModal').click(function() {
                $('#appointment_slotstModal').modal('show');
            });

            // Handle click event for editing a appointment_slotst using event delegation
            $(document).on('click', '.editAppointmentSlotsBtn', function() {
                var appointment_slotstId = $(this).data('id');
                $.ajax({
                    url: '{{ route('appointment_slots.edit', ':id') }}'.replace(':id', appointment_slotstId),
                    type: 'GET',
                    success: function(response) {
                        console.log('edit', response);
                        // Populate the edit form fields with appointment_slotst details
                        $('#edit_id').val(response.appointment_slotst.id);
                        $('#edit_title').val(response.appointment_slotst.title);
                        $('#edit_type').val(response.appointment_slotst.type);
                        $('#edit_description').val(response.appointment_slotst.description);
                        $('#edit_category').val(response.appointment_slotst.category_id);
                        $('#edit_status').val(response.appointment_slotst.status);
                        // Show the edit modal
                        $('#editAppointmentSlotsModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#appointment_slotstMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to fetch appointment_slotst details for editing</div>'
                        );
                    }
                });
            });

            // Clear edit modal fields when the modal dismisses
            $('#editAppointmentSlotsModal').on('hidden.bs.modal', function() {
                clearEditModalFields();
            });

            // Handle form submission via AJAX for creating a new appointment_slotst
            $('#createAppointmentSlotsForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('appointment_slots.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#appointment_slotstModal').modal('hide');
                        $('#tableData').html(response
                            .table_html);

                        // Reinitialize DataTables after updating table content
                        $('#dataTable-1').DataTable({
                            autoWidth: true,
                            "lengthMenu": [
                                [16, 32, 64, -1],
                                [16, 32, 64, "All"]
                            ]
                        });

                        $('#appointment_slotstMessage').html(
                            '<div class="alert alert-success" role="alert">AppointmentSlots created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#appointment_slotstMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#appointment_slotstMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create appointment_slotst</div>'
                        );
                    }
                });
            });

            // Handle form submission via AJAX for updating a appointment_slotst
            $('#editAppointmentSlotsForm').submit(function(event) {
                var appointment_slotstId = $(this).find('#edit_id').val();
                event.preventDefault();
                var formData = $(this).serialize();
                var url = '{{ route('appointment_slots.update', ['appointment_slotst' => ':id']) }}'.replace(':id', appointment_slotstId);
                console.log('url', url, appointment_slotstId);

                $.ajax({
                    url: url,
                    type: 'PUT',
                    data: formData,
                    success: function(response) {
                        $('#editAppointmentSlotsModal').modal('hide');
                        $('#tableData').html(response
                            .table_html);

                        // Reinitialize DataTables after updating table content
                        $('#dataTable-1').DataTable({
                            autoWidth: true,
                            "lengthMenu": [
                                [16, 32, 64, -1],
                                [16, 32, 64, "All"]
                            ]
                        });

                        $('#appointment_slotstMessage').html(
                            '<div class="alert alert-success" role="alert">AppointmentSlots updated successfully</div>'
                        );
                        setTimeout(function() {
                            $('#appointment_slotstMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#appointment_slotstMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to update appointment_slotst</div>'
                        );
                    }
                });
            });
            // Delete recrod
            $('.deleteAppointmentSlotsBtn').click(function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form');
                var formData = deleteForm.serialize();
                var url = deleteForm.attr('action');

                // Show confirmation modal before deleting
                $('#deleteConfirmationModal').modal('show');

                // Handle deletion confirmation
                $('#confirmDeleteBtn').click(function() {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: formData,
                        success: function(response) {
                            $('#deleteConfirmationModal').modal('hide');
                            // Show success message on the page
                            $('#appointment_slotstMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>');

                            // Optionally, you can remove the deleted appointment_slotst row from the table
                            deleteForm.closest('tr').remove();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#appointment_slotstMessage').html(
                                '<div class="alert alert-danger" role="alert">Failed to delete appointment_slotst</div>'
                            );
                        }
                    });
                });
            });
        });
    </script>
@endsection
