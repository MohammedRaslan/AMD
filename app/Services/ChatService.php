<?php
namespace App\Services;

use App\Repositories\ChatRepository;

class ChatService{

    protected $chatRepository;
    public function __construct(ChatRepository $chatRepository) {
        $this->chatRepository = $chatRepository;
    }

    public function store($request,$user_id_from)
    {
        return $this->chatRepository->store($request,$user_id_from);
    }

    public function getMessages($user_id,$product_id)
    {
        return $this->chatRepository->getMessages($user_id,$product_id);
    }

    public function getAllChat($user_id)
    {
        $chats = $this->chatRepository->getAllChat($user_id);
        $uniqeChats = [];
        foreach ($chats as $chat ) {
            $isAdded = false;
            foreach ($uniqeChats as $uniqeChat ) {
                if ($uniqeChat->user_id_from == $chat->user_id_to && $uniqeChat->user_id_to == $chat->user_id_from && $uniqeChat->product_id == $chat->product_id) {
                    $isAdded =true;
                    break;
                }
            }
            if (!$isAdded) {
                array_push($uniqeChats , $chat);
            }
        }
        return $uniqeChats;
    }
    public function getChat($chat_id)
    {
        return $this->chatRepository->getChat($chat_id);
    }
    
    public function archiveChat($chat_id)
    {
        return $this->chatRepository->archiveChat($chat_id);
    }
}