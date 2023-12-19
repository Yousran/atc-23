<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            ['religion_name' => 'islam', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religion_name' => 'protestan', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religion_name' => 'katolik', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religion_name' => 'hindu', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religion_name' => 'buddha', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religion_name' => 'konghu chu', 'add_by' => 'superuser', 'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
