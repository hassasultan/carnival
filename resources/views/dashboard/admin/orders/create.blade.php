@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Create New Order</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Order Information</strong>
                </div>
                <div class="card-body">
                    <form id="orderForm">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select id="user_id" class="form-control" name="user_id" required>
                                <option value="" disabled selected>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->first_name . ' ' . $user->last_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <select id="product_id" class="form-control" name="product_id" required>
                                <option value="" disabled selected>Select Product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="payment_method">Payment Method</label>
                            <input id="payment_method" type="text" class="form-control" name="payment_method" required>
                        </div>

                        <div class="form-group">
                            <label for="payment_status">Payment Status</label>
                            <select id="payment_status" class="form-control" name="payment_status" required>
                                <option value="" disabled selected>Select Payment Status</option>
                                <option value="paid">Paid</option>
                                <option value="unpaid">Unpaid</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea id="notes" class="form-control" name="notes"></textarea>
                        </div>

                        <button type="button" id="submitOrder" class="btn btn-primary">Create Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#submitOrder', function() {
                var formData = $('#orderForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('orders.store') }}',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            window.location.href = '{{ route('orders.index') }}';
                        } else {
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle error response
                    }
                });
            });
        });
    </script>
@endsection
