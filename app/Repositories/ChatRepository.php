<?php
namespace App\Repositories;

use App\Events\ChatEvent;
use App\Models\Chat;

class ChatRepository{

    protected $chat;
    public function __construct(Chat $chat) {
        $this->chat = $chat;
    }

    public function store($request,$user_id_from)
    {
        $chatMessage = $this->chat->create([
            'user_id_from' => $user_id_from,
            'user_id_to' => $request['user_id_to'],
            'product_id' => $request['product_id'],
            'message' => $request['message'],
        ]);

        if($chatMessage){
            event(new ChatEvent($this->chat->where('id',$chatMessage->id)->with('user_to')->with('user_from')->first()));
        }
        return $chatMessage;
    }

    public function getMessages($product_id)
    {
        return Chat::where('product_id',$product_id)
                          ->where('status',1)
                          ->with('user_to')->with('user_from')
                          ->orderBy('created_at','desc')->take(5)
                          ->get();
    }
}