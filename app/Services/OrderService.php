<?php
namespace App\Services;

use App\Repositories\OrderRepository;


class OrderService{

    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    public function add($user_id,$productId)
    {
        return $this->orderRepository->store($user_id,$productId);
    }

  
}