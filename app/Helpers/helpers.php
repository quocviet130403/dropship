<?php

use App\Category;

if (!function_exists('show_categories')) {
    function show_categories($categories,$parent_id=0,$level=0)
    {
        $result = "";
        foreach($categories as $category){
            if($category->parent_id == $parent_id){
                $category_level = str_repeat('-',$level) . $category->category;
                $result .= "<option value='$category->id'>$category_level</option>";
                $child = show_categories($categories,$category->id,$level+1);
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
