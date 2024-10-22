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

    <!-- Custom styles -->
    <style>
        .navbar {
            background-color: #1a1a1a;
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
        .dropdown-toggle {
            color: #ffffff;
            padding: 5px 10px;
        }
        .dropdown-toggle:hover {
            color: #ffd700;
        }
        .nav-link.logout {
            font-size: 0.9em;
            padding: 5px 10px;
        }
        .nav-link i {
            margin-right: 5px;
        }
        /* Align items in the navbar */
        .navbar-nav {
            align-items: center;
        }
        /* Fixed background */
        body {
            background: rgba(0, 0, 0, 0.7);
            background-image: url('https://static.vecteezy.com/system/resources/previews/006/413/058/non_2x/soft-beautiful-abstract-background-you-can-use-this-background-for-your-content-like-as-technology-video-gaming-promotion-card-banner-sports-education-presentation-website-anymore-vector.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        /* Footer styles */
        footer {
            background-color: #1a1a1a; /* Dark gray color */
            color: white;
            padding: 40px 0;
            font-family: 'Space Mono', monospace;
            text-align: center;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .footer-section {
            flex: 1;
            min-width: 220px; /* Minimum width for responsiveness */
            margin: 10px;
        }
        .footer-section h5 {
            margin-bottom: 10px;
        }
        .footer-section ul {
            padding: 0; /* Remove padding */
            list-style-type: none; /* Remove bullets */
        }
        .footer-section a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer-section a:hover {
            color: #ffd700;
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 1.5em;
            color: #ffffff;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #ffd700;
        }
        footer p {
            margin-top: 20px;
            font-size: 0.9em;
        }
        .footer-links {
            margin-top: 10px;
            font-size: 0.9em;
        }
        .footer-links a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer-links a:hover {
            color: #ffd700;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination li a, .pagination li span {
            display: block;
            padding: 10px 15px;
            border: 1px solid #FF204E; /* Adjust the border color */
            border-radius: 25px; /* Make it round */
            background-color: rgba(255, 255, 255, 0.9); /* Background color */
            color: #FF204E; /* Text color */
            text-decoration: none; /* Remove underline */
        }

        .pagination li a:hover {
            background-color: #FF204E; /* Hover color */
            color: white; /* Text color on hover */
        }

        .pagination li.active span {
            background-color: #FF204E; /* Active page color */
            color: white; /* Active text color */
        }

        .pagination li.disabled span {
            color: #ccc; /* Disabled color */
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img src="https://static-00.iconduck.com/assets.00/console-controller-icon-2048x2048-pmmusn7m.png" alt="VGRS Icon">
                    VGRS
                </a>

                <!-- Navbar Toggler Button for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto"> <!-- Aligns the links to the right -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rentals.index') }}">Rentals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('games.index') }}">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }} <!-- Display current user's name -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('favorites.index') }}">
                                            <i class="fas fa-star"></i> Favorites <!-- Logo/icon added here -->
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Logout <!-- Logout icon with text -->
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section about">
                        <h5>About Us</h5>
                        <p>VGRS is your gaming rental solution, providing access to the latest games and consoles.</p>
                    </div>
                    <div class="footer-section links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ route('rentals.index') }}">Rentals</a></li>
                            <li><a href="{{ route('games.index') }}">Games</a></li>
                            <li><a href="{{ route('favorites.index') }}">Favorites</a></li> <!-- Favorites link -->
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-section social">
                        <h5>Follow Us</h5>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <p>&copy; {{ date('Y') }} VGRS. All rights reserved.</p>
                <div class="footer-links">
                    <a href="{{ route('cookies-policy') }}">Cookies Policy</a> |
                    <a href="{{ route('legal-terms') }}">Legal Terms</a> |
                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                </div>
            </div>
        </footer>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
