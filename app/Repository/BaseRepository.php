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
    public function getById($id){
        return $this->model->find($id);
    }

    public function updateById($id, $data){
        return $this->model->find($id)->update($data);
    }
    public function deleteById($id){
        return $this->model->find($id)->delete();
    }
    public function getAllName(){
        return $this->model->select('product')->get();
    }
}