<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class MailSend extends Controller
{
     

    public function mailSend(){

           $details=[

                 'title'=>'ایمیل از طرف فروشگاه فایل صبا ',

                 'body'=>'به انجمن بزرگ خریداران فایل خوش آمدید '

           ]; 


           \Mail::to('sabaparadisesisco@gmail.com')->send(new SendMail($details));


           //return view('frontend.emails.thanks');
        return view('frontend.emails.sendmail',compact(['details']));

    }
}
