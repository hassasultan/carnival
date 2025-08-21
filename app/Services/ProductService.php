<?php
// 
// namespace App\Services;
// 
// use App\Models\Product;
// use App\Models\ProductVariant;
// use App\Models\ProductVariantImage;
// use App\Models\ProductMedia;
// use Illuminate\Support\Str;
// use App\Traits\ImageTrait;
// use App\Traits\MultipleImageTrait;
// 
// class ProductService
// {
    // use ImageTrait, MultipleImageTrait;
// 
    // public function createProduct(array $data)
    // {
        // $productData = $this->prepareProductData($data);
// 
        // $product = Product::create($productData);
// 
        // if (isset($data['media'])) {
            // foreach ($data['media'] as $mediaImage) {
                // $mediaImagePath = $this->uploadImage($mediaImage, 'product_media');
// 
                // ProductMedia::create([
                    // 'product_id' => $product->id,
                    // 'image' => $mediaImagePath,
                // ]);
            // }
        // }
// 
        // if (isset($data['variant_id'])) {
            // foreach ($data['variant_id'] as $index => $variantId) {
                // $type = $data['type'][$index] . '-' . $index;
                // $productVariant = ProductVariant::create([
                    // 'product_id' => $product->id,
                    // 'variant_id' => $variantId,
                    // 'name' => $data['variant_name'][$index],
                    // 'price' => $data['variant_price'][$index],
                    // 'type' => $data['type'][$index],
                    // 'value' => isset($data['value'][$index]) ? $data['value'][$index] : 'default_value', // Adjust this default value as needed
                    // 'status' => 1
                // ]);
// 
                // if (isset($data['variant_images'])) {
                    // foreach ($data['variant_images'][$type] as $images) {
                        // $additionalImagePaths = $this->uploadImage($images, 'variant_images');
                        // ProductVariantImage::create([
                            // 'product_id' => $product->id,
                            // 'product_variant_id' => $productVariant->id,
                            // 'image' => $additionalImagePaths,
                        // ]);
                    // }
                // }
            // }
        // }
// 
        // return $product;
    // }
// 
    // public function updateProduct(Product $product, array $data)
    // {
        // $productData = $this->prepareProductData($data);
// 
        // $product->update($productData);
// 
// 
        // if (isset($data['media'])) {
            // $existingMedia = ProductMedia::where('product_id', $product->id)->get();
            // foreach ($existingMedia as $media) {
                // $this->deleteImage('product_media/' . $media->image);
                // $media->delete();
            // }
// 
            // foreach ($data['media'] as $mediaImage) {
                // $mediaImagePath = $this->uploadImage($mediaImage, 'product_media');
// 
                // ProductMedia::create([
                    // 'product_id' => $product->id,
                    // 'image' => $mediaImagePath,
                // ]);
            // }
        // }
// 
        // if (isset($data['variant_id'])) {
            // $product->variants()->detach();
// 
            // foreach ($data['variant_id'] as $index => $variantId) {
                // $product->variants()->attach($variantId, [
                    // 'value' => $data['value'][$index] ?? null,
                    // 'status' => 1,
                    // 'name' => $data['variant_name'][$index] ?? null,
                    // 'type' => $data['type'][$index] ?? null,
                    // 'price' => $data['variant_price'][$index] ?? 0,
                // ]);
// 
                // if (isset($data['variant_images'][$index])) {
                    // $additionalImagePaths = $this->uploadMultipleImages($data['variant_images'], 'variant_images');
// 
                    // foreach ($additionalImagePaths as $additionalImage) {
                        // ProductVariantImage::create([
                            // 'product_id' => $product->id,
                            // 'product_variant_id' => $variantId,
                            // 'image' => $additionalImage['original_name'],
                        // ]);
                    // }
                // }
            // }
        // }
// 
        // return $product;
    // }
// 
    // protected function prepareProductData(array $data)
    // {
        // $productData = [
            // 'title' => $data['title'],
            // 'category_id' => $data['category_id'],
            // 'subcategory_id' => $data['subcategory_id'],
            // 'description' => $data['description'],
            // 'old_price' => $data['old_price'],
            // 'new_price' => $data['new_price'],
            // 'sale' => $data['sale'],
            // 'condition' => $data['condition'] ?? null,
            // 'stock_condition' => $data['stock_condition'] ?? null,
            // 'discount' => $data['discount'] ?? null,
            // 'tags' => implode(',', $data['tags'] ?? []),
            // 'slug' => $this->generateUniqueSlug($data['title']),
            // 'user_id' => auth()->id(),
            // 'facebook' => $data['facebook'] ?? null,
            // 'instagram' => $data['instagram'] ?? null,
            // 'youtube' => $data['youtube'] ?? null,
            // 'twitter' => $data['twitter'] ?? null,
            // 'tiktok' => $data['tiktok'] ?? null,
            // 'pinterest' => $data['pinterest'] ?? null,
            // 'linkedin' => $data['linkedin'] ?? null,
            // 'information' => $data['information'] ?? null,
            // 'reviews' => $data['reviews'] ?? null,
            // 'extra' => $data['extra'] ?? null,
            // 'guarantee' => $data['guarantee'] ?? null,
            // 'image' => $data['image'] ?? null,
            // 'brand_id' => $data['brand_id'] ?? null,
            // 'feature' => isset($data['feature']) ? 1 : 0,
            // 'women' => isset($data['women']) ? 1 : 0,
            // 'men' => isset($data['men']) ? 1 : 0,
            // 'kids' => isset($data['kids']) ? 1 : 0,
            // 'accessories' => isset($data['accessories']) ? 1 : 0,
        // ];
