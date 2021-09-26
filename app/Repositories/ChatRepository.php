<?php
namespace App\Repositories;

use App\Models\Chat;
use App\Models\Product;
use App\Events\ChatEvent;
use App\Events\MessageEvent;
use App\Events\PrivateChatEvent;
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
            'private' => $request['private'],
        ]);

        if($chatMessage && $request['private'] == 0){ // public
            event(new ChatEvent($this->chat->where('id',$chatMessage->id)->with('user_to')->with('user_from')->first()));
            event(new PrivateChatEvent($this->chat->where('id',$chatMessage->id)->with('user_to')->with('user_from')->first()));
        }elseif($chatMessage && $request['private'] == 1){ // Private
            event(new PrivateChatEvent($this->chat->where('id',$chatMessage->id)->with('user_to')->with('user_from')->first()));
        }
        event(new MessageEvent($chatMessage->user_to));
        return $chatMessage;
    }

    public function getMessages($user_id,$product_id)
    {
        $product = Product::find($product_id);
        if($product->user_id == $user_id){
            $messages = Chat::where('product_id',$product_id)
            ->where('status',1)->where('private',0)
            ->with('user_to')->with('user_from')
            ->orderBy('created_at','desc')->take(10)
            ->get();
        }else{
            $messages = Chat::where('product_id',$product_id)
                          ->where('status',1)->where('user_id_from',$user_id)
                          ->with('user_to')->with('user_from')
                          ->orderBy('created_at','desc')->take(10)
                          ->get();
        }
        return $messages;
    }

    public function getAllChat($user_id)
    {   
        return Chat::select('id','user_id_from','user_id_to','product_id','created_at' , 'status')
                      ->where('user_id_from',$user_id)
                      ->orwhere('user_id_to',$user_id)
                      ->where('status',1)
                      ->groupBy('user_id_to','user_id_from','product_id')
                      ->with('user_to')->with('user_from')->with('product')
                      ->get();
                      
     
    }

    public function getChat($chat_id)
    {
        $chatParameters = Chat::select('user_id_from','user_id_to','product_id')
                              ->where('id',$chat_id)
                              ->where('status',1)
                              ->first();
                              
        return Chat::select('id','user_id_from','user_id_to','product_id','message','created_at')
                         ->where('status',1)
                         ->where([
                             ['user_id_from',$chatParameters->user_id_from],
                             ['user_id_to', $chatParameters->user_id_to],
                             ['product_id',$chatParameters->product_id]
                            ])->orwhere([
                             ['user_id_from',$chatParameters->user_id_to],
                             ['user_id_to', $chatParameters->user_id_from],
                             ['product_id',$chatParameters->product_id]
                             ])->with('user_to')->with('user_from')->with('product')->orderBy('created_at','asc')->get();
                  

    }


    public function archiveChat($id)
    {
        $chat = Chat::find($id);
         if ($chat) {
            $chat->status = 0;
            $chat->save();
            return true;
        }
        return false;
    }
}