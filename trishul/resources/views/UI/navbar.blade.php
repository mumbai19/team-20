<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Trishul - NGO</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href='{{ asset("css/bootstrap.min.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/font-awesome.min.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/flaticon.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/slicknav.min.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/jquery-ui.min.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/owl.carousel.min.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/animate.css") }}'/>
	<link rel="stylesheet" href='{{ asset("css/style.css") }}'/>

</head>
<body>
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{ url('/') }}" class="site-logo">
                        <h2>Trishul</h2>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            @if(Auth::check())
                                {{Auth::user()->name}}
                                <a href="{{ url('/logout') }}"> &nbsp Logout </a>
                            @else
                                <a href="/login">Sign</a> In or <a href="/register">Create Account</a>
                            @endif
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                
                            </div>
                            <a href="{{ url('/cart') }}">Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                {{-- <li><a href="{{ url('/') }}">Home</a></li> --}}
                <li><a href="#">Products</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/category/0') }}">Bags</a></li>
                        <li><a href="{{ url('/category/1') }}">Keychains</a></li>
                        <li><a href="{{ url('/category/2') }}">Bookmarks</a></li>
                        <li><a href="{{ url('/category/4') }}">Greeting Cards</a></li>
                        <li><a href="{{ url('/category/5') }}">Candles</a></li>
                        <li><a href="{{ url('/category/6') }}">Jewellery</a></li>
                        <li><a href="{{ url('/category/7') }}">Stoles</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/donate') }}">Donate</a></li>
                @if(Auth::check())        
                    @if(Auth::user()->email == "admin@gmail.com")
                        <li><a href="{{ url('/add') }}">Add Product</a></li>
                        <li><a href="{{ url('/analyse') }}">Analyse</a></li>
                    @endif
                @endif
                <li><a href="{{ url('/contact') }}">Contact us</a></li>
                
                                    
            </ul>
        </div>
    </nav>
</header>