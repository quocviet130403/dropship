<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = "images";
    protected $fillable = [
        'image','product_id'
    ];

    public function products(){
        return $this->belongsTo('App\Product','product_id');
    }
}
