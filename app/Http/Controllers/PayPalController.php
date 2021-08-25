<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function Join_subscription(Request $request)
    {
        print_r($request->all());
    }
}
