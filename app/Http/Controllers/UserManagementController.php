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
use App\Models\Region;
use App\Models\Blogs;
use App\Models\UserDetailBanner;
use App\Models\UserDetailTabs;
use App\Models\Sponsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Traits\ImageTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
    use ImageTrait;

    public function indexUser(Request $request)
    {
        // $users = User::with('role')->paginate(20);
        $packages = Package::where('status', 1)->get();
        $query = User::with(['role', 'vendor.package', 'subvendor'])->where('role_id', '!=', 1);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('role')) {
            $query->where('role_id', $request->role);
        }

        if ($request->filled('package')) {
            $query->where(function ($q) use ($request) {
                $q->whereHas('vendor', function ($q1) use ($request) {
                    $q1->where('package_id', $request->package);
                })->orWhereHas('subVendor.vendor', function ($q2) use ($request) {
                    $q2->where('package_id', $request->package);
                });
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $users = $query->paginate(10);

        if ($request->ajax()) {
            return view('dashboard.admin.users.partials.user_table', compact('users'))->render();
        }
        return view('dashboard.admin.user_management.users.index', compact('users', 'packages'));
    }

    public function createUser()
    {
        $continents = Region::all();
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.create', compact('roles', 'packages', 'vendors', 'continents'));
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
        // dd($request->toArray());
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $imageName = $this->uploadImage($request->file('logo'), 'images');
            $data['logo'] = $imageName; // Add logo path to data array
        }

        $user = $this->create($data);
        // $user = $this->create($request->all());

        if ($request->hasFile('image')) {
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $user->image = $imageName;
        }
        $user->save();

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
            'package_id' => ['nullable'],
            'age' => ['nullable'],
            'nationality' => ['nullable'],
            'age_range' => ['nullable'],
            'gender' => ['nullable'],
            'height' => ['nullable'],
            'weight' => ['nullable'],
            'bust' => ['nullable'],
            'hips' => ['nullable'],
            'waist' => ['nullable'],
            // 'image' => 'required|image|max:2048',
        ];

        if (!$userId) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        DB::beginTransaction();

        try {
            $slug = $this->generateUniqueSlug($data['first_name'] . ' ' . $data['last_name']);

            if ($data['package_id'] == 'section_leader') {
                $data['package_id'] = '123';
                $data['role_id'] = '3';
            } else {
                $data['role_id'] = '2';
            }

            // if ($data['logo']) {
            //     $imageName = $this->uploadImage($data['logo'], 'images');
            //     $logo = $imageName;
            // }

            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'full_name' => $data['first_name'] . ' ' . $data['last_name'],
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
                'age' => $data['age'] ? $data['age'] : null,
                'nationality' => $data['nationality'] ? $data['nationality'] : null,
                'age_range' => $data['age_range'] ? $data['age_range'] : null,
                'gender' => $data['gender'] ? $data['gender'] : null,
                'height' => $data['height'] ? $data['height'] : null,
                'weight' => $data['weight'] ? $data['weight'] : null,
                'bust' => $data['bust'] ? $data['bust'] : null,
                'hips' => $data['hips'] ? $data['hips'] : null,
                'waist' => $data['waist'] ? $data['waist'] : null,
            ]);

            if (isset($data['banner']) && is_array($data['banner'])) {
                foreach ($data['banner'] as $index => $banner) {
                    $imageName = $this->uploadImage($banner, 'userBanners');
                    UserDetailBanner::create([
                        'user_id' => $user->id,
                        'banner' => 'userBanners/' . $imageName,
                        'title' => $data['banner_title'][$index] ?? null,
                        'subtitle' => $data['banner_subtitle'][$index] ?? null,
                        'description' => $data['banner_description'][$index] ?? null,
                        'button_text' => $data['banner_button'][$index] ?? null,
                    ]);
                }
            }
            if (isset($data['tab_name']) && is_array($data['tab_name'])) {
                foreach ($data['tab_name'] as $index => $tab) {
                    UserDetailTabs::create([
                        'user_id' => $user->id,
                        'name' => $data['tab_name'][$index] ?? null,
                        'description' => $data['tab_description'][$index] ?? null,
                    ]);
                }
            }

            if (isset($data['sponser_logo']) && is_array($data['sponser_logo'])) {
                foreach ($data['sponser_logo'] as $key => $row) {
                    $sponser = new Sponsers;
                    $sponser->user_id = $user->id;
                    $sponser->logo = $this->uploadImage($row, 'sponser_images');
                    if (isset($data['sponser_title'][$key])) {
                        $sponser->title = $data['sponser_title'][$key];
                    }
                    if (isset($data['sponser_description'][$key])) {
                        $sponser->title = $data['sponser_description'][$key];
                    }
                    $sponser->save();
                }
            }
            if ($data['role_id'] == 2) {
                Vendor::create([
                    'user_id' => $user->id,
                    'package_id' => $data['package_id'],
                    'name' => $data['shop_name'],
                    'email' => $data['shop_email'],
                    'address' => $data['shop_address'],
                    'phone' => $data['shop_phone'],
                    'continent' => $data['continent'],
                    'insta' => $data['shop_insta'] ?? null,
                    'facebook' => $data['shop_facebook'] ?? null,
                    'youtube' => $data['shop_youtube'] ?? null,
                    'twitter' => $data['shop_twitter'] ?? null,
                    'tiktok' => $data['shop_tiktok'] ?? null,
                    'wa_business_page' => $data['shop_wa_business_page'] ?? null,
                    'linkedin' => $data['shop_linkedin'] ?? null,
                    'short_description' => $data['short_description'] ?? null,
                    'status' => 1,
                    'logo' => $logo ?? null,
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
                    'insta' => $data['shop_insta'] ?? null,
                    'facebook' => $data['shop_facebook'] ?? null,
                    'youtube' => $data['shop_youtube'] ?? null,
                    'twitter' => $data['shop_twitter'] ?? null,
                    'tiktok' => $data['shop_tiktok'] ?? null,
                    'wa_business_page' => $data['shop_wa_business_page'] ?? null,
                    'linkedin' => $data['shop_linkedin'] ?? null,
                    'ecommerce' => $data['ecommerce'] ?? 0,
                    'events' => $data['events'] ?? 0,
                    'music' => $data['music'] ?? 0,
                    'appointment' => $data['appointment'] ?? 0,
                    'ad_space' => $data['ad_space'] ?? 0,
                    'blogging' => $data['blogging'] ?? 0,
                    'status' => 1,
                    'logo' => $logo ?? null,
                ]);
            }

            if ($data['role_id'] == 4) {
                Customer::create([
                    'user_id' => $user->id,
                    'package_id' => $data['package_id'],
                    'status' => 1,
                ]);
            }

            DB::commit();
            return $user;
        } catch (\Exception $e) {
            // dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()
                ->withErrors($e->getMessage())
                ->withInput();
            // throw new \RuntimeException('Unable to create user at this time.');
        }
    }

    public function edit($id)
    {
        $continents = Region::all();
        $user = User::with('banners')->findOrFail($id);
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.edit', compact('user', 'roles', 'packages', 'vendors', 'continents'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $user = User::findOrFail($id);
        $package_id = '';
        if ($request->package_id == 'section_leader') {
            $package_id = '123';
            $user->role_id = '3';
        } else {
            $user->role_id = '2';
            $package_id = $request->package_id;
        }

        if ($request->hasFile('logo')) {
            $imageName = $this->uploadImage($request->logo, 'images');
            $logo = $imageName;
        }

        if ($user->vendor) {
            $user->vendor->update([
                'ecommerce' => $request->input('ecommerce'),
                'events' => $request->input('events'),
                'music' => $request->input('music'),
                'appointment' => $request->input('appointment'),
                'ad_space' => $request->input('ad_space'),
                'blogging' => $request->input('blogging'),
                // 'continent' => $request->input('continent'),

                'package_id' => $package_id,
                'name' => $request->input('shop_name'),
                'email' => $request->input('shop_email'),
                'address' => $request->input('shop_address'),
                'phone' => $request->input('shop_phone'),
                'continent' => $request->input('continent'),
                'insta' => $request->input('shop_insta') ?? null,
                'facebook' => $request->input('shop_facebook') ?? null,
                'youtube' => $request->input('shop_youtube') ?? null,
                'twitter' => $request->input('shop_twitter') ?? null,
                'tiktok' => $request->input('shop_tiktok') ?? null,
                'wa_business_page' => $request->input('shop_wa_business_page') ?? null,
                'linkedin' => $request->input('shop_linkedin') ?? null,
                'short_description' => $request->input('short_description') ?? null,
                'status' => 1,
                'logo' => $logo ?? null,
            ]);
        }

        if ($user->subVendor) {
            $user->subVendor->update([
                // 'ecommerce' => $request->input('ecommerce'),
                // 'events' => $request->input('events'),
                // 'music' => $request->input('music'),
                // 'appointment' => $request->input('appointment'),
                // 'ad_space' => $request->input('ad_space'),
                // 'blogging' => $request->input('blogging'),
                // 'continent' => $request->input('continent'),

                'vendor_id' => $request->input('vendor_id'),
                'name' => $request->input('shop_name'),
                'email' => $request->input('shop_email'),
                'address' => $request->input('shop_address'),
                'phone' => $request->input('shop_phone'),
                'continent' => $request->input('continent'),
                'insta' => $request->input('shop_insta') ?? null,
                'facebook' => $request->input('shop_facebook') ?? null,
                'youtube' => $request->input('shop_youtube') ?? null,
                'twitter' => $request->input('shop_twitter') ?? null,
                'tiktok' => $request->input('shop_tiktok') ?? null,
                'wa_business_page' => $request->input('shop_wa_business_page') ?? null,
                'linkedin' => $request->input('shop_linkedin') ?? null,
                'ecommerce' => $request->input('ecommerce') ?? 0,
                'events' => $request->input('events') ?? 0,
                'music' => $request->input('music') ?? 0,
                'appointment' => $request->input('appointment') ?? 0,
                'ad_space' => $request->input('ad_space') ?? 0,
                'blogging' => $request->input('blogging') ?? 0,
                'status' => 1,
                'logo' => $logo ?? null,
            ]);
        }

        $validator = $this->validator($request->all(), $id);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user->update($request->all());

        if ($request->hasFile('image')) {
            if ($user->image) {
                $this->deleteImage('images/' . $user->image);
            }
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $user->image = $imageName;
            $user->save();
        }

        if ($request->hasFile('banner')) {

            foreach ($request->file('banner') as $index => $banner) {
                $imageName = $this->uploadImage($banner, 'userBanners');

                UserDetailBanner::create([
                    'user_id' => $user->id,
                    'banner' => 'userBanners/' . $imageName,
                    'title' => $request->input('banner_title')[$index] ?? null,
                    'subtitle' => $request->input('banner_subtitle')[$index] ?? null,
                    'description' => $request->input('banner_description')[$index] ?? null,
                    'button_text' => $request->input('banner_button')[$index] ?? null,
                ]);
            }
        }

        if (
            isset($request->tab_name) && is_array($request->tab_name) &&
            isset($request->tab_description) && is_array($request->tab_description)
        ) {
            UserDetailTabs::where('user_id', $user->id)->delete();
            foreach ($request->tab_name as $index => $tab) {
                UserDetailTabs::create([
                    'user_id' => $user->id,
                    'name' => $tab,
                    'description' => $request->tab_description[$index] ?? '',
                ]);
            }
        }
        if (isset($request->sponser_id) && is_array($request->sponser_id)) {
            foreach ($request->sponser_id as $key => $row) {
                $sponsers = Sponsers::find($row);
                if (isset($request->update_sponser_title) && is_array($request->update_sponser_title)) {
                    $sponsers->title = $request->update_sponser_title[$key];
                }
                if (isset($request->update_sponser_logo) && is_array($request->update_sponser_logo)) {
                    $sponsers->logo = $this->uploadImage($request->update_sponser_logo[$key], 'sponser_images');
                }
                if (isset($request->update_sponser_description) && is_array($request->update_sponser_description)) {
                    $sponsers->title = $request->update_sponser_description[$key];
                }
                $sponsers->save();
            }
        }
        if (isset($request->sponser_logo) && is_array($request->sponser_logo)) {
            foreach ($request->sponser_logo as $key => $row) {
                $sponser = new Sponsers;
                $sponser->user_id = $user->id;
                $sponser->logo = $this->uploadImage($row, 'sponser_images');
                if (isset($request->sponser_title[$key])) {
                    $sponser->title = $request->sponser_title[$key];
                }
                if (isset($request->sponser_description[$key])) {
                    $sponser->title = $request->sponser_description[$key];
                }
                $sponser->save();
            }
        }

        return redirect()->back()
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

    public function delete(Request $request)
    {
        $banner = UserDetailBanner::find($request->id);

        if ($banner) {
            if (file_exists(public_path($banner->banner))) {
                unlink(public_path($banner->banner));
            }

            $banner->delete();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Banner not found']);
    }
}
