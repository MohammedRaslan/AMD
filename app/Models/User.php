<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'password',
        'phone',
        'subscription_id',
        'country',
        'type',
        'role',
        'image',
        'user_product_quantity',
        'subscription_product_quantity',
        'subscription_end_at',
        'subscription_type',
        'subscription_duration',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'subscription_end_at' => 'datetime',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function user_details()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function vendors()
    {
        return $this->belongsToMany(User::class, 'vendor_whish_lists' ,'vendor_id','id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'vendor_whish_lists' ,'user_id','id');
    }
}
