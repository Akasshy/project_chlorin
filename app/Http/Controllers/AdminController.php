<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Models\Industry;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

use function Illuminate\Log\log;

class AdminController extends Controller
{
    public function admin()
    {
        $data['student']=Student::all();
        return view('admin.beranda',$data  );
    }
    public function viewIndustry()
    {
        $data['industry']=Industry::all();
        return view('admin.industri',$data  );
    }
    public function viewSchool()
    {
        $data['school']=School::all();
        return view('admin.school',$data  );
    }
    public function viewTeacher()
    {
        $data['teacher']=Teacher::all();
        return view('admin.teacher',$data  );
    }
    public function viewAdvisor()
    {
        $data['advisor']=Advisor::all();
        return view('admin.advisor',$data  );
    }
    public function viewStudent()
    {
        $data['student']=Student::all();
        return view('admin.student',$data  );
    }

    //Industry
    public function viewAddIndustry() {
        return view('admin.add-user.add-industry');
    }
    public function addIndustry(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'industry';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin/add/profile/industry');
    }
    public function viewUpdateIndustry() {
        return view();
    }
    public function updateIndustry(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::find('id', $request->id);

        if ($user) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'industry',
                'password' => bcrypt($request->password)
            ]);
        }


        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->role = 'industry';
        // $user->password = bcrypt($request->password);
        // $user->save();
        return redirect();
    }
    public function viewProfileIndustry() {
        return view();
    }
    public function addProfileIndustry(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'owner' => ['required', 'email'],
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

        return redirect();
    }
    public function viewUpdateProfileIndustry($id) {
        $data['industry'] = Industry::find($id);

        return view('admin.edit.edit-industry',$data);
    }
    public function updateProfileIndustry(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'owner' => ['required', 'email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        $industry = Industry::find('id', $request->id)->first();
        $industry->name = $request->name;
        $industry->owner = $request->owner;
        $industry->address = $request->address;
        $industry->lat = $request->lat;
        $industry->long = $request->long;
        $industry->save();

        return redirect();
    }

    //school
    public function viewAddSchool() {
        return view('admin.add-user.add-school');
    }
    public function addSchool(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'school';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin/add/profile/school');
    }
    public function viewUpdateSchool() {
        return view();
    }
    public function updateSchool(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::find('id', $request->id);

        if ($user) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'school',
                'password' => bcrypt($request->password)
            ]);
        }

        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->role = 'school';
        // $user->password = bcrypt($request->password);
        // $user->save();
        return redirect();
    }
    public function viewProfileSchool() {
        return view();
    }
    public function addProfileSchool(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'owner' => ['required', 'email'],
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

        return redirect();
    }
    public function viewUpdateProfileSchool() {
        return view('admin.edit.edit-school');
    }
    public function updateProfileSchool(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'owner' => ['required', 'email'],
            'address' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        $School = School::find('id', $request->id)->first();
        $School->npsn = $request->npsn;
        $School->name = $request->name;
        $School->address = $request->address;
        $School->icon = $request->icon;
        $School->headmaster = $request->headmaster;
        $School->save();

        return redirect();
    }

    //Teacher
    public function viewAddTeacher() {
        return view('admin.add-user.add-teacher');
    }
    public function addTeacher(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'teacher';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin/add/profile/teacher');
    }
    public function viewUpdateTeacher() {
        return view();
    }
    public function updateTeacher(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::find('id', $request->id);

        if ($user) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'teacher',
                'password' => bcrypt($request->password)
            ]);
        }

        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->role = 'teacher';
        // $user->password = bcrypt($request->password);
        // $user->save();

        return redirect();
    }
    public function viewProfileTeacher() {
        return view();
    }
    public function addProfileTeacher(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'email'],
            'name' => ['required'],
            'npsn' => ['required'],
        ]);

        $Teacher = new Teacher();
        $Teacher->profile_image = $request->profile_image;
        $Teacher->name = $request->name;
        $Teacher->npsn = $request->npsn;
        $Teacher->save();

        return redirect();
    }
    public function viewUpdateProfileTeacher() {
        return view('admin.edit.edit-teacher');

    }
    public function updateProfileTeacher(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'email'],
            'name' => ['required'],
            'npsn' => ['required'],
        ]);

        $Teacher = Teacher::find('id', $request->id)->first();
        $Teacher->profile_image = $request->profile_image;
        $Teacher->name = $request->name;
        $Teacher->npsn = $request->npsn;
        $Teacher->save();

        return redirect();
    }
    //Advisor
    public function viewAddAdvisor() {
        return view('admin.add-user.add-advisor');
    }
    public function addAdvisor(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'advisor';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin/add/profile/advisor');
    }
    public function viewUpdateAdvisor() {
        return view();
    }
    public function updateAdvisor(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::find('id', $request->id);

        if ($user) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'advisor',
                'password' => bcrypt($request->password)
            ]);
        }

        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->role = 'advisor';
        // $user->password = bcrypt($request->password);
        // $user->save();

        return redirect();
    }
    public function viewProfileAdvisor() {
        return view();
    }
    public function addProfileAdvisor(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'email'],
            'name' => ['required'],
            'insdutry_id' => ['required'],
        ]);

        $Advisor = new Advisor();
        $Advisor->profile_image = $request->profile_image;
        $Advisor->name = $request->name;
        $Advisor->industry_id = $request->industry_id;
        $Advisor->save();

        return redirect();
    }
    public function viewUpdateProfileAdvisor() {
        return view('admin.edit.edit-advisor');

    }
    public function updateProfileAdvisor(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'email'],
            'name' => ['required'],
            'insdutry_id' => ['required'],
        ]);

        $Advisor = Advisor::find('id', $request->id)->first();
        $Advisor->profile_image = $request->profile_image;
        $Advisor->name = $request->name;
        $Advisor->industry_id = $request->industry_id;
        $Advisor->save();

        return redirect();
    }
    //Student
    public function viewAddStudent() {
        log('get_view');
        return view('admin.add-user.add-student');
    }
    public function addStudent(Request $request)
    {
        // $request->validate([
        //     'username' => ['required'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 'student';
        $user->password = bcrypt($request->password);
        $user->save();

        log('success');
        return redirect('/admin/add/profile/student');
    }
    public function viewUpdateStudent() {
        return view();
    }
    public function updateStudent(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::find('id', $request->id);

        if ($user) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'student',
                'password' => bcrypt($request->password)
            ]);
        }

        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->role = 'Student';
        // $user->password = bcrypt($request->password);
        // $user->save();

        return redirect();
    }
    public function viewProfileStudent() {
        return view();
    }
    public function addProfileStudent(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nisn' => 'required',
            'profile_image' => 'required',
            'full_name' => 'required',
            'birth_day' => 'required',
            'address' => 'required',
            'major' => 'required',
            'npsn' => 'required',
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
        $student->save();

        return redirect();
    }
    public function viewUpdateProfileStudent() {
        return view('admin.edit.edit-student');

    }
    public function updateProfileStudent(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nisn' => 'required',
            'profile_image' => 'required',
            'full_name' => 'required',
            'birth_day' => 'required',
            'address' => 'required',
            'major' => 'required',
            'npsn' => 'required',
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

        return redirect();
    }
}
