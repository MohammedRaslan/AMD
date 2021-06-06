<?php
namespace  App\Services;

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

   public function getData()
   {
      return $this->productRepository->getData();

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

   public function shopProducts()
   {
       return $this->productRepository->shopProducts();
   }

   public function getProduct($id)
   {
       return $this->productRepository->getProduct($id);
   }
   
   
}