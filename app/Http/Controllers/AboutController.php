<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutService;
    public function __construct(AboutService $aboutService) {
        $this->aboutService = $aboutService;
    }


    public function getAbouts(Request $request){
        $columns = ['title', 'order','status'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = About::select('id', 'title', 'order', 'status')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    }

    public function store(AboutRequest $request)
    {
        $response = $this->aboutService->store($request->all());
        return response()->json($response);
    }

    public function changeStatus($id)
    {
        $response = $this->aboutService->changeStatus($id);
        return response()->json($response);
    }

    public function getAllAbout()
    {
          $response = $this->aboutService->getAllAbout();
          return response()->json($response);
    }
}
