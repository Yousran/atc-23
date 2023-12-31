<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['time_name' => 'jam pertama','num_time' => '080000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kedua','num_time' => '090000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam ketiga','num_time' => '100000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam keempat','num_time' => '110000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kelima','num_time' => '120000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam keenam','num_time' => '130000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam ketujuh','num_time' => '140000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kedelapan','num_time' => '150000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kesembilan','num_time' => '160000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kesepuluh','num_time' => '170000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kesebelas','num_time' => '180000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam kedua belas','num_time' => '190000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['time_name' => 'jam ketiga belas','num_time' => '200000',  'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
