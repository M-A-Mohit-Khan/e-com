<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\Details;
class MailController extends Controller
{
    //
    public function index()
    {
        //dd(session('token'));
        $mailData=[
            'title' => "Mail from e-com",
            'body'=> session('token')
        ];
        //dd("email sent");
        //dd(session('email'));
        Mail::to('m.a.mohit.khan@gmail.com')->send(new DemoMail($mailData));
        //dd(gettype(session('email')));
        //dd(session('email'));
        $user=Details::where('email', '=', session('email'))->firstOrFail();
        // dd($user);
        $user->token=session('token');
        $user->save();
        return redirect('token');
    }
}
