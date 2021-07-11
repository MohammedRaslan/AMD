<?php
namespace App\Repositories;

use App\Models\BestOffer;

class BestOfferRepository{

    protected $bestOffer;
    public function __construct(BestOffer $bestOffer) {
        $this->bestOffer = $bestOffer;
    }

    public function makeOffer($data, $user_id)
    {
        $data = BestOffer::updateOrCreate(
            [
                'user_id' => $user_id,
                'product_id' => $data['id']
            ],
            [
                'user_id'=> $user_id,
                'product_id' => $data['id'],
                'price' => $data['offer'],
            ]
        );
        return $data == true ? true : false;
    }

    public function getOffers($product_id)
    {
        return BestOffer::where('product_id',$product_id)
                        ->where('acceptance',0)
                        ->where('viewed',0)
                        ->with('user')
                        ->get();
    }

    public function markAsView($offer_id)
    {
        $response = BestOffer::findOrFail($offer_id);
        $response->viewed = 1;
        if($response->save()){
            return true;
        }
        return false;
    }

    public function decline($offer_id)
    {
        $response = BestOffer::findOrFail($offer_id);
        $response->acceptance = 0;
        $response->viewed = 1;
        if($response->save()){
            return true;
        }
        return false;
    }
}