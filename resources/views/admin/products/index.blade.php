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
  <h2>List Products</h2>
  <div class="date-range-report ">
    <a href="{{route('product.create')}}" class="btn btn-success mr-4">Add Product</a>
    <span></span>
  </div>
</div>
<div class="card-body pt-0 pb-5">
  <table class="table card-table table-responsive table-responsive-large" style="width:100%">
    <thead>
      <tr>
        <th>STT</th>
        <th>Product</th>
        <th>Image</th>
        <th>Category</th>
        <th>Price</th>
        <th>Old Price</th>
        <th>SALE</th>
        <th>Status</th>
        <th class="d-none d-md-table-cell">Created_at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($listProducts as $key=>$item)
        <tr>
            <td >{{$key+1}}</td>
            <td >
              <a class="text-dark" href="">{{$item->product}}</a>
            </td>
            <td >
              <img style="width:50px;height:50px" src="{{asset(isset($item->images[0]) ? $item->images[0]->image : "")}}" alt="images">
            </td>
            <td >
              {{$item->categories->category}}
            </td>
            <td >
              {{number_format($item->price)}} VNĐ
            </td>
            <td >
              {{number_format($item->old_price)}} VNĐ
            </td>
            <td >
              @php
                $sale = $item->sale == 0 ? "NO" : "YES";
              @endphp
              {{$sale}}
            </td>
            <td >
              @php
                    $status = $item->status == 1 ? 'Completed' : 'Pending';
                    $color = $item->status == 1 ? 'badge-success' : 'badge-warning';
                    @endphp
              <span class="badge {{$color}}">{{$status}}</span>
            </td>
            <td class="d-none d-md-table-cell">{{date('d-m-Y', strtotime($item->created_at))}}</td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                  <li class="dropdown-item">
                        <a href="{{route('product.edit',$item->id)}}">Edit</a>
                    </li>
                    <li class="dropdown-item">
                      <form action="{{route('product.destroy',$item->id)}}" method="POST">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button type="submit">Delete</button>
                      </form>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        @empty
            
        @endforelse
    </tbody>
  </table>
  {{$listProducts->links()}}
  
</div>
</div>
</div>
        </div>	
    </div>
@endsection