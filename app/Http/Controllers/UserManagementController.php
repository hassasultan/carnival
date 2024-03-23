<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Package;
use App\Models\Vendor;
use App\Models\Category;

class UserManagementController extends Controller
{
    public function createUser()
    {
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.index', compact('roles', 'packages', 'vendors'));
    }
    
    public function getCategories(Request $request)
    {
        $categories = '';
        if ($request->role == 2) {
            $categories = Category::all(); 
        }
        elseif ($request->role == 3) {
            $categories = Category::where('package_id', $request->package)->get(); 
        }
        return response()->json($categories);
    }
}
