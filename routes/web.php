<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login',[AuthController::class,'ViewLogin']);
