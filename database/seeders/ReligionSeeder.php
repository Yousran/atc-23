<?php

namespace Database\Seeders;

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
        DB::table('religions')->insert(
            ['religion_name' => 'islam','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['religion_name' => 'protestan','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['religion_name' => 'katolik','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['religion_name' => 'hindu','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['religion_name' => 'buddha','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['religion_name' => 'konghu chu','add_by' => 'superuser',
            'updated_by' => 'superuser',],
        );
    }
}
