<?php

namespace App\Repository;

use App\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface{
    protected $model;
    public function __construct(Model $model)
    {   
        $this->model = $model;
    }
    public function getAll(){
        return $this->model->all();
    }
    public function addOrUpdate($data){
        return $this->model->updateOrCreate($data);
    }   
}