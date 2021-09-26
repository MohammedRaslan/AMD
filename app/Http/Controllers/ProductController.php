<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\ProductStepThreeRequest;
use App\Http\Requests\ProductStepTwoRequest;
use App\Http\Requests\StoreRequestItemRequest;
use App\Models\Product;

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

    public function step_two(ProductStepTwoRequest $request)
    {
        $data = $this->productService->step_two($request->all());
        return response()->json($data);
    }

    public function step_three(ProductStepThreeRequest $request)
    {
        $data = $this->productService->step_three($request->all());
        return response()->json($data);
    }

    public function getProductData(Request $request,$id = null)
    {
        $data = $this->productService->getData($request->user()->id , $id);
        return response()->json($data);
    }

    public function update(Request $request ,$id)
    {
        $data = $this->productService->update($id, $request->all());
        return response()->json($data);
    }

    public function getUserProduct(Request $request)
    {
        $data = $this->productService->userProduct($request->user()->id);
        return response()->json($data);
    }

    public function getUserProductDrafted(Request $request)
    {
        $data = $this->productService->userDraftedProduct($request->user()->id);
        return response()->json($data);
    }

    public function getUserOfferAndBidsProduct(Request $request)
    {
        $response = $this->productService->getUserOfferAndBidsProduct($request->user()->id);
        return response()->json($response);
    }

    public function getUserProductSold(Request $request)
    {
        $response = $this->productService->getUserProductSold($request->user()->id);
        return response()->json($response);
    }

    public function getProduct(Request $request, $id)
    {
        $data = $this->productService->getProduct($request->user()->id,$id);
        return response()->json($data);
    }


    public function getProductShipping(Request $request, $product_id)
    {
        $data = $this->productService->getProductShipping($request->user()->id, $product_id);
        return response()->json($data);
    }

    public function randomProducts()
    {
        $data = $this->productService->randomProducts();
        return response()->json($data);
    }

    public function checkUserProduct(Request $request, $id)
    {
        $data = $this->productService->checkUserProduct($request->user()->id, $id);
        return response()->json($data);
    }

    public function changeStatus(Request $request, $id)
    {
        $data = $this->productService->changeStatus($request->user()->id, $id);
        return response()->json($data);
    }

    public function AddToWishlist(Request $request, $product_id)
    {
        $response = $this->productService->AddToWishlist($request->user()->id,$product_id);
        return response()->json($response);
    }

    public function AddToVendorWishlist(Request $request, $vendor_id)
    {
        $response = $this->productService->AddToVendorWishlist($request->user()->id,$vendor_id);
        return response()->json($response);
    }

    public function getUserProductActive(Request $request)
    {
        $data = $this->productService->getUserProductActive($request->user()->id);
        return response()->json($data);
    }
    public function getVendorProducts($user_id)
    {
        $data = $this->productService->getVendorProducts($user_id);
        return response()->json($data);
    }

    // public function getAllProductDataToUpdate(Request $request,$product_id)
    // {
    //     $response = $this->productService->getAllProductDataToUpdate($request->user()->id,$product_id);
    //     return response()->json($response);
    // }

    public function getProducts(Request $request){
        // dd($request->user());
        $columns = ['sku','title','brand','price','best_offer','user_id','status'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Product::select('id','sku','title', 'brand','price','best_offer','user_id','status')->with('user')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    }

    public function storeRequestItem(StoreRequestItemRequest $request)
    {
        $response = $this->productService->storeRequestItem($request->user()->id,$request->all());
        return response()->json($response);
    }

    public function delete(Request $request ,$product_id)
    {
        $response = $this->productService->deleteProduct($request->user()->id,$product_id);
        return response()->json($response);
    }


    public function requestedProduct(Request $request)
    {
        $data = $this->productService->requestedProduct($request->user()->id);
        return response()->json($data);
    }
}
