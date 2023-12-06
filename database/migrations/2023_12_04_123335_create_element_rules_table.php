<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->integer('dashboard')->default('0');
            $table->integer('program_kursus')->default('0');
            $table->integer('daftar')->default('0');
            $table->integer('daftar_peserta')->default('0');
            $table->integer('daftar_instruktur')->default('0');
            $table->integer('superuser')->default('0');
            $table->integer('role_permission')->default('0');
            $table->integer('config')->default('0');
            $table->integer('logs')->default('0');
            $table->integer('instruktur')->default('0');
            $table->integer('daftar_kelas_instruktur')->default('0');
            $table->integer('jadwal_instruktur')->default('0');
            $table->integer('peserta')->default('0');
            $table->integer('kelas_peserta')->default('0');
            $table->integer('jadwal_peserta')->default('0');
            $table->integer('sertifikat_peserta')->default('0');
            $table->integer('operator')->default('0');
            $table->integer('konfirm_pendaftar')->default('0');
            $table->integer('jadwal')->default('0');
            $table->integer('sertifikat_operator')->default('0');
            $table->integer('bendahara')->default('0');
            $table->integer('kas')->default('0');
            $table->integer('sekretaris')->default('0');
            $table->integer('cetak_sertifikat')->default('0');
            $table->integer('penomoran_surat')->default('0');
            $table->integer('tabel')->default('0');
            $table->integer('chart')->default('0');
            $table->integer('tutorial')->default('0');
            $table->string('add_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('element_rules');
    }
};
