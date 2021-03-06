@extends('layouts.web')

@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
           <li style="background-image: url(../../public/web/images/img_bg_1.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 offset-sm-3 text-center slider-text">
                           <div class="slider-text-inner">
                               <div class="desc">
                                   <h1 class="head-1">Men's</h1>
                                   <h2 class="head-2">Shoes</h2>
                                   <h2 class="head-3">Collection</h2>
                                   <p class="category"><span>New trending shoes</span></p>
                                   <p><a href="{{asset('/san-pham')}}" class="btn btn-primary">Shop Collection</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(../../public/web/images/img_bg_2.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 offset-sm-3 text-center slider-text">
                           <div class="slider-text-inner">
                               <div class="desc">
                                   <h1 class="head-1">Huge</h1>
                                   <h2 class="head-2">Sale</h2>
                                   <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                   <p class="category"><span>Big sale sandals</span></p>
                                   <p><a href="{{asset('/san-pham')}}" class="btn btn-primary">Shop Collection</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(../../public/web/images/img_bg_3.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 offset-sm-3 text-center slider-text">
                           <div class="slider-text-inner">
                               <div class="desc">
                                   <h1 class="head-1">New</h1>
                                   <h2 class="head-2">Arrival</h2>
                                   <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                   <p class="category"><span>New stylish shoes for men</span></p>
                                   <p><a href="{{asset('/san-pham')}}" class="btn btn-primary">Shop Collection</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="{{asset('san-pham/nam')}}" class="featured-img" style="background-image: url(../../public/web/images/men.jpg);"></a>
                    <div class="desc">
                        <h2><a href="{{asset('san-pham/nam')}}">Shop Men's Collection</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="{{asset('san-pham/nu')}}" class="featured-img" style="background-image: url(../../public/web/images/women.jpg);"></a>
                    <div class="desc">
                        <h2><a href="{{asset('san-pham/nu')}}">Shop Women's Collection</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md">
           @forelse(getProducts() as $product)
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="{{route('web.detail',$product->id)}}" class="prod-img">
                        <img src="{{asset($product->images[0]->image)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">{{$product->product}}</a></h2>
                        <span class="price">{{number_format($product->price)}} VN??</span>
                    </div>
                </div>
            </div>
           @empty
           @endforelse
        <div class="row margin-auto mx-auto">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="../../public/web/images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="../../public/web/images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="../../public/web/images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="../../public/web/images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="../../public/web/images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div> --}}
@endsection