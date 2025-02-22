<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

trait ImageTrait
{
    public function uploadImage($image, $folder)
    {
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path($folder), $imageName);
        // $image->storeAs($folder, $imageName, 'public');

        return $imageName;
    }

    // public function deleteImage($imagePath)
    // {
    //     Storage::disk('public')->delete($imagePath);
    // }


    public function deleteImage($imagePath)
    {
        $fullPath = public_path($imagePath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
