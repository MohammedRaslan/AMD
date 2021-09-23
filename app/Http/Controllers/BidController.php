<?php

namespace App\Http\Controllers;

use App\Events\BiddingEvent;
use App\Services\BidService;
use Illuminate\Http\Request;

class BidController extends Controller
{
    protected $bidService;
    public function __construct(BidService $bidService) {
        $this->bidService = $bidService;
    }

    public function store(Request $request)
    {
        $response = $this->bidService->store($request->all(),$request->user()->id);
        if($response){
            event(new BiddingEvent($response));
        }
        return response()->json($response);
    }

    public function getHistory(Request $request , $bid_id)
    {
        return response()->json($this->bidService->getHistory($request->user()->id , $bid_id));

    }
}
