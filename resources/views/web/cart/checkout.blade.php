
@if(Cart::content()->count() <= 0)
    <script>
        location.href = "{{asset('/gio-hang')}}";
    </script>
@endif


@extends('layouts.web')

@section('content')
@section('breadcrumb')
    @parent
@endsection

<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-sm-10 offset-md-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Giỏ hàng</h3>
                    </div>
                    <div class="process text-center active">
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
    <form action="{{route('cart.addCustomer')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div method="post" class="colorlib-form">
                    @csrf
                    <h2>Thanh Toán</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Họ</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Họ" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Tên</label>
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Tên" required>
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Địa chỉ email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <input type="text" id="zippostalcode" name="phone_number" class="form-control" placeholder="" min="6" max="13" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Tỉnh / Thành phố</label>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="calc_shipping_provinces" id="calc_shipping_provinces" class="form-control" required>
                                        <option value="">Tỉnh / Thành phố</option>
                                    </select>
                                    <input class="billing_address_1" name="billing_address_1" type="hidden" value="">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Quận / Huyện</label>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="calc_shipping_district" id="calc_shipping_district" class="form-control" required>
                                        <option value="">Quận / Huyện</option>
                                    </select>
                                    <input class="billing_address_2" name="billing_address_2" type="hidden" value="">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="desc-address">Địa chỉ chi tiết</label>
                                    <input type="text" id="desc_address" name="desc_address" class="form-control" placeholder="Xã, Thôn, ..." required>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Ghi chú (Có thể bỏ trống)</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <div class="radio">
                                    <label><input type="radio" name="optradio"> Create an Account? </label>
                                    <label><input type="radio" name="optradio"> Ship to different address</label>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Cart Total</h2>
                            <ul>
                                <li>
                                    <ul>
                                        @forelse(Cart::content() as $product)
                                            <li><span>{{$product->qty}} x {{$product->name}}</span> <span style="white-space: nowrap">{{number_format($product->price * $product->qty)}} VNĐ</span></li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </li>
                                <li><span>Vận chuyển</span> <span style="white-space: nowrap">30.000 VNĐ</span></li>
                                <li><span>Tổng</span> <span style="white-space: nowrap">{{Cart::total()}} VNĐ</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Phương thức thanh toán</h2>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="0" checked> Thanh toán trực tiếp</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="1"> Thanh toán qua ngân hàng</label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Paypal</label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" required> Tôi đã đọc và chấp nhận những điều trên</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        @if(Cart::content()->count() > 0)
                            <p><button type="submit" class="btn btn-primary">Thanh Toán</button></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection