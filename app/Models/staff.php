<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB
use Illuminate\Support\Facades\DB;



class Staff extends Model
{
    use HasFactory;

    //get all data staff
    public function getAllStaff(){
        $staff = DB::table('staff')->orderBy('id', 'asc')->get();
        return $staff;
    }

    //search email
    public function getEmail($email){
        $staff = DB::table('staff')->where('email', "$email")->get();
        return $staff;
    }

}
