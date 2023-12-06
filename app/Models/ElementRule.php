<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementRule extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'dashboard',
        'program_kursus',
        'daftar',
        'daftar_peserta',
        'daftar_instruktur',
        'superuser',
        'role_permission',
        'config',
        'logs',
        'instruktur',
        'daftar_kelas_instruktur',
        'jadwal_instruktur',
        'peserta',
        'kelas_peserta',
        'jadwal_peserta',
        'sertifikat_peserta',
        'operator',
        'konfirm_pendaftar',
        'jadwal',
        'sertifikat_operator',
        'bendahara',
        'kas',
        'sekretaris',
        'cetak_sertifikat',
        'penomoran_surat',
        'tabel',
        'chart',
        'tutorial',
        'add_by',
        'updated_by'
    ];
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
