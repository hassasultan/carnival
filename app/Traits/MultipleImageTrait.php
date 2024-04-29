<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait MultipleImageTrait
{
    public function uploadMultipleImages(array $images, $folder)
    {
        $uploadedImages = [];

        foreach ($images as $image) {
            $originalName = $image->getClientOriginalName();
            $imageName = time() . '_' . $originalName;
            $imagePath = $image->move(public_path($folder), $imageName);
            $uploadedImages[] = [
                'path' => $folder . '/' . $imageName,
                'original_name' => $originalName,
            ];
        }

        return $uploadedImages;
    }

    public function deleteMultipleImages(array $imagePaths)
    {
        foreach ($imagePaths as $image) {
            $imagePath = public_path($image['path']);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
}
