<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderShipping;
use App\Models\OrdersBilling;
use App\Models\Product;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'items.product'])->latest()->paginate(10);
        return view('dashboard.admin.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $cartItems = Cart::with('product')->where('user_id', $user_id)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['error' => 'Cart is empty'], 400);
        }

        $total = 0;
        foreach ($cartItems as $cartItem) {
            $total += $cartItem->product->new_price * $cartItem->quantity;
        }

        $order = Order::create([
            'user_id' => $user_id,
            'order_num' => $this->generateOrderNumber(),
            'shipping_price' => $request->shipping_price,
            'payment_method' => $request->payment_method,
            'total_amount' => $total, // Set the total amount
        ]);
        $billing_data = [
            'order_id' => $order->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'email_address' => $request->email_address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'telephone' => $request->telephone,
            'fax' => $request->fax,
        ];
        $order_billing = OrdersBilling::create($billing_data);
        $shipping_data = [
            'order_id' => $order->id,
            'first_name_1' => $request->first_name_1,
            'last_name_1' => $request->last_name_1,
            'company_name_1' => $request->company_name_1,
            'email_address_1' => $request->email_address_1,
            'address_1' => $request->address_1,
            'city_1' => $request->city_1,
            'state1' => $request->state1,
            'postal_code_1' => $request->postal_code_1,
            'country1' => $request->country1,
            'telephone_1' => $request->telephone_1,
            'fax_1' => $request->fax_1,
        ];
        $order_shipping = OrderShipping::create($shipping_data);
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->new_price,
            ]);
        }

        Cart::where('user_id', $user_id)->delete();

        return response()->json(['message' => 'Order created successfully', 'total' => $total]);
    }

    public function show(Order $order)
    {
        $order->load([
            'user',
            'items.product.category',
            'items.product.subcategory',
            'items.product.brand',
            'items.product.features',
            'items.product.variants',
            'items.product.product_images',
        ]);

        return view('dashboard.admin.orders.show', compact('order'));
    }

    public function generateOrderNumber()
    {
        $timestamp = now()->timestamp;
        $randomString = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
        $orderNumber = 'ORD-' . $timestamp . '-' . $randomString;
        return $orderNumber;
    }
}
