<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['job_name' => 'pelajar',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'mahasiswa',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'wiraswasta',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'pegawai negeri sipil',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'aparat sipil negara',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'ibu rumah tangga',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['job_name' => 'tidak sedang bekerja',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
