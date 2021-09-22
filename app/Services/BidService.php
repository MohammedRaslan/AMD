<?php
namespace App\Services;

use App\Repositories\BidRepository;

class BidService{

    protected $bidRepository;
    public function __construct(BidRepository $bidRepository ) {
        $this->bidRepository = $bidRepository;
    }

    public function store($request ,$user_id)
    {
        $bid =$this->bidRepository->getById($request['bid_id']);
        $maxBid =$this->bidRepository->getMax($request['bid_id']);
        //dd($bid->minimum_price , $maxBid);
        $currentPrice =0 ;
        if (  $maxBid < $request['bidValue'] ) {
            //dd($maxBid);
            $currentPrice= $bid->minimum_price;
            for ($step = $bid->minimum_price/100; $currentPrice <= $maxBid;  ) {
                $currentPrice = $currentPrice + $step;
            }
            if ($currentPrice > $request['bidValue']) {
                $currentPrice = $request['bidValue'];
            }
            $data = [
                'bid_id' => $request['bid_id'],
                'user_id' => $user_id,
                'price' => $request['bidValue'],
            ];
    
            return $this->bidRepository->storeHistory($data , $currentPrice , true);
        }else {
            $currentPrice= $bid->last_price;
            for ($step = $bid->minimum_price/100; $currentPrice <= $request['bidValue'];  ) {
                $currentPrice = $currentPrice + $step;
            }
       
            $data = [
                'bid_id' => $request['bid_id'],
                'user_id' => $user_id,
                'price' => $request['bidValue'],
            ];
            return $this->bidRepository->storeHistory($data , $currentPrice ,false);

        }
       

    }

}