<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
