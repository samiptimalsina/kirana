<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImagePathAttribute()
    {
        return $this->image ? asset('assets/images/' . $this->image) : null;
    }
}
