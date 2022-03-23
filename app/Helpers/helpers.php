<?php

use App\Category;

if (!function_exists('show_categories')) {
    function show_categories($categories,$active=null,$parent_id=0,$level=0)
    {
        $result = "";
        foreach($categories as $category){
            if($category->parent_id == $parent_id){
                $category_level = str_repeat('-',$level) . $category->category;
                $selected = $active == $category->id ? 'selected' : '';
                $result .= "<option value='$category->id' $selected>$category_level</option>";
                $child = show_categories($categories,$active=null,$category->id,$level+1);
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
