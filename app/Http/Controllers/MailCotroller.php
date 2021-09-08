<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailCotroller extends Controller
{

    public function sendMail(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'messageArea' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->messageArea,
        ];

        Mail::to("test@test.com")->send(new SendMail($details));
        // return "Email Sent";
        return redirect('/contact')->with('status', 'mail_send');

    }
    
}
