<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(
            [
                'course_id'=>'1',
                'group_name'=>'mengemudi kelas 1',
                'num_meet'=>'10',
                'num_attendant'=>'10',
                'status'=>'1',
                'add_by'=>'superuser',
                'updated_by'=>'superuser'
            ]
        );
        DB::table('groups')->insert(
            [
                'course_id'=>'2',
                'group_name'=>'komputer kelas 1',
                'num_meet'=>'10',
                'num_attendant'=>'10',
                'status'=>'1',
                'add_by'=>'superuser',
                'updated_by'=>'superuser'
            ]
        );
    }
}
