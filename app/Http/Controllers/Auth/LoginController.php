<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function custom_login(Request $request)
    {
        // dd($request->email,$request);
        $verify = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        $token = Auth::user()->createToken('amdTokenAccess')->accessToken;
        if($verify){
            $user = User::where('email',$request->email)->first();
            return response()->json(['user'=>$user,'token'=>$token]);
        }else{
            return response()->json(['message' => 'Not Correct']);
        }
    }

    public function test(Request $request){
        dd($request->header('x-xsrf-token'));
    }
}