@extends('layouts.web')

@section('content')
@section('breadcrumb')
    @parent
@endsection
<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-10 offset-md-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Giỏ hàng</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>02</span></p>
                        <h3>Thanh Toán</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Hoàn Thành</h3>
                    </div>
                </div>
            </div>
        </div>
        @if(Cart::content()->count() > 0)
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="product-name d-flex">
                    <div class="one-forth text-left px-4">
                        <span>Chi Tiết sản phẩm</span>
                    </div>
                    <div class="one-eight text-center">
                        <span>Giá</span>
                    </div>
                    <div class="one-eight text-center">
                        <span>Số Lượng</span>
                    </div>
                    <div class="one-eight text-center">
                        <span>Tổng</span>
                    </div>
                    <div class="one-eight text-center px-4">
                        <span>Xóa</span>
                    </div>
                </div>
                @forelse(Cart::content() as $product)
                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img" style="background-image: url({{asset($product->options->image)}});">
                        </div>
                        <div class="display-tc">
                            <h3>{{$product->name}}</h3>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">{{number_format($product->price)}} VNĐ</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" data-url="{{route('cart.update')}}" data-price="{{$product->price}}" data-id="{{$product->rowId}}" value="{{$product->qty}}" min="1" max="100">
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">{{number_format($product->price * $product->qty)}} VNĐ</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="#" class="closed"></a>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
                
            </div>
        </div>
        @else 
        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <h2 class="mb-4">Vui lòng mua hàng</h2>
                <p>
                    <a href="{{asset('/trang-chu')}}"class="btn btn-primary btn-outline-primary">Trang chủ</a>
                    <a href="{{asset('/trang-chu')}}"class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
                </p>
            </div>
        </div>
        @endif
        @if(Cart::content()->count() > 0)
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-sm-8">
                                {{-- <form action="#"> --}}
                                    <div class="row form-group">
                                        {{-- <div class="col-sm-9">
                                            <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
                                        </div> --}}
                                        <div class="col-sm-3">
                                            {{-- <input type="submit" value="Apply Coupon" class="btn btn-primary"> --}}
                                            <a href="{{asset('/thanh-toan')}}" class="btn btn-primary">Thanh Toán</a>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="total">
                                    <div class="sub">
                                        <p><span>Tổng:</span> <span class="total-price">{{Cart::total()}} VNĐ</span></p>
                                        {{-- <p><span>Delivery:</span> <span>$0.00</span></p> --}}
                                        <p><span>Ship:</span> <span>30.000 VNĐ</span></p>
                                    </div>
                                    <div class="grand-total">
                                        <p><span><strong>Tổng:</strong></span> <span class="total-price">{{Cart::total()}} VNĐ</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="../../public/web/images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="../../public/web/images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Minam Meaghan</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="../../public/web/images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Men's Taja Commissioner</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="../../public/web/images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Russ Men's Sneakers</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection