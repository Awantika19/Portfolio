<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Unique;

class MailController extends Controller
{
    function SendEmail(Request $request){
    $request->validate([
        'firstname' => 'required',
        'lastname'  => 'required',
        'email'     => 'required|email|unique:contacts,email',
        'subject'   => 'required',
        'message'   => 'required'
    ]);

    $contact = new Contact();
    $contact->firstname = $request->firstname;
    $contact->lastname  = $request->lastname;
    $contact->email     = $request->email;
    $contact->subject   = $request->subject;
    $contact->message   = $request->message;
    $contact->save();

    // Send welcome email to user
    Mail::to($request->email)->send(new welcomeEmail(
        $request->firstname,
        $request->email,
        $request->subject,
        $request->message
    ));

    return back()->with('success', 'Your message has been sent successfully!');
}



}
