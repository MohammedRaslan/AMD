<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\Country;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserRepository{

    use RegistersUsers;
    
    protected $user;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(User $user) {
        $this->user = $user;
    }
    public function getCountries()
    {
        return Country::select('name')->get();
    }


    public function register($request)
    {
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'user_name' => $request['user_name'],
            'email'      => $request['email'],
            'password'   => bcrypt($request['password']),
            'phone'      => $request['phone'],
            'country'    => $request['country'],
            'type' => 1,
            'role' => 1,
        ]);
        $userData = [
            'name' => $user->user_name,
            'email' => $user->email,
        ];
        $accessToken = $user->createToken('authToken')->accessToken;
        
        return ['user' => $userData,'token' => $accessToken];
    }

    public function login($request)
    {
        if( str_contains($request['email'],'@')){
            if (!auth()->attempt($request)) {
                return ['message' => 'Invalid Credentials'];
            }
        }else{
            $user = User::where('user_name',$request['email'])->first();
            if(!Hash::check($request['password'], $user->password)){
                return ['message' => 'Invalid Credentials'];
            }
        }
        $userData = [
            'name' => auth()->user() == null? $user->user_name : auth()->user()->user_name,
            'email' => auth()->user() == null? $user->email : auth()->user()->email,
        ];
        $this->checkIfUserHasDetails(auth()->user() == null? $user->id : auth()->user()->id);
        if(auth()->user()){
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
        }else{
            $accessToken = $user->createToken('authToken')->accessToken;
        }
        return ['user' => $userData,'token' => $accessToken];
    }

    public function checkIfUserHasDetails($user_id)
    {
        $user = User::where('id',$user_id)->with('user_details')->first();
        if($user->user_details != NULL){
            return true;
        }
        UserDetail::create([
            'user_id' => $user->id,
        ]);
    }

    public function checkUser($email)
    {
        $user = User::where('email',$email)->first();
        if($user){
            return true;
        }
        return false;
    }

    public function getUserInfo($id)
    {
        $user = User::findOrFail($id);
        return $user != NULL ? $user : false;
    }

    public function addNewUserFromAdmin($request)
    {
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'user_name' => $request['user_name'],
            'email'      => $request['email'],
            'password'   => bcrypt($request['password']),
            'phone'      => $request['phone'],
            'role' => $request['role'],
            'type' => 1,
        ]);
        $userData = [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,

        ];
        $accessToken = $user->createToken('authToken')->accessToken;
        return $userData;
    }

    public function edit($data,$id)
    {
        $user = User::find($id);
        if(!$user){
            return false;
        }
        $user->user_name = $data['user_name'];
        $user->first_name = $data['first_name'];
        $user->last_name  = $data['last_name'];
        $user->email = $data['email'];
        $user->role = $data['role'];
        $user->password = bcrypt($data['password']);
        if($user->save()){
            return true;
        }
    }
}