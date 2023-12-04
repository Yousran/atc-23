<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            ['job_name' => 'mahasiswa',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'pelajar',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'wiraswasta',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'guru',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'ibu rumah tangga',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'wirausaha',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['job_name' => 'tidak sedang bekerja',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',]
        ]);
    }
}
