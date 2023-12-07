<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    public function index(){
        $tableName = 'roles';
        $jsonLink = 'roles/json';
        $columns = ['id', 'role_name','desc','photo', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(Role::all())->make();
    }
}