// 
        // return $productData;
    // }
// 
    // protected function generateUniqueSlug($title)
    // {
        // $slug = Str::slug($title);
        // $uniqueSlug = $slug;
        // $counter = 1;
        // while (Product::where('slug', $uniqueSlug)->exists()) {
            // $uniqueSlug = $slug . '-' . $counter++;
        // }
        // return $uniqueSlug;
    // }
// 
    // protected function uploadVariantImages($images)
    // {
        // $imagePaths = [];
// 
        // foreach ($images as $image) {
            // $path = $image->store('variant_images');
            // $imagePaths[] = $path;
        // }
// 
        // return $imagePaths;
    // }
// }


namespace App\Services;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantImage;
use App\Models\ProductMedia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Traits\ImageTrait;
use App\Traits\MultipleImageTrait;

class ProductService
{
    use ImageTrait, MultipleImageTrait;

    public function createProduct(array $data)
    {
        DB::beginTransaction();
        try {
            $productData = $this->prepareProductData($data);
            $product = Product::create($productData);

            // Handle media images
            if (isset($data['media'])) {
                foreach ($data['media'] as $mediaImage) {
                    $mediaImagePath = $this->uploadImage($mediaImage, 'product_media');
                    ProductMedia::create([
                        'product_id' => $product->id,
                        'image' => $mediaImagePath,
                    ]);
                }
            }

            // Handle variants and variant images
            if (isset($data['variant_id'])) {
                foreach ($data['variant_id'] as $index => $variantId) {
                    $productVariant = ProductVariant::create([
                        'product_id' => $product->id,
                        'variant_id' => $variantId,
                        'name' => $data['variant_name'][$index],
                        'price' => $data['variant_price'][$index],
                        'type' => $data['type'][$index],
                        'value' => $data['value'][$index] ?? 'default_value',
                        'status' => 1
                    ]);

                    if (isset($data['variant_images'][$index])) {
                        foreach ($data['variant_images'][$index] as $image) {
                            $imagePath = $this->uploadImage($image, 'variant_images');
                            ProductVariantImage::create([
                                'product_id' => $product->id,
                                'product_variant_id' => $productVariant->id,
                                'image' => $imagePath,
                            ]);
                        }
                    }
                }
            }

            DB::commit();
            return $product;

        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function updateProduct(Product $product, array $data)
    {
        DB::beginTransaction();
        try {
            $productData = $this->prepareProductData($data);
            $product->update($productData);

            // Handle media update
            if (isset($data['media'])) {
                $existingMedia = ProductMedia::where('product_id', $product->id)->get();
                foreach ($existingMedia as $media) {
                    $this->deleteImage('product_media/' . $media->image);
                    $media->delete();
                }

                foreach ($data['media'] as $mediaImage) {
                    $mediaImagePath = $this->uploadImage($mediaImage, 'product_media');
                    ProductMedia::create([
                        'product_id' => $product->id,
                        'image' => $mediaImagePath,
                    ]);
                }
            }

            // Handle variants update
            if (isset($data['variant_id'])) {
                // Delete old variants and images
                $oldVariants = ProductVariant::where('product_id', $product->id)->get();
                foreach ($oldVariants as $variant) {
                    $variantImages = ProductVariantImage::where('product_variant_id', $variant->id)->get();
                    foreach ($variantImages as $variantImage) {
                        $this->deleteImage('variant_images/' . $variantImage->image);
                        $variantImage->delete();
                    }
                    $variant->delete();
                }

                // Create new variants
                foreach ($data['variant_id'] as $index => $variantId) {
                    $productVariant = ProductVariant::create([
                        'product_id' => $product->id,
                        'variant_id' => $variantId,
                        'name' => $data['variant_name'][$index] ?? null,
                        'price' => $data['variant_price'][$index] ?? 0,
                        'type' => $data['type'][$index] ?? null,
                        'value' => $data['value'][$index] ?? null,
                        'status' => 1
                    ]);

                    if (isset($data['variant_images'][$index])) {
                        foreach ($data['variant_images'][$index] as $image) {
                            $imagePath = $this->uploadImage($image, 'variant_images');
                            ProductVariantImage::create([
                                'product_id' => $product->id,
                                'product_variant_id' => $productVariant->id,
                                'image' => $imagePath,
                            ]);
                        }
                    }
                }
            }

            DB::commit();
            return $product;

        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function prepareProductData(array $data)
    {
        return [
            'title' => $data['title'],
            'category_id' => $data['category_id'],
            'subcategory_id' => $data['subcategory_id'],
            'description' => $data['description'],
            'old_price' => $data['old_price'],
            'new_price' => $data['new_price'],
            'sale' => $data['sale'],
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
            'information' => $data['information'] ?? null,
            'reviews' => $data['reviews'] ?? null,
            'extra' => $data['extra'] ?? null,
            'guarantee' => $data['guarantee'] ?? null,
            'image' => $data['image'] ?? null,
            'brand_id' => $data['brand_id'] ?? null,
            'feature' => isset($data['feature']) ? 1 : 0,
            'women' => isset($data['women']) ? 1 : 0,
            'men' => isset($data['men']) ? 1 : 0,
            'kids' => isset($data['kids']) ? 1 : 0,
            'accessories' => isset($data['accessories']) ? 1 : 0,
        ];
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
