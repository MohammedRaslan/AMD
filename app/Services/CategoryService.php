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
}


