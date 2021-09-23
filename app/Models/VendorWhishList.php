<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorWhishList extends Model
{
    use HasFactory;
    protected $table = "vendor_whish_lists";
    protected $fillable = ['vendor_id','user_id', 'type'];

    public function vendors()
    {
        return $this->belongsToMany(User::class,'vendor_whish_lists' , 'id','vendor_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'vendor_whish_lists' , 'user_id','id');
    }
}
