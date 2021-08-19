<?php

namespace App\Http\Controllers;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Illuminate\Http\Request;
class TestMailController extends Controller
{
    public function test()
    {
        $SPApiClient = new ApiClient('96d3e2d8231ee3d65da46acafd9a9412', '9256a63e7ed50bfe03ea922cf12b4be8', new FileStorage());
        $email = array(
            'html' => '<p>Hello!</p>',
            'text' => 'Hello!',
            'subject' => 'Mail subject',
            'from' => array(
                'name' => 'Mohamed',
                'email' => 'MohamedRaslan@mophx.com',
            ),
            'to' => array(
                array(
                    'name' => 'Mohamed Raslan',
                    'email' => 'mohamedraslan2282@yahoo.com',
                ),
            ),
        );
        var_dump($SPApiClient->smtpSendMail($email));
    }
    
}   
