@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        /* Main container text & background */
        .select2-container .select2-selection--multiple .select2-selection__rendered {
            background-color: #f8f9fa !important;
            color: #212529 !important;
            /* Dark text */
        }

        /* Selected items (tags) */
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #e9ecef !important;
            color: #212529 !important;
            border: 1px solid #ced4da !important;
        }

        /* Placeholder color */
        .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
            color: #6c757d !important;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Create Package Permission</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Package Permission Information</strong>
                </div>
                <div class="card-body">
                    <form id="rolePermissionForm" method="POST" action="{{ route('role_permissions.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="role_id">Package</label>
                                    <select id="role_id" name="role_id" class="form-control" required>
                                        <option value="">Select Package</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="permission_id">Permissions</label>
                                    <div id="selectPermission">
                                        <select id="permission_id" name="permission_id[]" class="form-control select2"
                                            multiple required>
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}">
                                                    {{ $permission->display_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Package Permission</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            // Initialize Select2 on page load
            $('.select2').select2({
                theme: 'bootstrap4',
                placeholder: 'Select Permissions'
            });

            $('#role_id').change(function() {
                var roleId = $(this).val();
                $.ajax({
                    url: "{{ route('get_permissions_by_role') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        role_id: roleId
                    },
                    success: function(response) {
                        console.log('response', response);
                        var html = response.html;

                        $('#permission_id').replaceWith(html); // Replace select

                        // Reinitialize select2 after replacing
                        $('.select2').select2({
                            theme: 'bootstrap4',
                            placeholder: 'Select Permissions'
                        });
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
