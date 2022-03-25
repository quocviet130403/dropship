<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repository\Customers\CustomerRepositoryInterface;
use App\Repository\Products\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CustomerRepositoryInterface $customerRepositoryInterface)
    {
        //
        $listCustomers = $customerRepositoryInterface->getPaginate(20);
        $data = [
            'listCustomers' => $listCustomers
        ];
        return view('admin.customers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,CustomerRepositoryInterface $customerRepositoryInterface)
    {
        //
        $customer = $customerRepositoryInterface->getById($id);
        $data = [
            'customer' => $customer
        ];
        return view('admin.customers.detail',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, CustomerRepositoryInterface $customerRepositoryInterface)
    {
        //
        $data = $request->input();
        $data = Arr::except($data,['_token','_method']);
        $customerRepositoryInterface->updateById($id,$data);
        return back()->with('update',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CustomerRepositoryInterface $customerRepositoryInterface)
    {
        //
        $customerRepositoryInterface->deleteById($id);
        return back()->with('delete',true);
    }

    public function deleteProductCustomer($productId,$customerId,CustomerRepositoryInterface $customerRepositoryInterface){
        $customer = $customerRepositoryInterface->getById($customerId);
        $customer->products()->detach($productId);
        return back()->with('delete',true);
    }
}
