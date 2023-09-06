<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;

    //get all data product
    public function getAllProduct(){
        $product = DB::select('SELECT * FROM product ORDER BY created_at DESC');
        return $product; 
    }
}


