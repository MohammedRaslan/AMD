<?php
namespace  App\Services;

use App\Enums\ProductType;
use App\Repositories\ProductRepository;

use function PHPSTORM_META\map;

class ProductService{

   protected $productRepository;

   public function __construct(ProductRepository $productRepository) {
       $this->productRepository = $productRepository;
   }

   public function store($request)
   {
       $images = $this->exportImages($request['image']);
       $user_id = $request->user()->id;
       $response = $this->productRepository->store($request,$images,$user_id);
       return $response;
   }

   public function step_two($data)
   {
       return $this->productRepository->step_two($data);
   }

   public function getProductShipping($user_id, $product_id)
   {
       return $this->productRepository->getProductShipping($user_id, $product_id);
   }

   public function step_three($data)
   {    $id = $data['product_id'];
        $draft = $data['draft'];
        unset($data['draft']);
        return $this->productRepository->step_three($id,$draft,$data);
   }

   public function update($id, $request)
   {
       return $this->productRepository->update($id, $request);
   }

   public function checkUserProduct($user_id, $product_id)
   {
       return $this->productRepository->checkUserProduct($user_id, $product_id);
   }

   public function getData($user_id,$id)
   {
      return $this->productRepository->getData($user_id,$id);

   }

   public function exportImages($images)
   {
       $extraImages = [];
       if(count($images) > 1){
            for($i = 1; $i < count($images) ; $i++){
                $extraImages[] = $images[$i];
            }
            return $extraImages;
       }
       return null;
   }

   public function userProduct($id)
   {
       $data = $this->productRepository->getUserProducts($id);
       return $data;
   }

   public function userDraftedProduct($id)
   {
       $data = $this->productRepository->getUserDraftedProducts($id);
       return $data;
   }

   public function getUserOfferAndBidsProduct($user_id)
   {
       return $this->productRepository->getUserOfferAndBidsProduct($user_id);
   }

   public function getUserProductSold($user_id)
   {
       return $this->productRepository->getUserProductSold($user_id);
   }

   public function shopProducts()
   {
       return $this->productRepository->shopProducts();
   }

   public function getProduct($user_id,$id)
   {
       return $this->productRepository->getProduct($user_id,$id);
   }
   
   public function randomProducts()
   {
       return $this->productRepository->randomProducts();
   }

   public function changeStatus($user_id, $product_id)
   {
       return $this->productRepository->changeStatus($user_id,$product_id);
   }

   public function AddToWishlist($user_id,$product_id)
   {
       return $this->productRepository->AddToWishlist($user_id,$product_id);
   }

   public function AddToVendorWishlist($user_id,$vendor_id)
   {
       return $this->productRepository->AddToVendorWishlist($user_id,$vendor_id);
   }

   public function getUserProductActive($user_id)
   {
       return $this->productRepository->getUserProductActive($user_id);
   }
   
   public function getVendorProducts($user_id)
   {
       return $this->productRepository->getVendorProducts($user_id);
   }

//    public function getAllProductDataToUpdate($user_id,$product_id)
//    {
//        return $this->productRepository->getAllProductDataToUpdate($user_id,$product_id);
//    }

    public function storeRequestItem($user_id,$request)
    {
        $images = $this->exportImages($request['image']);
        return $this->productRepository->storeRequestItem($user_id,$request,$images);
    }

    public function deleteProduct($user_id,$product_id)
    {
        return $this->productRepository->deleteProduct($user_id,$product_id);
    }
   
}