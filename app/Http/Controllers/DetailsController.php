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
        return view('details');
    }
    public function store(Request $request)
    {
        $details=new Details;
        // dd($request->email);
        $user=Details::find($request->email);
        //dd($user);
        if(is_null(!$user))
        {
            $details->email=$request->email;
            $details->phone=$request->phone;
            $details->token="";
            $details->status="";
            $details->save();
        }
        else
        {
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
