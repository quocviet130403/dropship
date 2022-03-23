<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'code','product','price','old_price','status','sale','image','category_id'
    ];

    

}
