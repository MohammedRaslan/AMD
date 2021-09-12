<?php
namespace App\Repositories;

use App\Events\AcceptOfferEvent;
use App\Events\DeclineOfferEvent;
use App\Events\MakeOfferEvent;
use App\Models\BestOffer;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

class BestOfferRepository{

    protected $bestOffer;
    public function __construct(BestOffer $bestOffer) {
        $this->bestOffer = $bestOffer;
    }

    public function makeOffer($data, $user_id)
    {
        $product = Product::findOrFail($data['id']);
        if($product->status == 0 ){
            return false;
        }
        $checkIfUserHasOfferBefore = BestOffer::where('user_id',$user_id)->where('product_id',$data['id'])->first();
        if(!$checkIfUserHasOfferBefore){
            $bestOffer = BestOffer::Create(
                [
                    'user_id'=> $user_id,
                    'product_id' => $data['id'],
                    'price' => $data['offer'],
                ]
            );

        $user_name = User::select('user_name')->where('id',$user_id)->first();
        $message   = $user_name->user_name.' Made an offer on your product '.$product->title;
        // $user_id => from , $product->user_id => to
        NotificationRepository::generateNotification($user_id,$product->user_id,$data['id'],'offer',$message);
        $bestOffer = BestOffer::where('id',$bestOffer->id)->with('user')->first();
        if(!$checkIfUserHasOfferBefore){
            event(new MakeOfferEvent($bestOffer));
        }
        return $data == true ? true : false;
    }
    return false;
    }

    public function getOffers($product_id)
    {
        return BestOffer::where('product_id',$product_id)
                        ->where('decline',0)
                        ->where('acceptance',0)
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
            $notification = NotificationRepository::generateNotification($product->user_id,$response->user_id,$product->id,'offer',$message);
            $user_email = User::select('email')->where('id',$response->user_id)->first();
            event(new DeclineOfferEvent($user_email->email, $notification));
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
            $notification = NotificationRepository::generateNotification($product->user_id,$response->user_id,$product->id,'offer',$message);
            $cart = Cart::where('user_id',$response->user_id)->first();
            $store = new CartRepository($cart);
            $cart_product = $store->store($response->user_id,$product->id,$response->price);
            $user_email = User::where('id',$response->user_id)->select('email')->first();

            event(new AcceptOfferEvent($notification,$user_email->email));
            return true;
        }
        return false;
    }
}