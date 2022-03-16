<?php

namespace App\Repository\Categories;

use App\Repository\BaseRepository;
use App\Repository\Categories\CategoryRepositoryInterface;
use App\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface{
    protected $category;
    public function __construct(Category $category)
    {   
        parent::__construct($category);
    }
}