<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $user=Details::find($request->email);
        //dd($user);
        
        // $details->save();
        return redirect('details');
    }
}
