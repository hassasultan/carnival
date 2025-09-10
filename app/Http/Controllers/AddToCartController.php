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
            'product_id' => 'required|integer',
            'quantity'   => 'required|integer|min:1',
            'type'       => 'required|in:product,event,music,costume',
        ]);

        if (!Auth::check()) {
            return response()->json(['error' => 'User is not authenticated'], 401);
        }

        $user_id = Auth::id();

        // Check if cart item exists for same product & type
        $cartItem = Cart::where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->where('type', $request->type)
            ->first();

        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
        } else {
            $cartItem = Cart::create([
                'user_id'    => $user_id,
                'product_id' => $request->product_id,
                'quantity'   => $request->quantity,
                'type'       => $request->type,
            ]);
        }

        // Get all items again for updated cart
        $cartItems = Cart::with(['product', 'event', 'event.tickets', 'music', 'costume'])
            ->where('user_id', $user_id)
            ->get()
            ->map(function ($item) {
                return [
                    'id'       => $item->id,
                    'quantity' => $item->quantity,
                    'details'  => $item->item_details, // unified accessor
                ];
            });

        return response()->json($cartItems);
    }

    // public function addCart(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|exists:products,id',
    //         'quantity' => 'required|integer|min:1',
    //         'type' => 'required',
    //     ]);

    //     if (!Auth::check()) {
    //         return response()->json(['error' => 'User is not authenticated'], 401);
    //     }

    //     $user_id = Auth::id();

    //     $cartItem = Cart::with('user','product', 'event', 'music', 'costume')->where('user_id', $user_id)
    //         ->where('product_id', $request->product_id)
    //         ->first();

    //     if ($cartItem) {
    //         $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
    //     } else {
    //         $newCart = Cart::create([
    //             'user_id' => $user_id,
    //             'product_id' => $request->product_id,
    //             'quantity' => $request->quantity,
    //             'type' => $request->type,
    //         ]);
    //     }
    //     $cartItem = Cart::with('user','product', 'event', 'music')->where('user_id', $user_id)->get();

    //     return  $cartItem;
    // }

    public function checkout()
    {
        $user_id = Auth::id();
        $cartItem = Cart::where('user_id', $user_id)->get();
        return view('ShopFrontend.Checkout', compact('cartItem'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'       => 'required|integer|exists:carts,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::findOrFail($request->id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        // reload cart with relations so frontend stays updated
        $cartItems = Cart::with(['product', 'event', 'event.tickets', 'music', 'costume'])
            ->where('user_id', $cartItem->user_id)
            ->get()
            ->map(function ($item) {
                return [
                    'id'       => $item->id,
                    'quantity' => $item->quantity,
                    'details'  => $item->item_details,
                ];
            });

        return response()->json([
            'success' => true,
            'cart'    => $cartItems,
        ]);
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        // reload updated cart for frontend
        $cartItems = Cart::with(['product', 'event', 'event.tickets', 'music', 'costume'])
            ->where('user_id', auth()->id())
            ->get()
            ->map(function ($item) {
                return [
                    'id'       => $item->id,
                    'quantity' => $item->quantity,
                    'details'  => $item->item_details,
                ];
            });

        return response()->json([
            'success' => true,
            'cart'    => $cartItems,
        ]);
    }
}
