<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dapatkan daftar semua tabel dalam database Anda
        $tables = DB::select('SHOW TABLES');
        $databaseName = env('DB_DATABASE');

        // Iterasi melalui setiap tabel
        foreach ($tables as $table) {
            // Masukkan nama tabel ke dalam field 'table_name'
            DB::table('table_lists')->insert([
                'table_name' => $table->{'Tables_in_'.$databaseName},
                'add_by' => 'superuser',
                'updated_by' => 'superuser', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
            ]);
        }
    }
}
