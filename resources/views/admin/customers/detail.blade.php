@extends('layouts.admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="container-wrapper">
        <div class="row">
            <div class="col-12">
<!-- Recent Order Table -->
<div class="card card-table-border-none" id="recent-orders">
<div class="card-header justify-content-between">
  <h2><strong>{{$customer->fullname}}</strong></h2>
</div>
<div class="card-body pt-0 pb-5">
    <form action="{{route('customer.update',$customer->id)}}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        @csrf
        <div class="phone mt-4"><strong>Phone</strong> : {{$customer->phone}}</div>
        <div class="email mt-4"><strong>Email</strong> : {{$customer->email}}</div>
        <div class="address mt-4"><strong>Address</strong> : {{$customer->address}}</div>
        <div class="method_pay mt-4">
            <label for="method_pay"><strong>Method Payment</strong></label>
            <select name="method_pay" id="method_pay" required>
                <option value="0" {{(isset($customer) && $customer->method_pay == 0) ? "selected" : ""}}>Thanh toán tại cửa hàng</option>
                <option value="1" {{(isset($customer) && $customer->method_pay == 1) ? "selected" : ""}}>Thanh Toán khi giao</option>
            </select>
        </div>
        <div class="status mt-4">
            <label for="status"><strong>status</strong></label>
            <select name="status" id="status" required>
                <option value="0" {{(isset($customer) && $customer->status == 0) ? "selected" : ""}}>Pedding</option>
                <option value="1" {{(isset($customer) && $customer->status == 1) ? "selected" : ""}}>Completed</option>
            </select>
        </div>


        <div class="list-product mt-4">
            <h5>List Products</h5>
            <table class="mt-4 form-list-product" style="width:100%" data-url="" data-token="{{ csrf_token() }}">
                <thead>
                    <td>STT</td>
                    <td>Image</td>
                    <td>Name Product</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>SubTotal</td>
                    <td>Created at</td>
                    <td></td>
                </thead>
                <tbody>
                    @php
                        $allQty = 0;
                        $total = 0;
                    @endphp
                    @forelse ($customer->products as $key=>$item)
                    @php
                        $qty = getQty($item->pivot->product_id,$item->pivot->customer_id);
                        $allQty += $qty;
                        $total += $qty*$item->price;
                    @endphp
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <img style="width:50px;height:50px" src="{{asset($item->images[0]->image)}}" alt="">
                            </td>
                            <td>{{$item->product}}</td>
                            <td>{{$item->categories->category}}</td>
                            <td>{{number_format($item->price)}} VNĐ</td>
                            <td>
                                <input type="number" name="qty" class="qty" min="1" max="50" value="{{$qty}}" disabled>
                            </td>
                            <td>{{number_format($qty*$item->price)}} VNĐ</td>
                            <td>{{$item->created_at}}</td>
                            <td class="text-right">
                                <a href="{{route('product.customer.delete',['productId'=>$item->id, 'customerId'=>$customer->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>

        <div id="total" class="mt-5">
            <span class="d-block">Number : {{$allQty}}</span>
            <span class="d-block">Total : {{number_format($total)}} VNĐ</span>
        </div>


        <button class="btn btn-primary mt-5" type="submit">Update</button>
    </form>
</div>
</div>
</div>
        </div>	
    </div>
@endsection