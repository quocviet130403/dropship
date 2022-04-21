<?php

namespace App\Http\Controllers;

use App\Repository\Categories\CategoryRepositoryInterface;
use App\Repository\Products\ProductRepositoryInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function show($page, ProductRepositoryInterface $productRepositoryInterface, CategoryRepositoryInterface $categoryRepositoryInterface){
        $breacrumb = strtoupper(str_replace('-', ' ', $page));
        $listPage = [
            'san-pham' => 'list',
            'gioi-thieu' => 'about',
            'lien-he' => 'contact',
            'trang-chu' => 'index',
            'gio-hang' => 'cart.cart',
            'thanh-toan' => 'cart.checkout',
            'thanh-cong' => 'cart.complete'
        ];
        if(array_key_exists($page,$listPage)){
            $pathView = "web.".$listPage[$page];
            switch($listPage[$page]){
                case 'list':
                    $products = $productRepositoryInterface->getPaginate(40);
                    $categories = $categoryRepositoryInterface->getAll();
                    $dataPage = [
                        'products' => $products,
                        'categories' => $categories
                    ];
                    break;
                default : $dataPage = '';
            }
            $data = [
                'breacrumb' => $breacrumb,
                'dataPage' => $dataPage
            ];
            return view($pathView, $data);
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
