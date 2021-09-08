<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailCotroller extends Controller
{
    public function sendMail() {

        $details = [
            'title' => 'Mail Test Title',
            'body' => 'This is mail body'
        ];

        Mail::to("test@test.com")->send(new SendMail($details));
        return "Email Sent";
    }
}
