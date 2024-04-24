<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Variant;
use App\Models\ProductVariantImage;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;

class FrontendConroller extends Controller
{
    //
    public function get_product(Request $request)
    {
        $products = Product::orderBy('id','DESC')->paginate(18);
        return $products;
    }
    public function home()
    {
        return view('ShopFrontend.mascamps');
    }
}
