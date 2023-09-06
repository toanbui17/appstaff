<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB
use Illuminate\Support\Facades\DB;

class staff extends Model
{
    use HasFactory;

    //get all data staff
    public function getAllStaff(){
        $staff = DB::select('SELECT * FROM staff ORDER BY created_at DESC');
        return $staff;
    }

}
