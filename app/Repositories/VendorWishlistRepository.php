<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\VendorWhishList;

class VendorWishlistRepository{

    protected $wishlist;

    public function __construct( VendorWhishList $wishlist ) {
        $this->wishlist = $wishlist;
    }

    public function getVendorWishlist($user_id)
    {
        $vendors = VendorWhishList::where('user_id' , $user_id)->get();
        $vendorsWhishlist = [];
        foreach ($vendors as $vendor ) {
            $user = User::find($vendor->vendor_id);
            array_push($vendorsWhishlist , $user);
        }
        return $vendorsWhishlist;   
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