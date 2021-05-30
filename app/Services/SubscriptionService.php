<?php
namespace App\Services;

use App\Repositories\SubscriptionRepository;


class SubscriptionService{

    protected $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository) {
        $this->subscriptionRepository = $subscriptionRepository;
    }


    public function store($request)
    {
        $data = $this->subscriptionRepository->store($request);
        dd($data);
    }
}