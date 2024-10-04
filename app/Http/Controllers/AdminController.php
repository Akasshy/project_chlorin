<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Models\Industry;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){

    }
    //Industry
    public function viewAddIndustry(){

    }
    public function addIndustry(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'industry';
        $user->password = bcrypt($request->password);
        $user->save();

    }
    public function viewUpdateIndustry(){

    }
    public function updateIndustry(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::find('id',$request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'industry';
        $user->password = bcrypt($request->password);
        $user->save();
    }
    public function viewProfileIndustry(){

    }
    public function addProfileIndustry(Request $request){
        $request->validate([
            'name' => ['required'],
            'owner' => ['required','email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        $industry = new Industry();
        $industry->name = $request->name;
        $industry->owner = $request->owner;
        $industry->address = $request->address;
        $industry->lat = $request->lat;
        $industry->long = $request->long;
        $industry->save();
    }
    public function viewUpdateProfileIndustry(){

    }
    public function updateProfileIndustry(Request $request){
        $request->validate([
            'name' => ['required'],
            'owner' => ['required','email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);
        
        $industry = Industry::find('id',$request->id)->first();
        $industry->name = $request->name;
        $industry->owner = $request->owner;
        $industry->address = $request->address;
        $industry->lat = $request->lat;
        $industry->long = $request->long;
        $industry->save();
    }

    //school
    public function viewAddSchool(){

    }
    public function addSchool(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'school';
        $user->password = bcrypt($request->password);
        $user->save();

    }
    public function viewUpdateSchool(){

    }
    public function updateSchool(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::find('id',$request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'school';
        $user->password = bcrypt($request->password);
        $user->save();
    }
    public function viewProfileSchool(){

    }
    public function addProfileSchool(Request $request){
        $request->validate([
            'name' => ['required'],
            'owner' => ['required','email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        $School = new School();
        $School->npsn = $request->npsn;
        $School->name = $request->name;
        $School->address = $request->address;
        $School->icon = $request->icon;
        $School->headmaster = $request->headmaster;
        $School->save();
    }
    public function viewUpdateProfileSchool(){

    }
    public function updateProfileSchool(Request $request){
        $request->validate([
            'name' => ['required'],
            'owner' => ['required','email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        $School = School::find('id',$request->id)->first();
        $School->npsn = $request->npsn;
        $School->name = $request->name;
        $School->address = $request->address;
        $School->icon = $request->icon;
        $School->headmaster = $request->headmaster;
        $School->save();
    }

    //Teacher
    public function viewAddTeacher(){

    }
    public function addTeacher(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'teacher';
        $user->password = bcrypt($request->password);
        $user->save();

    }
    public function viewUpdateTeacher(){

    }
    public function updateTeacher(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::find('id',$request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'teacher';
        $user->password = bcrypt($request->password);
        $user->save();
    }
    public function viewProfileTeacher(){

    }
    public function addProfileTeacher(Request $request){
        $request->validate([
            'profile_image' => ['required','email'],
            'name' => ['required'],
            'npsn' => ['required'],
        ]);

        $Teacher = new Teacher();
        $Teacher->profile_image = $request->profile_image;
        $Teacher->name = $request->name;
        $Teacher->npsn = $request->npsn;
        $Teacher->save();
    }
    public function viewUpdateProfileTeacher(){

    }
    public function updateProfileTeacher(Request $request){
        $request->validate([
            'profile_image' => ['required','email'],
            'name' => ['required'],
            'npsn' => ['required'],
        ]);

        $Teacher = Teacher::find('id',$request->id)->first();
        $Teacher->profile_image = $request->profile_image;
        $Teacher->name = $request->name;
        $Teacher->npsn = $request->npsn;
        $Teacher->save();
    }
    //Advisor
    public function viewAddAdvisor(){

    }
    public function addAdvisor(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'advisor';
        $user->password = bcrypt($request->password);
        $user->save();

    }
    public function viewUpdateAdvisor(){

    }
    public function updateAdvisor(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::find('id',$request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'advisor';
        $user->password = bcrypt($request->password);
        $user->save();
    }
    public function viewProfileAdvisor(){

    }
    public function addProfileAdvisor(Request $request){
        $request->validate([
            'profile_image' => ['required','email'],
            'name' => ['required'],
            'insdutry_id' => ['required'],
        ]);

        $Advisor = new Advisor();
        $Advisor->profile_image = $request->profile_image;
        $Advisor->name = $request->name;
        $Advisor->industry_id = $request->industry_id;
        $Advisor->save();
    }
    public function viewUpdateProfileAdvisor(){

    }
    public function updateProfileAdvisor(Request $request){
        $request->validate([
            'profile_image' => ['required','email'],
            'name' => ['required'],
            'insdutry_id' => ['required'],
        ]);

        $Advisor = Advisor::find('id',$request->id)->first();
        $Advisor->profile_image = $request->profile_image;
        $Advisor->name = $request->name;
        $Advisor->industry_id = $request->industry_id;
        $Advisor->save();
    }
    //Student
    public function viewAddStudent(){

    }
    public function addStudent(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'Student';
        $user->password = bcrypt($request->password);
        $user->save();

    }
    public function viewUpdateStudent(){

    }
    public function updateStudent(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::find('id',$request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'Student';
        $user->password = bcrypt($request->password);
        $user->save();
    }
    public function viewProfileStudent(){

    }
    public function addProfileStudent(Request $request){
        $request->validate([
            'user_id' => 'required',
            'nisn' => 'required',
            'profile_image'=>'required',
            'full_name'=>'required',
            'birth_day'=>'required',
            'address'=>'required',
            'major'=>'required',
            'npsn'=>'required',
        ]);

        $student = new Student();
        $student->user_id = $request->id;
        $student->nisn = $request->nisn;
        $student->profile_image = $request->profile_image;
        $student->full_name = $request->full_name;
        $student->birth_day = $request->birth_day;
        $student->address = $request->address;
        $student->major = $request->major;
        $student->npsn = $request->npsn;
    }
    public function viewUpdateProfileStudent(){

    }
    public function updateProfileStudent(Request $request){
        $request->validate([
            'user_id' => 'required',
            'nisn' => 'required',
            'profile_image'=>'required',
            'full_name'=>'required',
            'birth_day'=>'required',
            'address'=>'required',
            'major'=>'required',
            'npsn'=>'required',
        ]);

        $student = Student::find($$request->id)->first();
        $student->user_id = $request->id;
        $student->nisn = $request->nisn;
        $student->profile_image = $request->profile_image;
        $student->full_name = $request->full_name;
        $student->birth_day = $request->birth_day;
        $student->address = $request->address;
        $student->major = $request->major;
        $student->npsn = $request->npsn;
    }
}
