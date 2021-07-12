<?php

namespace App\Http\Controllers;

use App\Services\BestOfferService;
use Illuminate\Http\Request;

class BestOfferController extends Controller
{

    protected $bestOfferService;
    public function __construct(BestOfferService $bestOfferService) {
        $this->bestOfferService = $bestOfferService;
    }


    public function makeOffer(Request $request)
    {
        $data = $this->bestOfferService->makeOffer($request->all(),$request->user()->id);
        return response()->json($data);
    }

    public function getOffers($product_id)
    {
        $data = $this->bestOfferService->getOffers($product_id);
        return response()->json($data);
    }

    public function markAsView($offer_id)
    {
        $data = $this->bestOfferService->markAsView($offer_id);
        return response()->json($data);
    }

    public function decline($offer_id)
    {
        $data = $this->bestOfferService->decline($offer_id);
        return response()->json($data);
    }

    public function accept($offer_id)
    {
        $data = $this->bestOfferService->accept($offer_id);
        return response()->json($data);
    }
}
