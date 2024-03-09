<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubVendorController extends Controller
{
    
    public function index()
    {
        return view('dashboard.subVendor.pages.user_management.index');
    }
}
