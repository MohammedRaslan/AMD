<?php
namespace App\Services;

use App\Repositories\VendorWishlistRepository;

class VendorWishlistService{

    protected $wishlistRepository;

    public function __construct(VendorWishlistRepository $wishlistRepository) {
        $this->wishlistRepository = $wishlistRepository;
    }

    
    public function getVendorWishlist($user_id)
    {
        return $this->wishlistRepository->getVendorWishlist($user_id );
    }

    public function destroy($user_id,$wishlist_id)
    {
        return $this->wishlistRepository->destroy($user_id,$wishlist_id);
    }
}