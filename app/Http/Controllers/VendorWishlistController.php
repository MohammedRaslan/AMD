<?php

namespace App\Http\Controllers;

use App\Services\VendorWishlistService;
use Illuminate\Http\Request;

class VendorWishlistController extends Controller
{
    protected $vendorWishlistService;

    public function __construct(VendorWishlistService $vendorWishlistService) {
        $this->vendorWishlistService = $vendorWishlistService;
    }

    public function getVendorWishlist(Request $request)
    {
        $data = $this->vendorWishlistService->getVendorWishlist($request->user()->id);
        return response()->json($data);
    }

    public function destroy(Request $request,$id)
    {
        $response = $this->vendorWishlistService->destroy($request->user()->id,$id);
        return response()->json($response);
    }
}
