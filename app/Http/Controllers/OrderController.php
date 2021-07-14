<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class OrderController extends Controller
{
    public function TestPaypal()
    {
        $provider = new PayPalClient([]);
        $provider->getAccessToken();
        $order = $provider->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                0 => [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> "2.00"
                    ]
                ]
            ]
          ]);
        //   dd($order);
          $provider->capturePaymentOrder($order['id']);
    }
}
