<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function Login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function userRegister(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $RegisterUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_role' => 2,
            'password' => Hash::make($request->password)
        ]);
        if($RegisterUser){
            return redirect('/login');
        }
    }

    public function cekLoginUser(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        

        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return redirect('/login');

    }

    public function LoginAdmin(){
        return view('adminlogin');
    }

   public function cekLoginAdmin(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        

        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return redirect('/adminlogin');

    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
