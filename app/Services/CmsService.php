<?php
namespace App\Services;

use App\Repositories\CmsRepository;

class CmsService{
    protected $cmsRepository;
    public function __construct(CmsRepository $cmsRepository) {
        $this->cmsRepository = $cmsRepository;
    }

    public function store($data)
    {
        return $this->cmsRepository->store($data);
    }

    public function getAllCms()
    {
        return $this->cmsRepository->getAllCms();
    }

    public function getSingleCms($type)
    {
        return $this->cmsRepository->getSingleCms($type);
    }
}