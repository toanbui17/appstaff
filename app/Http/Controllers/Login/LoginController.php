<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//use staff model
use App\Models\Staff;

//use login request
use App\Http\Requests\Staff\LoginRequest;

class LoginController extends Controller
{
    private $Staffs;

    public function __construct() {
        $this->Staffs = new Staff();
    }
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
    public function store(LoginRequest $request)
    {
        //dang nhap va kiem tra dang nhap
        //$data = $request->validated();
        $pwdt = Hash::make($request->password);
        dd($pwdt);
        die;

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
