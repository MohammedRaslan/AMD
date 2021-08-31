<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;


class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUsers(Request $request){
        // dd($request->user());
        $columns = ['first_name', 'last_name','email'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = User::select('id', 'first_name', 'last_name', 'email')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('first_name', 'like', '%' . $searchValue . '%')
                ->orWhere('last_name', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    }

    public function checkAdmin(Request $request)
    {
       if($request->user()->role == 0){
           return true;
       }
       return false;
    }

    public function checkUser($email)
    {
        $data = $this->userService->checkUser($email);
        return response()->json($data);
    }

    public function getUserInfo($id = null,Request $request)
    {
        if($id != null){
            $user = $this->userService->getUserInfo($id);
        }else{
            $user = $request->user();
        }
        return response()->json($user);
    }


    public function updateUserInfo(Request $request)
    {
        $response = $this->userService->updateUserInfo($request->user()->id, $request->all());
        return response()->json($response);
    }

    public function getUserShippingInfo(Request $request)
    {
        $response = $this->userService->getUserShippingInfo($request->user());
        return response()->json($response);
    }

    public function updateUserShippingInfo(Request $request)
    {
        $response = $this->userService->updateUserShippingInfo($request->all(),$request->user()->id);
        return response()->json($response);
    }

    public function addNewUserFromAdmin(Request $request)
    {
        $user = $this->userService->addNewUserFromAdmin($request->all());
        return response()->json($user);
    }

    public function edit(Request $request,$id)
    {
        $data = $this->userService->edit($request->all(),$id);
        return response()->json($data);
    }

    public function getUserId(Request $request)
    {
        $userId = $request->user()->id;
        return response()->json($userId);
    }

    public function getSellerDetails(Request $request)
    {
        $data = $this->userService->getSellerDetails($request->user()->id);
        return $data;
    }

    public function sellerDefault(Request $request)
    {
        $data = $this->userService->sellerDefault($request->all(),$request->user()->id);
        return response()->json($data);
    }

    public function getFirstName(Request $request)
    {
        $first_name = $request->user()->first_name;
        return response()->json([
            'first_name' => $first_name == null ? null : $first_name,
        ]);
    }
}
