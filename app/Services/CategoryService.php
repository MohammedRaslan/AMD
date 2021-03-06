<?php
namespace  App\Services;

use App\Repositories\CategoryRepository;


class CategoryService{

    protected $categoryRepository;
 
    public function __construct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }


    public function store($data)
    {
        return $this->categoryRepository->store($data);
    }

    public function changeStatus($id)
    {
        return $this->categoryRepository->changeStatus($id);
    }

    public function get($flag)
    {
        return $this->categoryRepository->get($flag);
    }
    
    public function getCategory($id)
    {
        return $this->categoryRepository->getCategory($id);
    }

    public function categoryProducts($user_id,$id)
    {
        return $this->categoryRepository->categoryProducts($user_id,$id);
    }
}


