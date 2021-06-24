<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }


    public function getCategories(Request $request){
        // dd($request->user());
        $columns = ['title', 'order','status'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Category::select('id', 'title', 'order', 'status')->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    }

    public function store(Request $request)
    {
        return $this->categoryService->store($request->all());
    }

    public function changeStatus($id)
    {
        return $this->categoryService->changeStatus($id);
    }

    public function get(Request $request)
    {
        $data = $this->categoryService->get();
        return response()->json($data);
    }

    public function categoryProducts(Request $request,$id)
    {
        $user_id = $request->user() != null ? $request->user()->id : null;
        $data = $this->categoryService->categoryProducts($user_id,$id);
        return response()->json($data);
    }

}
