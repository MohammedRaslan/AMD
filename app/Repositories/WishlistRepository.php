<?php
namespace App\Repositories;

use App\Models\Product;
use App\Models\Wishlist;

class WishlistRepository{

    protected $wishlist;

    public function __construct( Wishlist $wishlist ) {
        $this->wishlist = $wishlist;
    }

    public function getWishlist($user_id,$type)
    {
        return Wishlist::where([['user_id',$user_id], ['type', $type ]])->with('product')->get();
        
    }

    public function destroy($user_id,$wishlist_id)
    {
        $wishlist = Wishlist::where([['user_id',$user_id], ['id',$wishlist_id]])->delete();
        if($wishlist){
            return true;
        }
        return false;
    }
}