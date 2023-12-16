<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Gender;
use App\Models\Job;
use App\Models\Religion;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(){
        $genders = Gender::all();
        $jobs = Job::all();
        $educations = Education::all();
        $religions = Religion::all();
        return view('config',['genders'=>$genders,'jobs'=>$jobs,'educations'=>$educations,'religions'=>$religions]);
    }

    public function createGender(Request $request){
        if ($request->gender_name) {
            $gender = new Gender;
            $gender->gender_name = $request->gender_name;
            $gender->add_by = $request->session()->get('username');
            $gender->updated_by = $request->session()->get('username');
            $gender->save();
        }
        
        return redirect()->back();
    }
    
    public function updateGender(Request $request)
    {
        $gender = Gender::find($request->id);
        $gender->gender_name = $request->gender_name;
        $gender->updated_by = $request->session()->get('username');
        $gender->save();

        return redirect()->back();
    }
    public function deleteGender(Request $request)
    {
        $gender = Gender::find($request->id);
        $gender->delete();

        return redirect()->back();
    }
}
