<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
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
        if($order['type'] == 'monthly'){
            $user->subscription_end_at = now()->addMonth();
        }else{
            $user->subscription_end_at = now()->addMonths(13);
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
}
