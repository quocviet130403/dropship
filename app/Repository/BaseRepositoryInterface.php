<?php

namespace App\Repository;

interface BaseRepositoryInterface{
    public function getAll();
    public function addOrUpdate($data);
    public function getById($id);
    public function updateById($id,$data);
    public function deleteById($id);
}