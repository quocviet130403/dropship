<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'code','product','price','old_price','status','sale','category_id','desc','gender'
    ];

    public function categories(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function customers(){
        return $this->belongsToMany('App\Customer');
    }

}
