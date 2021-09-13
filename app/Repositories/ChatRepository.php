<?php
namespace App\Repositories;

use App\Models\Chat;
use App\Models\Product;
use App\Events\ChatEvent;
use Illuminate\Support\Facades\DB;

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

    public function getMessages($user_id,$product_id)
    {
        $product = Product::find($product_id);
        if($product->user_id == $user_id){
            $messages = Chat::where('product_id',$product_id)
            ->where('status',1)
            ->with('user_to')->with('user_from')
            ->orderBy('created_at','desc')->take(5)
            ->get();
        }else{
            $messages = Chat::where('product_id',$product_id)
                          ->where('status',1)->where('user_id_from',$user_id)
                          ->with('user_to')->with('user_from')
                          ->orderBy('created_at','desc')->take(5)
                          ->get();
        }
        return $messages;
    }

    public function getAllChat($user_id)
    {   
        // $chats = Chat::select('user_id_from','user_id_to','product_id','message')
        //               ->where('user_id_from',$user_id)
        //               ->orwhere('user_id_to',$user_id)->distinct('product_id')
        //               ->get()->toArray();
        // dd($chats);
    }
}