<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function servizi()
    {
        return view('servizi');
    }

    public function contatti()
    {
        return view('contatti');
    }




    public function postData(Request $request)
    {
        // dd($request);
        $email = $request->input('email');
        $user = $request->input('name');
        $message = $request->input('message');
        $contact = compact('email', 'user', 'message');
        $contactToAdmin = compact('email', 'user', 'message');
        // dd($user, $email, $message);
        Mail::to($email)->send(new ContactMail($contact));
        Mail::to('admin@admin.com')->send(new AdminMail($contactToAdmin));

        return redirect(route('contatti'))->with('message', 'Grazie per averci contattato ti risponderemo il prima possibile.');
    }
}
