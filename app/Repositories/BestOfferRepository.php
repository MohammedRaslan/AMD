<?php
namespace App\Repositories;

use App\Models\BestOffer;
use App\Models\Product;
use App\Models\User;

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
        $product = Product::findOrFail($data['id']);
        $user_name = User::select('user_name')->where('id',$user_id)->first();
        $message   = $user_name->user_name.' Made an offer on your product '.$product->title;
        // $user_id => from , $product->user_id => to
        NotificationRepository::generateNotification($user_id,$product->user_id,$data['id'],'offer',$message);

        return $data == true ? true : false;
    }

    public function getOffers($product_id)
    {
        return BestOffer::where('product_id',$product_id)
                        ->where('decline',0)
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
        $response->decline = 1;
        $response->viewed = 1;
        if($response->save()){
            $product = Product::findOrFail($response->product_id);
            $message   = 'Your offer on '.$product->title.' has been declined';
            // $user_id => from , $product->user_id => to
            NotificationRepository::generateNotification($product->user_id,$response->user_id,$product->id,'offer',$message);
            return true;
        }
        return false;
    }

    public function accept($offer_id)
    {
        $response = BestOffer::findOrFail($offer_id);
        $response->acceptance = 1;
        $response->viewed = 1;
        if($response->save()){
            $product = Product::findOrFail($response->product_id);
            $message   = 'Your offer on '.$product->title.' has been accepted, Look into your cart';
            // $user_id => from , $product->user_id => to
            NotificationRepository::generateNotification($product->user_id,$response->user_id,$product->id,'offer',$message);
            return true;
        }
        return false;
    }
}