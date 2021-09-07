<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $gaurded = [];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
