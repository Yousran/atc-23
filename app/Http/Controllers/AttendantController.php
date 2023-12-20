<?php

namespace App\Http\Controllers;

use App\Models\Attendant;
use App\Models\Course;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Group;
use App\Models\Job;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;

class AttendantController extends Controller
{
    public function registerAttendant(Request $request,$course_id = null){
        if (!$course_id) {
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
                        return view('signup-attendant',['user'=>$user, 'course_id' => $course_id, 'courses' => $courses, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
                    }
                    return view('signup-attendant',['user'=>$user, 'course_id' => $course_id, 'courses' => $courses, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
                }
            }else {
                return redirect('/login');
            }
        }else {
            if ($request->session()->get('username')) {
                $username = $request->session()->get('username');
                $user = User::with(['data'])->where('username', $username)->first();
                $genders = Gender::all();
                $jobs = Job::all();
                $religions = Religion::all();
                $educations = Education::all();
                if ($user) {   
                    if (!$user->data) {
                        return view('signup-attendant',['user'=>$user, 'course_id' => $course_id, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
                    }
                    return view('signup-attendant',['user'=>$user, 'course_id' => $course_id, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations]);
                }
            }else {
                return redirect('/login');
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
            $userData = $user->data()->create([
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

            $group = Group::select('groups.*', 'courses.course_name', 'courses.max_attendants')
            ->join('courses', 'courses.id', '=', 'groups.course_id')
            ->where('groups.course_id', $request->course_id)
            ->whereRaw('groups.num_attendant < courses.max_attendants')
            ->first();
        
            if (!$group) {
                // Dapatkan nama kursus
                $course = Course::find($request->course_id);
                $course_name = $course->course_name;

                // Hitung jumlah grup yang sudah ada untuk kursus ini
                $group_count = Group::where('course_id', $request->course_id)->count();

                // Buat nama grup baru
                $group_name = 'kelas ' . $course_name . ' ' . ($group_count + 1);

                // Buat grup baru
                $group = new Group();
                $group->course_id = $request->course_id;
                $group->group_name = $group_name;
                $group->num_attendant = 0;
                $group->status = 1;
                $group->add_by = $request->session()->get('username');
                $group->updated_by = $request->session()->get('username');
                $group->save();
            }
        
            $attendant = new Attendant();
            $attendant->data_id = $userData->id; // Use $userData instead of $user->data
            $attendant->course_id = $request->course_id;
            //akan diganti


            $attendant->group_id = $group->id;
            $attendant->add_by = $request->session()->get('username');
            $attendant->updated_by = $request->session()->get('username');
            $attendant->save();

            $group->save();
        }else {
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
            $group = Group::select('groups.*', 'courses.course_name', 'courses.max_attendants')
            ->join('courses', 'courses.id', '=', 'groups.course_id')
            ->where('groups.course_id', $request->course_id)
            ->whereRaw('groups.num_attendant < courses.max_attendants')
            ->first();

        
            if (!$group) {
                // Dapatkan nama kursus
                $course = Course::find($request->course_id);
                $course_name = $course->course_name;

                // Hitung jumlah grup yang sudah ada untuk kursus ini
                $group_count = Group::where('course_id', $request->course_id)->count();

                // Buat nama grup baru
                $group_name = 'kelas ' . $course_name . ' ' . ($group_count + 1);

                // Buat grup baru
                $group = new Group();
                $group->course_id = $request->course_id;
                $group->group_name = $group_name;
                $group->num_attendant = 0;
                $group->status = 1;
                $group->add_by = $request->session()->get('username');
                $group->updated_by = $request->session()->get('username');
                $group->save();
            }
        
            $attendant = new Attendant();
            $attendant->data_id = $user->data->id; // Use $userData instead of $user->data
            $attendant->course_id = $request->course_id;
            //akan diganti

            $attendant->group_id = $group->id;
            $attendant->add_by = $request->session()->get('username');
            $attendant->updated_by = $request->session()->get('username');
            $attendant->save();

            $group->save();
        }
        return redirect()->route('dashboard');
    }
}
