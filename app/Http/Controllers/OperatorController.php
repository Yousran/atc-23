<?php

namespace App\Http\Controllers;

use App\Models\Attendant;
use App\Models\Course;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Group;
use App\Models\Job;
use App\Models\PaymentStat;
use App\Models\Religion;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function confirmSignup(){
        //menambah data attendant baru
        //mengubah role user menjadi peserta
        //menambahkan jumlah peserta dalam group
        //menjadikan status peserta menjadi aktif
        $genders = Gender::all();
        $jobs = Job::all();
        $religions = Religion::all();
        $educations = Education::all();
        $groups = Group::all();
        $courses = Course::all();
        $payment_stats = PaymentStat::all();
        $roles = Role::all();
        $attendants = Attendant::with('data','course','group')->where('status','0')->get();
        return view('konfirm-pendaftar',compact('roles','payment_stats','genders','jobs','religions','educations','groups','attendants','courses'));
    }

    public function updateAttendant(Request $request){
        $attendant = Attendant::with('data','course','group')->find($request->attendant_id)->first();
        $attendant->update([
            'course_id' => $request->course_id,
            'group_id' => $request->group_id,
            'nik' => $request->nik,
            'surename' => $request->surename,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'gender_id' => $request->gender_id,
            'education_id' => $request->education_id,
            'job_id' => $request->job_id,
            'religion_id' => $request->religion_id,
            'status' => 1,
            'payment' => $request->payment,
            'payment_stat_id' => $request->payment_stat_id,
            'updated_by' => $request->session()->get('username'),
        ]);
        $user = User::with('role')->where('id', $attendant->data->user_id)->first();
        if ($user) {
            $user->update([
                'role_id' => $request->role_id,
            ]);
        }
        
        $group = Group::with('course')->where('id', $attendant->group_id)->first();
        if ($group) {
            $group->increment('num_attendant');
        }

        return redirect()->back();
    }
    
}
