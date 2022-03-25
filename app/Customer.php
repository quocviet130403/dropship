<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';

    protected $fillable = [
        'fullname','phone','email','status','address','method_pay'
    ];

    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
