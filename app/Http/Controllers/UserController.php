<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function loginVerification(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if($req->remember){
            Cookie::queue('email', $req->email, 1);
            Cookie::queue('password', $req->password, 1);
        }
    
        if (Auth::attempt($credentials, true)) {
            Session::put('credential', $credentials);
            // Return redirect ke "Home" page nantinya
            return redirect()->intended('home');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    public function registerVerification(Request $req){
        $rules = [
            'name' => 'required|min:5',
            'gender' => 'required',
            'address' => 'required|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password',
            'agreement' => 'required'
        ];
        $validation = Validator::make($req->all(), $rules);

        if($validation->fails()){
            return back()->withErrors($validation, 'insert Error');
        }
        $user = new User();
        $user->name = $req->name;
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);

        $user->save();
        return redirect('login');
    }
}