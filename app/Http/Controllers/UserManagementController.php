<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Package;
use App\Models\Vendor;
use App\Models\SubVendor;
use App\Models\Category;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Traits\ImageTrait;
use Illuminate\Support\Str;

class UserManagementController extends Controller
{
    use ImageTrait;

    public function indexUser()
    {
        $users = User::with('role')->get();
        return view('dashboard.admin.user_management.users.index', compact('users'));
    }

    public function createUser()
    {
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.create', compact('roles', 'packages', 'vendors'));
    }

    public function getCategories(Request $request)
    {
        $categories = '';
        if ($request->has('role') && $request->role != null) {
            $categories = Category::where('package_id', $request->package)->get();
        }
        if ($request->has('vendor') && $request->vendor != null) {
            $user = Vendor::find($request->vendor);
            $categories = $user->package->category;
        }
        return response()->json($categories);
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->create($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $user->image = $imageName;
            $user->save();
        }

        return redirect()->route('users.index')
            ->with('success', 'User registered successfully.');
    }

    protected function validator(array $data, $userId = null)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($userId),
            ],
            'phone' => ['required', 'string', 'max:18'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'vendor_id' => 'required_without_all:package_id|nullable|numeric',
            'image' => 'required|image|max:2048',
        ];

        if (!$userId) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        // dd($data);
        // Generate unique slug
        $slug = $this->generateUniqueSlug($data['first_name'] . ' ' . $data['last_name']);

        if ($data['package_id'] == 'section_leader') {
            $data['package_id'] = '123';
            $data['role_id'] = '3';
        }
        else {
            $data['role_id'] = '2';
        }

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'country' => $data['country'],
            'zipcode' => $data['zipcode'],
            'role_id' => $data['role_id'],
            'slug' => $slug,
        ]);

        if ($data['role_id'] == 2) {
            Vendor::create([
                'user_id' => $user->id,
                'package_id' => $data['package_id'],
                'status' => 1,
            ]);
        }

        if ($data['role_id'] == 3) {
            SubVendor::create([
                'user_id' => $user->id,
                'vendor_id' => $data['vendor_id'],
                'ecommerce' => isset($data['ecommerce']) ? $data['ecommerce'] : 0,
                'events' => isset($data['events']) ? $data['events'] : 0,
                'music' => isset($data['music']) ? $data['music'] : 0,
                'appointment' => isset($data['appointment']) ? $data['appointment'] : 0,
                'ad_space' => isset($data['ad_space']) ? $data['ad_space'] : 0,
                'blogging' => isset($data['blogging']) ? $data['blogging'] : 0,
                'status' => 1,
            ]);
        }

        if ($data['role_id'] == 123) {
            Customer::create([
                'user_id' => $user->id,
                'package_id' => $data['package_id'],
                'status' => 1,
            ]);
        }

        return $user;
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.edit', compact('user', 'roles', 'packages', 'vendors'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = $this->validator($request->all(), $id);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user->update($request->all());

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($user->image) {
                $this->deleteImage('images/' . $user->image);
            }
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $user->image = $imageName;
            $user->save();
        }

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function getSingleUser($id)
    {
        $user = User::with('vendor', 'subVendor', 'vendor.package')->find($id);

        return response()->json($user);
    }

    protected function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (User::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }
        return $uniqueSlug;
    }
}
