<?php

namespace App\Http\Controllers\Auth;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }


    public function register(RegisterRequest $request)
    {
        $data = $this->userService->saveUserData($request);
        
        return response(['user' => $data['user'] , 'access_token' => $data['token']]);
    }

    public function getCountries()
    {
        return response()->json($this->userService->getCountries());
    }
}
