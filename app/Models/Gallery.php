<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $casts = [
        'images' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $gallery->slug = self::generateUniqueSlug($gallery->gallery_name);
        });

        static::updating(function ($gallery) {
            $gallery->slug = self::generateUniqueSlug($gallery->gallery_name);
        });
    }

    // Method to generate a unique slug
    public static function generateUniqueSlug($galleryName)
    {
        // Generate a slug from the gallery name
        $slug = Str::slug($galleryName);

        // Check if the slug already exists
        $existingSlugCount = self::where('slug', $slug)->count();

        // If the slug already exists, append a unique suffix
        if ($existingSlugCount > 0) {
            $slug = $slug . '-' . ($existingSlugCount + 1);
        }

        return $slug;
    }
}
