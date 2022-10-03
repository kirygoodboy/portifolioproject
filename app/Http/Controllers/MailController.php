<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

class MailController extends Controller
{
    //
    public function sendMail() {

        return view('/publics-view/home');
    }

    public function sendEmail(Request $request){
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::send('email-template', $date, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
