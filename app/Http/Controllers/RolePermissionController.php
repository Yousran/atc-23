<?php

namespace App\Http\Controllers;

use App\Models\ElementRule;
use App\Models\Role;
use App\Models\TableList;
use App\Models\TableRule;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index(){
        $roles = Role::with(['table_rules','element_rules'])->get();
        return view('role-permission',compact(['roles']));
    }

    public function addNewRole(Request $request){
        $role = new Role;
        $role->role_name = $request->role_name;
        $role->desc = $request->desc;
        $role->add_by = $request->session()->get('username');
        $role->updated_by = $request->session()->get('username');
        $role->save();
        
        $element_rule = new ElementRule;
        $element_rule->role_id = $role->id;
        $element_rule->add_by = $request->session()->get('username');
        $element_rule->updated_by = $request->session()->get('username');
        $element_rule->save();


        $table_lists = TableList::all();
        foreach ($table_lists as $table_list) {
            $table_rule = new TableRule;
            $table_rule->role_id = $role->id;
            $table_rule->table_list_id = $table_list->id;
            $table_rule->add_by = $request->session()->get('username');
            $table_rule->updated_by = $request->session()->get('username');
            $table_rule->save();
        }
        return redirect()->back();
    }

    public function deleteRole(Request $request){
        if ($request->role_id_delete >= 1 && $request->role_id_delete <= 3) {
            // Jika ya, kembali ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Role dengan id 1 sampai 3 tidak dapat dihapus');
        }
        // Temukan role berdasarkan id
        $role = Role::find($request->role_id_delete);
    
        // Cek apakah role ditemukan
        if ($role) {
            // Hapus semua aturan elemen dan aturan tabel yang terkait dengan role ini
            ElementRule::where('role_id', $role->id)->delete();
            TableRule::where('role_id', $role->id)->delete();
    
            // Hapus role
            $role->delete();
    
            // Kembali ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Role berhasil dihapus');
        } else {
            // Kembali ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Role tidak ditemukan');
        }
    }    

    public function editRolePermission(Request $request){
        // Get all table rule ids that should be included in the form
        $table_rule_ids = TableRule::all()->pluck('id');
    
        // Loop through all the table rule ids
        foreach ($table_rule_ids as $table_rule_id) {
            // Find the table rule in the database
            $tableRule = TableRule::find($table_rule_id);
            if($tableRule){
                // Update the permissions based on the checkbox values
                $tableRule->update([
                    'view' => isset($request->view[$table_rule_id]) ? $request->view[$table_rule_id] : '0',
                    'add' => isset($request->add[$table_rule_id]) ? $request->add[$table_rule_id] : '0',
                    'edit' => isset($request->edit[$table_rule_id]) ? $request->edit[$table_rule_id] : '0',
                    'export' => isset($request->export[$table_rule_id]) ? $request->export[$table_rule_id] : '0',
                    'soft_delete' => isset($request->soft_delete[$table_rule_id]) ? $request->soft_delete[$table_rule_id] : '0',
                    'hard_delete' => isset($request->hard_delete[$table_rule_id]) ? $request->hard_delete[$table_rule_id] : '0'
                ]);
            }
        }
        LoginController::reloadUser($request->session()->get('username','guest'));
        return redirect()->back();
    }
    public function editSidebarPermission(Request $request)
    {
        $role = Role::find($request->id);
        $elementRule = ElementRule::firstOrCreate(['role_id' => $role->id]);
        // dd($request);
        $elementRule->update([
            'dashboard' => $request->has('dashboard') ? $request->dashboard : 0,
            'program_kursus' => $request->has('program_kursus') ? $request->program_kursus : 0,
            'daftar' => $request->has('daftar') ? $request->daftar : 0,
            'daftar_peserta' => $request->has('daftar_peserta') ? $request->daftar_peserta : 0,
            'daftar_instruktur' => $request->has('daftar_instruktur') ? $request->daftar_instruktur : 0,
            'superuser' => $request->has('superuser') ? $request->superuser : 0,
            'role_permission' => $request->has('role_permission') ? $request->role_permission : 0,
            'config' => $request->has('config') ? $request->config : 0,
            'logs' => $request->has('logs') ? $request->logs : 0,
            'instruktur' => $request->has('instruktur') ? $request->instruktur : 0,
            'daftar_kelas_instruktur' => $request->has('daftar_kelas_instruktur') ? $request->daftar_kelas_instruktur : 0,
            'jadwal_instruktur' => $request->has('jadwal_instruktur') ? $request->jadwal_instruktur : 0,
            'peserta' => $request->has('peserta') ? $request->peserta : 0,
            'kelas_peserta' => $request->has('kelas_peserta') ? $request->kelas_peserta : 0,
            'jadwal_peserta' => $request->has('jadwal_peserta') ? $request->jadwal_peserta : 0,
            'sertifikat_peserta' => $request->has('sertifikat_peserta') ? $request->sertifikat_peserta : 0,
            'operator' => $request->has('operator') ? $request->operator : 0,
            'konfirm_pendaftar' => $request->has('konfirm_pendaftar') ? $request->konfirm_pendaftar : 0,
            'jadwal' => $request->has('jadwal') ? $request->jadwal : 0,
            'sertifikat_operator' => $request->has('sertifikat_operator') ? $request->sertifikat_operator : 0,
            'bendahara' => $request->has('bendahara') ? $request->bendahara : 0,
            'kas' => $request->has('kas') ? $request->kas : 0,
            'sekretaris' => $request->has('sekretaris') ? $request->sekretaris : 0,
            'cetak_sertifikat' => $request->has('cetak_sertifikat') ? $request->cetak_sertifikat : 0,
            'penomoran_surat' => $request->has('penomoran_surat') ? $request->penomoran_surat : 0,
            'tabel' => $request->has('tabel') ? $request->tabel : 0,
            'chart' => $request->has('chart') ? $request->chart : 0,
            'tutorial' => $request->has('tutorial') ? $request->tutorial : 0,
        ]);
        LoginController::reloadUser($request->session()->get('username','guest'));
        return redirect()->back();
             
    }
}
