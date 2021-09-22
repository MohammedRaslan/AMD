<?php
namespace App\Repositories;

use App\Models\Bid;
use App\Models\HistoryBid;

class BidRepository{

    protected $bid;
    public function __construct(Bid $bid) {
        $this->bid = $bid;
    }

    public function storeHistory($data , $lastPrice , $bool)
    {
        $history = HistoryBid::create($data);
        $bid = Bid::find($data['bid_id']);
        if (!$bool) {
            if($bid->last_price == 0 && $bid->before_last_price == 0){
                $bid->update([
                    'last_price' => $lastPrice,
                    'before_last_price' => $lastPrice,
                ]);
            }elseif( $bid->last_price == $bid->before_last_price && ($bid->last_price != 0 && $bid->before_last_price != 0) ){
                $bid->update([
                    'last_price' => $lastPrice,
                ]);
            }else{
                $bid->update([
                    'before_last_price' => $bid->last_price,
                    'last_price' => $lastPrice,
                ]);
            }
        }
     
   
        return [
            'history' => $history,
            'bid' => $bid,
        ];
    }

    public function getById($id)
    {
        $bid = Bid::find($id);
        $history = HistoryBid::all();
        return $bid;
    }

    public function getMax($id)
    {
        $history = HistoryBid::where("bid_id" , $id)->max("price");
        return $history;
    }
}
