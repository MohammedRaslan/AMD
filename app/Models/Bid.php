<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getToAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
