<?php

namespace App\Models;

use App\Models\Food;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }

    public function addFeedback($feedbackText)
    {
        $this->feedback()->create(['feedback' => $feedbackText]);
    }
}
