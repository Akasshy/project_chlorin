<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/landing-page');
});

Route::get('/login',[AuthController::class,'viewLogin']);
Route::post('/auth',[AuthController::class,'login']);
Route::get('/landing-page',[AuthController::class,'landingPage']);
