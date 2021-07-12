<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notificationService;
    public function __construct(NotificationService $notificationService) {
        $this->notificationService = $notificationService;
    }

    public function new(Request $request)
    {
        $data = $this->notificationService->new($request->user()->id);
        return response()->json($data);
    }

    public function markAllAsRead(Request $request)
    {
        $response = $this->notificationService->markAllAsRead($request->user()->id);
        return response()->json($response);
    }
}
