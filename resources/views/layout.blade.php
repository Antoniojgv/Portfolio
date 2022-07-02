<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Portolio')</title>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div class="page-container page-container-dark"></div>

    <nav class="navbar navbar-expand-md navbar-dark border-bottom bg-dark shadow-lg sticky-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <h1 class="ms-3">
                    <i class="fa-solid fa-laptop-code"></i>
                    <span class="mx-2">@yield('title')</span>
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto me-3">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item"><a class="nav-link @if( Request::route()->getName() == 'home' ){{'active'}}@endif" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link @if( Request::route()->getName() == 'about' ){{'active'}}@endif" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link @if( Request::route()->getName() == 'projects' ){{'active'}}@endif" href="{{ route('projects') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link @if( Request::route()->getName() == 'contact' ){{'active'}}@endif" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-4">
        @yield('content')
    </main>
    <div id="footer_flow"></div>
    <footer id="footer" class="border-top bg-dark shadow-lg fixed-bottom">

        <div class="my-2 w-100 row mx-auto">

            <div class="col-12 col-md-8 d-flex align-items-center">
                <span class="text-muted"></span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex display-6">
                <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li class="ms-3"><a class="text-light" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>

        </div>

    </footer>
</body>
</html>
