<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('dashboard');
        }
            return redirect()->route('login')->withErrors('Email veya Şifre hatalı');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }
}
