

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="./index.blade.php" class="site-logo">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="/login">Sign</a> In or <a href="/register">Create Account</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>0</span>
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
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Products</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/category') }}">Bags</a></li>
                        <li><a href="#">Keychains</a></li>
                        <li><a href="#">Bookmarks</a></li>
                        <li><a href="#">Paperweights</a></li>
                        <li><a href="#">Greeting Cards</a></li>
                        <li><a href="#">Candles</a></li>
                        <li><a href="#">Jewellery</a></li>
                        <li><a href="#">Stoles</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/donate') }}">Donate</a></li>
                <li><a href="{{ url('/contact') }}">Contact us</a></li>
            </ul>
        </div>
    </nav>
</header>