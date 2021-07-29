<?php

namespace App\Http\Controllers;

use App\Services\CmsService;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    protected $cmsService;
    public function __construct(CmsService $cmsService) {
        $this->cmsService = $cmsService;
    }
    public function store(Request $request)
    {
        $response = $this->cmsService->store($request->all());
        return response()->json($response);
    }

    public function getAllCms()
    {
        $response = $this->cmsService->getAllCms();
        return response()->json($response);
    }

    public function getSingleCms($type)
    {
        $response = $this->cmsService->getSingleCms($type);
        return response()->json($response);
    }
}
