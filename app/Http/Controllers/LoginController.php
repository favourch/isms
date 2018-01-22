<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        //dd($request->toArray());
        $email=$request['email'];
        $password=$request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {    
            return redirect()->intended('dashboard');
        }
        return view('home');
    }
}
