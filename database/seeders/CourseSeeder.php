<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                'course_name'=>'mengemudi',
                'course_price'=>'100000',
                'add_by'=>'superuser',
                'updated_by'=>'superuser'
            ]
            );
            DB::table('courses')->insert(
            [
                'course_name'=>'komputer',
                'course_price'=>'100000',
                'add_by'=>'superuser',
                'updated_by'=>'superuser'
            ]
            );
    }
}
