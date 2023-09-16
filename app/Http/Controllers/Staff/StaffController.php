<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//use model staff mvc
use App\Models\staff;

use App\Http\Requests\Admin\StaffRequest;
use App\Models\Staff as ModelsStaff;

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
        $data = staff::all();

        // dd($data);
        // die;
        
        return view('staff.index',['title'=>$title,'data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get add staff
        $title = 'staff-add';

        return view('form.staff.form_add',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert staff
        // $Post = $this->staff;
        // $Post->name = $request->name;
        // $Post->email = $request->email;
        // $Post->position = $request->position;
        // $Post->place_of_birth = $request->place_of_birth;
        // $Post->year_of_birth = $request->year_of_birth;
        // $Post->phone = $request->phone;
        // $Post->image = $request->image;
        // $Post->password = $request->password;

        // $post= $this->staff->seve();

        $data = $request->all();
        $post = staff::create($data);

        print($post);
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
