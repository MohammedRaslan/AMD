<?php
namespace App\Services;

use App\Repositories\BestOfferRepository;

class BestOfferService{

    protected $bestOfferRepository;
    public function __construct(BestOfferRepository $bestOfferRepository) {
        $this->bestOfferRepository = $bestOfferRepository;
    }

    public function makeOffer($data,$user_id)
    {
        return $this->bestOfferRepository->makeOffer($data,$user_id);
    }

    public function getOffers($product_id)
    {
        return $this->bestOfferRepository->getOffers($product_id);
    }

    public function markAsView($offer_id)
    {
        return $this->bestOfferRepository->markAsView($offer_id);
    }

    public function decline($offer_id)
    {
        return $this->bestOfferRepository->decline($offer_id);
    }
}