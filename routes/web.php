<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login',[UserController::class,'viewlogin']);
Route::get('/landingpage',[UserController::class,'landingpage']);
