@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Users</h2>
            <p class="card-text">Users table.</p>
            <div class="row my-4">
                <div class="col-md-12">
                    <a href="{{ route('users.add') }}" class="btn btn-primary mb-2">Add New User</a>

                    <!-- Filters -->
                    <div class="card shadow mb-3 p-3">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" id="search" class="form-control"
                                    placeholder="Search by name or email">
                            </div>
                            <div class="col-md-3">
                                <select id="role_filter" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="2">Vendor</option>
                                    <option value="4">Customer</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="status_filter" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="package_filter" class="form-control">
                                    <option value="">Select Package</option>
                                    @foreach ($packages as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                    <option value="123">Section Leader</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary" id="filterBtn">Filter</button>
                                <button class="btn btn-secondary" id="resetBtn">Reset</button>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-body">
                            <div id="usersTable">
                                @include('dashboard.admin.users.partials.user_table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deletion Confirmation Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteUserModalLabel">
                        <i class="fe fe-alert-triangle mr-2"></i>Delete User Confirmation
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="userDeletionDetailsContent">
                        <!-- Content will be loaded here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fe fe-x mr-1"></i>Cancel
                    </button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteUser">
                        <i class="fe fe-trash mr-1"></i>Yes, Delete Everything
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bottom_script')
    <script>
        $(document).ready(function() {
            let currentPage = 1;
            var currentUserId = null;
            var currentUserDeleteButton = null;

            function fetchUsers(page = 1) {
                currentPage = page;
                let search = $('#search').val();
                let role = $('#role_filter').val();
                let package = $('#package_filter').val();
                let status = $('#status_filter').val();

                $.ajax({
                    url: "{{ route('users.index') }}",
                    method: "GET",
                    data: {
                        page: page,
                        search: search,
                        role: role,
                        package: package,
                        status: status
                    },
                    beforeSend: function() {
                        $('#usersTable').html(
                            '<div class="text-center py-4"><i class="fe fe-loader fe-spin fe-24 mb-2"></i><p>Loading users...</p></div>'
                        );
                    },
                    success: function(response) {
                        $('#usersTable').html(response);
                        // Update URL without page reload
                        let url = new URL(window.location);
                        url.searchParams.set('page', page);
                        window.history.pushState({}, '', url);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching users:', error);
                        $('#usersTable').html(
                            '<div class="alert alert-danger">Error loading users. Please try again.</div>'
                        );
                    }
                });
            }

            // Handle pagination click with AJAX
            $(document).on('click', '.pagination-link', function(event) {
                event.preventDefault();
                let page = $(this).data('page');
                if (page && page !== currentPage) {
                    fetchUsers(page);
                }
            });

            // Handle user deletion
            $(document).on('click', '.delete-user', function() {
                var userId = $(this).data('id');
                var button = $(this);

                currentUserId = userId;
                currentUserDeleteButton = button;

                // Get deletion details first
                $.ajax({
                    type: 'GET',
                    url: "{{ route('users.deletion-details', '__user_id__') }}".replace(
                        '__user_id__', userId),
                    success: function(response) {
                        showUserDeletionModal(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to get deletion details.');
                    }
                });
            });

            function showUserDeletionModal(details) {
                var content = `
                    <div class="text-left">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading"><i class="fe fe-alert-triangle mr-1"></i>Warning!</h6>
                            <p class="mb-0">This action will permanently delete the user and all their related data. This cannot be undone!</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-primary">User Information</h6>
                                <p><strong>Name:</strong> ${details.user.first_name} ${details.user.last_name}</p>
                                <p><strong>Email:</strong> ${details.user.email}</p>
                                <p><strong>Role:</strong> ${details.user.role_name}</p>
                                <p><strong>Created:</strong> ${details.user.created_at}</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-danger">Items to be Deleted</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <tr><td>User Profile:</td><td><span class="badge badge-danger">1</span></td></tr>
                                            <tr><td>User Banners:</td><td><span class="badge badge-primary">${details.banners_count}</span></td></tr>
                                            <tr><td>User Tabs:</td><td><span class="badge badge-primary">${details.tabs_count}</span></td></tr>
                                            <tr><td>Sponsors:</td><td><span class="badge badge-primary">${details.sponsors_count}</span></td></tr>
                                            <tr><td>Vendor/SubVendor:</td><td><span class="badge badge-info">${details.vendor_count}</span></td></tr>
                                            <tr><td>Products:</td><td><span class="badge badge-warning">${details.products_count}</span></td></tr>
                                            <tr><td>Costumes:</td><td><span class="badge badge-warning">${details.costumes_count}</span></td></tr>
                                            <tr><td>Events:</td><td><span class="badge badge-warning">${details.events_count}</span></td></tr>
                                            <tr><td>Blogs:</td><td><span class="badge badge-warning">${details.blogs_count}</span></td></tr>
                                            <tr><td>Appointments:</td><td><span class="badge badge-warning">${details.appointments_count}</span></td></tr>
                                            <tr><td>Gallery Albums:</td><td><span class="badge badge-info">${details.gallery_albums_count}</span></td></tr>
                                            <tr><td>Gallery Images:</td><td><span class="badge badge-info">${details.site_gallery_count}</span></td></tr>
                                            <tr><td>Music Files:</td><td><span class="badge badge-info">${details.music_count}</span></td></tr>
                                            <tr><td>Cart Items:</td><td><span class="badge badge-secondary">${details.cart_items_count}</span></td></tr>
                                            <tr><td>Orders:</td><td><span class="badge badge-secondary">${details.orders_count}</span></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-danger">
                            <h6 class="alert-heading"><i class="fe fe-alert-circle mr-1"></i>Total Impact</h6>
                            <p class="mb-0"><strong>Total Items to Delete: <span class="badge badge-danger badge-lg">${details.total_items}</span></strong></p>
                            <small class="text-muted">This includes the user account, all their content, and all related data.</small>
                        </div>
                    </div>
                `;

                $('#userDeletionDetailsContent').html(content);
                $('#deleteUserModal').modal('show');
            }

            $('#confirmDeleteUser').click(function() {
                if (currentUserId && currentUserDeleteButton) {
                    var button = currentUserDeleteButton;

                    // Disable button to prevent double-click
                    button.prop('disabled', true);
                    button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Deleting...');

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('users.destroy', '__user_id__') }}".replace('__user_id__',
                            currentUserId),
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(response) {
                            $('#deleteUserModal').modal('hide');

                            // Show success message
                            showUserSuccessMessage(
                                'User and all related items deleted successfully!');

                            // Reload the page to show updated data
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#deleteUserModal').modal('hide');
                            alert('Failed to delete user.');
                            // Re-enable button
                            button.prop('disabled', false);
                            button.html(
                                '<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove');
                        }
                    });
                }
            });

            function showUserSuccessMessage(message) {
                // Create a temporary success alert
                var alertHtml = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px;">
                        <i class="fe fe-check-circle mr-2"></i>${message}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                `;
                $('body').append(alertHtml);

                // Auto-remove after 5 seconds
                setTimeout(function() {
                    $('.alert-success').fadeOut(300, function() {
                        $(this).remove();
                    });
                }, 5000);
            }

            // Trigger filtering
            $('#filterBtn').on('click', function() {
                fetchUsers(1); // Reset to first page when filtering
            });

            // Reset filters
            $('#resetBtn').on('click', function() {
                $('#search').val('');
                $('#role_filter').val('');
                $('#package_filter').val('');
                $('#status_filter').val('');
                fetchUsers(1); // Reset to first page
            });

            // Live search with debounce
            let searchTimeout;
            $('#search').on('keyup', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    fetchUsers(1); // Reset to first page when searching
                }, 500); // Wait 500ms after user stops typing
            });

            // Handle filter changes
            $('#role_filter, #package_filter, #status_filter').on('change', function() {
                fetchUsers(1); // Reset to first page when filter changes
            });

            // Handle browser back/forward buttons
            window.addEventListener('popstate', function() {
                let urlParams = new URLSearchParams(window.location.search);
                let page = urlParams.get('page') || 1;
                fetchUsers(parseInt(page));
            });
        });
    </script>
@endsection
