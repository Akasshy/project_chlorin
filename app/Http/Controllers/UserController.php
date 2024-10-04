<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewlogin(){
<<<<<<< git
        return view('login');
=======
        return view('auth.login');
>>>>>>> f2efa97b39deb9e02287b7f10dec6a90d0e842ed
    }
    public function landingpage(){
        return view('landingpage');
    }

}
