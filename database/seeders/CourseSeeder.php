<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'total_meet'=>'10',
                'max_attendants'=>'2',
                'add_by'=>'superuser',
                'updated_by'=>'superuser',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
            );
            DB::table('courses')->insert(
            [
                'course_name'=>'komputer',
                'course_price'=>'100000',
                'total_meet'=>'10',
                'max_attendants'=>'5',
                'add_by'=>'superuser',
                'updated_by'=>'superuser',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ]
            );
    }
}
