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
