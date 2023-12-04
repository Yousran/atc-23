<?php

namespace App\Http\Controllers;

use App\Models\ElementRule;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ElementRuleController extends Controller
{
    public function index(){
        $tableName = 'element-rule';
        $jsonLink = 'element-rule/json';
        $columns = [
            'role.role_name', 
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
            'jadwa_instruktur', 
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
            'add_by', 
            'updated_by',
            'created_at',
            'updated_at',
        ];
        
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        // return DataTables::of(ElementRule::all())->make();
        $elementRules = ElementRule::with('role')->get();
        return DataTables::of($elementRules)->make(true);
    }
}
