<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = [
        'category','status','parent_id','gender'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }

}
