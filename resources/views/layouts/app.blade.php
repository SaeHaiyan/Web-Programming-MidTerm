<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet"> <!-- Add this line -->
    <link href="https://fonts.googleapis.com/css2?family=Handgloves&display=swap" rel="stylesheet"> <!-- Add Handgloves font -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Other styles */
        .navbar {
            background-color: #000000; /* Black background */
            font-family: 'Space Mono', monospace; /* Apply Space Mono font */
        }
        .navbar-brand, .nav-link {
            color: #ffffff; /* White text color */
            font-size: 1.2em; /* Increase the font size */
            font-family: 'Space Mono', monospace; /* Apply Space Mono font */
        }
        .nav-link:hover {
            color: #ffd700; /* Gold color on hover */
        }
        .dropdown-item:hover {
            background-color: #495057; /* Darker background on hover */
            color: #ffffff; /* White text color */
        }
        .navbar-brand img {
            height: 30px; /* Adjust the height of the icon */
            margin-right: 8px; /* Space between icon and text */
        }
        .navbar-brand { 
            font-family: 'Space Mono', monospace; /* Apply Space Mono font */
            font-size: 1.5em; /* Increase font size */
        }
        /* Footer styles */
        footer {
            background-color: #000000; /* Black background */
            color: white; /* White text color */
            padding: 20px 0; /* Padding for top and bottom */
            text-align: center; /* Centered text */
            position: relative; /* For positioning */
            font-family: 'Space Mono', monospace; /* Apply Space Mono font */
        }

        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://static-00.iconduck.com/assets.00/console-controller-icon-2048x2048-pmmusn7m.png" alt="VGRS Icon">
                    VGRS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background: rgba(0, 0, 0, 0.7); /* Translucent black background */
                                    background-image: url('https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGdhbWluZyUyMGtleWJvYXJkfGVufDB8fDB8fHww');
                                    background-size: cover; 
                                    background-position: center; 
                                    min-height: 100vh;">
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