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

    public function getUserInfo($id)
    {
        $user = $this->userService->getUserInfo($id);
        return response()->json($user);
    }

    public function edit(Request $request,$id)
    {
        $data = $this->userService->edit($request->all(),$id);
        return response()->json($data);
    }
}
