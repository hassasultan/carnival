<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Variant;
use App\Models\ProductVariantImage;
use App\Models\ProductVariant;
use App\Models\Vendor;
use App\Models\SubVendor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;
use DB;


class FrontendConroller extends Controller
{
    public function get_product(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(18);
        return $products;
    }
    public function product_detail($slug)
    {
        $product = Product::with('variants', 'product_varient')->where('slug', $slug)->firstOrFail();
        $related = Product::where('category_id', $product->category_id)->where('user_id', $product->user_id)->where('id','!=', $product->id)->orderBy('id', 'DESC')->get();
        $same_cat = Product::where('category_id', $product->category_id)->where('id','!=', $product->id)->orderBy('id', 'DESC')->take(9)->get();
        return view('ShopFrontend.product-detail', compact('product', 'related', 'same_cat'));
    }
    public function get_vendors(Request $request)
    {
        $vendors = Vendor::with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name', 'slug','image');
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
        return view('ShopFrontend.subvendor');
    }
    public function vendor_detail($slug)
    {
        $user = User::whereSlug($slug)->first();
        $vendor = Vendor::with('products', 'products.category')->where('user_id', $user->id)->first();
        $categories = $vendor->products->pluck('category')->unique('id');
        // dd($categories->toArray());
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
            // $products = $products;
        }
        if ($request->has('attribute') && $request->attribute == 'onsale') {
            $products = $products->where('sale', true);
        }
        if ($request->has('attribute') && $request->attribute == 'new') {
            // $products = $products->where('sale',true);
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

        // dd($subvendor->toArray());

        return view('ShopFrontend.subvendor-detail', compact('subvendor', 'categories'));
    }
}
