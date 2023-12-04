<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{
    public function index(){
        $tableName = 'setting';
        $jsonLink = 'setting/json';
        $columns = [
            'id', 
            'user.username', 
            'dark_mode', 
            'add_by', 
            'updated_by', 
            'created_at', 
            'updated_at'
        ];
        
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        $settings = Setting::with('user')->get();
    
        return DataTables::of($settings)
            ->addColumn('user.username', function ($settings) {
                return $settings->user->username;
            })
            ->make(true);
    }
}
