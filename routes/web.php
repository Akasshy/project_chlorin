<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login',[AuthController::class,'ViewLogin']);
Route::post('/auth',[AuthController::class,'login']);
Route::get('/test',[AuthController::class,'testApi']);
