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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;
use DB;


class FrontendConroller extends Controller
{
    //
    public function get_product(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(18);
        return $products;
    }
    public function get_vendors(Request $request)
    {
        $vendors = Vendor::with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name');
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
    public function vendor_detail($slug)
    {
        $vendor = Vendor::find($slug);
        // dd($vendor->toArray());
        return view('ShopFrontend.vendor-detail',compact('vendor'));
    }
    public function get_vendor_products($slug,Request $request)
    {
        $products = Product::where('user_id',$slug);
        if($request->has('attribute') && $request->attribute == 'bestSale')
        {
            // $products = $products;
        }
        if($request->has('attribute') && $request->attribute == 'onsale')
        {
            $products = $products->where('sale',true);
        }
        if($request->has('attribute') && $request->attribute == 'new')
        {
            // $products = $products->where('sale',true);
        }
        $products = $products->orderBy('id', 'DESC')->take(5)->get();

        return $products;
    }
}