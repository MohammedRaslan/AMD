<?php
namespace App\Repositories;

use App\Models\Notification;

class NotificationRepository{

   protected $notification;

   public function __construct(Notification $notification) {
       $this->notification = $notification;
   }

   public static function generateNotification($from,$to,$product_id,$type,$message)
   {
       $response = Notification::create([
           'type' => $type,
           'from' => $from,
           'to'  => $to,
           'message' => $message,
           'product_id' => $product_id,
       ]);
       return $response == true ? true : false;
   }

   public function new($user_id)
   {
       $count = Notification::where('to',$user_id)->where('seen',0)->count();
       $notifications = Notification::where('to',$user_id)->where('seen',0)->with('product')->get();
        return ['count' => $count, 'notifications' => $notifications];
   }

   public function markAllAsRead($user_id)
   {
        $response = Notification::where('to',$user_id)->where('seen',0)->update(['seen'=>1]);
        return $response == true ? true : false;
   }
}