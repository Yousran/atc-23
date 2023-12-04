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
                'nik' => 1234567890, // replace with actual NIK
                'surename' => 'John Doe', // replace with actual surename
                'address' => '123 Main St', // replace with actual address
                'birthday' => '2000-01-01', // replace with actual birthday
                'gender_id' => $gender->id,
                'education_id' => $education->id,
                'job_id' => $job->id,
                'religion_id' => $religion->id,
                'photo' => null, // replace with actual photo if any
                'add_by' => 'superuser',
                'updated_by' => 'superuser',
            ]);
        }
    }
}
