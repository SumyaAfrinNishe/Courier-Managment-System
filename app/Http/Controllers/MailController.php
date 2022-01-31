<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function Sendmail()
    {
        $details=[
            'title'=>'Your Courier Request is Approved',
            'body'=>'This is for testing mail'

        ];
        Mail::to("sannishe9@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
