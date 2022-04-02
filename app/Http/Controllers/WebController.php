<?php

namespace App\Http\Controllers;

use App\Repository\Products\ProductRepositoryInterface;
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

    public function showDetail($id, ProductRepositoryInterface $productRepositoryInterface){
        $product = $productRepositoryInterface->getById($id);
        $data = [
            'product' => $product
        ];
        return view('web.detail',$data);
    }
}
