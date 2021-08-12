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
        $data = [
            'bid_id' => $request['bid_id'],
            'user_id' => $user_id,
            'price' => $request['bidValue'],
        ];

        return $this->bidRepository->storeHistory($data);

    }

}