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
            'nam' => 'list',
            'nu' => 'list',
            'gioi-thieu' => 'about',
            'lien-he' => 'contact',
            'trang-chu' => 'index',
            'gio-hang' => 'cart.cart',
            'thanh-toan' => 'cart.checkout',
            'thanh-cong' => 'cart.complete'
        ];
        $listCategory = [
            'nam' => 'male',
            'nu' => 'female'
        ];
        if(array_key_exists($page,$listPage)){
            $pathView = "web.".$listPage[$page];
            switch($page){
                case 'san-pham':
                    $products = $productRepositoryInterface->getPaginate(40);
                    $categories = $categoryRepositoryInterface->getAll();
                    $dataPage = [
                        'products' => $products,
                        'categories' => $categories
                    ];
                    break;
                case 'nu' || 'nam':
                    if(!array_key_exists($page,$listCategory)){
                        return "page 404";
                    }
                    $products = $productRepositoryInterface->getGenderProducts($listCategory[$page],40);
                    $categories = $categoryRepositoryInterface->getGenderCategories($listCategory[$page]);
                    dd($categories);
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
