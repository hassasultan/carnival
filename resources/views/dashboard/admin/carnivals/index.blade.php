@extends('dashboard.admin.layouts.app')

@section('content')
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
                    <form id="createCarnivalForm">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="head">Head</label>
                            <input type="number" class="form-control" id="head" name="head" required>
                        </div> --}}
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
                            <label for="region">region</label>
                            <input type="text" class="form-control" id="region" name="region" required>
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10">Add description here</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="saveCarnivalBtn">Save Carnival</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Carnival modal -->
    <div class="modal fade" id="editCarnivalModal" tabindex="-1" role="dialog" aria-labelledby="editCarnivalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCarnivalModalLabel">Edit Carnival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCarnivalForm">
                        @csrf
                        @method('GET')
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="form-group">
                            <label for="edit_head">Head</label>
                            <input type="number" class="form-control" id="edit_head" name="head" required>
                            <select name="head" id="head" class="form-control"required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($head_team as $row)
                                    <option value="{{ $row->id }}">{{ $row->first_name . ' ' . $row->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
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
                            <input type="text" class="form-control" id="edit_region" name="region" required>
                        </div>
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
        // Function to clear edit modal fields
        function clearEditModalFields() {
            $('#edit_head').val('');
            $('#edit_name').val('');
            $('#edit_link').val('');
        }

        $(document).ready(function() {
            // Set the minimum start date to today
            var today = new Date().toISOString().split('T')[0];
            $('#start_date, #edit_start_date').attr('min', today);

            // Validate end date should not be less than start date
            $('#start_date, #edit_start_date').on('change', function() {
                var startDate = $(this).val();
                var endDateField = $(this).attr('id') === 'start_date' ? '#end_date' : '#edit_end_date';
                $(endDateField).attr('min', startDate);
            });

            // Open the carnival modal when clicking the "New Carnival" button
            $('#openCarnivalModal').click(function() {
                $('#carnivalModal').modal('show');
            });

            // Handle click event for editing a carnival using event delegation
            $(document).on('click', '.editCarnivalBtn', function() {
                var carnivalId = $(this).data('id');
                $.ajax({
                    url: '{{ route('carnivals.edit', ':id') }}'.replace(':id', carnivalId),
                    type: 'GET',
                    success: function(response) {
                        // Populate the edit form fields with carnival details
                        $('#edit_id').val(response.carnival.id);
                        $('#edit_head').val(response.head_team.carnival_id);
                        $('#edit_name').val(response.carnival.name);
                        $('#edit_link').val(response.carnival.link);
                        $('#edit_start_date').val(response.carnival.start_date);
                        $('#edit_end_date').val(response.carnival.end_date);
                        $('#edit_region').val(response.carnival.region);
                        $('#edit_description').val(response.carnival.description);
                        // Show the edit modal
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

            // Clear edit modal fields when the modal dismisses
            $('#editCarnivalModal').on('hidden.bs.modal', function() {
                clearEditModalFields();
            });

            // Handle form submission via AJAX for creating a new carnival
            $('#createCarnivalForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('carnivals.store') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        $('#carnivalModal').modal('hide');
                        $('#tableData').html(response.table_html);

                        // Reinitialize DataTables after updating table content
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
                        $('#carnivalMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create carnival</div>'
                        );
                    }
                });
            });

            // Handle form submission via AJAX for updating a carnival
            $('#editCarnivalForm').submit(function(event) {
                var carnivalId = $(this).find('#edit_id').val();
                event.preventDefault();
                var formData = $(this).serialize();
                var url = '{{ route('carnivals.update', ['carnival' => ':id']) }}'.replace(':id',
                    carnivalId);

                $.ajax({
                    url: url,
                    type: 'PUT',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        $('#editCarnivalModal').modal('hide');
                        $('#tableData').html(response.table_html);

                        // Reinitialize DataTables after updating table content
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
                        $('#carnivalMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to update carnival</div>'
                        );
                    }
                });
            });

            // Handle deletion confirmation and AJAX request for deleting a carnival
            $(document).on('click', '.deleteCarnivalBtn', function(event) {
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
                            $('#carnivalMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>'
                            );

                            // Optionally, you can remove the deleted carnival row from the table
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
        });
    </script>
@endsection
