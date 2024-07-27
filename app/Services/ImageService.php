<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class ImageService
{
    protected ImageManager $manager;

    public function __construct()
    {
        $this->manager = new ImageManager(['driver' => 'gd']);
    }

    public function storageGet(string $path): ?string
    {
        return Storage::get($path);
    }

    public function storagePath(string $path): string
    {
        return Storage::path($path);
    }

    public function resize(string $path, int $width, int $height): void
    {
        $imageContent = $this->storageGet($path);
        $image = $this->manager->make($imageContent);
        $image->resize($width, $height);
        $image->save($this->storagePath($path));
    }
}
