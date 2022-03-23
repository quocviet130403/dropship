@extends('layouts.admin')
@section('sidebar')
    @parent
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content">							
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add Products</h2>
                    </div>
                    <div class="card-body">
                        @php
                            $action = isset($product) ? route('product.update',$product->id) : route('product.store');
                        @endphp
                        <form action="{{$action}}" method="POST">
                            @if(isset($product))
                                <input name="_method" type="hidden" value="PUT">
                            @endif
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">product</label>
                                    <input type="text" class="form-control" id="validationServer01" name="product" value="{{isset($product) ? $product->product : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{(isset($product) && $product->status == 0) ? "selected" : ""}}>Pedding</option>
                                        <option value="1" {{(isset($product) && $product->status == 1) ? "selected" : ""}}>Completed</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Category</label>
                                    <select name="parent_id" class="form-control" required>
                                        <option value="">-- Chọn --</option>
                                        @php
                                            $parent_id = isset($product) ? $product->parent_id : null;
                                            echo show_categories($categories,$parent_id);
                                        @endphp
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


  </div>
@endsection
