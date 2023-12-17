<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Job;
use App\Models\Religion;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TutorController extends Controller
{
    public function registerTutor(Request $request){
        if ($request->session()->get('username')) {
            $username = $request->session()->get('username');
            $user = User::with(['data'])->where('username', $username)->first();
            $courses = Course::all();
            $genders = Gender::all();
            $jobs = Job::all();
            $religions = Religion::all();
            $educations = Education::all();
            if ($user) {   
                if (!$user->data) {
                    return view('signup-tutor',['user'=>$user, 'courses' => $courses, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
                }
                return view('signup-tutor',['user'=>$user, 'courses' => $courses, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
            }
        }
    }

    public function dataUpdate(Request $request){
        // Validasi data request jika diperlukan
        $request->validate([
            'nik' => 'required|integer',
            'surename' => 'required|string',
            'address' => 'required|string',
            'birthday' => 'required|date',
            'gender_id' => 'required|integer',
            'education_id' => 'required|integer',
            'job_id' => 'required|integer',
            'religion_id' => 'required|integer',
        ]);
    
        // Temukan user berdasarkan id
        $user = User::find($request->user_id);
    
        // Jika user tidak ditemukan, kembalikan error
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not found.']);
        }
        if (!$user->data) {
            $user->data()->create([
                'user_id' => $request->user_id,
                'nik' => $request->nik,
                'surename' => $request->surename,
                'address' => $request->address,
                'birthday' => $request->birthday,
                'gender_id' => $request->gender_id,
                'education_id' => $request->education_id,
                'job_id' => $request->job_id,
                'religion_id' => $request->religion_id,
                'add_by' => $request->session()->get('username'),
                'updated_by' => $request->session()->get('username'),

            ]);
            $tutor = new Tutor;
            $tutor->data_id = $user->data->id;
            $tutor->course_id = $request->course_id;
            $tutor->add_by = $request->session()->get('username');
            $tutor->updated_by = $request->session()->get('username');
            $tutor->save();

        } else {
            $user->data->update([
                'nik' => $request->nik,
                'surename' => $request->surename,
                'address' => $request->address,
                'birthday' => $request->birthday,
                'gender_id' => $request->gender_id,
                'education_id' => $request->education_id,
                'job_id' => $request->job_id,
                'religion_id' => $request->religion_id,
                'updated_by' => $request->session()->get('username'),

            ]);
            $tutor = new Tutor;
            $tutor->data_id = $user->data->id;
            $tutor->course_id = $request->course_id;
            $tutor->add_by = $request->session()->get('username');
            $tutor->updated_by = $request->session()->get('username');
            $tutor->save();
        }
        return redirect('dashboard');
    }
    
}
