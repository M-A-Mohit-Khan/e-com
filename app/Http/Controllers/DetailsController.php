<?php

namespace App\Http\Controllers;
use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetailsController extends Controller
{
    //
    public function index()
    {
        // $clientIP = request()->ip();
        // dd($clientIP);
        $ipAddr=\Request::ip();
        dd($ipAddr);        
        return view('details');
    }
    public function store(Request $request)
    {
        dd($_SERVER["REMOTE_ADDR"]);
        //dd($request->server['REMOTE_ADDR']);
        //dd("hello");
        $details=new Details;
        //dd("hello");
        // dd($request->email);
        //$user=Details::find($request->email);
        //dd($request->email);
        $user=Details::where('email', $request->email)->get();
        //dd(!count($user));
        // $user=1;
        if(!count($user))
        {
            //dd("hello1");
            //dd($request->ip());
            $details->email=$request->email;
            $details->phone=$request->phone;
            $details->token="";
            $details->status="";
            $details->save();
            
        }
        else
        {
            //dd("hello2");
            $randomString = Str::random(15);
            $request->session()->put('token', $randomString);
            $request->session()->put('email', $request->email);

            //dd(session('id'));
            return redirect('send-mail');
        }
        // $details->save();
        return redirect('details');
    }
}
