<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{
    public function createProduct(array $data)
    {
        $productData = $this->prepareProductData($data);

        // Create the product
        $product = Product::create($productData);

        // Handle variants
        if (isset ($data['variant_id'])) {
            foreach ($data['variant_id'] as $variantId) {
                // Save each variant for the product with a specific value
                $product->variants()->attach($variantId, ['value' => 'value', 'status' => 1]);
            }
        }

        return $product;
    }

    public function updateProduct(Product $product, array $data)
    {
        $productData = $this->prepareProductData($data);

        // Update product attributes
        $product->update($productData);

        // Handle variants
        if (isset ($data['variant_id'])) {
            foreach ($data['variant_id'] as $variantId) {
                // Save each variant for the product with a specific value
                $product->variants()->attach($variantId, ['value' => 'value', 'status' => 1]);
            }
        }

        return $product;
    }

    protected function prepareProductData(array $data)
    {
        $productData = [
            'title' => $data['title'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'old_price' => $data['old_price'],
            'new_price' => $data['new_price'],
            'condition' => $data['condition'] ?? null,
            'stock_condition' => $data['stock_condition'] ?? null,
            'discount' => $data['discount'] ?? null,
            'tags' => implode(',', $data['tags'] ?? []),
            'slug' => $this->generateUniqueSlug($data['title']),
            'user_id' => auth()->id(),
            'facebook' => $data['facebook'] ?? null,
            'instagram' => $data['instagram'] ?? null,
            'youtube' => $data['youtube'] ?? null,
            'twitter' => $data['twitter'] ?? null,
            'tiktok' => $data['tiktok'] ?? null,
            'pinterest' => $data['pinterest'] ?? null,
            'linkedin' => $data['linkedin'] ?? null,
        ];

        return $productData;
    }

    protected function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }
        return $uniqueSlug;
    }
}
