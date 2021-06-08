<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Services\UserService;


class LoginController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function custom_login(LoginRequest $request)
    {
        $data = $this->userService->login($request);
        if(array_key_exists('message',$data)){
            return response(['message' => $data['message']]);
        }
        return response(['user' => $data['user'], 'access_token' => $data['token']]);
    }
}
