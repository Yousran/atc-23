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

    public function createJob(Request $request){
        if ($request->job_name) {
            $job = new Job;
            $job->job_name = $request->job_name;
            $job->add_by = $request->session()->get('username');
            $job->updated_by = $request->session()->get('username');
            $job->save();
        }
        
        return redirect()->back();
    }
    
    public function updateJob(Request $request)
    {
        $job = Job::find($request->id);
        $job->job_name = $request->job_name;
        $job->updated_by = $request->session()->get('username');
        $job->save();

        return redirect()->back();
    }
    public function deleteJob(Request $request)
    {
        $job = Job::find($request->id);
        $job->delete();

        return redirect()->back();
    }

    public function createEducation(Request $request){
        if ($request->education_name) {
            $education = new Education;
            $education->education_name = $request->education_name;
            $education->add_by = $request->session()->get('username');
            $education->updated_by = $request->session()->get('username');
            $education->save();
        }
        
        return redirect()->back();
    }
    
    public function updateEducation(Request $request)
    {
        $education = Education::find($request->id);
        $education->education_name = $request->education_name;
        $education->updated_by = $request->session()->get('username');
        $education->save();

        return redirect()->back();
    }
    public function deleteEducation(Request $request)
    {
        $education = Education::find($request->id);
        $education->delete();

        return redirect()->back();
    }

    public function createReligion(Request $request){
        if ($request->religion_name) {
            $religion = new Religion;
            $religion->religion_name = $request->religion_name;
            $religion->add_by = $request->session()->get('username');
            $religion->updated_by = $request->session()->get('username');
            $religion->save();
        }
        
        return redirect()->back();
    }
    
    public function updateReligion(Request $request)
    {
        $religion = Religion::find($request->id);
        $religion->religion_name = $request->religion_name;
        $religion->updated_by = $request->session()->get('username');
        $religion->save();

        return redirect()->back();
    }
    public function deleteReligion(Request $request)
    {
        $religion = Religion::find($request->id);
        $religion->delete();

        return redirect()->back();
    }
}
