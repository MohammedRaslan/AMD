<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }


    public function add(Request $request, $ProductId)
    {
        $data = $this->cartService->add($request->user()->id,$ProductId);
        return response()->json($data);
    }

    public function remove(Request $request, $ProductId)
    {
        $data = $this->cartService->remove($request->user()->id,$ProductId);
        return response()->json($data);
    }

    public function checkIfExist(Request $request, $ProductId)
    {
        $data = $this->cartService->checkIfExist($request->user()->id,$ProductId);
        return response()->json($data);
    }

    public function getCartCount(Request $request)
    {
        $data = $this->cartService->getCartCount($request->user()->id);
        return response()->json($data);
    }

    public function getCartProducts(Request $request)
    {
        $data = $this->cartService->getCartProducts($request->user()->id);
        return response()->json($data);
    }
}
