<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB su dung cho model mvc
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;

    //khoi tao ten table
    private $tables = 'product';

    //get all data product
    public function getAllProduct(){
        $product = DB::select('SELECT * FROM product ORDER BY created_at DESC');
        return $product; 
    }

    //get name product
    public function getByName($name){
        $product = DB::select("SELECT * FROM product WHERE name_pd like '%.$name.%'");
        return $product;
    }

    //add product
    public function addProduct($data){
        DB::insert("INSERT INTO product (name_pd,quantity_pd,sold_pd,image_pd,price_pd,describe_pd,created_at,updated_at) value (?,?,?,?,?,?,?,?)", $data);
    }
}


