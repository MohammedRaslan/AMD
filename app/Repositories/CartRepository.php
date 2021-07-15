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

    public function store($user_id,$productId,$offerPrice = null)
    {
        $cart = Cart::where('user_id',$user_id)->first();
        $product = Product::find($productId);
        if($product->status == 0){
            return false;
        }
        
        if($offerPrice){    
            $product->status = 0;
            $product->save();
        }
        $cartProduct = Cart_Product::create([
            'user_id' => $user_id,
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'price' =>  $offerPrice == null ? $product->price : $offerPrice ,
            'quantity' => 1,
        ]);
        if($cartProduct){
            $cart->subtotal += $offerPrice == null ? $product->price : $offerPrice;
            $cart->total += $offerPrice == null ? $product->price : $offerPrice;
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

    public function getCartProducts($user_id)
    {
        $cart = Cart::select('id')->where('user_id',$user_id)->first();
        $cart_products = Cart_Product::where('user_id',$user_id)->where('cart_id',$cart->id)->with('product')->get(); // Where Status 1 From Model 
    
        $cart_products = $this->CheckIfProductIsUnAvailable($cart_products,$user_id);
      
        return $cart_products;
    }


    public function CheckIfProductIsUnAvailable($cart_products,$user_id)
    {
        $data = [];
        foreach($cart_products as $cart_product){
            
            if($cart_product->product->status == 0){
                if($cart_product->product->best_offer == 1 && $cart_product->product->offerAccepted($user_id) != null){
                    $data[] = $cart_product;
                }else{
                    $cart_product->delete();
                }
            }else{
                $data[] = $cart_product;
            }
        }
        return $data;
    }

    public function bestOfferCheckUser($user_id,$productId)
    {
        $product = Product::find($productId);
        $acceptance = $product->offerAccepted($user_id);
        return $acceptance == true ? true : false;
    }
}