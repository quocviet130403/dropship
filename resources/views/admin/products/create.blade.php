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
                        <form action="{{$action}}" method="POST" enctype="multipart/form-data">
                            @if(isset($product))
                                <input name="_method" type="hidden" value="PUT">
                            @endif
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Product</label>
                                    <input type="text" class="form-control" id="validationServer01" name="product" value="{{isset($product) ? $product->product : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Price</label>
                                    <input type="number" class="form-control" id="validationServer01" name="price" value="{{isset($product) ? $product->price : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Price Old</label>
                                    <input type="number" class="form-control" id="validationServer01" name="old_price" value="{{isset($product) ? $product->price_old : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Desc</label>
                                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{(isset($product) && $product->status == 0) ? "selected" : ""}}>Pedding</option>
                                        <option value="1" {{(isset($product) && $product->status == 1) ? "selected" : ""}}>Completed</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="sale">Sale</label>
                                    <select name="sale" class="form-control" id="sale" required>
                                        <option value="0" {{(isset($product) && $product->sale == 0) ? "selected" : ""}}>NO</option>
                                        <option value="1" {{(isset($product) && $product->sale == 1) ? "selected" : ""}}>YES</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">-- Chọn --</option>
                                        @php
                                            $parent_id = isset($product) ? $product->parent_id : null;
                                            echo show_categories($categories,$parent_id);
                                        @endphp
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    {{-- <label for="image">Hình ảnh</label>
                                    <input type="file" name="image" id="image" class="form-control-file" required> --}}
                                    {{-- <div id="list-image-update">
                                        <img src="" alt="image">
                                    </div> --}}
                                    <label for="image">Hình ảnh</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                          </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="filepath" required>
                                      </div>
                                      <img id="holder" style="margin-top:15px;max-height:100px;">
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
