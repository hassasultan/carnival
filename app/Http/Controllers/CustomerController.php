<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function login()
    {
        return view('ShopFrontend.customer.login');
    }

    public function register()
    {
        return view('ShopFrontend.customer.register');
    }

    public function storeCustomer(Request $request)
    {
        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        // dd($request->toArray(), 'ok');

        $user = $this->create($request->all());

        // Handle image upload
        // if ($request->hasFile('image')) {
        //     $imageName = $this->uploadImage($request->file('image'), 'images');
        //     $user->image = $imageName;
        //     $user->save();
        // }

        return redirect()->route('users.profile')
            ->with('success', 'Registered successfully.');
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
        ];

        if (!$userId) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        $slug = $this->generateUniqueSlug($data['first_name'] . ' ' . $data['last_name']);

        // dd($data,$slug);

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'full_name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 4,
            'slug' => $slug,
        ]);

        Customer::create([
            'user_id' => $user->id,
            'status' => 1,
        ]);

        return $user;
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

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('ShopFrontend.customer.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => [
                'required',
                'string',
                'email',
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->updateUser($request->all());

        return redirect()->route('users.profile')
            ->with('success', 'Profile updated successfully.');
    }

    protected function updateUser(array $data)
    {
        $slug = $this->generateUniqueSlug($data['first_name'] . ' ' . $data['last_name']);

        $user = User::find(Auth::id());
        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'full_name' => $data['first_name'] . ' ' . $data['last_name'],
            // 'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 4,
            'slug' => $slug,
        ]);

        Customer::create([
            'user_id' => $user->id,
            'status' => 1,
        ]);

        return $user;
    }
}
