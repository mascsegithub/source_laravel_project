<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('contact.contact');
    }

    public function establishcontact(Request $request) {
        $email = $request->input('email');
        $subject = $request->input('subject');
        $promotiontext = $request->input('promotiontext');

        $data = [
            'email' => $email,
            'subject' => $subject,
            'bodyMessage' => $promotiontext,
        ];

        Mail::send('mail.mail', $data, function($message) use ($data) {
            $message->from('salam.softworks@gmail.com', 'MASCSE');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
        return $this->index();
    }

}
