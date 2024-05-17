<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'food';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'img',
        'price',
        'desc',
        'slug'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->name);
    }
    public function booked(){
        return $this->hasMany(Reservation::class);

    }
}
