<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EducationController extends Controller
{
    public function index(){
        $tableName = 'educations';
        $jsonLink = 'educations/json';
        $columns = ['id', 'education_name', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(Education::all())->make();
    }
}
