<?php

namespace App\Repositories;
use App\Models\Subscription;
use App\Providers\RouteServiceProvider;


class SubscriptionRepository{

    protected $subscription;
    public function __construct(Subscription $subscription) {
        $this->subscription = $subscription;
    }

    public function store($request)
    {
       return Subscription::create([
            'title' => $request['title'],
            'fees'  => $request['fees'],
            'order' => $request['order'],
        ]);
    }
}