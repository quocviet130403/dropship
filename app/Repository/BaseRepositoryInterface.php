<?php

namespace App\Repository;

interface BaseRepositoryInterface{
    public function getAll();
    public function addOrUpdate($data);
}