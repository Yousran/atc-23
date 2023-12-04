<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CourseController extends Controller
{
    public function index(){
        $tableName = 'course';
        $jsonLink = 'course/json';
        $columns = [
            'id', 
            'course_name', 
            'course_price', 
            'total_meet', 
            'max_attendants', 
            'desc', 
            'photo', 
            'add_by', 
            'updated_by', 
            'created_at', 
            'updated_at'
        ];
        
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(Course::all())->make();
    }
}
