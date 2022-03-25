<?php

namespace App\Repository\Customers;

use App\Repository\BaseRepository;
use App\Customer;
use App\Repository\Customers\CustomerRepositoryInterface;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface{
    protected $customer;
    public function __construct(Customer $customer)
    {   
        parent::__construct($customer);
    }
}