<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Group;
use App\Models\Time;
use App\Models\Timetable;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwalInstruktur(){

        $days = Day::all();
        $times = Time::all();
        $groups = Group::all();
        $tutors = Tutor::with('data.user')->get();
        $user = User::where('username', session()->get('username'))->first();
        if ($user) {
            $jadwals = Timetable::with(['group', 'day', 'time'])->where('tutor_id', $user->id)->get();
            if ($jadwals) {
                return view('jadwal-instruktur',['days'=>$days, 'times'=>$times, 'tutors'=>$tutors, 'groups'=>$groups,'jadwals'=>$jadwals]);
            }
        }
    }
    
    public function jadwalAttendant(){
        $days = Day::all();
        $times = Time::all();
        $groups = Group::all();
        $tutors = Tutor::with('data.user')->get();
        $user = User::where('username', session()->get('username'))->first();
    
        if ($user) {
            $jadwals = Timetable::whereHas('group.attendants.data.user', function ($query) use ($user) {
                $query->where('id', $user->id);
            })->with(['group', 'day', 'time'])->get();
    
            if ($jadwals) {
                return view('jadwal-instruktur',['days'=>$days, 'times'=>$times, 'tutors'=>$tutors, 'groups'=>$groups,'jadwals'=>$jadwals]);
            }
        }
    }
    
    public function addJadwalInstruktur(){
        $days = Day::all();
        $times = Time::all();
        $groups = Group::all();
        $tutors = Tutor::with('data.user')->get();
    
        // Query untuk mendapatkan jadwal berdasarkan id user
        $jadwals = Timetable::with(['group', 'day', 'time'])->get();
    
        return view('jadwal-instruktur-add', ['days' => $days, 'times' => $times, 'groups' => $groups, 'tutors' => $tutors, 'jadwals' => $jadwals]);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'group_id' => 'required',
            'day_id' => 'required',
            'time_id' => 'required',
            'tutor_id' => 'nullable|integer',
        ]);
    
        $timetable = Timetable::updateOrCreate(
            ['day_id' => $validatedData['day_id'],'tutor_id' => $validatedData['tutor_id'], 'time_id' => $validatedData['time_id']],
            [
                'group_id' => $validatedData['group_id'],
                'add_by' => $request->session()->get('username'),
                'updated_by' => $request->session()->get('username')
            ]
        );
    
        return redirect()->back();
    }
    

}
