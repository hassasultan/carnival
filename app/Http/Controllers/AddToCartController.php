<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AddToCartController extends Controller
{
    public function addCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if (!Auth::check()) {
            return response()->json(['error' => 'User is not authenticated'], 401);
        }

        $product = Product::findOrFail($request->product_id);
        if (!$product->isAvailable()) {
            return response()->json(['error' => 'Product is not available'], 400);
        }

        $user_id = Auth::id(); // Get the authenticated user's ID

        $cartItem = Cart::with('user','product')->where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
        } else {
            $newCart = Cart::create([
                'user_id' => $user_id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
        $cartItem = Cart::with('user','product')->where('user_id', $user_id)->get();

        return  $cartItem;
    }
    public function checkout()
    {
        $user_id = Auth::id();
        $cartItem = Cart::where('user_id', $user_id)->get();
        return view('ShopFrontend.Checkout',compact('cartItem'));

    }
}
