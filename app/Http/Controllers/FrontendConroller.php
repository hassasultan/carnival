<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonials;
use App\Models\Blogs;
use App\Models\SiteGallery;
use App\Models\Investor;
use App\Models\OurService;
use App\Models\Region;
use App\Models\Vendor;
use App\Models\SubVendor;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;
use DB;


class FrontendConroller extends Controller
{
    public function home()
    {
        $events = Event::with('images','tickets','country_tabs')->whereHas('country_tabs')->orderBy('id','desc')->get()->take('5');
        // $events = Event::with('images','tickets')->orderBy('id','desc')->get()->take('5');
        $regions = Region::with('countries')->get();
        $services = OurService::get()->take('4');
        $siteGallery = SiteGallery::get();
        $products = Product::with('brand')->get();
        $investors = Investor::all();
        $testimonials = Testimonials::all();
        $blogs = Blogs::with('user')->get()->take('3');
        // dd($events->toArray());
        return view('front.home',compact('events', 'regions', 'services', 'siteGallery', 'products', 'investors', 'blogs', 'testimonials'));
    }
    public function event_listing()
    {
        return view('front.events');
    }
    public function tour_listing()
    {
        return view('front.tours');
    }
    public function get_product(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(18);
        return $products;
    }
    public function product_detail($slug)
    {
        $product = Product::with('variants', 'product_variant')->where('slug', $slug)->firstOrFail();
        $related = Product::where('category_id', $product->category_id)->where('user_id', $product->user_id)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->get();
        $same_cat = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->take(9)->get();
        return view('ShopFrontend.product-detail', compact('product', 'related', 'same_cat'));
    }
    public function get_vendors(Request $request)
    {
        $vendors = Vendor::with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name', 'slug', 'image');
            },
            'user.products' => function ($query) {
                $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
                    ->groupBy('user_id');
            }
        ])
            ->where('package_id', 8)
            ->orderBy('id', 'DESC')
            ->paginate(18);
        return $vendors;
    }
    public function product_listing()
    {
        return view('ShopFrontend.product-listing');
    }
    public function vendor_listing()
    {
        return view('ShopFrontend.vendors');
    }
    public function sub_vendor_listing()
    {
        return view('ShopFrontend.subVendor');
    }
    public function vendor_detail($slug)
    {
        $user = User::whereSlug($slug)->first();
        $vendor = Vendor::with('products', 'products.category')->where('user_id', $user->id)->first();
        $categories = $vendor->products->pluck('category')->unique('id');
        return view('ShopFrontend.vendor-detail', compact('vendor', 'categories'));
    }
    public function get_vendor_products($slug, Request $request)
    {
        $products = Product::where('user_id', $slug);
        if ($request->has('cat') && $request->cat != 0) {
            $products = $products->where('category_id', $request->cat);
        }
        if ($request->has('subcat') && $request->subcat != 0) {
            $products = $products->where('subcategory_id', $request->subcat);
        }
        if ($request->has('attribute') && $request->attribute == 'bestSale') {
        }
        if ($request->has('attribute') && $request->attribute == 'onsale') {
            $products = $products->where('sale', true);
        }
        if ($request->has('attribute') && $request->attribute == 'new') {
        }
        $products = $products->orderBy('id', 'DESC')->take(5)->get();

        return $products;
    }
    public function get_subVendors(Request $request)
    {
        $vendors = SubVendor::with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name', 'slug');
            },
            'vendor' => function ($query) {
                $query->where('package_id', 8);
            },
            'user.products' => function ($query) {
                $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
                    ->groupBy('user_id');
            }
        ])
            ->orderBy('id', 'DESC')
            ->paginate(18);

        return $vendors;
    }
    public function sub_vendor_detail($slug)
    {
        $user = User::whereSlug($slug)->first();
        $subvendor = SubVendor::with('products', 'products.category')->where('user_id', $user->id)->first();
        $categories = $subvendor->products->pluck('category')->unique('id');

        return view('ShopFrontend.subvendor-detail', compact('subvendor', 'categories'));
    }

    public function eventViewMore($slug)
    {
        $event = Event::with('country_tabs')->find($slug);
        // dd($event->toArray());
        return view('front.view_more', compact('event'));
    }
}
