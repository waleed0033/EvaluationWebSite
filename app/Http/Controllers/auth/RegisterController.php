<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','min:4','max:255'],
            'email' => ['required','email','unique:users,email','min:6','max:255'],
            'emplooy_id' => ['required','unique:users,emplooy_id','numeric'],
            'password' => ['required','max:255','confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'emplooy_id' => $request->emplooy_id,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('home');
    }
}
