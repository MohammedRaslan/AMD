<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Cart_Product;
use App\Models\Product;
use App\Models\User;

class CartRepository{

    protected $cart;

    public function __construct( Cart $cart ) {
        $this->cart = $cart;
    }

    public function store($user_id,$productId)
    {
        $cart = Cart::where('user_id',$user_id)->first();
        $productPrice = Product::select('price')->where('id',$productId)->first();
       
        $cartProduct = Cart_Product::create([
            'user_id' => $user_id,
            'cart_id' => $cart->id,
            'product_id' => $productId,
            'price' => $productPrice->price,
            'quantity' => 1,
        ]);
        if($cartProduct){
            $cart->subtotal += $productPrice->price;
            $cart->total += $productPrice->price;
            if($cart->save()){
                return true;
            }
        }
        return false;
    }

    public function remove($user_id,$productId)
    {
        $cart = Cart::select('id')->where('user_id',$user_id)->first();
        $deleted = Cart_Product::where('cart_id',$cart->id)
                                ->where('user_id',$user_id)
                                ->where('product_id',$productId)
                                ->delete();
        if ($deleted){
            return true;
        }
        return false;
    }

    public function getCartProduct($user_id,$productId)
    {
        return Cart_Product::where('user_id',$user_id)->where('product_id',$productId)->get();
    }

    public function saveCartTotal($user_id,$subtotal,$total)
    {
        $cart = Cart::where('user_id',$user_id)->first();
        $cart->subtotal = $subtotal;
        $cart->total = $total;
        if($cart->save()){
            return true;
        }
        return false;
    }

    public function checkIfExist($user_id)
    {
        $user = User::where('id',$user_id)->with('cart')->first();
        $productInCart =  $user->cart->products->pluck('id')->toArray();
        return ['productInCart'=>$productInCart];
    }

    public function getCartCount($user_id)
    {
        $cart  = Cart::select('id')->where('user_id',$user_id)->first();
        return Cart_Product::where('cart_id',$cart->id)->where('user_id',$user_id)->count();
    
    }
}