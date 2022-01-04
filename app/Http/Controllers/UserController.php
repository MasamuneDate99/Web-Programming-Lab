<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
Use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function loginVerification(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if($req->remember){
            Cookie::queue('email', $req->email, 100);
            Cookie::queue('password', $req->password, 100);
        }
    
        if (Auth::attempt($credentials, true)) {
            Session::put('credential', $credentials);
            return redirect()->intended('home');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function registerVerification(Request $req){
        $credentials = [
            'name' => $req->name,
            'address' => $req->address,
            'email'
        ];
    }
}