<?php
namespace App\Services;

use App\Repositories\FaqRepository;

class FaqService{
    protected $faqRepository;
    public function __construct(FaqRepository $faqRepository) {
        $this->faqRepository = $faqRepository;
    }

    public function store($data)
    {
        return $this->faqRepository->store($data);
    }

    public function changeStatus($id)
    {
        return $this->faqRepository->changeStatus($id);
    }

    public function getAllFaqs()
    {
        return $this->faqRepository->getAllFaqs();
    }
}