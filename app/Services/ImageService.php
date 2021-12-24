<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class ImageService
{
    public static function upload($imageFile, $folderName)
    {
        $fileName = uniqid(rand() . '_');
        $extension = $imageFile->extension();
        $fileNameToStore = $fileName . '.' . $extension;
        $resizeImage = Image::make($imageFile)->resize(1920, 1080)->encode();


        Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizeImage);

        return $fileNameToStore;
    }
}
