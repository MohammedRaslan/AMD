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

       $new_one = Notification::where('id',$response->id)->with('product')->first();
       return $new_one ;
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

   public function getAllNotification($user_id)
   {
       $notifications = Notification::where('to',$user_id)->with('user_from')->orderBy('created_at','desc')->paginate(5);
       return $notifications;
   }

   public function markOneAsRead($user_id,$notification_id)
   {
        $notification = Notification::where('to',$user_id)->where('id',$notification_id)->update(['seen'=>1]);
        return $notification == true ? true : false;
   }

   public function delete($user_id,$notification_id)
   {
        $notification = Notification::where('to',$user_id)->where('id',$notification_id)->delete();
        return $notification == true ? true : false;
   }

}