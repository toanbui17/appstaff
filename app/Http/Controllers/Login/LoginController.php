<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Http\Request;

//lop doi  tuong databaase
use Illuminate\Support\Facades\DB;

//use login request
use App\Http\Requests\Staff\LoginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index view login
        $title ='login';
        return view('form.login.form_login',['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dang nhap va kiem tra dang nhap
        $account = $request->all();
        $ten = $account['email'];
        $name = DB::table('staff')->where('email', 'LIKE', '%($name)%')->get();
        dd($name);
        die;
        if ($account == $name) {
            dd($name);    
        }else{
            return redirect(route('home'));
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
