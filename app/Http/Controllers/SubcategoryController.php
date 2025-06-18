<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('dashboard.admin.subcategories.index', compact('categories', 'subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.subcategories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'slug' => 'required|unique:subcategories',
            'description' => 'nullable',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        $subcategory = Subcategory::create($data);

        if ($subcategory) {
            return response()->json(['success' => 'Subcategory created successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to create subcategory'], 500);
        }
    }

    public function show(Subcategory $subcategory)
    {
        return response()->json($subcategory);
    }

    public function getDeletionDetails(Subcategory $subcategory)
    {
        try {
            $products = $subcategory->products;
            $costumes = $subcategory->costumes;
            
            $deletionDetails = [
                'subcategory' => [
                    'id' => $subcategory->id,
                    'title' => $subcategory->title,
                    'category' => $subcategory->category ? $subcategory->category->title : 'Category Deleted'
                ],
                'products_count' => $products->count(),
                'costumes_count' => $costumes->count(),
                'product_variants_count' => 0,
                'product_images_count' => 0,
                'product_media_count' => 0,
                'cart_items_count' => 0,
                'order_items_count' => 0,
                'costume_variants_count' => 0,
                'costume_images_count' => 0,
                'total_items' => 0
            ];
            
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
            
            // Calculate total items
            $deletionDetails['total_items'] = 
                $deletionDetails['products_count'] + 
                $deletionDetails['costumes_count'] + 
                $deletionDetails['product_variants_count'] + 
                $deletionDetails['product_images_count'] + 
                $deletionDetails['product_media_count'] + 
                $deletionDetails['cart_items_count'] + 
                $deletionDetails['order_items_count'] + 
                $deletionDetails['costume_variants_count'] + 
                $deletionDetails['costume_images_count'] + 
                1; // +1 for the subcategory itself
            
            return response()->json($deletionDetails);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error getting deletion details: ' . $e->getMessage()], 500);
        }
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('dashboard.admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'slug' => 'required|unique:subcategories,slug,' . $subcategory->id,
            'description' => 'nullable',
            'status' => 'required|in:active,inactive',
        ]);

        $subcategory->fill($request->all());
        $updated = $subcategory->save();

        if ($updated) {
            return response()->json(['success' => 'Subcategory updated successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to update subcategory'], 500);
        }
    }

    public function destroy(Subcategory $subcategory)
    {
        try {
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
            
            // Delete all products in this subcategory
            $subcategory->products()->delete();
            
            // Delete all costumes in this subcategory
            $subcategory->costumes()->delete();
            
            // Then delete the subcategory
            $deleted = $subcategory->delete();

            if ($deleted) {
                return response()->json([
                    'success' => 'Subcategory and all related items (products, costumes, variants, images, cart items, order items) deleted successfully'
                ], 200);
            } else {
                return response()->json(['error' => 'Failed to delete subcategory'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error deleting subcategory: ' . $e->getMessage()], 500);
        }
    }
}
