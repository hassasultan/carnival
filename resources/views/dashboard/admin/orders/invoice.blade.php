{{-- resources/views/dashboard/admin/orders/invoice.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $order->order_num }}</title>
    <link rel="icon" type="image/png" href="{{ asset('shopAssets/images/logo.png') }}">
    <!-- Favicon -->
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            color: #333;
            margin: 0;
            padding: 20px;
            background: #f9f9f9;
        }

        .invoice-wrapper {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .invoice-header img {
            max-height: 60px;
        }

        .invoice-header h2 {
            margin: 5px 0 0;
        }

        h4 {
            margin: 10px 0 5px;
            color: #444;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table thead {
            background: #f5f5f5;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #e5e5e5;
        }

        table th {
            font-weight: bold;
            font-size: 13px;
        }

        table td {
            font-size: 13px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .totals-row td {
            font-weight: bold;
            border-top: 2px solid #333;
        }

        .download-btn {
            display: inline-block;
            padding: 8px 15px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 13px;
        }

        .download-btn:hover {
            background: #0056b3;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 30px;
            color: #777;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .invoice-header {
                flex-direction: column;
                align-items: flex-start;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
            }

            td {
                border: none;
                padding: 5px 0;
                text-align: right;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                text-align: left;
                font-weight: bold;
                color: #555;
            }
        }
    </style>
</head>

<body>
    <div class="invoice-wrapper">
        <div style="text-align: right; margin-bottom: 20px;">
            <a href="{{ route('orders.invoice.pdf', $order->id) }}" class="download-btn" target="_blank">
                Download PDF
            </a>
        </div>

        <div class="invoice-header">
            <div>
                <img src="{{ asset('shopAssets/images/logo.png') }}" alt="Logo">
                <h2>Invoice</h2>
                <p>
                    <strong>Order #:</strong> {{ $order->order_num }}<br>
                    <strong>Date:</strong> {{ $order->created_at->format('d M, Y') }}<br>
                    <strong>Payment:</strong> {{ ucfirst($order->payment_method) }}
                </p>
            </div>
            <div>
                <h4>Customer</h4>
                <p>
                    {{ $order->user->name ?? '' }}<br>
                    {{ $order->user->email ?? '' }}
                </p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Billing Address</th>
                    <th>Shipping Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @if ($order->billing)
                            {{ $order->billing->first_name }} {{ $order->billing->last_name }}<br>
                            {{ $order->billing->company_name }}<br>
                            {{ $order->billing->address }}<br>
                            {{ $order->billing->city }}, {{ $order->billing->state }}
                            {{ $order->billing->postal_code }}<br>
                            {{ $order->billing->country }}<br>
                            Phone: {{ $order->billing->telephone }}
                        @endif
                    </td>
                    <td>
                        @if ($order->shipping)
                            {{ $order->shipping->first_name_1 }} {{ $order->shipping->last_name_1 }}<br>
                            {{ $order->shipping->company_name_1 }}<br>
                            {{ $order->shipping->address_1 }}<br>
                            {{ $order->shipping->city_1 }}, {{ $order->shipping->state1 }}
                            {{ $order->shipping->postal_code_1 }}<br>
                            {{ $order->shipping->country1 }}<br>
                            Phone: {{ $order->shipping->telephone_1 }}
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="text-center">Qty</th>
                    <th class="text-right">Price</th>
                    <th class="text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    <tr>
                        <td data-label="Item">
                            @if ($item->type === 'product')
                                {{ $item->product->title ?? 'Product Removed' }}
                            @elseif($item->type === 'event')
                                {{ \App\Models\Event::find($item->product_id)?->name ?? 'Event Removed' }}
                            @elseif($item->type === 'costume')
                                {{ \App\Models\Costume::find($item->product_id)?->title ?? 'Costume Removed' }}
                            @else
                                Unknown Item
                            @endif
                        </td>
                        <td data-label="Qty" class="text-center">{{ $item->quantity }}</td>
                        <td data-label="Price" class="text-right">{{ number_format((float) $item->price, 2) }}</td>
                        <td data-label="Subtotal" class="text-right">
                            {{ number_format((float) $item->price * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
                <tr class="totals-row">
                    <td colspan="3" class="text-right">Subtotal</td>
                    <td class="text-right">
                        {{ number_format((float) $order->items->sum(fn($i) => $i->price * $i->quantity), 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Shipping</td>
                    <td class="text-right">{{ number_format((float) $order->shipping_price, 2) }}</td>
                </tr>
                <tr class="totals-row">
                    <td colspan="3" class="text-right">Grand Total</td>
                    <td class="text-right">{{ number_format((float) $order->total_amount, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="footer">
            Thank you for shopping with us!
        </div>
    </div>
</body>

</html>
