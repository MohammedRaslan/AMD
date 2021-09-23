<?php
namespace App\Repositories;

use App\Models\VendorWhishList;

class VendorWishlistRepository{

    protected $wishlist;

    public function __construct( VendorWhishList $wishlist ) {
        $this->wishlist = $wishlist;
    }

    public function getVendorWishlist($user_id)
    {
        return dd(VendorWhishList::where('user_id' , $user_id)->with('vendors')->get());   
    }

    public function destroy($user_id,$vendorWishlist_id)
    {
        $wishlist = VendorWhishList::where([['user_id',$user_id], ['id',$vendorWishlist_id]])->delete();
        if($wishlist){
            return true;
        }
        return false;
    }
}