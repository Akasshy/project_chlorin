<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function viewLogin(){
        return view('auth.login');
    }
<<<<<<< HEAD
    public function wellcome(){
        return view('auth.welcome');
=======
    public function landingpage(){
        return view('landingpage');
>>>>>>> f2efa97b39deb9e02287b7f10dec6a90d0e842ed
    }

    public function login(Request $request){
         $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        $credentials = $request->only(['email', 'password']); 

        if (Auth::attempt($credentials)) {
<<<<<<< HEAD
            return redirect('/test')->with('login','Welcome ,');
=======
            return redirect('/dashboard-pagepweb')->with('login','Welcome ,');
>>>>>>> f2efa97b39deb9e02287b7f10dec6a90d0e842ed
        }

        return redirect()->back()->with('login','Email or Password is incorect');
        
    }
}
