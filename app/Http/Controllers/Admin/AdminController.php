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
    public function allPersonnel()
    {
        $title = 'personnel';
        $dataUser = User::all();
        return view('staff.index',['title'=>$title,'dataUser'=>$dataUser]);
    }


    public function show($id){
        $title = 'personnel';
        $dataUser = User::find($id);
        return view('staff.personnel',['title'=>$title,'dataUser'=>$dataUser]);
    }
    
    /**
     * Display the specified resource.
     */
    public function createPersonnel(string $id)
    {
        //
        $title = 'add_personnel';
        $dataUser = User::find($id);
        return view('form.admin.form_addUser',['title'=>$title,'dataUser'=>$dataUser]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //
        $dataUserId = User::find($id);
        
        $request->validate([
            'office'            =>'required',
            'age'               =>'required',
            'image'             =>'required',
            'number_phone'      =>'required|min:10|max:10',
            'address'           =>'required',
        ]);
        
        $image                  = $request->file('image');
        $new_name               = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload'), $new_name);

        $personnel = new Personnel;

        $personnel->office          = $request->office;
        $personnel->age             = $request->age;
        $personnel->image           = $new_name;
        $personnel->number_phone    = $request->number_phone;        
        $personnel->address         = $request->address;
        $personnel->user_id         = $dataUserId->id; 
        
        $personnel->save();
        return back()->with('msg','da tao thanh cong tai khoan');

    }

    public function editPersonnel(string $id)
    {
        //
        $title = 'edit_personnel';
        $dataUser = User::find($id);

        if (!empty($dataUser)) {
            return view('form.admin.form_editUser',['title'=>$title,'dataUser'=>$dataUser]);
        }else{
            return back()->with('msg','user chua duoc cap nhat!');
        }
    }

    public function updatePersonnel(Request $request, $id){
        
        $dataUpdate = Personnel::find($id);
        
        $request->validate([
            'office'            =>'required',
            'age'               =>'required',
            'image'             =>'required',
            'number_phone'      =>'required|min:10|max:10',
            'address'           =>'required',
        ]);

        $image                  = $request->file('image');
        $new_name               = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload'), $new_name);

        $dataUpdate->office          = $request->office;
        $dataUpdate->age             = $request->age;
        $dataUpdate->image           = $new_name;
        $dataUpdate->number_phone    = $request->number_phone;        
        $dataUpdate->address         = $request->address;

        $dataUpdate->save();
        return back()->with('good','da update thanh cong tai khoan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $title = 'chinh sua thong tin';
        $dataJoin = User::find($id);
        //$idAc = Personnel::find($id);
        //dd($idAc);
        if (!empty($dataJoin)) {
            return view('form.admin.form_editInformation',['title'=>$title,'dataJoin'=>$dataJoin]);
        }else{
            return back()->with('msg','user chua duoc cap nhat!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
