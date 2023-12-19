<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Data;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Group;
use App\Models\Job;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;

// class GroupController extends Controller
// {
//     public function groupAttendant(){
//         $data = Data::with(['user'])->where('user.username',session()->get('username'))->first();

//         $groups = Group::with(['course','attendants'])->where('attendants.data.id',$data->id)->get();        
//         // return view('group',['groups'=>$groups]);
//         return dd($groups);
//     }
// }
class GroupController extends Controller
{
    public function groupAttendant(){
        // Ambil data user berdasarkan username session
        $user = User::with('data')->where('username', session()->get('username'))->first();

        // Jika user ditemukan
        if($user) {
            // Ambil data dari relasi 'data' user
            $data = $user->data;

            // Jika data ditemukan
            if($data) {
                // Ambil semua grup yang memiliki 'data_id' yang sama dengan 'id' data
                $groups = Group::whereHas('attendants', function ($query) use ($data) {
                    $query->where('data_id', $data->id);
                })->with(['course', 'attendants'])->get();

                // Tampilkan hasil
                return view('group',['groups'=>$groups]);
            }
        }

        // Jika user atau data tidak ditemukan, kembalikan pesan error
        return "User atau Data tidak ditemukan.";
    }
}

