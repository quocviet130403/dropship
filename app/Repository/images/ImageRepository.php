<?php

namespace App\Repository\Images;

use App\Repository\BaseRepository;
use App\Image;
use App\Repository\Images\ImageRepositoryInterface;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface{
    protected $image;
    public function __construct(Image $image)
    {   
        parent::__construct($image);
    }
}