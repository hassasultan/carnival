<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Vendor;
use App\Models\SubVendor;
use App\Models\Customer;
use App\Models\Carnival;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['package_id'] == 'section_leader') {
            $data['package_id'] = '123';
            $data['role_id'] = '3';
        } else {
            $data['role_id'] = '2';
        }
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['nullable', 'string', 'max:11'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'zipcode' => ['nullable', 'string', 'max:255'],
            'package_id' => ['nullable', 'numeric'],
            'vendor_id' => ['nullable', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        if ($data['package_id'] == 'section_leader') {
            $data['package_id'] = '123';
            $data['role_id'] = '3';
        } else {
            $data['role_id'] = '2';
        }

        if (isset($data['logo'])) {
            $imageName = $this->uploadImage($data['logo'], 'images');
            $logo = $imageName;
        }
        else {
            $logo = "";
        }

        $userData = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'full_name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'], // Include role_id here
        ];
    
        $userData['slug'] = $this->generateUniqueSlug($data['first_name'] . ' ' . $data['last_name']);

        if (isset($data['phone'])) {
            $userData['phone'] = $data['phone'];
        }
        if (isset($data['address'])) {
            $userData['address'] = $data['address'];
        }
        if (isset($data['city'])) {
            $userData['city'] = $data['city'];
        }
        if (isset($data['state'])) {
            $userData['state'] = $data['state'];
        }
        if (isset($data['country'])) {
            $userData['country'] = $data['country'];
        }
        if (isset($data['zipcode'])) {
            $userData['zipcode'] = $data['zipcode'];
        }
    
        // dd($userData);

        $user = User::create($userData);

        if ($data['role_id'] == 2) {
            Vendor::create([
                'user_id' => $user->id,
                'package_id' => $data['package_id'],
                'name' => isset($data['shop_name']) ? $data['shop_name'] : null,
                'email' => isset($data['shop_email']) ? $data['shop_email'] : null,
                'address' => isset($data['shop_address']) ? $data['shop_address'] : null,
                'phone' => isset($data['shop_phone']) ? $data['shop_phone'] : null,
                'continent' => isset($data['continent']) ? $data['continent'] : null,
                'insta' => isset($data['shop_insta']) ? $data['shop_insta'] : null,
                'facebook' => isset($data['shop_facebook']) ? $data['shop_facebook'] : null,
                'youtube' => isset($data['shop_youtube']) ? $data['shop_youtube'] : null,
                'twitter' => isset($data['shop_twitter']) ? $data['shop_twitter'] : null,
                'tiktok' => isset($data['shop_tiktok']) ? $data['shop_tiktok'] : null,
                'wa_business_page' => isset($data['shop_wa_business_page']) ? $data['shop_wa_business_page'] : null,
                'linkedin' => isset($data['shop_linkedin']) ? $data['shop_linkedin'] : null,
                'status' => 1,
                'logo' => $logo,
            ]);
        }
    
        if ($data['role_id'] == 3) {
            SubVendor::create([
                'user_id' => $user->id,
                'vendor_id' => $data['vendor_id'],
                'name' => $data['shop_name'],
                'email' => $data['shop_email'],
                'address' => $data['shop_address'],
                'phone' => $data['shop_phone'],
                'continent' => $data['continent'],
                'insta' => isset($data['shop_insta']) ? $data['shop_insta'] : null,
                'facebook' => isset($data['shop_facebook']) ? $data['shop_facebook'] : null,
                'youtube' => isset($data['shop_youtube']) ? $data['shop_youtube'] : null,
                'twitter' => isset($data['shop_twitter']) ? $data['shop_twitter'] : null,
                'tiktok' => isset($data['shop_tiktok']) ? $data['shop_tiktok'] : null,
                'wa_business_page' => isset($data['shop_wa_business_page']) ? $data['shop_wa_business_page'] : null,
                'linkedin' => isset($data['shop_linkedin']) ? $data['shop_linkedin'] : null,
                'ecommerce' => isset($data['ecommerce']) ? $data['ecommerce'] : 0,
                'events' => isset($data['events']) ? $data['events'] : 0,
                'music' => isset($data['music']) ? $data['music'] : 0,
                'appointment' => isset($data['appointment']) ? $data['appointment'] : 0,
                'ad_space' => isset($data['ad_space']) ? $data['ad_space'] : 0,
                'blogging' => isset($data['blogging']) ? $data['blogging'] : 0,
                'status' => 1,
                'logo' => $logo,
            ]);
        }
    
        if ($data['role_id'] == 4) {
            Customer::create([
                'user_id' => $user->id,
                'package_id' => $data['package_id'],
                'status' => 1,
            ]);
        }

        
        if ($data['package_id'] == 6) {
            $carnival = Carnival::where('unique_id', ($data['unique_id']))->first();
            
            if ($carnival) {
                $carnival->head = $user->id;
                $carnival->save();
            } else {
                throw new \Exception('Carnival not found with unique_id: ' . $data['unique_id']);
            }
        }

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
}
