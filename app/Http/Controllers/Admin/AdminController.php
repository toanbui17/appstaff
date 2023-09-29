<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personnel;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Admin-home';
        return view('admin.index',['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        $title = 'chinh sua thong tin';
        $dataJoin = User::find($id);
        $idAc = Personnel::find($id);
        //dd($idAc);
        if (!empty($idAc)) {
            return view('form.admin.form_editInformation',['title'=>$title,'dataJoin'=>$dataJoin]);
        }else{
            return redirect()->route('homeAdmin')->with('msg','user chua duoc cap nhat!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    //     $personnel  = Personnel::find($id);

    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required',
    //         'status'=>'required',
    //         'office'=>'required',
    //         'lever'=>'required',
    //         'age'=>'required',
    //         'image'=>'required\image|mimes:jpg,bmp,png',
    //         'number_phone'=>'required',
    //         'address'=>'required'
    //     ]);

    //     $image                  = $request->file('image_pd');
    //     $new_name               = rand().'.'.$image->getClientOriginalExtension();
    //     $image->move(public_path('upload'), $new_name);
    
    //     $personnel->users_id = Auth::user()->id;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;
    //     $personnel-> = $request->;

    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
