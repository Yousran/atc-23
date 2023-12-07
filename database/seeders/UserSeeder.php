<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'username'=>'yousranmz',
            'role_id'=>'1',
            'email'=>'yusranmazidan@gmail.com',
            'password'=>Hash::make('123456789'),
            'add_by'=>'superuser',
            'updated_by'=>'superuser'
        ]
        );
        DB::table('users')->insert(
        [
            'username'=>'register',
            'role_id'=>'3',
            'email'=>'yusran@gmail.com',
            'password'=>Hash::make('123456789'),
            'add_by'=>'superuser',
            'updated_by'=>'superuser'
        ]
        );
    }
}
