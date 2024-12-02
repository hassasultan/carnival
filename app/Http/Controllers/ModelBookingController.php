<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelBooking;
use App\Models\Model;

class ModelBookingController extends Controller
{
    public function create($slug)
    {
        $user = User::with('vendor', 'subVendor', 'products')->whereSlug($slug)->first();
        $model_id = $user->id;
        return view('ShopFrontend.modelBoking', compact('model_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'model_id' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'message' => 'nullable|string',
        ]);
    
        ModelBooking::create([
            'subject' => $request->subject,
            'email' => $request->email,
            'model_id' => $request->model_id,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => 'pending',
        ]);
    
        return response()->json(['message' => 'Message sent successfully!'], 200);
    }
}
