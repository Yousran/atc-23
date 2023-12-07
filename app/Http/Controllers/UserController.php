<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(){
        $tableName = 'users';
        $jsonLink = 'users/json';
        $columns = [
            'id', 
            'role.role_name', 
            'username', 
            'email', 
            'add_by', 
            'updated_by', 
            'created_at', 
            'updated_at'
        ];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        $users = User::with('role')->get();
        return DataTables::of($users)->make();
    }
    // return DataTables::of($data)
    // ->addColumn('photo', function($data) {
    //     $url = Storage::url($data->photo);
    //     return '<img src="'.$url.'" alt="Photo" width="100" height="100"/>';
    // })
    // ->rawColumns(['photo'])
    // ->make(true);
}
