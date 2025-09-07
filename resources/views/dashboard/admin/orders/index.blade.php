@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Orders</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order #</th>
                                        <th>User</th>
                                        <th>Total Amount</th>
                                        <th>Payment Method</th>
                                        <th>Shipping Price</th>
                                        <th>Items</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->order_num }}</td>
                                            <td>{{ $order->user?->name ?? 'Guest' }}</td>
                                            <td>${{ number_format((float) $order->total_amount, 2) }}</td>
                                            <td>{{ ucfirst($order->payment_method) }}</td>
                                            <td>${{ number_format((float) $order->shipping_price, 2) }}</td>
                                            <td>
                                                <ul style="padding-left: 15px;">
                                                    @foreach ($order->items as $item)
                                                        <li>{{ $item->product?->title ?? 'Deleted Product' }}
                                                            (x{{ $item->quantity }})
                                                            - ${{ number_format((float) $item->price, 2) }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{ $order->created_at->format('d M, Y') }}</td>
                                            <td>
                                                <a href="{{ route('orders.show', $order->id) }}"
                                                    class="btn btn-info btn-sm">View</a>
                                                {{-- <a href="{{ route('orders.edit', $order->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-3">
                                {{ $orders->links() }} {{-- Laravel pagination --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
