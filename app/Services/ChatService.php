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

    public function getMessages($product_id)
    {
        return $this->chatRepository->getMessages($product_id);
    }
}