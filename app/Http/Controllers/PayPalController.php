<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PayPalController extends Controller
{

    public function Join_subscription(Request $request)
    {
        $order = $request->all();
        $user = User::where('email',$order['email'])->first();
        $user_id = $user->id;
        $transaction = Transaction::create([
            'orderID' => $order['orderID'],
            'type' => 'subscription',
            'order_body' => json_encode($order),
            'user_id' => $user_id,
        ]);
        $user->subscription_product_quantity = $order['quantity'];
        $user->subscription_type = Str::upper($order['subscription_name']);
        $user->subscription_duration = $order['type'];
        if($user->subscription_duration != NULL){
            if($order['type'] == 'monthly'){
                $user->subscription_end_at = Carbon::parse($user->subscription_end_at)->addMonth();
            }else{
                $user->subscription_end_at = Carbon::parse($user->subscription_end_at)->addMonths(13);
            }
        }elseif($user->subscription_duration == null){
            if($order['type'] == 'monthly'){
                $user->subscription_end_at = Carbon::now()->addMonth();
            }else{
                $user->subscription_end_at = Carbon::now()->addMonths(13);
            }
        }
       
        if($user->save()){
            return response()->json([
                'status_api' => true,
            ]);
        }
        return response()->json([
            'status_api' => false,
        ]);

    }

    public function cancel_subscsription(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->subscription_product_quantity = 50;
        $user->subscription_type = 'FREE';
        $user->subscription_duration = 'monthly';
        $user->subscription_end_at = now()->addMonth();
        $user->user_product_quantity = 0;
        if($user->save()){
            return response()->json([
                'status' => true,
            ]);
        }
        return response()->json([
            'status' => false,
        ]);
    }
}
