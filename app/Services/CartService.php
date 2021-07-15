<?php
namespace App\Services;

use App\Repositories\CartRepository;


class CartService{

    protected $cartRepository;

    public function __construct(CartRepository $cartRepository) {
        $this->cartRepository = $cartRepository;
    }

    public function add($user_id,$productId)
    {
        return $this->cartRepository->store($user_id,$productId);
    }

    public function remove($user_id,$productId)
    {
        $data = $this->cartRepository->remove($user_id,$productId);
        if($data == true){
            $response = $this->cartRepository->getCartProduct($user_id,$productId);
            $subtotal_total = $this->calculate($response);
            $applyNewCalculation = $this->cartRepository->saveCartTotal($user_id,$subtotal_total['subtotal'],$subtotal_total['total']);
            if($applyNewCalculation){
                return true;
            }
            return false;
        }
    }
    
    public function calculate($cart_products)
    {
        $subtotal = 0;
        $total = 0;
        foreach($cart_products as $product){
            $subtotal += $product->price * $product->quantity;
        }
        $total = $subtotal;
        return ['subtotal' => $subtotal, 'total'=> $total];
    }

    public function checkIfExist($user_id,$productId)
    {
        $data  = $this->cartRepository->checkIfExist($user_id,$productId);
        if(in_array($productId,$data['productInCart'])){
            return true;
        }
        return false;
    }

    public function getCartCount($user_id)
    {
        return $this->cartRepository->getCartCount($user_id);
    }

    public function getCartProducts($user_id)
    {
        $data = $this->cartRepository->getCartProducts($user_id);
        $recalculate = $this->calculate($data);
        $response = $this->cartRepository->saveCartTotal($user_id,$recalculate['subtotal'], $recalculate['total']);
        
        return ['cart_products'=>$data,'subtotal' => $recalculate['subtotal'], 'total' => $recalculate['total']];
    }

    public function bestOfferCheckUser($user_id,$productId)
    {
        return $this->cartRepository->bestOfferCheckUser($user_id,$productId);
    }

}