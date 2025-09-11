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

                            {{-- Billing --}}
                            @if ($order->billing)
                                <h4 class="mt-4 mb-3">Billing Address</h4>
                                <table class="table table-bordered">
                                    @foreach (['name', 'email', 'phone', 'address', 'city', 'state', 'country', 'zip'] as $field)
                                        <tr>
                                            <th>{{ ucfirst($field) }}</th>
                                            <td>{{ $order->billing->$field }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif

                            {{-- Shipping --}}
                            @if ($order->shipping)
                                <h4 class="mt-4 mb-3">Shipping Address</h4>
                                <table class="table table-bordered">
                                    @foreach (['name', 'email', 'phone', 'address', 'city', 'state', 'country', 'zip'] as $field)
                                        <tr>
                                            <th>{{ ucfirst($field) }}</th>
                                            <td>{{ $order->shipping->$field }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif

                            {{-- Products --}}
                            @php $products = $order->items->where('type','product'); @endphp
                            @if ($products->isNotEmpty())
                                <h4 class="mt-4 mb-3">Products</h4>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Brand</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $index => $item)
                                            @php $details = $item->item_details; @endphp
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    🛒 {{ $details['title'] }}
                                                    @if (!empty($details['image']))
                                                        <br><img src="{{ $details['image'] }}" width="60"
                                                            height="60" alt="{{ $details['title'] }}">
                                                    @endif
                                                </td>
                                                <td>{{ $item->product->category->name ?? '-' }}</td>
                                                <td>{{ $item->product->subcategory->name ?? '-' }}</td>
                                                <td>{{ $item->product->brand->title ?? '-' }}</td>
                                                <td>${{ number_format((float) $details['price'], 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ number_format($details['price'] * $item->quantity, 2) }}</td>
                                                <td>{{ $item->product->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                            {{-- Events --}}
                            @php $events = $order->items->where('type','event'); @endphp
                            @if ($events->isNotEmpty())
                                <h4 class="mt-4 mb-3">Events</h4>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Venue</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $index => $item)
                                            @php $details = $item->item_details; @endphp
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    🎟 {{ $details['title'] }}
                                                    @if (!empty($details['image']))
                                                        <br><img src="{{ $details['image'] }}" width="60"
                                                            height="60" alt="{{ $details['title'] }}">
                                                    @endif
                                                </td>
                                                <td>{{ $item->event->category->name ?? '-' }}</td>
                                                <td>{{ $item->event->venue ?? '-' }}</td>
                                                <td>${{ number_format((is_numeric($details['price']) ? $details['price'] : 0) * $item->quantity, 2) }}
                                                </td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ number_format($details['price'] * $item->quantity, 2) }}</td>
                                                <td>{{ $item->event->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                            {{-- Music --}}
                            @php $musics = $order->items->where('type','music'); @endphp
                            @if ($musics->isNotEmpty())
                                <h4 class="mt-4 mb-3">Music</h4>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Label</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($musics as $index => $item)
                                            @php $details = $item->item_details; @endphp
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    🎵 {{ $details['title'] }}
                                                    @if (!empty($details['image']))
                                                        <br><img src="{{ $details['image'] }}" width="60"
                                                            height="60" alt="{{ $details['title'] }}">
                                                    @endif
                                                </td>
                                                <td>{{ $item->music->label ?? '-' }}</td>
                                                <td>${{ number_format((float) $details['price'], 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ number_format($details['price'] * $item->quantity, 2) }}</td>
                                                <td>{{ $item->music->status ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                            {{-- Costumes --}}
                            @php $costumes = $order->items->where('type','costume'); @endphp
                            @if ($costumes->isNotEmpty())
                                <h4 class="mt-4 mb-3">Costumes</h4>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($costumes as $index => $item)
                                            @php $details = $item->item_details; @endphp
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    👗 {{ $details['title'] }}
                                                    @if (!empty($details['image']))
                                                        <br><img src="{{ $details['image'] }}" width="60"
                                                            height="60" alt="{{ $details['title'] }}">
                                                    @endif
                                                </td>
                                                <td>{{ $item->costume->category->name ?? '-' }}</td>
                                                <td>{{ $item->costume->subcategory->name ?? '-' }}</td>
                                                <td>${{ number_format((float) $details['price'], 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ number_format($details['price'] * $item->quantity, 2) }}</td>
                                                <td>{{ $item->costume->status ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
