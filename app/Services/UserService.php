<?php
namespace App\Services;

use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserService{
    use AuthorizesRequests,  ValidatesRequests;

    protected $userRepository;
    
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function saveUserData($request)
    {
        $result = $this->userRepository->register($request->all());
        return $result;
    }

    public function login($request)
    {
        $logged = $this->userRepository->login($request->all());
        return $logged;
    }

    public function verifyMail($email)
    {
        return $this->userRepository->verifyMail($email);
    }

    public function verifyCode($code,$email)
    {
        return $this->userRepository->verifyCode($code,$email);
    }

    public function checkUser($email)
    {
        return $this->userRepository->checkUser($email);
    }

    public function getUserInfo($id)
    {
        return $this->userRepository->getUserInfo($id);
    }

    public function addNewUserFromAdmin($request)
    {
        return $this->userRepository->addNewUserFromAdmin($request);
    }

    public function edit($data,$id)
    {
        return $this->userRepository->edit($data,$id);
    }

    public function getCountries()
    {
        return $this->userRepository->getCountries();
    }

    public function getSellerDetails($user_id)
    {
        return $this->userRepository->getSellerDetails($user_id);
    }

    public function sellerDefault($data,$user_id)
    {
        return $this->userRepository->sellerDefault($data,$user_id);
    }
    

}