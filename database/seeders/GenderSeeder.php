<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            ['gender_name' => 'laki-laki',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',
            'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
            ],
            ['gender_name' => 'perempuan',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',
            'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
            ]
        ]);
    }
}
