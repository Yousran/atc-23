<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Job;
use App\Models\Religion;
use App\Models\Role;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function login(Request $request){
        // validasi request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // cek apakah user ada di database
        $user = User::with(['role', 'role.table_rules.tableList', 'role.element_rules','setting'])
             ->where('username', $request->username)
             ->orWhere('email', $request->username)
             ->first();
    
        // cek password
        if ($user && Hash::check($request->password, $user->password)) {
            // buat session
            Session::put('username', $user->username);
            Session::put('role_name', $user->role->role_name);
            Session::put('user_photo', $user->photo);
            Session::put('table_rules', $user->role->table_rules->toArray());
            Session::put('element_rules', $user->role->element_rules->toArray());
            Session::put('setting', $user->setting->toArray());
            // redirect ke halaman yang diinginkan setelah login
            return redirect('/');
        } else {
            // jika login gagal, kembali ke halaman login dengan pesan error
            return redirect()->back()->with('wrong','Username atau Password salah');
        }
    }

    public static function reloadUser($username){
        session()->forget(['user','username', 'role_name', 'table_rules', 'element_rules','user_photo','setting']);
    
        // cek apakah user ada di database
        $user = User::with(['role', 'role.table_rules.tableList', 'role.element_rules','setting'])
             ->where('username', $username)
             ->first();

        if ($user) {
            // buat session
            Session::put('username', $user->username);
            Session::put('role_name', $user->role->role_name);
            Session::put('user_photo', $user->photo);
            Session::put('table_rules', $user->role->table_rules->toArray());
            Session::put('element_rules', $user->role->element_rules->toArray());
            Session::put('setting', $user->setting->toArray());
            // redirect ke halaman yang diinginkan setelah login

        } 
    }
    

    public function signupIndex(){
        return view('signup');
    }

    public function checkusername(Request $request){
        $username = $request->get('username');
        $data = User::where('username', $username)->count();
        if($data > 0){
            echo 'false';
        }else{
            echo 'true';
        }
    }

    public function checkemail(Request $request){
        $email = $request->get('email');
        $data = User::where('email', $email)->count();
        if($data > 0){
            echo 'false';
        }else{
            echo 'true';
        }
    }

    public function profilpictupload(Request $request){
        if ($request->photo) {
            $user = User::find($request->user_id);
            $user->update([
                'photo' => $request->photo,
            ]);
            LoginController::reloadUser($user->username);
            return redirect()->back();
        }
    }
    
    public function signup(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->role_id = '3';
        $user->email = $request->email;
        if ($request->input('photoname')) {
            $user->photo = $request->input('photoname');
        }
        $user->password = Hash::make($request->password);
        $user->add_by = session('role_name');
        $user->updated_by = session('role_name');
        $user->save();

        $setting = new Setting;
        $setting->user_id = $user->id;
        $setting->add_by = session('role_name');
        $setting->add_by = session('role_name');
        $setting->save();
        return redirect('login')->with('success', 'User created successfully!');
    }

    public function logout(){
        session()->forget(['user','username', 'role_name', 'table_rules', 'element_rules','user_photo','setting']);
        return redirect('/');;
    }

    public function profil(Request $request, $username = null){
        $session_username = $request->session()->get('username');
        $username = $username ?? $session_username;
        if ($username) {
            $user = User::with(['role', 'data'])
            ->where('username', $username)
            ->first();
            $genders = Gender::all();
            $jobs = Job::all();
            $religions = Religion::all();
            $educations = Education::all();
            return view('profil', ['user' => $user, 'genders' => $genders, 'jobs' => $jobs, 'religions' => $religions, 'educations' => $educations, 'session_username' => $session_username]);
        }
    }
    public function updatedata(Request $request)
    {
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
        // Jika data pengguna tidak ada, buat data baru
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
                // 'add_by' => $request->user()->username, // asumsi Anda menggunakan Laravel's built-in authentication
                // 'updated_by' => $request->user()->username, // asumsi Anda menggunakan Laravel's built-in authentication
            ]);
        } else {
            // Jika data pengguna ada, update data
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
                // 'updated_by' => $request->user()->username, // asumsi Anda menggunakan Laravel's built-in authentication
            ]);
        }
    
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data updated successfully.');
    }
       
}
