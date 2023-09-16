<?php

namespace App\Models;

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB su dung cho model mvc
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primarykey = 'id';

    //tu dong update created_at vaf updated_at
    public $timestamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'name_pd',
        'quantity_pd',
        'sold_pd',
        'image_pd',
        'price_pd',
        'describe_pd',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
      
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];
}
/*

    //get all data product
    public function getAllProduct(){
        $product = DB::table('product')
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();
        
        return $product; 
    }

    //get name product
    public function getByName($name){
        $product = DB::table('product')
        ->where('name_pd', 'like', "%$name%")
        ->get();
        
        return $product;
    }

    //add product
    public function addProduct($data){
        //DB::insert("INSERT INTO product (name_pd,quantity_pd,sold_pd,image_pd,price_pd,describe_pd,created_at,updated_at) value (?,?,?,?,?,?,?,?)", $data);
        return DB::table('product')->insert($data);
    }

    //get by id
    public function getById($id){
        $dataId = DB::table('product')
        ->where('id','=',$id);
        return $dataId;
    }

    public function updateProduct($id){
        DB::table('product')
        ->where('id','=',$id)
        ->update([
            'name_pd'=>'$name_pd',
            'quantity_pd'=>'$quantity_pd',
            'sold_pd'=>'$sold_pd',
            'image_pd'=>'$image_pd',
            'price_pd'=>'$price_pd',
            'describe_pd'=>'$describe_pd',
            'updated_at'=>'$updated_at',
        ]);
    }
    public function deleteProduct($id){
        DB::table('product')
        ->where('id','=',$id)
        ->delete();
    }
}
*/

