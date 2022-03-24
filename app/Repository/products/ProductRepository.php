<?php

namespace App\Repository\Products;

use App\Repository\BaseRepository;
use App\Product;
use App\Repository\Products\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface{
    protected $product;
    public function __construct(Product $product)
    {   
        parent::__construct($product);
    }

}