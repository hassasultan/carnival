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
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Costume;
use App\Models\Event;
use App\Models\Appointment;
use App\Models\CostumeVariantImage;
use App\Models\ProductVariantImage;
use App\Models\GalleryAlbum;
use App\Models\SiteGallery;
use App\Models\Music;
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

        if ($request->hasFile('image')) {
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $data['image'] = $imageName;
        }

        $user = $this->create($data);

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
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'zipcode' => ['nullable', 'string', 'max:255'],
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
            'short_description' => ['nullable', 'string', 'max:500'],
            'continent' => ['nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'url', 'max:255'],
            'twitter' => ['nullable', 'url', 'max:255'],
            'instagram' => ['nullable', 'url', 'max:255'],
            'linkedin' => ['nullable', 'url', 'max:255'],
            'youtube' => ['nullable', 'url', 'max:255'],
            'website' => ['nullable', 'url', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'tabs.*.title' => ['nullable', 'string', 'max:255'],
            'tabs.*.content' => ['nullable', 'string'],
            'sponsors.*.name' => ['nullable', 'string', 'max:255'],
            'sponsors.*.website' => ['nullable', 'url', 'max:255'],
            'sponsor_logos.*' => ['required_with:sponsors.*.name', 'image', 'max:2048'],
            'banners.*.title' => ['nullable', 'string', 'max:255'],
            'banners.*.link_url' => ['nullable', 'url', 'max:255'],
            'banner_files.*' => ['required_with:banners.*.title', 'file', 'max:10240'], // 10MB for videos
        ];

        if (!$userId) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
            $rules['address'] = ['required', 'string', 'max:255'];
            $rules['city'] = ['required', 'string', 'max:255'];
            $rules['state'] = ['required', 'string', 'max:255'];
            $rules['country'] = ['required', 'string', 'max:255'];
            $rules['zipcode'] = ['required', 'string', 'max:255'];
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
                'age' => $data['age'] ?? null,
                'nationality' => $data['nationality'] ?? null,
                'age_range' => $data['age_range'] ?? null,
                'gender' => $data['gender'] ?? null,
                'height' => $data['height'] ?? null,
                'weight' => $data['weight'] ?? null,
                'bust' => $data['bust'] ?? null,
                'hips' => $data['hips'] ?? null,
                'waist' => $data['waist'] ?? null,
                'short_description' => $data['short_description'] ?? null,
                'continent' => $data['continent'] ?? null,
                'facebook' => $data['facebook'] ?? null,
                'twitter' => $data['twitter'] ?? null,
                'instagram' => $data['instagram'] ?? null,
                'linkedin' => $data['linkedin'] ?? null,
                'youtube' => $data['youtube'] ?? null,
                'website' => $data['website'] ?? null,
                'logo' => $data['logo'] ?? null,
                'image' => $data['image'] ?? null,
            ]);

            // Handle tabs
            if (isset($data['tabs']) && is_array($data['tabs'])) {
                foreach ($data['tabs'] as $tab) {
                    if (!empty($tab['title']) && !empty($tab['content'])) {
                        UserDetailTabs::create([
                        'user_id' => $user->id,
                            'name' => $tab['title'],
                            'description' => $tab['content'],
                        ]);
                    }
                }
            }

            // Handle sponsors
            if (isset($data['sponsors']) && is_array($data['sponsors'])) {
                foreach ($data['sponsors'] as $index => $sponsor) {
                    if (!empty($sponsor['name'])) {
                        // Only create sponsor if logo is provided
                        if (isset($data['sponsor_logos'][$index]) && $data['sponsor_logos'][$index]) {
                            $logoName = $this->uploadImage($data['sponsor_logos'][$index], 'sponser_images');
                            
                            $sponsorData = [
                        'user_id' => $user->id,
                                'title' => $sponsor['name'],
                                'description' => $sponsor['website'] ?? '',
                                'logo' => 'sponser_images/' . $logoName,
                            ];
                            
                            Sponsers::create($sponsorData);
                        }
                    }
                }
            }

            // Handle banners
            if (isset($data['banners']) && is_array($data['banners'])) {
                foreach ($data['banners'] as $index => $banner) {
                    if (!empty($banner['title'])) {
                        // Only create banner if file is provided
                        if (isset($data['banner_files'][$index]) && $data['banner_files'][$index]) {
                            $file = $data['banner_files'][$index];
                            $fileName = $this->uploadImage($file, 'userBanners');
                            
                            $bannerData = [
                                'user_id' => $user->id,
                                'title' => $banner['title'],
                                'subtitle' => $banner['link_url'] ?? '',
                                'description' => $banner['description'] ?? '',
                                'button_text' => $banner['button_text'] ?? '',
                                'banner' => 'userBanners/' . $fileName,
                            ];
                            
                            UserDetailBanner::create($bannerData);
                        }
                    }
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
                    'logo' => $data['logo'] ?? null,
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
                    'logo' => $data['logo'] ?? null,
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
        $user = User::with(['banners', 'tabs', 'sponsors', 'vendor.package', 'subVendor.vendor.package'])->findOrFail($id);
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('dashboard.admin.user_management.users.edit', compact('user', 'roles', 'packages', 'vendors', 'continents'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        // Validate the request
        $validator = $this->validator($request->all(), $id);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();
        
        try {
            // Handle package and role logic
        $package_id = '';
        if ($request->package_id == 'section_leader') {
            $package_id = '123';
            $user->role_id = '3';
        } else {
            $user->role_id = '2';
            $package_id = $request->package_id;
        }

            // Handle logo upload
            $logo = null;
        if ($request->hasFile('logo')) {
            $imageName = $this->uploadImage($request->logo, 'images');
            $logo = $imageName;
        }

            // Update vendor data
        if ($user->vendor) {
            $user->vendor->update([
                    'ecommerce' => $request->input('ecommerce', 0),
                    'events' => $request->input('events', 0),
                    'music' => $request->input('music', 0),
                    'appointment' => $request->input('appointment', 0),
                    'ad_space' => $request->input('ad_space', 0),
                    'blogging' => $request->input('blogging', 0),
                'package_id' => $package_id,
                'name' => $request->input('shop_name'),
                'email' => $request->input('shop_email'),
                'address' => $request->input('shop_address'),
                'phone' => $request->input('shop_phone'),
                'continent' => $request->input('continent'),
                    'insta' => $request->input('shop_insta'),
                    'facebook' => $request->input('shop_facebook'),
                    'youtube' => $request->input('shop_youtube'),
                    'twitter' => $request->input('shop_twitter'),
                    'tiktok' => $request->input('shop_tiktok'),
                    'wa_business_page' => $request->input('shop_wa_business_page'),
                    'linkedin' => $request->input('shop_linkedin'),
                    'short_description' => $request->input('short_description'),
                'status' => 1,
                    'logo' => $logo ?? $user->vendor->logo,
            ]);
        }

            // Update sub-vendor data
        if ($user->subVendor) {
            $user->subVendor->update([
                'vendor_id' => $request->input('vendor_id'),
                'name' => $request->input('shop_name'),
                'email' => $request->input('shop_email'),
                'address' => $request->input('shop_address'),
                'phone' => $request->input('shop_phone'),
                'continent' => $request->input('continent'),
                    'insta' => $request->input('shop_insta'),
                    'facebook' => $request->input('shop_facebook'),
                    'youtube' => $request->input('shop_youtube'),
                    'twitter' => $request->input('shop_twitter'),
                    'tiktok' => $request->input('shop_tiktok'),
                    'wa_business_page' => $request->input('shop_wa_business_page'),
                    'linkedin' => $request->input('shop_linkedin'),
                    'ecommerce' => $request->input('ecommerce', 0),
                    'events' => $request->input('events', 0),
                    'music' => $request->input('music', 0),
                    'appointment' => $request->input('appointment', 0),
                    'ad_space' => $request->input('ad_space', 0),
                    'blogging' => $request->input('blogging', 0),
                'status' => 1,
                    'logo' => $logo ?? $user->subVendor->logo,
                ]);
            }

            // Update user basic information
            $userData = $request->only([
                'first_name', 'last_name', 'email', 'phone', 'address', 'city', 
                'state', 'country', 'zipcode', 'age_range', 'status',
                'short_description', 'continent', 'facebook', 'twitter', 
                'instagram', 'linkedin', 'youtube', 'website'
            ]);
            
            $user->update($userData);

            // Handle profile image upload
        if ($request->hasFile('image')) {
                if ($user->image && file_exists(public_path($user->image))) {
                $this->deleteImage('images/' . $user->image);
            }
            $imageName = $this->uploadImage($request->file('image'), 'images');
            $user->image = $imageName;
            $user->save();
        }

            // Handle tabs
            if (isset($request->tabs) && is_array($request->tabs)) {
                // Delete existing tabs
                UserDetailTabs::where('user_id', $user->id)->delete();
                
                // Create new tabs
                foreach ($request->tabs as $tab) {
                    if (!empty($tab['title']) && !empty($tab['content'])) {
                        UserDetailTabs::create([
                    'user_id' => $user->id,
                            'name' => $tab['title'],
                            'description' => $tab['content'],
                ]);
            }
        }
            }

            // Handle sponsors
            if (isset($request->sponsors) && is_array($request->sponsors)) {
                // Delete existing sponsors
                Sponsers::where('user_id', $user->id)->delete();
                
                // Create new sponsors
                foreach ($request->sponsors as $index => $sponsor) {
                    if (!empty($sponsor['name'])) {
                        // Only create sponsor if logo is provided
                        if (isset($request->file('sponsor_logos')[$index])) {
                            $logoName = $this->uploadImage($request->file('sponsor_logos')[$index], 'sponser_images');
                            
                            $sponsorData = [
                                'user_id' => $user->id,
                                'title' => $sponsor['name'],
                                'description' => $sponsor['website'] ?? '',
                                'logo' => 'sponser_images/' . $logoName,
                            ];
                            
                            Sponsers::create($sponsorData);
                        }
                    }
                }
            }

            // Handle banners
            if (isset($request->banners) && is_array($request->banners)) {
                // Delete existing banners
                UserDetailBanner::where('user_id', $user->id)->delete();
                
                // Create new banners
                foreach ($request->banners as $index => $banner) {
                    if (!empty($banner['title'])) {
                        // Only create banner if file is provided
                        if (isset($request->file('banner_files')[$index]) && $request->file('banner_files')[$index]) {
                            $file = $request->file('banner_files')[$index];
                            $fileName = $this->uploadImage($file, 'userBanners');
                            
                            $bannerData = [
                                'user_id' => $user->id,
                                'title' => $banner['title'],
                                'subtitle' => $banner['link_url'] ?? '',
                                'description' => $banner['description'] ?? '',
                                'button_text' => $banner['button_text'] ?? '',
                                'banner' => 'userBanners/' . $fileName,
                            ];
                            
                            UserDetailBanner::create($bannerData);
                        }
                    }
                }
            }

            DB::commit();

        return redirect()->back()
            ->with('success', 'User updated successfully.');
                
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('error', 'Error updating user: ' . $e->getMessage())
                ->withInput();
        }
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

    public function getDeletionDetails($id)
    {
        $user = User::with(['role', 'vendor', 'subVendor', 'banners', 'tabs', 'sponsors'])->findOrFail($id);
        
        // Count related data
        $banners_count = $user->banners()->count();
        $tabs_count = $user->tabs()->count();
        $sponsors_count = $user->sponsors()->count();
        $vendor_count = ($user->vendor || $user->subVendor) ? 1 : 0;
        
        // Count products, costumes, events, blogs, appointments through user_id
        $products_count = \App\Models\Product::where('user_id', $user->id)->count();
        $costumes_count = \App\Models\Costume::where('user_id', $user->id)->count();
        $events_count = \App\Models\Event::where('user_id', $user->id)->count();
        $blogs_count = \App\Models\Blogs::where('user_id', $user->id)->count();
        $appointments_count = \App\Models\Appointment::where('user_id', $user->id)->count();
        
        // Count gallery and music files
        $gallery_albums_count = \App\Models\GalleryAlbum::where('user_id', $user->id)->count();
        $site_gallery_count = \App\Models\SiteGallery::where('user_id', $user->id)->count();
        $music_count = \App\Models\Music::where('user_id', $user->id)->count();
        
        // Count cart items and orders
        $cart_items_count = Cart::where('user_id', $user->id)->count();
        $orders_count = Order::where('user_id', $user->id)->count();
        
        $total_items = 1 + $banners_count + $tabs_count + $sponsors_count + $vendor_count + 
                      $products_count + $costumes_count + $events_count + $blogs_count + 
                      $appointments_count + $gallery_albums_count + $site_gallery_count + 
                      $music_count + $cart_items_count + $orders_count;
        
        return response()->json([
            'user' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'role_name' => $user->role ? $user->role->name : 'Unknown',
                'created_at' => $user->created_at->format('M d, Y')
            ],
            'banners_count' => $banners_count,
            'tabs_count' => $tabs_count,
            'sponsors_count' => $sponsors_count,
            'vendor_count' => $vendor_count,
            'products_count' => $products_count,
            'costumes_count' => $costumes_count,
            'events_count' => $events_count,
            'blogs_count' => $blogs_count,
            'appointments_count' => $appointments_count,
            'gallery_albums_count' => $gallery_albums_count,
            'site_gallery_count' => $site_gallery_count,
            'music_count' => $music_count,
            'cart_items_count' => $cart_items_count,
            'orders_count' => $orders_count,
            'total_items' => $total_items
        ]);
    }

    public function destroyUser($id)
    {
        DB::beginTransaction();
        
        try {
            $user = User::findOrFail($id);
            
            // Delete user banners and their files
            $banners = $user->banners;
            foreach ($banners as $banner) {
                if (file_exists(public_path($banner->banner))) {
                    unlink(public_path($banner->banner));
                }
            }
            $user->banners()->delete();
            
            // Delete user tabs
            $user->tabs()->delete();
            
            // Delete user sponsors and their files
            $sponsors = $user->sponsors;
            foreach ($sponsors as $sponsor) {
                if (file_exists(public_path('sponser_images/' . $sponsor->logo))) {
                    unlink(public_path('sponser_images/' . $sponsor->logo));
                }
            }
            $user->sponsors()->delete();
            
            // Delete vendor/subvendor related data
            if ($user->vendor) {
                // Delete products and their files
                $products = \App\Models\Product::where('user_id', $user->id)->get();
                foreach ($products as $product) {
                    // Delete product images
                    $productImages = $product->product_images;
                    foreach ($productImages as $image) {
                        if (file_exists(public_path($image->image))) {
                            unlink(public_path($image->image));
                        }
                    }
                    $product->product_images()->delete();
                    
                    // Delete product variants and their images
                    $variants = $product->variants;
                    foreach ($variants as $variant) {
                        $variantImages = \App\Models\ProductVariantImage::where('product_variant_id', $variant->id)->get();
                        foreach ($variantImages as $image) {
                            if (file_exists(public_path($image->image))) {
                                unlink(public_path($image->image));
                            }
                        }
                        $variantImages->each->delete();
                    }
                    $product->variants()->detach();
                    
                    // Delete product media
                    $productMedia = $product->media;
                    foreach ($productMedia as $media) {
                        if (file_exists(public_path($media->file))) {
                            unlink(public_path($media->file));
                        }
                    }
                    $product->media()->delete();
                }
                \App\Models\Product::where('user_id', $user->id)->delete();
                
                // Delete costumes and their files
                $costumes = \App\Models\Costume::where('user_id', $user->id)->get();
                foreach ($costumes as $costume) {
                    // Delete costume variant images
                    $costumeVariants = $costume->variants;
                    foreach ($costumeVariants as $variant) {
                        $variantImages = \App\Models\CostumeVariantImage::where('costume_variant_id', $variant->id)->get();
                        foreach ($variantImages as $image) {
                            if (file_exists(public_path($image->image))) {
                                unlink(public_path($image->image));
                            }
                        }
                        $variantImages->each->delete();
                    }
                    $costume->variants()->detach();
                }
                \App\Models\Costume::where('user_id', $user->id)->delete();
                
                // Delete events and their files
                $events = \App\Models\Event::where('user_id', $user->id)->get();
                foreach ($events as $event) {
                    // Delete event banner
                    if ($event->banner && file_exists(public_path($event->banner))) {
                        unlink(public_path($event->banner));
                    }
                    
                    // Delete promotional video
                    if ($event->promotional_Video && file_exists(public_path($event->promotional_Video))) {
                        unlink(public_path($event->promotional_Video));
                    }
                    
                    // Delete promotional image
                    if ($event->promotional_image && file_exists(public_path($event->promotional_image))) {
                        unlink(public_path($event->promotional_image));
                    }
                    
                    // Delete additional images (if stored as JSON array)
                    if ($event->additional_images) {
                        $additionalImages = json_decode($event->additional_images, true);
                        if (is_array($additionalImages)) {
                            foreach ($additionalImages as $image) {
                                if (file_exists(public_path($image))) {
                                    unlink(public_path($image));
                                }
                            }
                        }
                    }
                    
                    // Delete event images through relationship
                    $eventImages = $event->images;
                    foreach ($eventImages as $image) {
                        if (file_exists(public_path($image->image))) {
                            unlink(public_path($image->image));
                        }
                    }
                    $event->images()->delete();
                }
                \App\Models\Event::where('user_id', $user->id)->delete();
                
                // Delete blogs and their images
                $blogs = \App\Models\Blogs::where('user_id', $user->id)->get();
                foreach ($blogs as $blog) {
                    if ($blog->image && file_exists(public_path($blog->image))) {
                        unlink(public_path($blog->image));
                    }
                }
                \App\Models\Blogs::where('user_id', $user->id)->delete();
                
                // Delete appointments
                \App\Models\Appointment::where('user_id', $user->id)->delete();
                
                // Delete vendor record
                $user->vendor()->delete();
            }
            
            if ($user->subVendor) {
                // Delete products and their files (same as vendor)
                $products = \App\Models\Product::where('user_id', $user->id)->get();
                foreach ($products as $product) {
                    $productImages = $product->product_images;
                    foreach ($productImages as $image) {
                        if (file_exists(public_path($image->image))) {
                            unlink(public_path($image->image));
                        }
                    }
                    $product->product_images()->delete();
                    
                    $variants = $product->variants;
                    foreach ($variants as $variant) {
                        $variantImages = \App\Models\ProductVariantImage::where('product_variant_id', $variant->id)->get();
                        foreach ($variantImages as $image) {
                            if (file_exists(public_path($image->image))) {
                                unlink(public_path($image->image));
                            }
                        }
                        $variantImages->each->delete();
                    }
                    $product->variants()->detach();
                    
                    $productMedia = $product->media;
                    foreach ($productMedia as $media) {
                        if (file_exists(public_path($media->file))) {
                            unlink(public_path($media->file));
                        }
                    }
                    $product->media()->delete();
                }
                \App\Models\Product::where('user_id', $user->id)->delete();
                
                // Delete costumes and their files
                $costumes = \App\Models\Costume::where('user_id', $user->id)->get();
                foreach ($costumes as $costume) {
                    // Delete costume variant images
                    $costumeVariants = $costume->variants;
                    foreach ($costumeVariants as $variant) {
                        $variantImages = \App\Models\CostumeVariantImage::where('costume_variant_id', $variant->id)->get();
                        foreach ($variantImages as $image) {
                            if (file_exists(public_path($image->image))) {
                                unlink(public_path($image->image));
                            }
                        }
                        $variantImages->each->delete();
                    }
                    $costume->variants()->detach();
                }
                \App\Models\Costume::where('user_id', $user->id)->delete();
                
                // Delete events and their files
                $events = \App\Models\Event::where('user_id', $user->id)->get();
                foreach ($events as $event) {
                    // Delete event banner
                    if ($event->banner && file_exists(public_path($event->banner))) {
                        unlink(public_path($event->banner));
                    }
                    
                    // Delete promotional video
                    if ($event->promotional_Video && file_exists(public_path($event->promotional_Video))) {
                        unlink(public_path($event->promotional_Video));
                    }
                    
                    // Delete promotional image
                    if ($event->promotional_image && file_exists(public_path($event->promotional_image))) {
                        unlink(public_path($event->promotional_image));
                    }
                    
                    // Delete additional images (if stored as JSON array)
                    if ($event->additional_images) {
                        $additionalImages = json_decode($event->additional_images, true);
                        if (is_array($additionalImages)) {
                            foreach ($additionalImages as $image) {
                                if (file_exists(public_path($image))) {
                                    unlink(public_path($image));
                                }
                            }
                        }
                    }
                    
                    // Delete event images through relationship
                    $eventImages = $event->images;
                    foreach ($eventImages as $image) {
                        if (file_exists(public_path($image->image))) {
                            unlink(public_path($image->image));
                        }
                    }
                    $event->images()->delete();
                }
                \App\Models\Event::where('user_id', $user->id)->delete();
                
                // Delete blogs and their images
                $blogs = \App\Models\Blogs::where('user_id', $user->id)->get();
                foreach ($blogs as $blog) {
                    if ($blog->image && file_exists(public_path($blog->image))) {
                        unlink(public_path($blog->image));
                    }
                }
                \App\Models\Blogs::where('user_id', $user->id)->delete();
                
                // Delete appointments
                \App\Models\Appointment::where('user_id', $user->id)->delete();
                
                // Delete subvendor record
                $user->subVendor()->delete();
            }
            
            // Delete cart items
            Cart::where('user_id', $user->id)->delete();
            
            // Delete orders
            Order::where('user_id', $user->id)->delete();
            
            // Delete gallery albums and their images
            $galleryAlbums = \App\Models\GalleryAlbum::where('user_id', $user->id)->get();
            foreach ($galleryAlbums as $album) {
                $albumImages = $album->images;
                foreach ($albumImages as $image) {
                    if ($image->image && file_exists(public_path($image->image))) {
                        unlink(public_path($image->image));
                    }
                }
                $album->images()->delete();
            }
            \App\Models\GalleryAlbum::where('user_id', $user->id)->delete();
            
            // Delete site gallery images
            $siteGalleryImages = \App\Models\SiteGallery::where('user_id', $user->id)->get();
            foreach ($siteGalleryImages as $image) {
                if ($image->image && file_exists(public_path($image->image))) {
                    unlink(public_path($image->image));
                }
            }
            \App\Models\SiteGallery::where('user_id', $user->id)->delete();
            
            // Delete music files and their images
            $musics = \App\Models\Music::where('user_id', $user->id)->get();
            foreach ($musics as $music) {
                // Delete music file
                if ($music->music && file_exists(public_path($music->music))) {
                    unlink(public_path($music->music));
                }
                
                // Delete cover image
                if ($music->cover_image && file_exists(public_path($music->cover_image))) {
                    unlink(public_path($music->cover_image));
                }
                
                // Delete images array (if stored as JSON)
                if ($music->images && is_array($music->images)) {
                    foreach ($music->images as $image) {
                        if (file_exists(public_path($image))) {
                            unlink(public_path($image));
                        }
                    }
                }
                
                // Delete music images through relationship
                $musicImages = $music->imagesRelation;
                foreach ($musicImages as $image) {
                    if (file_exists(public_path($image->image))) {
                        unlink(public_path($image->image));
                    }
                }
                $music->imagesRelation()->delete();
            }
            \App\Models\Music::where('user_id', $user->id)->delete();
            
            // Delete user profile image
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
            
            // Delete user logo
            if ($user->logo && file_exists(public_path($user->logo))) {
                unlink(public_path($user->logo));
            }
            
            // Finally delete the user
            $user->delete();
            
            DB::commit();
            
            return response()->json(['success' => true, 'message' => 'User and all related data deleted successfully']);
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Failed to delete user: ' . $e->getMessage()], 500);
        }
    }
}
