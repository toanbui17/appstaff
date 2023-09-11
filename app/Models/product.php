<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB su dung cho model mvc
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class Product extends Model
{
    use HasFactory;



    //get all data product
    public function getAllProduct(){
        $product = DB::table('product')->orderBy('id', 'asc')->get();
        return $product; 
    }

    //get name product
    public function getByName($name){
        $product = DB::table('product')->where('name_pd', 'like', "%$name%")->get();
        return $product;
    }

    //add product
    public function addProduct($data){
        DB::insert("INSERT INTO product (name_pd,quantity_pd,sold_pd,image_pd,price_pd,describe_pd,created_at,updated_at) value (?,?,?,?,?,?,?,?)", $data);
    }

    //get by id
    public function getById($id){
        $dataId = DB::select('SELECT * FROM product WHERE id = ?',[$id]);
        return $dataId;
    }
}


