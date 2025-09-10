{{-- resources/views/dashboard/admin/orders/invoice.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $order->order_num }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            color: #333;
        }

        .invoice-box {
            width: 100%;
            margin: auto;
            padding: 20px;
            border: 1px solid #eee;
        }

        h2,
        h4 {
            margin: 0;
            padding: 5px 0;
        }

        table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        table tr.heading td {
            background: #f5f5f5;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        table tr.item td {
            border-bottom: 1px solid #f5f5f5;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .total-row td {
            font-weight: bold;
            border-top: 2px solid #333;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .logo {
            max-height: 60px;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        {{-- Header --}}
        <table>
            <tr>
                <td>
                    <img src="{{ public_path('shopAssets/images/logo.png') }}" alt="Logo" class="logo"><br>
                    <h2>Invoice</h2>
                    <strong>Order #:</strong> {{ $order->order_num }}<br>
                    <strong>Date:</strong> {{ $order->created_at->format('d M, Y') }}<br>
                    <strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}
                </td>
                <td class="text-right">
                    <h4>Customer</h4>
                    {{ $order->user->name ?? '' }}<br>
                    {{ $order->user->email ?? '' }}
                </td>
            </tr>
        </table>

        {{-- Billing & Shipping --}}
        <table class="mb-20">
            <tr>
                <td>
                    <h4>Billing Address</h4>
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
                    <h4>Shipping Address</h4>
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
        </table>

        {{-- Items --}}
        <table>
            <tr class="heading">
                <td>Item</td>
                <td class="text-center">Qty</td>
                <td class="text-right">Price</td>
                <td class="text-right">Subtotal</td>
            </tr>

            @foreach ($order->items as $item)
                <tr class="item">
                    <td>
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
                    <td class="text-center">{{ $item->quantity }}</td>
                    <td class="text-right">{{ number_format($item->price, 2) }}</td>
                    <td class="text-right">{{ number_format($item->price * $item->quantity, 2) }}</td>
                </tr>
            @endforeach

            {{-- Totals --}}
            <tr class="total-row">
                <td colspan="3" class="text-right">Subtotal</td>
                <td class="text-right">{{ number_format($order->items->sum(fn($i) => $i->price * $i->quantity), 2) }}
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Shipping</td>
                <td class="text-right">{{ number_format($order->shipping_price, 2) }}</td>
            </tr>
            <tr class="total-row">
                <td colspan="3" class="text-right">Grand Total</td>
                <td class="text-right">{{ number_format($order->total_amount, 2) }}</td>
            </tr>
        </table>

        {{-- Footer --}}
        <p class="text-center" style="margin-top:30px;">
            Thank you for shopping with us!
        </p>
    </div>
</body>

</html>
