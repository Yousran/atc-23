<?php

namespace App\Http\Controllers;

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
        $user = User::with(['role', 'role.table_rules.tableList', 'role.element_rules'])
             ->where('username', $request->username)
             ->first();


        // cek password
        if ($user && Hash::check($request->password, $user->password)) {
            // buat session
            Session::put('username', $user->username);
            Session::put('role_name', $user->role->role_name);
            Session::put('user_photo', $user->photo);
            Session::put('table_rules', $user->role->table_rules->toArray());
            Session::put('element_rules', $user->role->element_rules->toArray());
            // redirect ke halaman yang diinginkan setelah login
            return redirect('/');
        } else {
            // jika login gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors([
                'username' => 'Username atau password salah.',
            ]);
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
    

    public function signup(Request $request){
        
    }

    public function logout(){
        session()->forget(['user','username', 'role_name', 'table_rules', 'element_rules']);
        return redirect('/');;
    }
}
