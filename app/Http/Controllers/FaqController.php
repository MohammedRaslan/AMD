<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Services\FaqService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $faqService;
    public function __construct(FaqService $faqService) {
        $this->faqService = $faqService;
    }

    public function getFaqs(Request $request){
        // dd($request->user());
        $columns = ['title', 'order','status'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Faq::select('id', 'title', 'order', 'status')->orderBy($columns[$column], $dir);

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
        $response = $this->faqService->store($request->all());
        return response()->json($response);
    }

    public function changeStatus($id)
    {
        $response = $this->faqService->changeStatus($id);
        return response()->json($response);
    }

    public function getAllFaqs()
    {
        $response = $this->faqService->getAllFaqs();
        return response()->json($response);
    }
    
}
