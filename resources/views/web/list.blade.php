@extends('layouts.web')

@section('content')

@section('breadcrumb')
    @parent
@endsection

<div class="breadcrumbs-two">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img" style="background-image: url(../../public/web/images/cover-img-1.jpg);">
                    <h2>Tất cả</h2>
                </div>
                <div class="menu text-center">
                    <p><a href="#">Mới nhất</a> <a href="#">Bán Chạy</a> <a href="#">Khuyến Mãi</a> <a href="#">Giảm Giá</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-featured">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <div class="featured-img featured-img-2" style="background-image: url(../../public/web/images/img_bg_2.jpg);">
                        <h2>Nam</h2>
                        <p><a href="{{asset('/san-pham/nam')}}" class="btn btn-primary btn-lg">Mua ngay</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <div class="featured-img featured-img-2" style="background-image: url(../../public/web/images/women.jpg);">
                        <h2>Nữ</h2>
                        <p><a href="{{asset('/san-pham/nu')}}" class="btn btn-primary btn-lg">Mua ngay</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container" id="filter" data-url="{{route('products.filter')}}">
        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Sắp xếp</h3>
                            <div class="form-group">
                                <select name="filter-orderby" id="filter-orderby" class="form-control">
                                    <option value="0">Giá thấp đến cao</option>
                                    <option value="1">Giá cao đến thấp</option>
                                    <option value="2">Mới đến cũ</option>
                                    <option value="3">Cũ đến mới</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Giá tiền</h3>
                            <div class="item d-flex justify-content-between">
                                <label for="from_price">Từ :</label>
                                 <input style="margin-bottom:10px" type="number" min="1" name="from_price">
                            </div>
                            <div class="item d-flex justify-content-between">
                                <label for="to_price">Đến :</label>
                                <input type="number" min="1" name="to_price">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-12"> --}}
                        {{-- <div class="side border mb-1"> --}}
                            {{-- <h3>Size/Width</h3> --}}
                            {{-- <div class="block-26 mb-2"> --}}
                                {{-- <h4>Size</h4>
                           <ul>
                              <li><a href="#">7</a></li>
                              <li><a href="#">7.5</a></li>
                              <li><a href="#">8</a></li>
                              <li><a href="#">8.5</a></li>
                              <li><a href="#">9</a></li>
                              <li><a href="#">9.5</a></li>
                              <li><a href="#">10</a></li>
                              <li><a href="#">10.5</a></li>
                              <li><a href="#">11</a></li>
                              <li><a href="#">11.5</a></li>
                              <li><a href="#">12</a></li>
                              <li><a href="#">12.5</a></li>
                              <li><a href="#">13</a></li>
                              <li><a href="#">13.5</a></li>
                              <li><a href="#">14</a></li>
                           </ul> --}}
                        {{-- </div> --}}
                        {{-- <div class="block-26">
                                <h4>Size</h4>
                           <ul>
                              <li><a href="#">S</a></li>
                              <li><a href="#">M</a></li>
                              <li><a href="#">SM</a></li>
                              <li><a href="#">L</a></li>
                              <li><a href="#">XL</a></li>
                           </ul>
                        </div>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Style</h3>
                            <ul>
                                <li><a href="#">Slip Ons</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Lace Ups</a></li>
                                <li><a href="#">Oxfords</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Colors</h3>
                            <ul>
                                <li><a href="#">Black</a></li>
                                <li><a href="#">White</a></li>
                                <li><a href="#">Blue</a></li>
                                <li><a href="#">Red</a></li>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">Grey</a></li>
                                <li><a href="#">Orange</a></li>
                                <li><a href="#">Cream</a></li>
                                <li><a href="#">Brown</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>loại</h3>
                            {!!show_categories_web($dataPage['categories'])!!}
                        </div>
                    </div>
                    {{-- <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Technologies</h3>
                            <ul>
                                <li><a href="#">BioBevel</a></li>
                                <li><a href="#">Groove</a></li>
                                <li><a href="#">FlexBevel</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-9 col-xl-9">
                <div class="row row-pb-md">
                    @forelse ($dataPage['products'] as $product)
                        
                    <div class="col-lg-4 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="{{route('web.detail',$product->id)}}" class="prod-img">
                                <img src="{{asset($product->images[0]->image)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="{{route('web.detail',$product->id)}}">{{$product->product}}</a></h2>
                                <span class="price">{{number_format($product->price)}} VNĐ</span>
                            </div>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse


                </div>
                {{$dataPage['products']->links('web.component.paginate')}}
            </div>
        </div>
    </div>
</div>
@endsection