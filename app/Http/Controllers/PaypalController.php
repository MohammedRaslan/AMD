<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaypalController extends Controller
{
    public function getOrder(Request $request)
    {
        print_r($request->all());
    }
}
