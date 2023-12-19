<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['education_name' => 'paud dan tk',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'sekolah dasar',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'madrasah ibtidaiyah',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'sekolah menengah pertama',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'madrasah tsanawiyah',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'sekolah menengah atas',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'madrasah aliyah',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'diploma',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'strata i',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['education_name' => 'strata ii',
            'add_by' => 'superuser',
            'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
