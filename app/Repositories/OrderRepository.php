<?php
namespace App\Repositories;

use App\Models\Order;
use App\Models\Order_Product;

class OrderRepository{

    protected $order;

    public function __construct( Order $order ) {
        $this->order = $order;
    }

    public function store($data)
    {
        $order = $this->order->create($data);
        return $order;
    }

    public function createOrderProduct($product)
    {
        $orderProduct = new Order_Product();
        $orderProduct->user_id = $product['user_id'];
        $orderProduct->cart_id = $product['cart_id'];
        $orderProduct->order_id = $product['order_id'];
        $orderProduct->product_id = $product['product_id'];
        $orderProduct->price = $product['price'];
        $orderProduct->quantity = $product['quantity'];
        $orderProduct->save();
    }

  
}