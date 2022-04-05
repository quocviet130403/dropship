<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}" />

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('public/web/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('public/web/css/icomoon.css')}}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{asset('public/web/css/ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('public/web/css/bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('public/web/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('public/web/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('public/web/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/web/css/owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('public/web/css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('public/web/fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('public/web/css/style.css')}}">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>
	<div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="{{asset('/')}}">Footwear</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                        <form action="#" class="search-wrap">
                           <div class="form-group">
                              <input type="search" class="form-control search" placeholder="Search">
                              <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                           </div>
                        </form>
                     </div>
                 </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
								@forelse (getPages() as $item)
                                	<li><a href="{{asset(convertSlug($item->page))}}">{{$item->page}}</a></li>
									
								@empty
									
								@endforelse

                                <li class="cart"><a href="{{asset('/gio-hang')}}"><i class="icon-shopping-cart"></i> Giỏ Hàng [<span class="num">{{Cart::content()->count()}}</span>]</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
		@section('breadcrumb')
			<div class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col">
							<p class="bread"><span><a href="index.html">Home</a></span> / <span>Women</span></p>
						</div>
					</div>
				</div>
			</div>
		@show
		@yield('content')

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('public/web/js/jquery.min.js')}}"></script>
   <!-- popper -->
   <script src="{{asset('public/web/js/popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{asset('public/web/js/bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{asset('public/web/js/jquery.easing.1.3.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('public/web/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('public/web/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('public/web/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('public/web/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('public/web/js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{asset('public/web/js/bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('public/web/js/jquery.stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('public/web/js/main.js')}}"></script>
	<script src="{{asset('public/js/main.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@if(Session::get('success'))
	<script>
		$(window).on('load',function(){
			Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'Thêm Thành Công',
				showConfirmButton: false,
				timer: 1500
			})
		})
	</script>
	@endif	
	
	@if(Session::get('update'))
	<script>
	  $(window).on('load',function(){
		  Swal.fire({
			  position: 'center',
			  icon: 'success',
			  title: 'Update Success !!!',
			  showConfirmButton: false,
			  timer: 1500
		  })
	  })
	</script>
	@endif
	
	@if(Session::get('delete'))
	<script>
	  $(window).on('load',function(){
		  Swal.fire({
			  position: 'center',
			  icon: 'success',
			  title: 'Delete Success !!!',
			  showConfirmButton: false,
			  timer: 1500
		  })
	  })
	</script>
	@endif
	
	
	@if(Session::get('exist'))
	<script>
	  $(window).on('load',function(){
		  Swal.fire({
			  position: 'center',
			  icon: 'error',
			  title: 'Already Exist !!!',
			  showConfirmButton: false,
			  timer: 1500
		  })
	  })
	</script>
	@endif

	</body>
</html>

