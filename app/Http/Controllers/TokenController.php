<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;

class TokenController extends Controller
{
    //
    public function index()
    {
        return view('token');
    }
    public function store(Request $request)
    {
        $details=new Details;
        // dd($request->email);
        // $user=Details::find($request->email);
        //dd($user);
        $user=Details::where('email', '=', session('email'))->firstOrFail();
        if($request->token==$user->token)
        {
            $user->status="verified";
            $user->save();
            return redirect('details');
        }
        else 
        {
            return redirect('details');
        }
         // $details->save();
        return redirect('details');
    }
}
