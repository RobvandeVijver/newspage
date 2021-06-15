<!DOCTYPE html>
<html>
<head>
    <title>DIQUET</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/front-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/li-scroller.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status"></div>
</div>
<a class="scrollToTop" href="#">↑<i class="fa fa-angle-up"></i></a>
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
                                <a href="/binnenland"
                                   class="navbar-item {{ Request::path() === '/binnenland' ? "is-active" : "" }}">
                                    Binnenland
                                </a>
                            </li>
                            <li>
                                <a href="/economie"
                                   class="navbar-item {{ Request::path() === '/economie' ? "is-active" : "" }}">
                                    Economie
                                </a>
                            </li>
                            <li>
                                <a href="/sport"
                                   class="navbar-item {{ Request::path() === '/sport' ? "is-active" : "" }}">
                                    Sport
                                </a>
                            </li>
                            <li>
                                <a href="/about"
                                   class="navbar-item {{ Request::path() === '/about' ? "is-active" : "" }}">
                                    Over ons
                                </a>
                            </li>
                            <li>
                                <a href="/contact"
                                   class="navbar-item {{ Request::path() === '/contact' ? "is-active" : "" }}">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="/yeay"
                                   class="navbar-item {{ Request::path() === '/DOCENTEN' ? "is-active" : "" }}">
                                    DOCENTEN
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="header_top_right">
                        <ul class="top_nav">
                            @guest
                                <li>
                                    <a href="/login"
                                       class="navbar-item {{ Request::path() === '/login' ? "is-active" : "" }}">
                                        Inloggen
                                    </a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                        {{ __('uitloggen') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="/" class="logo"><img src="/images/Diquet Logo.jpg" alt=""></a></div>
                    <div class="add_banner"><a href="/"><img src="/images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    @include('common.footer')

</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.li-scroller.1.0.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>
