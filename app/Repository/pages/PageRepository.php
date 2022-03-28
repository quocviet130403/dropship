<?php

namespace App\Repository\Pages;

use App\Repository\BaseRepository;
use App\Page;
use App\Repository\Pages\PageRepositoryInterface;

class PageRepository extends BaseRepository implements PageRepositoryInterface{
    protected $page;
    public function __construct(Page $page)
    {   
        parent::__construct($page);
    }
}