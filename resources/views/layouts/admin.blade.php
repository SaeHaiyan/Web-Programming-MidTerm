<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handgloves&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar {
            background-color: #000000;
            font-family: 'Space Mono', monospace;
        }
        .navbar-brand, .nav-link {
            color: #ffffff;
            font-size: 1.2em;
            font-family: 'Space Mono', monospace;
        }
        .nav-link:hover {
            color: #ffd700;
        }
        .navbar-brand img {
            height: 30px;
            margin-right: 8px;
        }
        .navbar-brand {
            font-family: 'Space Mono', monospace;
            font-size: 1.5em;
        }
        footer {
            background-color: #000000;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-family: 'Space Mono', monospace;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                    <img src="https://static-00.iconduck.com/assets.00/console-controller-icon-2048x2048-pmmusn7m.png" alt="VGRS Icon">
                    VGRS
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rentals.index') }}">Rentals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('games.index') }}">Games</a>
                        </li>

                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background: rgba(0, 0, 0, 0.7); background-image: url('https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGdhbWluZyUyMGtleWJvYXJkfGVufDB8fDB8fHww'); background-size: cover; background-position: center; min-height: 100vh;">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="mt-2">
                    <p>&copy; {{ date('Y') }} VGRS. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
