<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;

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
        $users =  User::find(1);
//        $user->notify(new EmailNotification()); // using notify()
        Notification::send($users, new EmailNotification());


        return redirect()->back()->with('success','Check the email notification');
    }
}
