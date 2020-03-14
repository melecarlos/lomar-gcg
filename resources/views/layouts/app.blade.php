<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LomarGCG') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>{{ config('app.name', 'Home') }}</title>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="topbar bg-custom-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="left-side ">
                            <ul class="custom">
                                <li>
                                    <a href="{{ route('login') }}" class="text-custom-white"><i class="fas fa-user text-custom-blue"></i> {{ __('Login') }}</a>
                                </li>
                                <li>
                                    <a href="mailto:roberto@lomar-gcg.com" class="text-custom-white"><i class="fas fa-envelope text-custom-blue"></i> roberto@lomar-gcg.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right-side">
                            <ul class="custom">
                                <li>
                                    <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="menu-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header">
                            <div class="logo">
                                <a href="#">
                                    <img src="https://via.placeholder.com/120x60" class="img-fluid image-fit" alt="Logo">
                                </a>
                            </div>
                            <div class="right-side">
                                <div class="navigation">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="https://via.placeholder.com/120x60" class="img-fluid image-fit" alt="Logo">
                                        </a>
                                    </div>
                                    <nav>
                                        <ul class="custom main-menu">
                                            <li class="menu-item active">
                                                <a href="/" class="text-theme fs-14">Home</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#about-us" class="text-theme fs-14">About Us</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" class="text-theme fs-14">Services</a>
                                                <ul class="custom sub-menu">
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Custom Stone Venners</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Driveways & Entraces</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Fireplaces Firepits & Grills</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Outdoor Living</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Pool & Pool Decks</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#" class="text-theme">Retaining Wall & Gardens</a>
                                                    </li>
                                                </ul>                                                        
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact.html" class="text-theme fs-14">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="social-media">
                                        <ul class="custom">
                                            <li>
                                                <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-custom-white"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hamburger-menu">
                                    <div class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="cta-btn">
                                    <div class="cta-text">
                                        <a href="#" class="addlisting-btn btn-first btn-border">Enquiry <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

        <main>
            @yield('content')
        </main>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LomarGCG') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <script src="{{ asset('js/infobox.min.js') }}"></script>
    <script src="{{ asset('js/markerclusterer.js') }}"></script>
    <script src="{{ asset('js/custom-maps.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
