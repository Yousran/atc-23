<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{
    public function index(){
        $tableName = 'settings';
        $jsonLink = 'settings/json';
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

    public function changeSetting(){
        return view('change-setting');
    }

    public function updateSetting(Request $request){
        $setting = Setting::find($request->setting_id);
    
        if ($setting) {
            $setting->update([
                'dark_mode' => $request->dark_mode,
            ]);
            LoginController::reloadUser($request->session()->get('username'));
            return response()->json(['success' => true]);
        } else {
            Session::put('setting', ['dark_mode'=>$request->dark_mode]);
            return response()->json(['error' => 'Setting not found'], 404);
        }
    }
    
}
