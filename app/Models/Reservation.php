<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'date',
        'time',
        'person',
    ];

    public function food(){
        return $this->belongsTo(Food::class);
    }
}
