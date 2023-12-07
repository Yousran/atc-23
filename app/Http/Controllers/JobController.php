<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JobController extends Controller
{
    public function index(){
        $tableName = 'jobs';
        $jsonLink = 'jobs/json';
        $columns = ['id', 'job_name', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(Job::all())->make();
    }
}
