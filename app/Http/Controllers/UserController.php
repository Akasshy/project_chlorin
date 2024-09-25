<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewlogin(){
        return view('login');
    }
    public function landingpage(){
        return view('landingpage');
    }

}
