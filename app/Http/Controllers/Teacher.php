<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teacher extends Controller
{
    public function teacher(){
        return view('teacher_page.dashboard');
    }
    public function absensi(){
        return view('teacher_page.absensi-page');
    }
    public function tugas(){
        return view('teacher_page.tugas-page');
    }
}
