<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user_to()
    {
        return $this->belongsTo(User::class,'to');
    }

    public function user_from()
    {
        return $this->belongsTo(User::class,'from');
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
