@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Order</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Order Information</strong>
                </div>
                <div class="card-body">
                    <form id="orderForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select id="user_id" class="form-control" name="user_id" required>
                                <option value="" disabled>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $order->user_id ? 'selected' : '' }}>
                                        {{ $user->first_name . ' ' . $user->last_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <select id="product_id" class="form-control" name="product_id" required>
                                <option value="" disabled>Select Product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>
                                        {{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="payment_method">Payment Method</label>
                            <input id="payment_method" type="text" class="form-control" name="payment_method" required
                                value="{{ $order->payment_method }}">
                        </div>

                        <div class="form-group">
                            <label for="payment_status">Payment Status</label>
                            <select id="payment_status" class="form-control" name="payment_status" required>
                                <option value="paid" {{ $order->payment_status == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="unpaid" {{ $order->payment_status == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea id="notes" class="form-control" name="notes">{{ $order->notes }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status" required>
                                <option value="1" {{ $order->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $order->status == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <button type="submit" id="updateOrder" class="btn btn-primary">Update Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#updateOrder', function() {
                var formData = $('#orderForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('orders.update', $order->id) }}',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            window.location.href = '{{ route('orders.index') }}';
                        } else {
                            console.error(response.error);
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
