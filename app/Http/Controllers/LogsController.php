<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;

class LogsController extends Controller
{
    public function index()
    {
    return view('login/index');
    // return view('auth/login');
    }
    public function postlogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/loginadm')->with('status', 'Email atau Password Salah');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/loginadm');
    }
}
