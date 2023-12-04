<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('roles')->insert([
            ['role_name' => 'superuser', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['role_name' => 'guest', 'add_by' => 'superuser', 'updated_by' => 'superuser'],
            ['role_name' => 'user', 'add_by' => 'superuser', 'updated_by' => 'superuser']
        ]);
        
    }
}
