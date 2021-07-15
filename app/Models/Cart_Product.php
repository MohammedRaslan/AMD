<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','cart_id','product_id','price','quantity'];
    protected $table = 'cart_product';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
