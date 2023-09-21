<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';

    protected $primarykey = 'id';

    //tu dong update created_at vaf updated_at
    public $timestamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'name',
        'email',
        'name_product',
        'sold_product',
        'image',
        'number_phone',
        'address',
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
