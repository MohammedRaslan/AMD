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
       $response = $this->productRepository->store($request,$images);
       return $response;
   }

   public function getData()
   {
       $data = $this->productRepository->getData();
       dd(collect($data));
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
}