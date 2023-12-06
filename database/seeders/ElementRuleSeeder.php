<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id();
        //     $table->foreignId('role_id')->constrained()->onDelete('cascade');
        //     $table->string('element');
        //     $table->integer('view')->default('0');
        //     $table->string('add_by');
        //     $table->string('updated_by');
        //     $table->timestamps();
        DB::table('element_rules')->insert([
            [   'role_id'=>'1',
                'dashboard'=>'1',
                'program_kursus'=>'1',
                'daftar'=>'1',
                'daftar_peserta'=>'1',
                'daftar_instruktur'=>'1',
                'superuser'=>'1',
                'role_permission'=>'1',
                'config'=>'1',
                'logs'=>'1',
                'instruktur'=>'1',
                'daftar_kelas_instruktur'=>'1',
                'jadwal_instruktur'=>'1',
                'peserta'=>'1',
                'kelas_peserta'=>'1',
                'jadwal_peserta'=>'1',
                'sertifikat_peserta'=>'1',
                'operator'=>'1',
                'konfirm_pendaftar'=>'1',
                'jadwal'=>'1',
                'sertifikat_operator'=>'1',
                'bendahara'=>'1',
                'kas'=>'1',
                'sekretaris'=>'1',
                'cetak_sertifikat'=>'1',
                'penomoran_surat'=>'1',
                'tabel'=>'1',
                'chart'=>'1',
                'tutorial'=>'1',
                'add_by'=>'superuser',
                'updated_by'=>'superuser',
            ],
            [
                'role_id' => '2',
                'dashboard' => '0',
                'program_kursus' => '0',
                'daftar' => '0',
                'daftar_peserta' => '0',
                'daftar_instruktur' => '0',
                'superuser' => '0',
                'role_permission' => '0',
                'config' => '0',
                'logs' => '0',
                'instruktur' => '0',
                'daftar_kelas_instruktur' => '0',
                'jadwal_instruktur' => '0',
                'peserta' => '0',
                'kelas_peserta' => '0',
                'jadwal_peserta' => '0',
                'sertifikat_peserta' => '0',
                'operator' => '0',
                'konfirm_pendaftar' => '0',
                'jadwal' => '0',
                'sertifikat_operator' => '0',
                'bendahara' => '0',
                'kas' => '0',
                'sekretaris' => '0',
                'cetak_sertifikat' => '0',
                'penomoran_surat' => '0',
                'tabel' => '0',
                'chart' => '0',
                'tutorial' => '0',
                'add_by' => 'superuser',
                'updated_by' => 'superuser',
            ],            
            [
                'role_id' => '3',
                'dashboard' => '0',
                'program_kursus' => '0',
                'daftar' => '0',
                'daftar_peserta' => '0',
                'daftar_instruktur' => '0',
                'superuser' => '0',
                'role_permission' => '0',
                'config' => '0',
                'logs' => '0',
                'instruktur' => '0',
                'daftar_kelas_instruktur' => '0',
                'jadwal_instruktur' => '0',
                'peserta' => '0',
                'kelas_peserta' => '0',
                'jadwal_peserta' => '0',
                'sertifikat_peserta' => '0',
                'operator' => '0',
                'konfirm_pendaftar' => '0',
                'jadwal' => '0',
                'sertifikat_operator' => '0',
                'bendahara' => '0',
                'kas' => '0',
                'sekretaris' => '0',
                'cetak_sertifikat' => '0',
                'penomoran_surat' => '0',
                'tabel' => '0',
                'chart' => '0',
                'tutorial' => '0',
                'add_by' => 'superuser',
                'updated_by' => 'superuser',
            ]            
        ]);
    }
}
