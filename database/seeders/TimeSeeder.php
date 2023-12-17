<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            ['time_name' => 'pertama','num_time' => '0800',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'kedua','num_time' => '0900',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'ketiga','num_time' => '1000',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'keempat','num_time' => '1100',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'lima','num_time' => '1200',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'enam','num_time' => '1300',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'tujuh','num_time' => '1400',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'delapan','num_time' => '1500',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'sembilan','num_time' => '1600',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'sepuluh','num_time' => '1700',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'sebelas','num_time' => '1800',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'dua belas','num_time' => '1900',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['time_name' => 'tiga belas','num_time' => '1200',  'add_by' => 'superuser', 'updated_by' => 'superuser'],
        ]);
    }
}
