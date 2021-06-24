<?php

namespace App\Http\Controllers;

use App\Services\WishlistService;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    protected $wishlistService;

    public function __construct(WishlistService $wishlistService) {
        $this->wishlistService = $wishlistService;
    }

    public function getWishlist(Request $request,$type)
    {
        $data = $this->wishlistService->getWishlist($request->user()->id,$type);
        return response()->json($data);
    }
}
