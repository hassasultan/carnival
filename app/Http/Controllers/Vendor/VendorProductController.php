<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Variant;
use App\Models\Feature;
use App\Models\ProductVariantImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;
use App\Traits\ImageTrait;

class VendorProductController extends Controller
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
        $products = Product::orderBy('id', 'DESC')->where('user_id', Auth::id())->get();
        return view('dashboard.vendor.products.index', compact('products', 'variants', 'categories'));
    }

    public function create()
    {
        $variants = Variant::all();
        $categories = Category::all();
        // Get features for the first category or all features if no category selected
        $firstCategory = $categories->first();
        $features = $firstCategory ? Feature::where('category_id', $firstCategory->id)->where('status', 1)->get() : collect();
        return view('dashboard.vendor.products.create', compact('categories', 'variants', 'features'));
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'title' => 'required',
    //         'category_id' => 'required',
    //         'description' => 'required',
    //         'old_price' => 'required',
    //         'new_price' => 'required',
    //         'status' => 'required',
    //         'variant_id' => 'required|array',
    //         'variant_id.*' => 'exists:variants,id',
    //     ]);

    //     $data = $request->all();

    //     // Check if variant_images are present in the request
    //     if ($request->hasFile('variant_images')) {
    //         $data['variant_images'] = $request->file('variant_images');
    //     } else {
    //         // If no variant images are uploaded, set an empty array
    //         $data['variant_images'] = [];
    //     }

    //     $product = $this->productService->createProduct($data);

    //     if ($product) {
    //         $products = Product::where('user_id', Auth::id())->get();
    //         $view = view('dashboard.vendor.products.table', compact('products'))->render();

    //         return response()->json(['message' => 'Product created successfully', 'table_html' => $view], 200);
    //     } else {
    //         return response()->json(['error' => 'Failed to create Product'], 500);
    //     }
    // }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
            'features' => 'nullable|array',
            'features.*' => 'exists:features,id',
        ]);

        $data = $request->all();

        $image = $this->uploadImage($request->file('image'), 'productImage');

        $data['image'] = $image;

        $product = $this->productService->createProduct($data);

        if ($product) {
            // Attach features to the product
            if ($request->has('features')) {
                $product->features()->attach($request->features);
            }

            $products = Product::where('user_id', Auth::id())->get();
            $view = view('dashboard.vendor.products.table', compact('products'))->render();

            return response()->json(['message' => 'Product created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Product'], 500);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.vendor.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with('category', 'product_variant', 'subcategory', 'features')->findOrFail($id);
        $categories = Category::where('type', 'ecommerce')->get();
        // $variants = Variant::all();
        $variants = Variant::where('category_id', $product->category_id)->get();
        $selectedVariants = $product->variants->pluck('id')->toArray();
        $subcat = Subcategory::where('category_id', $product->category_id)->get();
        // Get features for the product's category
        $features = Feature::where('category_id', $product->category_id)->where('status', 1)->get();
        $selectedFeatures = $product->features->pluck('id')->toArray();
        return view('dashboard.vendor.products.edit', compact('product', 'categories', 'variants', 'subcat', 'selectedVariants', 'features', 'selectedFeatures'));
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
            'features' => 'nullable|array',
            'features.*' => 'exists:features,id',
            // 'variant_id' => 'required|array',
            // 'variant_id.*' => 'exists:variants,id',
        ]);

        $product = Product::findOrFail($id);

        // Prepare data for update
        $data = $request->all();

        // Check if variant_images are present in the request
        if ($request->hasFile('variant_images')) {
            $data['variant_images'] = $request->file('variant_images');
        } else {
            // If no variant images are uploaded, set an empty array
            $data['variant_images'] = [];
        }

        // Update product attributes and handle variants
        $updatedProduct = $this->productService->updateProduct($product, $data);

        if ($updatedProduct) {
            // Sync features with the product
            if ($request->has('features')) {
                $product->features()->sync($request->features);
            } else {
                $product->features()->detach();
            }

            $products = Product::where('user_id', Auth::id())->get();
            $view = view('dashboard.vendor.products.table', compact('products'))->render();

            return response()->json(['message' => 'Product updated successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to update Product'], 500);
        }

        // return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function getsubCategories($categoryId)
    {
        // Fetch subcategories based on the provided package ID
        $data['subcategories'] = Subcategory::where('category_id', $categoryId)->get();
        $data['varients'] = Variant::where('category_id', $categoryId)->get();
        // Return subcategories as JSON response
        return response()->json($data);
    }

    public function getFeaturesByCategory($categoryId)
    {
        $features = Feature::where('category_id', $categoryId)->where('status', 1)->get();
        return response()->json($features);
    }
}
