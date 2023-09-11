<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//use model staff mvc
use App\Models\staff;


class StaffController extends Controller
{

    //khai bao bien de khoi tao 
    private $staff;

    //khoi tao doi tuong staff
    public function __construct() {
        $this->staff = new staff();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'staff';
        $data = $this->staff->getAllStaff();
        
        return view('staff.index',['title'=>$title,'data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get add staff
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
