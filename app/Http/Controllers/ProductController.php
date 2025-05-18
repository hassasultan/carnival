<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Variant;
use App\Models\Brand;
use App\Traits\ImageTrait;
use App\Models\ProductVariantImage;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;

class ProductController extends Controller
{
    use ImageTrait;
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $categories = Category::where('type', 'ecommerce')->get();
        $variants = Variant::all();
        $products = Product::orderBy('id', 'DESC')->get();
        return view('dashboard.admin.products.index', compact('products', 'variants', 'categories'));
    }

    public function create()
    {
        $variants = Variant::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('dashboard.admin.products.create', compact('categories', 'variants', 'brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
            'media.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        $image = $this->uploadImage($request->file('image'), 'productImage');

        $data['image'] = $image;

        if ($request->hasFile('media')) {
            $data['media'] = $request->file('media');
        }

        $product = $this->productService->createProduct($data);

        if ($product) {
            $products = Product::all();
            $view = view('dashboard.admin.products.table', compact('products'))->render();

            return response()->json(['message' => 'Product created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Product'], 500);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with('category', 'product_variant', 'subcategory')->findOrFail($id);
        $categories = Category::where('type', 'ecommerce')->get();
        // $variants = Variant::all();
        $variants = Variant::where('category_id', $product->category_id)->get();
        $selectedVariants = $product->variants->pluck('id')->toArray();
        $subcat = Subcategory::where('category_id', $product->category_id)->get();
        $brands = Brand::all();
        return view('dashboard.admin.products.edit', compact('product', 'categories', 'variants', 'subcat', 'selectedVariants', 'brands'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('variant_images')) {
            $data['variant_images'] = $request->file('variant_images');
        } else {
            $data['variant_images'] = [];
        }

        $updatedProduct = $this->productService->updateProduct($product, $data);

        if ($updatedProduct) {
            $products = Product::all();
            $view = view('dashboard.admin.products.table', compact('products'))->render();

            return response()->json(['message' => 'Product updated successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to update Product'], 500);
        }
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->delete()) {
            return response()->json(['message' => 'Product deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Product'], 500);
        }
    }

    public function getsubCategories($categoryId)
    {
        $data['subcategories'] = Subcategory::where('category_id', $categoryId)->get();
        $data['varients'] = Variant::where('category_id', $categoryId)->get();
        return response()->json($data);
    }
}
