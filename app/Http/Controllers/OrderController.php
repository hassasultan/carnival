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
    // public function index(Request $request)
    // {
    //     $orders = Order::with("user", "product");
    //     if ($request->has('search') && $request->search != null && $request->search != '') {
    //         $orders = $orders
    //             ->whereHas('product', function ($query) use ($request) {
    //                 $query->where('name', 'like', '%' . $request->search . '%');
    //             })
    //             ->orWhereHas('user', function ($query) use ($request) {
    //                 $query->where('name', 'like', '%' . $request->search . '%');
    //             });
    //     }
    //     $orders = $orders->paginate(10);
    //     if ($request->has("type")) {
    //         return $orders;
    //     }

    //     return view('dashboard.admin.orders.index', compact('orders'));
    // }

    // public function create()
    // {
    //     $products = Product::all();
    //     $users = User::all();
    //     return view('dashboard.admin.orders.create', compact('products', 'users'));
    // }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $user_id = Auth::id();
        $cartItems = Cart::with('product')->where('user_id', $user_id)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['error' => 'Cart is empty'], 400);
        }

        // Calculate total amount
        $total = 0;
        foreach ($cartItems as $cartItem) {
            $total += $cartItem->product->new_price * $cartItem->quantity;
        }

        // Create the order
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
        // Create order items
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->new_price,
            ]);
        }

        // Clear the cart
        Cart::where('user_id', $user_id)->delete();

        return response()->json(['message' => 'Order created successfully', 'total' => $total]);
    }

    public function generateOrderNumber()
    {
        $timestamp = now()->timestamp; // Use Carbon's now() to get current time
        $randomString = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6); 
        $orderNumber = 'ORD-' . $timestamp . '-' . $randomString;
        return $orderNumber;
    }
    // public function edit($id)
    // {
    //     $order = Order::findOrFail($id);
    //     $products = Product::all();
    //     $users = User::all();

    //     return view('dashboard.admin.orders.edit', compact('order', 'products', 'users'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $order = Order::findOrFail($id);

    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'product_id' => 'required|exists:products,id',
    //         'payment_method' => 'required|string',
    //         'payment_status' => 'required|string',
    //         'notes' => 'nullable|string',
    //     ]);

    //     $order->update($request->all());

    //     if ($order) {
    //         $response = [
    //             'success' => true,
    //             'redirect' => route('orders.index'),
    //             'message' => 'Order created successfully'
    //         ];
    //     } else {
    //         $response = [
    //             'success' => false,
    //             'message' => 'Failed to create order'
    //         ];
    //     }

    //     return response()->json($response);
    // }

    // public function destroy($id)
    // {
    //     $order = Order::findOrFail($id);
    //     $order->delete();

    //     return redirect()->route('orders.index')
    //         ->with('success', 'Order deleted successfully.');
    // }
}
