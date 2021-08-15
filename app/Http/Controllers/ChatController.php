<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChatService;

class ChatController extends Controller
{
    protected $chatService;
    public function __construct(ChatService $chatService) {
        $this->chatService = $chatService;
    }

    public function store(Request $request)
    {
        $response = $this->chatService->store($request->all(),$request->user()->id);
        return response()->json($response);
    }

    public function getMessages($product_id)
    {
        $response = $this->chatService->getMessages($product_id);
        return response()->json($response);
    }
}
