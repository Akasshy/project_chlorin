<?php

namespace Database\Seeders;

use App\Models\Advisor;
use App\Models\Industry;
use App\Models\Internship;
use App\Models\School;
use App\Models\Student;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'muca',
            // 'is_admin' => 0,
            'email' => 'muca@admin.com',
            'role'=> 'admin',
            'password' => bcrypt('1234')
        ]);
        User::create([
            'username' => 'mucal',
            // 'is_admin' => 0,
            'email' => 'muca@gmail.com',
            'role'=> 'student',
            'password' => bcrypt('1234')
        ]);

        School::create([
            'npsn' => "88994422",
            'name' => 'SMK YPC Tasikmalaya',
            'address' => 'di cintawana',
            'icon' => 'smk ypc tasikmalaya_icon.png',
            'headmaster'=> 'Drs. Ujang Sanusi'
        ]);

        Student::create([
            'user_id' => '2',
            'nisn' => '9712537',
            'profile_image'=>'',
            'full_name'=>'Mucabul',
            'birth_day'=>'2024-12-08',
            'address'=>'Cigalontang',
            'major'=>'RPL',
            'npsn'=>'88994422',
        ]);

        Industry::create([
            'name' => 'Chlorine Digital Media',
            'owner' => 'kang hardy',
            'address' => 'Jl. Kebon Sirih No.40 Lantai 1, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'lat' => '-6.911178918527747',
            'long' => '107.60621755331971'
        ]);
        User::create([
            'username' => 'smk_ypc_tasikmalaya',
            'email' => 'ypc@smk.com',
            'role'=> 'school',
            'password' => bcrypt('1234')
        ]);
        User::create([
            'username' => 'chlorine_digital_media',
            'email' => 'pkl@chlorine.com',
            'role'=> 'school',
            'password' => bcrypt('1234')
        ]);

        Task::create([
            'student_id' => '1',
            'name' => 'Membuat web',
            'description' => 'tema web : e-commace',
            'is_done'=>0,
        ]);
        // Advisor::create([
        //     'profile_image' => '',
        //     'name' => 'Mumu',
        //     'industry' => '1',
        // ]);
        Internship::create([
            'student_id' => 1,
            'industry_id' => 1,
            'is_accepted' => true
        ]);
    }
}
