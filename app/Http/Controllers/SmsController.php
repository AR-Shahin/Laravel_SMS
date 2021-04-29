<?php

namespace App\Http\Controllers;

use Exception;
use Vonage\SMS\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    public function index()
    {
        $code = rand(100,500);
        $basic  = new \Vonage\Client\Credentials\Basic("9d68629f", "GBVfpt6FHrIod89Y");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("8801754100439", 'ars', "Your verification code is $code")
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }

    }
}
