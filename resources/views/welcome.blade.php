<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Video Game Rental System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('https://via.placeholder.com/1920x1080');
            background-size: cover;
            background-position: center;
        }
        .gaming-font {
            font-family: 'Press Start 2P', cursive;
        }
        .form-input {
            padding: 0.75rem; /* Increase padding for height */
            width: 100%; /* Ensure it takes full width */
            font-size: 1rem; /* Increase font size for better readability */
        }
    </style>
</head>
<body class="bg-gray-100 background-image">

    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 bg-opacity-50">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-white gaming-font">Welcome to Video Game Rental System</h1>
            <p class="mt-4 text-lg text-gray-300">Your one-stop solution for renting the latest and greatest video games</p>
        </div>

        <div class="max-w-md w-full bg-white shadow-md rounded-lg p-8">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-800 gaming-font">Login</h2>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 gaming-font">Email Address</label>
                    <input id="email" type="email" class="form-input mt-1 block @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 gaming-font">Password</label>
                    <input id="password" type="password" class="form-input mt-1 block @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 flex items-center">
                    <input id="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900 gaming-font">
                        Remember Me
                    </label>
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out gaming-font">
                        Login
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="text-sm text-indigo-600 hover:text-indigo-500 gaming-font" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

</body>
</html>