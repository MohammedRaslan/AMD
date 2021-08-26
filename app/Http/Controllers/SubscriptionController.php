<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Services\SubscriptionService;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService) {
        $this->subscriptionService = $subscriptionService;
    }

    public function store(Request $request)
    {
        $data = $this->subscriptionService->store($request->all());
    }

    public function getCurrentSubscription(Request $request)
    {
       
        $subscription = $request->user()->subscription_type;
        return response()->json([
            'subscription' => Str::upper($subscription),
        ]);
    }

    public function getSubscriptions(Request $request){
        // dd($request->user());
        $columns = ['title', 'fees','order'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Subscription::select('id', 'title', 'fees', 'order')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%')
                ->orWhere('fees', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    }
}
