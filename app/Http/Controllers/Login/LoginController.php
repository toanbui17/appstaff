<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//use staff model
use App\Models\User;

//use login request
use App\Http\Requests\Staff\LoginRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Session\Session;
//dung de kiiwm ta login
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        //index view login
        $title  ='login';
        return view('form.login.form_login',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        //dd(User::all());=
        $credentials = [
            'email'      => $request->email,
            'password'   => $request->password,
        ];
        // dd($credentials);
        // die;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
           return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'msg'      => 'passwoed or email fales.',
        
        ])->onlyInput('email');
    }

    //log out

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}