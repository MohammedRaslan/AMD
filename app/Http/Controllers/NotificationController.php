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

    public function getAllNotification(Request $request)
    {
        $response = $this->notificationService->getAllNotification($request->user()->id);
        return response()->json($response);
    }

    public function markOneAsRead(Request $request,$notification_id)
    {
        $response = $this->notificationService->markOneAsRead($request->user()->id,$notification_id);
        return response()->json($response);
    }
    public function delete(Request $request,$notification_id)
    {
        $response = $this->notificationService->delete($request->user()->id,$notification_id);
        return response()->json($response);
    }
}
