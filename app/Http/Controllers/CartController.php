<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CartRequest;
use App\Repository\Customers\CustomerRepositoryInterface;
use App\Repository\Products\ProductRepositoryInterface;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    //
    public function addCart($id,ProductRepositoryInterface $productRepositoryInterface,Request $request){
        $qty = $request->input('quantity');
        $product = $productRepositoryInterface->getById($id);
        $data = [
            'id' => $product->id,
            'name' => $product->product,
            'qty' => $qty,
            'price' => $product->price,
            'options' => ['image' => $product->images[0]->image]
        ];
        Cart::add($data);
        // Cart::destroy();
        return back()->with('success',true);
    }

    public function updateCart(){
        $rowId = request('rowId');
        $qty = request('qty');
        $price = request('price');
        Cart::update($rowId,['qty' => $qty]);
        $data = [
            'qty' => $qty,
            'subtitle' => number_format($qty * $price),
            'total' => Cart::total(),
        ];
        return json_encode($data);
    }

    public function addCustomer(Request $request, CustomerRepositoryInterface $customerRepositoryInterface, ProductRepositoryInterface $productRepositoryInterface){
        $data = $request->input();
        $data = (object) $data;
        $customer = [
            'fullname' => $data->fname . " " . $data->lname,
            'phone' => $data->phone_number,
            'email' => $data->email,
            'address' => "Tỉnh / Thành phố : " . $data->billing_address_1 . ", Huyện : " . $data->billing_address_2 . ", Địa chỉ cụ thể : " . $data->desc_address,
            'method_pay' => $data->optradio
        ];
        $newCustomer = $customerRepositoryInterface->addOrUpdate($customer);
        foreach(Cart::content() as $product){
            $newCustomer->products()->attach($product->id,['qty'=>$product->qty]);
        }
        Cart::destroy();
        return redirect(asset('/thanh-cong'))->with('check',true);
    }
}
