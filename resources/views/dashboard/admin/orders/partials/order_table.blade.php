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
        @forelse ($orders as $order)
            <tr>
                <td>{{ $loop->iteration + ($orders->currentPage() - 1) * $orders->perPage() }}</td>
                <td>{{ $order->order_num }}</td>
                <td>{{ $order->user?->name ?? 'Guest' }}</td>
                <td>${{ number_format((float) $order->total_amount, 2) }}</td>
                <td>{{ ucfirst($order->payment_method) }}</td>
                <td>${{ number_format((float) $order->shipping_price, 2) }}</td>
                <td>
                    <ul style="padding-left: 15px; margin:0;">
                        @foreach ($order->items as $item)
                            <li>
                                {{ $item->product?->title ?? 'Deleted Product' }}
                                (x{{ $item->quantity }})
                                - ${{ number_format((float) $item->price, 2) }}
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ $order->created_at->format('d M, Y') }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">
                        View
                    </a>
                    <a href="{{ route('orders.invoice', $order->id) }}" class="btn btn-warning btn-sm" target="_blank">
                        Invoice
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9" class="text-center">No orders found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Custom Pagination -->
@if ($orders->hasPages())
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Orders pagination">
            <ul class="pagination">
                <!-- Previous Page Link -->
                @if ($orders->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link pagination-link" href="#"
                            data-page="{{ $orders->currentPage() - 1 }}">Previous</a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                    @if ($page == $orders->currentPage())
                        <li class="page-item active">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link pagination-link" href="#"
                                data-page="{{ $page }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($orders->hasMorePages())
                    <li class="page-item">
                        <a class="page-link pagination-link" href="#"
                            data-page="{{ $orders->currentPage() + 1 }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <!-- Pagination Info -->
    <div class="text-center text-muted mt-2">
        Showing {{ $orders->firstItem() ?? 0 }} to {{ $orders->lastItem() ?? 0 }} of {{ $orders->total() }} orders
    </div>
@endif
