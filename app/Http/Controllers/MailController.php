<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//we will use Mail namespace

class MailController extends Controller
{
    //first, create function for send basic  email
    public function basic_email(Request $request){

        $input = $request->all();

        //$data = ['name' =>  $request->get('name') ];
        // Send the email with the contactemail view, the user input
        Mail::send('emails.mail', $input, function($message)
        {
            $message->to('contacto@miproteina.com.co')->subject('Lipocore HD - Mensaje de usuario!');
        });
        $send = '1';
        Session::flash('send','1');
        return back();
    }
}
