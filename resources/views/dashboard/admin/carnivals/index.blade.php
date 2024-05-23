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
                        $('#edit_region').val(response.carnival.region);
                        $('#edit_description').val(response.carnival.description);
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

            $('#editCarnivalModal').on('hidden.bs.modal', function() {
                clearEditModalFields();
            });

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
                                    row.full_name + '</option>';
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

            $('.head_team').on('change', function() {
                var carnivalId = $(this).attr('id').replace('head_team', '');
                var selectedOption = $(this).find('option:selected');
                var selectedValue = selectedOption.val();
                var selectedType = selectedOption.data('type');
                var url = '{{ route('update.carnival.head') }}';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        carnival_id: carnivalId,
                        head_team_id: selectedValue,
                        type: selectedType,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Update successful', response);
                    },
                    error: function(xhr, status, error) {
                        console.error('Update failed', xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
