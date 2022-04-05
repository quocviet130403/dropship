<?php

namespace App\Http\Controllers;

use App\Repository\Products\ProductRepositoryInterface;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

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
}
