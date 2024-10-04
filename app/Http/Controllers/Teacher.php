<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class Teacher extends Controller
{
    public function teacher(){
        $data['student']=Student::all();
        return view('teacher_page.dashboard',$data);
    }
    public function attendance(){
        return view('teacher_page.absensi-page');
    }
    public function task(){
        $data['task'] = Task::all();
        return view('teacher_page.tugas-page',$data);
    }

    public function addStudent(Request $request){
        $request->validate([
            'Username'=>['required'],
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'student';
        $user->password = bcrypt($request->password);

    }
    public function addProfileStudent($id,Request $request){
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

        // $user = User::Where('id',)
        $student = new Student();
        $student->user_id = $id;
        $student->nisn = $request->nisn;
        $student->profile_image = $request->profile_image;
        $student->full_name = $request->full_name;
        $student->birth_day = $request->birth_day;
        $student->address = $request->address;
        $student->major = $request->major;
        $student->npsn = $request->npsn;

    }

    public function updateProfileStudent($id,Request $request){
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

        $student = Student::find($id)->first();
        $student->user_id = $id;
        $student->nisn = $request->nisn;
        $student->profile_image = $request->profile_image;
        $student->full_name = $request->full_name;
        $student->birth_day = $request->birth_day;
        $student->address = $request->address;
        $student->major = $request->major;
        $student->npsn = $request->npsn;
    }
    public function delete($id){
        User::Where('id',$id)->first()->delete();

    }
}
