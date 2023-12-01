<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function index(Request $request) {
        if($request->isMethod('get')){
            return view('auth.login');
        }

        if($request->isMethod('post')){
            $validate = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if(Auth::attempt($validate)){
                $request->session()->regenerate();

                return redirect('/admin');
            }
            return back()->withErrors(['password' => 'password anda salah!'])->onlyInput('password');
        }
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
