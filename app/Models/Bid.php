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
        return ['human' => Carbon::parse($value)->diffForHumans(),
                'actual' => $value,
            ];
    }

    public function getFromAttribute($value)
    {
        return ['human' => Carbon::parse($value)->diffForHumans(),
                'actual' => $value,
    ];
}

    public function history_bids()
    {
        return $this->hasMany(HistoryBid::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
