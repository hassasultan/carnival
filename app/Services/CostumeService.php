<?php

namespace App\Services;

use App\Models\Costume;
use App\Models\CostumeVariant;
use App\Models\CostumeVariantImage;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;
use App\Traits\MultipleImageTrait;

class CostumeService
{
    use ImageTrait, MultipleImageTrait;

    public function createCostume(array $data)
    {
        $costumeData = $this->prepareCostumeData($data);

        $costume = Costume::create($costumeData);

        if (isset($data['variant_id'])) {
            foreach ($data['variant_id'] as $index => $variantId) {
                $costumeVariant = CostumeVariant::create([
                    'costume_id' => $costume->id,
                    'variant_id' => $variantId,
                    'value' => isset($data['value'][$index]) ? $data['value'][$index] : 'default_value',
                    'status' => 1
                ]);

                if (isset($data['variant_images'][$index])) {
                    $additionalImagePaths = $this->uploadMultipleImages($data['variant_images'], 'variant_images');

                    foreach ($additionalImagePaths as $additionalImage) {
                        CostumeVariantImage::create([
                            'costume_id' => $costume->id,
                            'costume_variant_id' => $costumeVariant->id,
                            'image' => $additionalImage['original_name'],
                        ]);
                    }
                }
            }
        }

        return $costume;
    }

    public function updateCostume(Costume $costume, array $data)
    {
        $costumeData = $this->prepareCostumeData($data);

        $costume->update($costumeData);

        if (isset($data['variant_id'])) {
            $costume->variants()->detach();

            foreach ($data['variant_id'] as $index => $variantId) {
                $costume->variants()->attach($variantId, ['value' => 'value', 'status' => 1]);

                if (isset($data['variant_images'][$index])) {
                    $additionalImagePaths = $this->uploadMultipleImages($data['variant_images'], 'variant_images');

                    foreach ($additionalImagePaths as $additionalImage) {
                        CostumeVariantImage::create([
                            'costume_id' => $costume->id,
                            'costume_variant_id' => $variantId,
                            'image' => $additionalImage['original_name'],
                        ]);
                    }
                }
            }
        }

        return $costume;
    }


    protected function prepareCostumeData(array $data)
    {
        $costumeData = [
            'title' => $data['title'],
            'event_id' => $data['event_id'],
            'category_id' => $data['category_id'],
            'subcategory_id' => $data['subcategory_id'],
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

        return $costumeData;
    }

    protected function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (Costume::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }
        return $uniqueSlug;
    }

    protected function uploadVariantImages($images)
    {
        $imagePaths = [];

        foreach ($images as $image) {
            $path = $image->store('variant_images');
            $imagePaths[] = $path;
        }

        return $imagePaths;
    }
}
