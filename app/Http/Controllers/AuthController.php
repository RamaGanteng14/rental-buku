<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {

        return view('register');
    }
    public function authenticating(Request $request)
    {
        $cradentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($cradentials)){ //cek apakah $cradential ada di  database 
           

            //cek apakah user aktif/tidak
            if(Auth::user()->status != 'active'){
                
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();


               Session::flash('status','failed');
               Session::flash('message','Your account is not active yet, please contact admin!');
               return redirect('/login');
            }

            $request->session()->regenerate(); //jika ada maka akan dibuatkan session
            
            if(Auth::user()->role_id == 1){ //jikas user adalah admin maka akan di redirect ke halaman dashboard
            return redirect('dashboard'); //terus dilempar  ke halaman dashboard
            }
            if(Auth::user()->role_id ==2){ //jika user bkn adminn  maka akan di alihkan ke halaman profile saja
                return redirect('profile');
            }
        }
        Session::flash('status','failed');
        Session::flash('message','Login invalid');
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');   
    }
    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone'    => 'required|max:255',
            'address'   => 'required',
        ]);
        
        $request['password'] =  Hash::make($request->newPassword);
        $user = User::create($request->all());
          
        Session::flash('status','success');
        Session::flash('message','Register sucess... Wait admin for approval');
        return redirect('register');
    }

}