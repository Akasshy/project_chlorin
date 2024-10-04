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
    public function landingpage(){
        return view('landingpage');
    }

    public function login(Request $request){
         $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        $credentials = $request->only(['email', 'password']); 

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard-pagepweb')->with('login','Welcome ,');
        }

        return redirect()->back()->with('login','Email or Password is incorect');
        
    }
}
