<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function show($page){
        $listPage = [
            'nam' => 'list',
            'nu'=>'list',
            'gioi-thieu' => 'about',
            'lien-he' => 'contact',
            'trang-chu' => 'index'
        ];
        if(array_key_exists($page,$listPage)){
            $pathView = "web.".$listPage[$page];
            return view($pathView);
        }

        return abort(404);
    }
}
