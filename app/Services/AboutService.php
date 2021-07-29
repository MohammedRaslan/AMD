<?php
namespace App\Services;

use App\Repositories\AboutRepository;

class AboutService{
    protected $aboutRepository;
    
     function __construct(AboutRepository $aboutRepository) {
        $this->aboutRepository = $aboutRepository;
    }

    public function store($data)
    {
        return $this->aboutRepository->store($data);
    }

    public function changeStatus($id)
    {
        return $this->aboutRepository->changeStatus($id);
    }

    public function getAllAbout()
    {
        return $this->aboutRepository->getAllAbout();
    }
}