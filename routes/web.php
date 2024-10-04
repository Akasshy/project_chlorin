<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Teacher;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/landing-page');
});

Route::get('/login',[AuthController::class,'viewLogin']);
Route::post('/auth',[AuthController::class,'login']);
Route::get('/landing-page',[AuthController::class,'landingpage']);

//admin-page
Route::get('/admin-page',[AdminController::class, 'admin']);

Route::get('/admin/add/user/industry',[AdminController::class, 'viewAddIndustry']);
Route::post('/admin/add/user/industry',[AdminController::class, 'addIndustry']);
Route::get('/admin/update/user/industry/{id}',[AdminController::class, 'viewUpdateIndustry']);
Route::post('/admin/update/user/industry/{id}',[AdminController::class, 'updateIndustry']);
Route::get('/admin/add/profile/industry',[AdminController::class, 'viewProfileIndustry']);
Route::post('/admin/add/profile/industry',[AdminController::class, 'addProfileIndustry']);
Route::get('/admin/update/profile/industry/{id}',[AdminController::class, 'viewUpdateProfileIndustry']);
Route::post('/admin/update/profile/industry/{id}',[AdminController::class, 'updateProfileIndustry']);

Route::get('/admin/add/user/school',[AdminController::class, 'viewAddSchool']);
Route::post('/admin/add/user/school',[AdminController::class, 'addSchool']);
Route::get('/admin/update/user/school/{id}',[AdminController::class, 'viewUpdateSchool']);
Route::post('/admin/update/user/school/{id}',[AdminController::class, 'updateSchool']);
Route::get('/admin/add/profile/school',[AdminController::class, 'viewAddProfileSchool']);
Route::post('/admin/add/profile/school',[AdminController::class, 'addProfileSchool']);
Route::get('/admin/update/profile/school/{id}',[AdminController::class, 'viewUpdateProfileSchool']);
Route::post('/admin/update/profile/school/{id}',[AdminController::class, 'updateSchool']);

Route::get('/admin/add/user/teacher',[AdminController::class, 'viewAddTeacher']);
Route::post('/admin/add/user/teacher',[AdminController::class, 'addTeacher']);
Route::get('/admin/update/user/teacher/{id}',[AdminController::class, 'viewUpdateTeacher']);
Route::post('/admin/update/user/teacher/{id}',[AdminController::class, 'updateTeacher']);
Route::get('/admin/add/profile/teacher',[AdminController::class, 'viewAddProfileTeacher']);
Route::post('/admin/add/profile/teacher',[AdminController::class, 'addProfileTeacher']);
Route::get('/admin/update/profile/teacher/{id}',[AdminController::class, 'viewUpdateProfileTeacher']);
Route::post('/admin/update/profile/teacher/{id}',[AdminController::class, 'updateProfileTeacher']);

Route::get('/admin/add/user/advisor',[AdminController::class, 'viewAddAdvisor']);
Route::post('/admin/add/user/advisor',[AdminController::class, 'AddAdvisor']);
Route::get('/admin/update/user/advisor/{id}',[AdminController::class, 'viewUpdateAdvisor']);
Route::post('/admin/update/user/advisor/{id}',[AdminController::class, 'updateAdvisor']);
Route::get('/admin/add/profile/advisor',[AdminController::class, 'viewAddProfileAdvisor']);
Route::post('/admin/add/profile/advisor',[AdminController::class, 'AddProfileAdvisor']);
Route::get('/admin/update/profile/advisor/{id}',[AdminController::class, 'viewUpdateProfileAdvisor']);
Route::post('/admin/update/profile/advisor/{id}',[AdminController::class, 'updateProfileAdvisor']);

Route::get('/admin/add/user/student',[AdminController::class, 'viewAddStudent']);
Route::post('/admin/add/user/student',[AdminController::class, 'addStudent']);
Route::get('/admin/update/user/student/{id}',[AdminController::class, 'viewUpdateStudent']);
Route::post('/admin/update/user/student/{id}',[AdminController::class, 'updateStudent']);
Route::get('/admin/add/profile/student',[AdminController::class, 'viewAddProfileStudent']);
Route::post('/admin/add/profile/student',[AdminController::class, 'addProfileStudent']);
Route::get('/admin/update/profile/student/{id}',[AdminController::class, 'viewUpdateProfileStudent']);
Route::post('/admin/update/profile/student/{id}',[AdminController::class, 'updateProfileStudent']);

//teacher-page
Route::get('/dashboard-page',[Teacher::class, 'teacher']);
Route::get('/attendance-page',[Teacher::class, 'attendance']);
Route::get('/attendance/detail/{id}',[Teacher::class, 'attendance']);

Route::get('/task-page',[Teacher::class, 'task']);
Route::get('/task/detail/{id}',[Teacher::class, 'task']);

Route::get('/student/add',[Teacher::class,'viewAddStudent']);
Route::post('/student/add',[Teacher::class,'addStudent']);
Route::get('/student/add/profile/{id}',[Teacher::class,'viewProfileStudent']);
Route::post('/student/add/profile/{id}',[Teacher::class,'addProfileStudent']);
Route::get('/student/update/profile/{id}',[Teacher::class,'viewUpdateProfile']);
Route::post('/student/update/profile/{id}',[Teacher::class,'updateProfileStudent']);
Route::post('/student/delete/{id}',[Teacher::class,'deleteStudent']);

route::get('/intership-request',[Teacher::class,'intershipRequest']);
