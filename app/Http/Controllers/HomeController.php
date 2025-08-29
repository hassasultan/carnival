<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('oks');
        $user = Auth::user();

        // If user has role-based methods:
        if ($user->isAdmin() || $user->isVendor() || $user->isSubVendor()) {
            return redirect()->route('dashboard');
        }

        if ($user->customer()) {
            return redirect()->route('users.profile');
        }

        return redirect()->route('unauthorized');
        // if (Auth::user()->isAdmin()) {
        //     return redirect()->route('admin');
        // } elseif (Auth::user()->isVendor()) {
        //     return redirect()->route('vendor');
        // } elseif (Auth::user()->isSubVendor()) {
        //     return redirect()->route('subVendor');
        // } elseif (Auth::user()->customer()) {
        //     // dd('ok');
        //     return redirect()->route('users.profile');
        // } else {
        //     return redirect()->route('unauthorized');
        // }

    }
}
