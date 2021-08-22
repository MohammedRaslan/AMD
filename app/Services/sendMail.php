<?php
namespace App\Services;

require '../vendor/autoload.php';

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

class sendMail
{
    protected $view;
    protected $variables;
    protected $subject;
    protected $to;
    protected $name;
    public function __construct($view,$variables,$subject,$to,$name) {
        $this->view = $view;
        $this->variables = $variables;
        $this->subject = $subject;
        $this->to = $to;
        $this->name = $name;
    }
    public function sendMail()
    {
        $SPApiClient = new ApiClient('96d3e2d8231ee3d65da46acafd9a9412', '9256a63e7ed50bfe03ea922cf12b4be8', new FileStorage());
        $email = array(
            'html' =>  view($this->view)->with($this->variables),
            'text' => 'Hello From Text!',
            'subject' => $this->subject,
            'from' => array(
                'name' => $this->name,
                'email' => 'MohamedRaslan@mophx.com',
            ),
            'to' => array(
                array(
                    'email' => $this->to,
                ),
            ),
        );
        try{
            $SPApiClient->smtpSendMail($email);
        }catch (\Exception $e){
            return $e->getMessage();
        }
        
    }
}