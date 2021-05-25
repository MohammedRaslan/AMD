<?php
namespace App\Repositories;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;


class UserRepository{

    use RegistersUsers;
    
    protected $user;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function register($request)
    {
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'email'      => $request['email'],
            'password'   => bcrypt($request['password']),
            'phone'      => $request['phone'],
            'address'    => $request['address'],
            // 'subscription_id' => 1,
            'type' => 1,
            'role' => 1,
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;
        
        return ['user' => $user,'token' => $accessToken];
    }

    public function login($request)
    {
        if (!auth()->attempt($request)) {
            return ['message' => 'Invalid Credentials'];
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return ['token' => $accessToken];
    }
}