<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            ['education_name' => 'mahasiswa',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'pelajar',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'wiraswasta',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'guru',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'ibu rumah tangga',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'wirausaha',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['education_name' => 'tidak sedang bekerja',
            'add_by' => 'superuser',
            'updated_by' => 'superuser',]
        ]);
    }
}
