<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    protected $guarded = [];


    public static function getPhotoPath($photo=null)
    {
        if (!empty($photo)) {
            return public_path('teams/photo/' . basename($photo));
        } else {
            return public_path('teams/photo/');
        }
    }

    public static function renderImage($photo = null)
    {
        if (!empty($photo)) {
            return asset('teams/photo/' . basename($photo));
        } else {
            return asset('teams/photo/');
        }
    }
}
