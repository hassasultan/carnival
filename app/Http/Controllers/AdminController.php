<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ModelBooking;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.pages.user_management.index');
    }
    
    public function model_bookings()
    {
        $layout = match (Auth::user()->role->name) {
            'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subVendor.layouts.app',
        };

        $bookings = ModelBooking::where('model_id', Auth::id())->get();
        return view('dashboard.modelBookings.index', compact('layout', 'bookings'));
    }
}
