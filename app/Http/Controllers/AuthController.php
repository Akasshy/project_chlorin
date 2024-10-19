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
    public function viewLogin()
    {
        return view('auth.login');
    }
<<<<<<< HEAD
    public function landingPage(){
        return view('Features.landingpage');
=======
    public function landingpage()
    {
        return view('landingpage');
>>>>>>> 0cfa8986eddf84e207d09925c72cf290c7f69a62
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
<<<<<<< HEAD
            return redirect('/home')->with('login','Welcome ,');
=======
            return redirect('/dashboard-page')->with('login', 'Welcome ,');
>>>>>>> 0cfa8986eddf84e207d09925c72cf290c7f69a62
        }

        return redirect()->back()->with('login', 'Email or Password is incorect');
    }
}
