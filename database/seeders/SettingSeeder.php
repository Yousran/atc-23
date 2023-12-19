<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['user_id' => '1','dark_mode'=>'1', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => '2','dark_mode'=>'0', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
        ]);
    }
}
