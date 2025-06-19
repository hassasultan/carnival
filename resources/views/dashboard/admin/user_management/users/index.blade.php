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
                                    <option value="3">Customer</option>
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
@endsection
@section('bottom_script')
    <script>
        $(document).ready(function() {
            let currentPage = 1;
            
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
                        $('#usersTable').html('<div class="text-center py-4"><i class="fe fe-loader fe-spin fe-24 mb-2"></i><p>Loading users...</p></div>');
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
                        $('#usersTable').html('<div class="alert alert-danger">Error loading users. Please try again.</div>');
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
