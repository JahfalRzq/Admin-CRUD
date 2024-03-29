<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
class SendEmailController extends Controller
{

    public function send_email(){

        Mail::to('receiver-email-id')->send(new NotifyMail());
 
        if (Mail::failures()) {
             return response()->Fail('Sorry! Please try again latter');
        }else{
             return response()->success('Great! Successfully send in your mail');
           }
      
    }
    
}
