<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $categories = Category::all();
        $variants = Variant::all();
        $products = Product::all();
        return view('dashboard.admin.products.index', compact('products', 'variants', 'categories'));
    }

    // public function create()
    // {
    //     $categories = Category::all();
    //     return view('dashboard.admin.products.create', compact('categories'));
    // }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
        ]);

        // // Extract the product data from the request
        // $productData = $request->only([
        //     'title',
        //     'category_id',
        //     'description',
        //     'old_price',
        //     'new_price',
        //     'condition',
        //     'stock_condition',
        //     'discount',
        // ]);

        // // Generate a unique slug from the product title
        // $slug = Str::slug($request->input('title'));
        // $uniqueSlug = $slug;
        // $counter = 1;
        // while (Product::where('slug', $uniqueSlug)->exists()) {
        //     // If the slug already exists, append a counter to make it unique
        //     $uniqueSlug = $slug . '-' . $counter++;
        // }

        // $productData['slug'] = $uniqueSlug;
        
        // $productData['tags'] = implode(',', $request->tags);

        // // Add the user_id to the product data
        // $productData['user_id'] = Auth::id();

        // // if ($request->status == 'inactive') {
        // //     $productData['status'] = 0;
        // // } else {
        // //     $productData['status'] = 1;
        // // }

        // // dd(dd($productData));

        // // Create the product
        // $product = Product::create($productData);

        // // Handle variants
        // if ($request->has('variant_id')) {
        //     foreach ($request->input('variant_id') as $variantId) {
        //         // Save each variant for the product
        //         ProductVariant::create([
        //             'product_id' => $product->id,
        //             'variant_id' => $variantId,
        //             'value' => 'value',
        //             'status' => 1,
        //         ]);
        //     }
        // }

        $product = $this->productService->createProduct($request->all());

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
        $product = Product::with('category', 'variants')->findOrFail($id);
        $categories = Category::all();
        return response()->json(['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        dd($request->toArray());
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
        ]);

        // $product = Product::findOrFail($id);

        // // Check if the title has changed
        // if ($request->has('title') && $request->title !== $product->title) {
        //     // Generate a unique slug based on the updated title
        //     $slug = Str::slug($request->input('title'));
        //     $uniqueSlug = $slug;
        //     $counter = 1;
        //     while (Product::where('slug', $uniqueSlug)->where('id', '!=', $product->id)->exists()) {
        //         // If the slug already exists, append a counter to make it unique
        //         $uniqueSlug = $slug . '-' . $counter++;
        //     }
        //     $product->slug = $uniqueSlug;
        // }

        // // Update other product data
        // $product->title = $request->input('title');
        // $product->category_id = $request->input('category_id');
        // $product->description = $request->input('description');
        // $product->old_price = $request->input('old_price');
        // $product->new_price = $request->input('new_price');
        // $product->condition = $request->input('condition');
        // $product->stock_condition = $request->input('stock_condition');
        // $product->discount = $request->input('discount');
        // $product->status = $request->input('status');

        // // Save the updated product
        // $product->save();

        // // Handle variants
        // $product->variants()->sync($request->input('variant_id'));

        $product = Product::findOrFail($id);
        $this->productService->updateProduct($product, $request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
