<?php
namespace App\Repositories;

use App\Models\Bid;
use App\Models\HistoryBid;

class BidRepository{

    protected $bid;
    public function __construct(Bid $bid) {
        $this->bid = $bid;
    }

    public function storeHistory($data)
    {
        $history = HistoryBid::create($data);
        $bid = Bid::find($data['bid_id']);
        if($bid->last_price == 0 && $bid->before_last_price == 0){
            $bid->update([
                'last_price' => $data['price'],
                'before_last_price' => $data['price'],
            ]);
        }elseif( $bid->last_price == $bid->before_last_price && ($bid->last_price != 0 && $bid->before_last_price != 0) ){
            $bid->update([
                'last_price' => $data['price'],
            ]);
        }else{
            $bid->update([
                'before_last_price' => $bid->last_price,
                'last_price' => $data['price'],
            ]);
        }
        return [
            'history' => $history,
            'bid' => $bid,
        ];
    }
}
