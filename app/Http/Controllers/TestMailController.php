<?php

namespace App\Http\Controllers;
use App\Services\sendMail;
use Illuminate\Http\Request;
class TestMailController extends Controller
{
    public function test()
    {
        $code = 25;
        $mail = new sendMail('confirmation',array('code' =>$code),'Verify your mail','mohamedraslan2282@yahoo.com','Confirmation');
        try{
            $mail->sendMail();
            response()->json('Send Successfully');
        }catch(\Exception $e){
            response()->json($e->getMessage());
        }
    }  
}   
