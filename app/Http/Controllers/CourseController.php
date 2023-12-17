<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CourseController extends Controller
{
    public function index(){
        $tableName = 'courses';
        $jsonLink = 'courses/json';
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

    public function view(){
        $programs = Course::all();
        return view('program',['programs'=>$programs]);
    }

    public function addprogram(Request $request){
        $program = new Course;
        $program->course_name = $request->course_name;
        $program->course_price = $request->course_price;
        $program->total_meet = $request->total_meet;
        $program->max_attendants = $request->max_attendants;
        $program->desc = $request->desc;
        $program->photo = $request->photoname;
        $program->add_by = $request->session()->get('username');
        $program->updated_by = $request->session()->get('username');
        $program->save();
        return redirect()->back();
    }
}
