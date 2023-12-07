<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Religion;

class ReligionController extends Controller
{
    public function index(){
        $tableName = 'religions';
        $jsonLink = 'religions/json';
        $columns = ['id', 'religion_name', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    
    public function json(){
        return DataTables::of(Religion::all())->make();
    }
}
