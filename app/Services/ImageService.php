<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as InterventionImage;


class ImageService
{
    public static function upload($imageFile, $folderName)
    {
        if (is_array($imageFile)) {
            $file = $imageFile['image'];
        } else {
            $file = $imageFile;
        }

        $fileName = uniqid(rand() . '_');
        $extension = $file->extension();
        $fileNameToStore = $fileName . '.' . $extension;
        $resizeImage = InterventionImage::make($file)->resize(1920, 1080)->encode();


        Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizeImage);

        return $fileNameToStore;
    }
}
