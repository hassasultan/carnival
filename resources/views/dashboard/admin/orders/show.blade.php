@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Order #{{ $order->order_num }}</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">

                            {{-- Order Details --}}
                            <h4 class="mb-3">Order Details</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Order Number</th>
                                    <td>{{ $order->order_num }}</td>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <td>${{ number_format((float) $order->total_amount, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Price</th>
                                    <td>${{ number_format((float) $order->shipping_price, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <td>{{ ucfirst($order->payment_method) }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                </tr>
                            </table>

                            {{-- Customer Info --}}
                            <h4 class="mt-4 mb-3">Customer Information</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $order->user->full_name ?? $order->user->first_name . ' ' . $order->user->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $order->user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $order->user->phone }}</td>
                                </tr>
                            </table>

                            {{-- Billing Info --}}
                            @if (isset($order->billing))
                                <h4 class="mt-4 mb-3">Billing Address</h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $order->billing->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $order->billing->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $order->billing->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $order->billing->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ $order->billing->city }}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{ $order->billing->state }}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{ $order->billing->country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Zip</th>
                                        <td>{{ $order->billing->zip }}</td>
                                    </tr>
                                </table>
                            @endif

                            {{-- Shipping Info --}}
                            @if (isset($order->shipping))
                                <h4 class="mt-4 mb-3">Shipping Address</h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $order->shipping->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $order->shipping->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $order->shipping->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $order->shipping->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ $order->shipping->city }}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{ $order->shipping->state }}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{ $order->shipping->country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Zip</th>
                                        <td>{{ $order->shipping->zip }}</td>
                                    </tr>
                                </table>
                            @endif

                            {{-- Order Items --}}
                            <h4 class="mt-4 mb-3">Order Items</h4>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->items as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                {{ $item->product->title }}
                                                @if ($item->product->image)
                                                    <br>
                                                    <img src="{{ $item->product->image ? asset('productImage/' . $item->product->image) : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg' }}" width="60"
                                                        alt="Product Image">
                                                @endif
                                            </td>
                                            <td>{{ $item->product->category->name ?? '-' }}</td>
                                            <td>{{ $item->product->subcategory->name ?? '-' }}</td>
                                            <td>{{ $item->product->brand->name ?? '-' }}</td>
                                            <td>${{ number_format((float) $item->price, 2) }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>${{ number_format((float) $item->price * $item->quantity, 2) }}</td>
                                            <td>{{ $item->product->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- Product Extra Info --}}
                            <h4 class="mt-4 mb-3">Product Details (Relations)</h4>
                            @foreach ($order->items as $item)
                                <div class="border p-3 mb-3">
                                    <h5>{{ $item->product->title }}</h5>
                                    <p><strong>Description:</strong> {!! $item->product->description !!}</p>
                                    <p><strong>Condition:</strong> {{ $item->product->condition }}</p>
                                    <p><strong>Stock:</strong> {{ $item->product->stock_condition }}</p>
                                    <p><strong>Discount:</strong> {{ $item->product->discount }}%</p>
                                    <p><strong>Tags:</strong> {{ $item->product->tags }}</p>
                                    <p><strong>Features:</strong>
                                        @foreach ($item->product->features as $feature)
                                            {{ $feature->name }}{{ !$loop->last ? ',' : '' }}
                                        @endforeach
                                    </p>
                                    <p><strong>Variants:</strong>
                                        @foreach ($item->product->variants as $variant)
                                            {{ $variant->name }}
                                            ({{ $variant->pivot->value }}){{ !$loop->last ? ',' : '' }}
                                        @endforeach
                                    </p>
                                    <p><strong>Images:</strong>
                                        @foreach ($item->product->product_images as $img)
                                            <img src="{{ asset('variant_images/' . $img->image) }}" width="50">
                                        @endforeach
                                    </p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
