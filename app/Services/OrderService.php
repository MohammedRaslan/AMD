<?php
namespace App\Services;

use App\Repositories\OrderRepository;


class OrderService{

    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    public function add($user,$shipping)
    {
        $order = $this->orderRepository->store($this->prossessOrder($user , $shipping['purchase_units'][0]['shipping']['address']));
        $this->moveFromCartToOrderProduct($user->cart , $order->id , $user->id);
        $user->cart->total=0;
        $user->cart->subtotal=0;
        $user->cart->save();

    }

    private function prossessOrder($user , $shipping)
    {
        return [
            'user_id' => $user->id,
            'username' => $user->user_name,
            'sku' => str_shuffle($shipping['address_line_1'] . ' ' .$shipping['admin_area_2'] . ' ' . $shipping['admin_area_1'] ),
            'phone' => $user->phone,
            'address' => $shipping['address_line_1'] . ' ' .$shipping['admin_area_2'] . ' ' . $shipping['admin_area_1'] ,
            'state' => $shipping['admin_area_1'],
            'city' => $shipping['admin_area_2'],
            'points' => 0,
            'status' => 1,

        ];
    }

    private function moveFromCartToOrderProduct($cart ,$orderId ,$user_id )
    {
        foreach ($cart->products as $product ) {
            $orderProduct = [
                'user_id' => $user_id,
                'cart_id' => $cart->id,
                'order_id' => $orderId,
                'product_id' => $product->id,
                'quantity' => $product->pivot->quantity,
                'price' => $product->price,
            ];
            $this->orderRepository->createOrderProduct($orderProduct);
            $product->delete();
        }
      

    }

  
}