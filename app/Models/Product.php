<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function shipping()
    {
        return $this->hasOne(ProductShipping::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function offerAccepted($user_id)
    {
        return $this->hasMany(BestOffer::class)->where('acceptance',1)->where('user_id',$user_id)->first();
    }

    public function bid()
    {
        return $this->hasOne(Bid::class);
    }

    public function offerdProduct()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
