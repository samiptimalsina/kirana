<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    use HasFactory;
    protected $guarded=[];

    public function getImageUrlAttribute($value)
    {
        $imagePath = $value;
        return asset('assets/images/banner/' . $imagePath);
    }
}
