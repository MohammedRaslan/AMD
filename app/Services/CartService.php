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

    private function calculateCheckout($cart_vendor_products)
    {
        $vendors = [];
        foreach ($cart_vendor_products as $key => $vendor ) {
            $subtotal = $this->calculate($vendor)['subtotal'];
            array_push($vendors , [
                'id' => $key,
                'total_vendor' => $subtotal,
                'paypal_account' => $cart_vendor_products[$key][0]->product->user->user_details->paypal_account,
                'paypal_account_id' => $cart_vendor_products[$key][0]->product->user->user_details->paypal_account_id,
            ]);
        }
        return $vendors;
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
        $allData = $this->cartRepository->getCartProducts($user_id);
        $data = $allData['cart_product'];
        $recalculate = $this->calculate($data);
        $vendors = $this->calculateCheckout($allData['cart_vendor_products']);
        $response = $this->cartRepository->saveCartTotal($user_id,$recalculate['subtotal'], $recalculate['total']);
        
        return ['cart_products'=>$data,'subtotal' => $recalculate['subtotal'], 'total' => $recalculate['total'] , 'vendors' =>$vendors];
    }

    public function bestOfferCheckUser($user_id,$productId)
    {
        return $this->cartRepository->bestOfferCheckUser($user_id,$productId);
    }

}