<!DOCTYPE html>
<html>
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            <li>
                                <a href="/"
                                   class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/about"
                                   class="navbar-item {{ Request::path() === '/about' ? "is-active" : "" }}">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="/contact"
                                   class="navbar-item {{ Request::path() === '/contact' ? "is-active" : "" }}">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="/login"
                                   class="navbar-item {{ Request::path() === '/login' ? "is-active" : "" }}">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <p>Laatst bijgewerkt: {{ date('Y-m-d') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="/" class="logo"><img src="images/logo.jpg" alt=""></a></div>
                    <div class="add_banner"><a href="/"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    <li><a href="#">Technology</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Android</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Walton Mobile</a></li>
                            <li><a href="#">Sympony</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Tablets</a></li>
                    <li><a href="pages/contact.html">Contact Us</a></li>
                    <li><a href="pages/404.html">404 Page</a></li>
                </ul>
            </div>
        </nav>
    </section>

    @yield('content');

    @include('common.footer');

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
