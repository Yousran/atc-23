<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            ['day_name' => 'senin', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'selasa', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'rabu', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'kamis', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'jumat', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'sabtu', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['day_name' => 'minggu', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
        ]);
    }
}
