<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Product extends Model
{
    //
    protected $table = 'customer_product';

    protected $fillable = [
        'product_id','customer_id'
    ];
}
