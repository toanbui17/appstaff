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
    public $timestamps = true;

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


