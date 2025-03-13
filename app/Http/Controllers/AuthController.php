<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing.login');
    }
    public function auth(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate)) {
            return redirect ('/dashboard');
        }

    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
