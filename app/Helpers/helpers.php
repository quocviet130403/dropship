<?php

use App\Category;
use App\Customer_Product;
use App\Page;
use App\Product;
use Illuminate\Support\Str;

if (!function_exists('show_categories')) {
    function show_categories($categories,$active=null,$parent_id=0,$level=0)
    {
        $result = "";
        foreach($categories as $category){
            if($category->parent_id == $parent_id){
                $category_level = str_repeat('-',$level) .' '. $category->category;
                $selected = $active == $category->id ? 'selected' : '';
                $result .= "<option value='$category->id' $selected>$category_level</option>";
                $child = show_categories($categories,$active=$active,$category->id,$level+1);
                $result = $result . $child;
            }
        }
        return $result;
    }
}

if (!function_exists('get_categories')) {
    function get_categories()
    {
        $categories = app(Category::class)->select('*')->get();
        return $categories;
    }
}

if (!function_exists('getByProduct')) {
    function getByProduct($product)
    {
        return app(Product::class)->select('*')->where('product',$product)->first();
    }
}

if (!function_exists('totalPrice')) {
    function totalPrice($listProduct)
    {
        $result = 0;
        foreach($listProduct as $product){
            $result += $product->price;
        }
        return $result;
    }
}

if (!function_exists('getQty')) {
    function getQty($productId,$customerId)
    {
        $qty = app(Customer_Product::class)
        ->select('qty')
        ->where('product_id',$productId)
        ->where('customer_id',$customerId)
        ->first();

        return $qty->qty;
    }
}

if (!function_exists('convert_image')) {
    function convert_image($urlImage)
    {
        if(strpos($urlImage,',') != false){
            $arrImage = explode(',',$urlImage);
            $result = [];
            foreach($arrImage as $key=>$item){
                $arrItem = explode('/',$item);
                unset($arrItem[0],$arrItem[1],$arrItem[2]);
                $newUrlImage = implode('/',$arrItem);
                $result[$key] = $newUrlImage;
            }
            return $result;
        }else{
            $arrImage = explode('/',$urlImage);
            unset($arrImage[0],$arrImage[1],$arrImage[2]);
            $newUrlImage = implode('/',$arrImage);
            return $newUrlImage;
        }
    }
}

if (!function_exists('getPages')) {
    function getPages()
    {
        return app(Page::class)
        ->select('*')
        ->where('status','1')
        ->get();
    }
}

if (!function_exists('convertSlug')) {
    function convertSlug($string)
    {
        return Str::slug($string);
    }
}


if (!function_exists('getProducts')) {
    function getProducts()
    {
        return app(Product::class)
        ->all();
    }
}
