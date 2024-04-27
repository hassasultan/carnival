<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with("user", "product");
        if ($request->has('search') && $request->search != null && $request->search != '') {
            $orders = $orders
            ->whereHas('product', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->orWhereHas('user', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        }
        $orders = $orders->paginate(10);
        if ($request->has("type")) {
            return $orders;
        }

        return view('dashboard.admin.orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $users = User::all();
        return view('dashboard.admin.orders.create', compact('products', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $order = Order::create($request->all());

        if ($order) {
            $response = [
                'success' => true,
                'redirect' => route('orders.index'),
                'message' => 'Order created successfully'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Failed to create order'
            ];
        }
    
        return response()->json($response);
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $products = Product::all();
        $users = User::all();

        return view('dashboard.admin.orders.edit', compact('order', 'products', 'users'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $order->update($request->all());

        if ($order) {
            $response = [
                'success' => true,
                'redirect' => route('orders.index'),
                'message' => 'Order created successfully'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Failed to create order'
            ];
        }
    
        return response()->json($response);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
