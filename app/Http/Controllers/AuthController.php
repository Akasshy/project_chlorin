<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function ViewLogin(){
        
        return view('auth.login'); 
    }

    public function Login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $client = new Client() ;
        $url = "https://795c-36-83-119-238.ngrok-free.app/api/users";
        $response = $client->request('GET',$url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data= $contentArray['users'];
        // return view('features.test',['users' => $data ]);


    }

    public function testApi(){
        $client = new Client() ;
        $url = "https://795c-36-83-119-238.ngrok-free.app/api/users";
        $response = $client->request('GET',$url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data= $contentArray['users'];
        return view('features.test',['users' => $data ]);
    }
}
