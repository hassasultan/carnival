@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Orders</h2>
            <p class="card-text">Orders table with filters & pagination.</p>

            <div class="row my-4">
                <div class="col-md-12">

                    <!-- Filters -->
                    <div class="card shadow mb-3 p-3">
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <input type="text" id="search" class="form-control"
                                    placeholder="Search by Order #, User Name or Email">
                            </div>
                            <div class="col-md-2 mb-2">
                                <select id="payment_filter" class="form-control">
                                    <option value="">Payment Method</option>
                                    <option value="cod">Cash on Delivery</option>
                                    <option value="card">Card</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="date" id="date_from" class="form-control" placeholder="From Date">
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="date" id="date_to" class="form-control" placeholder="To Date">
                            </div>
                            <div class="col-md-2 mb-2">
                                <select id="status_filter" class="form-control">
                                    <option value="">Order Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="processing">Processing</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button class="btn btn-primary" id="filterBtn">Filter</button>
                                <button class="btn btn-secondary" id="resetBtn">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- Column Selector -->
                    <div class="dropdown mb-2">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="columnToggleDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Toggle Columns
                        </button>
                        <div class="dropdown-menu" aria-labelledby="columnToggleDropdown">
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="1" checked>
                                Order #</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="2" checked>
                                User</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="3" checked>
                                Total</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="4" checked>
                                Payment</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="5" checked>
                                Shipping</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="6" checked>
                                Items</label>
                            <label class="dropdown-item"><input type="checkbox" class="toggle-vis" data-column="7" checked>
                                Date</label>
                        </div>
                    </div>

                    <!-- Orders Table -->
                    <div class="card shadow">
                        <div class="card-body">
                            <div id="ordersTable">
                                @include('dashboard.admin.orders.partials.order_table')
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

            function fetchOrders(page = 1) {
                currentPage = page;

                let search = $('#search').val();
                let payment = $('#payment_filter').val();
                let status = $('#status_filter').val();
                let dateFrom = $('#date_from').val();
                let dateTo = $('#date_to').val();

                $.ajax({
                    url: "{{ route('orders.index') }}",
                    method: "GET",
                    data: {
                        page: page,
                        search: search,
                        payment: payment,
                        status: status,
                        date_from: dateFrom,
                        date_to: dateTo
                    },
                    beforeSend: function() {
                        $('#ordersTable').html(
                            '<div class="text-center py-4"><i class="fe fe-loader fe-spin fe-24 mb-2"></i><p>Loading orders...</p></div>'
                        );
                    },
                    success: function(response) {
                        $('#ordersTable').html(response);
                        // Update URL
                        let url = new URL(window.location);
                        url.searchParams.set('page', page);
                        window.history.pushState({}, '', url);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching orders:', error);
                        $('#ordersTable').html(
                            '<div class="alert alert-danger">Error loading orders. Please try again.</div>'
                        );
                    }
                });
            }

            // Handle pagination click
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                if (page && page !== currentPage) {
                    fetchOrders(page);
                }
            });

            // Filters
            $('#filterBtn').on('click', function() {
                fetchOrders(1);
            });
            $('#resetBtn').on('click', function() {
                $('#search').val('');
                $('#payment_filter').val('');
                $('#status_filter').val('');
                $('#date_from').val('');
                $('#date_to').val('');
                fetchOrders(1);
            });

            // Live search debounce
            let searchTimeout;
            $('#search').on('keyup', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    fetchOrders(1);
                }, 500);
            });

            // Column toggle
            $(document).on('change', '.toggle-vis', function(e) {
                let column = $(this).data('column');
                let isChecked = $(this).is(':checked');

                $('#ordersTable table tr').each(function() {
                    if (isChecked) {
                        $(this).find('td:eq(' + column + '), th:eq(' + column + ')').show();
                    } else {
                        $(this).find('td:eq(' + column + '), th:eq(' + column + ')').hide();
                    }
                });
            });

            // Browser back/forward
            window.addEventListener('popstate', function() {
                let urlParams = new URLSearchParams(window.location.search);
                let page = urlParams.get('page') || 1;
                fetchOrders(parseInt(page));
            });
        });
    </script>
@endsection
