<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $packages = Package::all();
        return view('dashboard.admin.categories.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'type' => 'required|in:ecommerce,events,music,appointment,ad_space,blogging',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $iconPath = 'category_icon/' . time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('category_icon'), $iconPath);
            $data['icon'] = $iconPath;
        }

        $data['user_id'] = Auth::id();

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.admin.categories.show', compact('category'));
    }

    public function getDeletionDetails($id)
    {
        try {
            $category = Category::findOrFail($id);
            $subcategories = $category->subcategories;
            
            $deletionDetails = [
                'category' => [
                    'id' => $category->id,
                    'title' => $category->title,
                    'type' => $category->type
                ],
                'subcategories_count' => $subcategories->count(),
                'products_count' => 0,
                'costumes_count' => 0,
                'product_variants_count' => 0,
                'product_images_count' => 0,
                'product_media_count' => 0,
                'cart_items_count' => 0,
                'order_items_count' => 0,
                'costume_variants_count' => 0,
                'costume_images_count' => 0,
                'total_items' => 0
            ];
            
            // Count all items in subcategories
            foreach ($subcategories as $subcategory) {
                $products = $subcategory->products;
                $costumes = $subcategory->costumes;
                
                $deletionDetails['products_count'] += $products->count();
                $deletionDetails['costumes_count'] += $costumes->count();
                
                // Count product-related items
                foreach ($products as $product) {
                    $deletionDetails['product_variants_count'] += $product->product_variant()->count();
                    $deletionDetails['product_images_count'] += $product->product_images()->count();
                    $deletionDetails['product_media_count'] += $product->media()->count();
                    $deletionDetails['cart_items_count'] += \App\Models\Cart::where('product_id', $product->id)->count();
                    $deletionDetails['order_items_count'] += \App\Models\OrderItem::where('product_id', $product->id)->count();
                }
                
                // Count costume-related items
                foreach ($costumes as $costume) {
                    $deletionDetails['costume_variants_count'] += \App\Models\CostumeVariant::where('costume_id', $costume->id)->count();
                    $deletionDetails['costume_images_count'] += \App\Models\CostumeVariantImage::where('costume_id', $costume->id)->count();
                }
            }
            
            // Calculate total items
            $deletionDetails['total_items'] = 
                $deletionDetails['subcategories_count'] + 
                $deletionDetails['products_count'] + 
                $deletionDetails['costumes_count'] + 
                $deletionDetails['product_variants_count'] + 
                $deletionDetails['product_images_count'] + 
                $deletionDetails['product_media_count'] + 
                $deletionDetails['cart_items_count'] + 
                $deletionDetails['order_items_count'] + 
                $deletionDetails['costume_variants_count'] + 
                $deletionDetails['costume_images_count'] + 
                1; // +1 for the category itself
            
            return response()->json($deletionDetails);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error getting deletion details: ' . $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $packages = Package::all();
        return view('dashboard.admin.categories.edit', compact('category', 'packages'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'package_id' => 'required',
                'title' => 'required|string|max:255',
                'type' => 'required|in:ecommerce,events,music,appointment,ad_space,blogging',
                'slug' => 'required|string|max:255|unique:categories,slug,' . $id,
                'description' => 'required|string',
                'status' => 'required|boolean',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $category = Category::findOrFail($id);

            if ($request->hasFile('icon')) {
                $iconPath = 'category_icon/' . time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('category_icon'), $iconPath);
                $validatedData['icon'] = $iconPath;
            }

            $category->update($validatedData);

            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            
            // Get all subcategories in this category
            $subcategories = $category->subcategories;
            
            // For each subcategory, handle all its dependencies
            foreach ($subcategories as $subcategory) {
                // Get all products and costumes in this subcategory
                $products = $subcategory->products;
                $costumes = $subcategory->costumes;
                
                // Delete all related data for each product
                foreach ($products as $product) {
                    // Delete product variants and their images
                    $product->product_variant()->delete();
                    $product->product_images()->delete();
                    
                    // Delete product media
                    $product->media()->delete();
                    
                    // Delete cart items for this product
                    \App\Models\Cart::where('product_id', $product->id)->delete();
                    
                    // Delete order items for this product
                    \App\Models\OrderItem::where('product_id', $product->id)->delete();
                    
                    // Delete product variant images
                    \App\Models\ProductVariantImage::where('product_id', $product->id)->delete();
                }
                
                // Delete all related data for each costume
                foreach ($costumes as $costume) {
                    // Delete costume variants
                    \App\Models\CostumeVariant::where('costume_id', $costume->id)->delete();
                    
                    // Delete costume variant images
                    \App\Models\CostumeVariantImage::where('costume_id', $costume->id)->delete();
                    
                    // Delete costume variant relationships
                    $costume->variants()->detach();
                }
                
                // Delete all products and costumes in this subcategory
                $subcategory->products()->delete();
                $subcategory->costumes()->delete();
            }
            
            // Delete all subcategories in this category
            $category->subcategories()->delete();
            
            // Then delete the category
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Category and all related items (subcategories, products, costumes, variants, images, cart items, order items) deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting category: ' . $e->getMessage());
        }
    }
}
