<?php
namespace App\Services;

use App\Repositories\NotificationRepository;

class NotificationService{

    protected $notificationRepository;
    public function __construct(NotificationRepository $notificationRepository) {
        $this->notificationRepository = $notificationRepository;
    }

    public function generateNotification($user_id,$product_id,$type,$message)
    {
        return $this->notificationRepository->generateNotification($user_id,$product_id,$type,$message);
    }

    public function new($user_id)
    {
        return $this->notificationRepository->new($user_id);
    }

    public function markAllAsRead($user_id)
    {
        return $this->notificationRepository->markAllAsRead($user_id);
    }

    public function getAllNotification($user_id)
    {
        return $this->notificationRepository->getAllNotification($user_id);
    }

    public function markOneAsRead($user_id, $notification_id)
    {
        return $this->notificationRepository->markOneAsRead($user_id,$notification_id);
    }

    public function delete($user_id, $notification_id)
    {
        return $this->notificationRepository->delete($user_id,$notification_id);
    }
}