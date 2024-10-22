<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Video Game Rental System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('https://static.vecteezy.com/system/resources/previews/006/413/058/non_2x/soft-beautiful-abstract-background-you-can-use-this-background-for-your-content-like-as-technology-video-gaming-promotion-card-banner-sports-education-presentation-website-anymore-vector.jpg');
            background-size: cover;
            background-position: center;
        }
        .gaming-font {
            font-family: 'Press Start 2P', cursive;
        }
        .form-input {
            padding: 0.75rem;
            width: 100%;
            font-size: 1rem;
        }
        .custom-card {
            background-color: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
        .card-header {
            color: yellow;
        }
        .btn-custom {
            background-color: #FF204E;
            border-radius: 25px;
            font-family: 'Press Start 2P', cursive;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #FF8F00;
        }
    </style>
</head>
<body class="bg-gray-100 background-image">

    <div class="min-h-screen flex flex-col md:flex-row justify-center items-center bg-gray-900 bg-opacity-50">
        
        <!-- Left side: Title and Paragraph -->
        <div class="text-center md:text-left md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-3xl font-bold text-white gaming-font">Welcome to Video Game Rental System</h1>
            <p class="mt-4 text-lg text-gray-300">Your one-stop solution for renting the latest and greatest video games</p>
        </div>

        <!-- Right side: Login Card -->
        <div class="md:w-1/2 max-w-md w-full custom-card">
            <div class="text-center mb-6">
                <h2 class="text-2xl card-header gaming-font">Login</h2>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Input -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-100 gaming-font">Email Address</label>
                    <input id="email" type="email" class="form-input mt-1 block @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-100 gaming-font">Password</label>
                    <input id="password" type="password" class="form-input mt-1 block @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="mb-6 flex items-center">
                    <input id="remember" type="checkbox" class="form-checkbox h-4 w-4 text-gray-100 transition duration-150 ease-in-out" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-2 block text-sm leading-5 text-gray-100 gaming-font">
                        Remember Me
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit" class="w-full py-2 px-4 text-sm font-medium text-black btn-custom">
                        Login
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <a class="text-xs text-red-600 hover:text-gray-500 gaming-font" href="{{ route('register') }}">
                        Don't have an account? Register
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
