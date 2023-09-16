<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Auth as AuthLogin;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index(){
        $title = 'Auth-Login';
        return view('form.login.form_login',['title'=>$title]);
    }

    public function create(){
        $title = 'create-Auth';
        return view('form.admin.form_auth',['title'=>$title]);
    }

    public function createAuth(Request $request)
    {  
        //return $request->all();    
        $request-> validate([
            'name'      =>'required',
            'email'     =>'required|email|unique:auths',
            'password'  =>'required|min:5|max:12'
        ]);

        $auth = new User;

        $auth->name      = $request->name;
        $auth->email     = $request->email;
        $auth->password  = Hash::make($request->password);

        $auth->save();
        return redirect(route('create'));

    }

    public function authLogin(Request $request){
        $request->validate([
            'email'     =>'required|email',
            'password'  =>'required|min:5|max:12',
        ]);

        $credentials    = [
            'email'     => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('admin/');
        }

        return back()->withErrors([
            'msg'       =>'password or email fales',
        ])->onlyInput('email');
    }

    //logout
    public function authLogout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
