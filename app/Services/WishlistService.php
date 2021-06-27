<?php
namespace App\Services;

use App\Repositories\WishlistRepository;

class WishlistService{

    protected $wishlistRepository;

    public function __construct(WishlistRepository $wishlistRepository) {
        $this->wishlistRepository = $wishlistRepository;
    }

    
    public function getWishlist($user_id,$type)
    {
        return $this->wishlistRepository->getWishlist($user_id,$type);
    }

    public function destroy($user_id,$wishlist_id)
    {
        return $this->wishlistRepository->destroy($user_id,$wishlist_id);
    }
}