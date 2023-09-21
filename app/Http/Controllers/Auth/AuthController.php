<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
            'email'     =>'required|email|unique:users',
            'lever'     =>'required|integer',
            'password'  =>'required|min:5|max:12'
        ]);

        $auth = new User;

        $auth->name     = $request->name;
        $auth->email    = $request->email;
        $auth->lever    = $request->lever;
        $auth->password = Hash::make($request->password);
        $auth->token    = Str::random(10);

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

    //for get password
    public function forGetPassword(){
        $title = 'for get password-';
        return view('form.login.form_forGetPassword',['title'=>$title]);
    }

    public function forPostPassword(Request $request){

        $request->validate([
            'email' => 'required|exists:users',
        ]);

        $token = Str::random(10);
        $user = User::where('email', $request->email)->first();
        $user->update(['token'=>$token]);
        Mail::send('email.form_email',['user'=>$user], function($email) use($user){
            $email->subject('quan ly nhan su - lay lai mat khau tai khoan');
            $email->to($user->email,$user->name);
            return redirect()->route('login')->with('msg','hay chek mail de cap nhat lai mat khai!');
        });
    }

    public function getPassword(){

    }

    public function postPassword(){

    }
}
