<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Gender;
use App\Models\Education;
use App\Models\Job;
use App\Models\Religion;
use App\Models\Data;
use Carbon\Carbon;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming that the role, gender, education, job, and religion with id 1 already exist
        $role = Role::find(1);
        $gender = Gender::find(1);
        $education = Education::find(1);
        $job = Job::find(1);
        $religion = Religion::find(1);

        // Assuming that the user with id 1 already exists
        $user = User::find(1);

        if ($role && $user && $gender && $education && $job && $religion) {
            Data::create([
                'user_id' => $user->id,
                'nik' => 7602010203040001, // replace with actual NIK
                'surename' => 'a.m.yusran mazidan', // replace with actual surename
                'address' => 'jl. martadinata komp pertokoan tegar 777 blok r1', // replace with actual address
                'birthday' => '2004-03-02', // replace with actual birthday
                'gender_id' => $gender->id,
                'education_id' => $education->id,
                'job_id' => $job->id,
                'religion_id' => $religion->id,
                'photo' => null, // replace with actual photo if any
                'add_by' => 'superuser',
                'updated_by' => 'superuser',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
