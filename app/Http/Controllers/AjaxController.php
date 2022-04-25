<?php

namespace App\Http\Controllers;

use App\Repository\Products\ProductRepositoryInterface;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function filterProduct(ProductRepositoryInterface $productRepositoryInterface, Request $request){
        $data = $request->input();
        return 1;
    }
}
