<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\EmailNotification;

class FontController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function contactUs(Request $request)
    {
        $contact = new Contact();

        $contact->name          = $request->name;
        $contact->email         = $request->email;
        $contact->phone         = $request->phone;
        $contact->message       = $request->message;

        $contact->save();

        return redirect()->back()->with('success','Your form Sunmbitted');
    }


    public  function sendNotification()
    {
        $user =  User::find(2);
        $user->notify(new EmailNotification());
        return redirect()->back()->with('success','Check the email notification');
    }
}
