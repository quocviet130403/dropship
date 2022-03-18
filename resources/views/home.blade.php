<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <title>DropShip</title>
</head>

<body>
    <div id="wrapper" class="montserrat-medium">
        <header>
            <div id="wraper-header">
                <div class="top-bar">
                    <div class="head-container d-flex">
                        <div class="box-currency d-flex">
                            <p>Currency :</p>
                            <p class="currency">GBP</p> 
                            <span><i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <div class="about-user d-flex">
                            <div class="register d-flex">
                                <p>Register</p>
                                <p>Sign In</p>
                            </div>
                            <div class="cart d-flex">
                                <div class="icon-cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <p>Empty</p>
                                <div class="icon-down">
                                    <span><i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-bar">
                    <div class="logo">
                        <a href=""><img src="{{ asset('public/images/home-img/logo.png') }}" alt=""></a>
                    </div>
                    <nav>
                        <ul class="main-menu">
                            <li><a href="">Mens</a></li>
                            <li><a href="">Womens</a></li>
                            <li><a href="">The Brand</a></li>
                            <li><a href="">Local stores</a></li>
                            <li><a href="">look book</a></li>
                        </ul>
                    </nav>
                    <div class="box-search">
                        <form action="">
                            <input type="text" name="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                    </div>
                </div>
                <div class="bot-bar">
                    <div class="ave">
                        <img src="{{ asset('public/images/home-img/AVE.png') }}" alt="">
                    </div>
                    <button>
                        <p>shop men's collection</p>
                    </button>
                </div>
            </div>
        </header>
        <div id="content">
            <nav class="menu-content">
                <ul class="list-menu">
                    <li><a href="">Pupular</a></li>
                    <li><a href="">News arrivals</a></li>
                    <li><a href="">Best sellers</a></li>
                    <li><a href="">Special offers</a></li>
                    <li><a href="">Coming soon</a></li>
                </ul>
            </nav>
            <div class="list-item">
                <div class="item item-1">
                    <a href=""><img src="{{ asset('public/images/home-img/item-1.png') }}" alt=""></a>
                </div>
                <div class="item item-2">
                    <a href=""><img src="{{ asset('public/images/home-img/item-2.png') }}" alt=""></a>
                </div>
                <div class="item item-3">
                    <a href=""><img src="{{ asset('public/images/home-img/item-3.png') }}" alt=""></a>
                </div>
                <div class="item item-4">
                    <a href=""><img src="{{ asset('public/images/home-img/item-4.png') }}" alt=""></a>
                </div>
                <div class="item item-5">
                    <a href=""><img src="{{ asset('public/images/home-img/item-5.png') }}" alt=""></a>
                </div>
                <div class="item item-6">
                    <a href=""><img src="{{ asset('public/images/home-img/item-6.png') }}" alt=""></a>
                </div>
            </div>
            <div class="lookbook">
                <div class="book men">
                    <img src="{{ asset('public/images/home-img/lookbook-men.png') }}" alt="">
                    <div class="title">
                        <h1><b>Men's</b></h1>
                        <h1>Lookbook</h1>
                    </div>
                    <div class="info">
                        <p>Lorem ipsum dolor sit amet eras facilisis
                            consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.
                            Elementum metus facilisis ut phasellu.
                        </p>
                    </div>
                    <button>View now</button>
                </div>
                <div class="book women">
                    <img src="{{ asset('public/images/home-img/lookbook-women.png') }}" alt="">
                    <div class="title">
                        <h1><b>Men's</b></h1>
                        <h1>Lookbook</h1>
                    </div>
                    <div class="info">
                        <p>Lorem ipsum dolor sit amet eras facilisis
                            consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.
                            Elementum metus facilisis ut phasellu.
                        </p>
                    </div>
                    <button>View now</button>
                </div>
                <div class="book your">
                    <img src="{{ asset('public/images/home-img/your-lookbook.png') }}" alt="">
                    <div class="title">
                        <h1><b>Men's</b></h1>
                        <h1>Lookbook</h1>
                    </div>
                    <div class="info">
                        <p>Lorem ipsum dolor sit amet eras facilisis
                            consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.
                            Elementum metus facilisis ut phasellu.
                        </p>
                    </div>
                    <button>View now</button>
                </div>
            </div>
        </div>
        <footer>
            <div id="wp-footer">
                <div class="top-footer">
                    <div class="box box-1">
                        <p class="title">Infomation</p>
                        <ul class="list-select">
                            <li><a href="">The brand</a></li>
                            <li><a href="">Local stores</a></li>
                            <li><a href="">Customer service</a></li>
                            <li><a href="">Privacy & cookies</a></li>
                            <li><a href="">Site map</a></li>
                        </ul>
                    </div>
                    <div class="box box-2">
                        <p class="title">Why buy from us</p>
                        <ul class="list-select">
                            <li><a href="">Shipping & returns</a></li>
                            <li><a href="">Secure shopping</a></li>
                            <li><a href="">Customer service</a></li>
                            <li><a href="">Testimonials</a></li>
                            <li><a href="">Ethical trading</a></li>
                        </ul>
                    </div>
                    <div class="box box-3">
                        <p class="title">your account</p>
                        <ul class="list-select">
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Register</a></li>
                            <li><a href="">View cart</a></li>
                            <li><a href="">View your lookbook</a></li>
                            <li><a href="">Track an order</a></li>
                            <li><a href="">Update infomation</a></li>
                        </ul>
                    </div>
                    <div class="box box-4">
                        <p class="title">lookbook</p>
                        <ul class="list-select">
                            <li><a href="">Latest posts</a></li>
                            <li><a href="">Men's lookbook</a></li>
                            <li><a href="">Women's lookbook</a></li>
                            <li><a href="">Lookbooks RSS feed</a></li>
                            <li><a href="">View your lookbook</a></li>
                            <li><a href="">Delete your lookbook</a></li>
                        </ul>
                    </div>
                    <div class="box box-5">
                        <p class="title">Contact details</p>
                        <ul class="list-select">
                            <li>Head Office: Avenue Fashion, 180-182 Regent Street, London.</li>
                            <li><a href="">Telephone: 0123-456-789</a></li>
                            <li><a href="">Email: support@yourwwebsite.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bot-footer">
                    <div class="prize">
                        <p><b>award winner</b> fashion awards 2016</p>
                    </div>
                    <div class="social">
                        <div class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="pinterest">
                            <i class="fa-brands fa-pinterest"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
