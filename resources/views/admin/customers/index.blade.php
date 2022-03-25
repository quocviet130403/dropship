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
  <h2>List Customers</h2>
  <div class="date-range-report ">
    <span></span>
  </div>
</div>
<div class="card-body pt-0 pb-5">
  <table class="table card-table table-responsive table-responsive-large" style="width:100%">
    <thead>
      <tr>
        <th>STT</th>
        <th>Fullname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Status</th>
        <th>Created_at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($listCustomers as $key=>$item)
        <tr>
            <td >{{$key+1}}</td>
            <td >
              <a class="text-dark" href="">{{$item->fullname}}</a>
            </td>
            <td class="d-none d-md-table-cell">{{$item->phone}}</td>
            <td class="d-none d-md-table-cell">{{$item->email}}</td>
            <td class="d-none d-md-table-cell">{{$item->address}}</td>
            <td >
                @php
                    $status = $item->status == 1 ? 'Completed' : 'Pending';
                    $color = $item->status == 1 ? 'badge-success' : 'badge-warning';
                @endphp
              <span class="badge {{$color}}">{{$status}}</span>
            </td>
            <td class="d-none d-md-table-cell">{{$item->created_at}}</td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                  <li class="dropdown-item">
                        <a href="{{route('customer.edit',$item->id)}}">Edit</a>
                    </li>
                    <li class="dropdown-item">
                      <form action="{{route('customer.destroy',$item->id)}}" method="POST">
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
  {{$listCustomers->links()}}
</div>
</div>
</div>
        </div>	
    </div>
@endsection