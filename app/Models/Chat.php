<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user_to()
    {
        return $this->belongsTo(User::class,'user_id_to');
    }

    public function user_from()
    {
        return $this->belongsTo(User::class,'user_id_from');
    }
}
