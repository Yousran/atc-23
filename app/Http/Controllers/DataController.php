<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    public function index(){
        $tableName = 'data';
        $jsonLink = 'data/json';
        $columns = [
            'id', 
            'user.username', 
            'nik', 
            'surename', 
            'address', 
            'birthday', 
            'gender.gender_name', 
            'education.education_name', 
            'job.job_name', 
            'religion.religion_name', 
            'photo', 
            'add_by', 
            'updated_by', 
            'created_at', 
            'updated_at'
        ];
        
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        $data = Data::with(['user', 'gender', 'education', 'job', 'religion'])->get();
        return DataTables::of($data)->make();
    }
}
