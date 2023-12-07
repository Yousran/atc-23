<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index(){
        $tableName = 'genders';
        $jsonLink = 'genders/json';
        $columns = ['id', 'gender_name', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(Gender::all())->make();
    }
}
