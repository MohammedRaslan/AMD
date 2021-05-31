<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function store(CreateProductRequest $request)
    {
        $data = $this->productService->store($request);
        return response()->json($data);
    }

    public function getProductData()
    {
        $data = $this->productService->getData();
        return response()->json($data);
    }
}
