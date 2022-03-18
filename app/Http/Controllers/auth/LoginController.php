<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function index()
    {
        return view('auth.login');
    }

    protected function store(Request $request)
    {
        $request->validate([
            'email' => ['required','email','min:6','max:255'],
            'password' => ['required'],
        ]);

        if(!auth()->attempt($request->only('email','password')))
        {
            return back()->withErrors(['msg'=>'Email or Password are not correct']);
        }

        //return redirect()->route('home');
    }
}
