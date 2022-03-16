<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>DropShip</title>
</head>

<body>
    <div id="wrapper">
        <header id="header">
            <div id="wraper-header">
                <div class="top-bar">
                    <div class="currency">
                        <p>Currency: </p>
                        <p>GBP</p> <span><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                    <div class="register">
                        <p>Register</p>
                        <p>Sign In</p>
                    </div>
                    <div class="cart">
                        <div class="icon-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p>Empty</p>
                        <div class="icon-down">
                            <span><i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="mid-bar">
                    <div class="logo">
                        <a href=""><img src="{{asset('public/images/home-img/logo.png')}}" alt=""></a>
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
                        <img src="{{asset('public/images/home-img/AVE.png')}}" alt="">
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
                    <a href=""><img src="{{asset('public/images/home-img/item-1.png')}}" alt=""></a>
                </div>
                <div class="item item-2">
                    <a href=""><img src="{{asset('public/images/home-img/item-2.png')}}" alt=""></a>
                </div>
                <div class="item item-3">
                    <a href=""><img src="{{asset('public/images/home-img/item-3.png')}}" alt=""></a>
                </div>
                <div class="item item-4">
                    <a href=""><img src="{{asset('public/images/home-img/item-4.png')}}" alt=""></a>
                </div>
                <div class="item item-5">
                    <a href=""><img src="{{asset('public/images/home-img/item-5.png')}}" alt=""></a>
                </div>
                <div class="item item-6">
                    <a href=""><img src="{{asset('public/images/home-img/item-6.png')}}" alt=""></a>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>