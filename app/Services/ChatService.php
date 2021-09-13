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
        return $this->chatRepository->getAllChat($user_id);
    }
}