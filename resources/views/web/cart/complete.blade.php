@if(Session::get('check'))


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
                    <div class="process text-center active">
                        <p><span>03</span></p>
                        <h3>Hoàn Thành</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <p class="icon-addcart"><span><i class="icon-check"></i></span></p>
                <h2 class="mb-4">Cảm ơn bạn đã mua, đơn đặt hàng của bạn đã hoàn thành</h2>
                <p>
                    <a href="{{asset('/trang-chu')}}"class="btn btn-primary btn-outline-primary">Trang chủ</a>
                    <a href="{{asset('/trang-chu')}}"class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@else 
    <script>
        location.href = "{{asset('/gio-hang')}}";
    </script>
@endif