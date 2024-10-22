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

        <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-800 gaming-font">Login</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full form-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full form-input"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-input"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-center mt-6">
                    <x-primary-button class="w-full">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">Already registered? <a class="underline text-indigo-600 hover:text-indigo-800" href="{{ route('login') }}">{{ __('Login here') }}</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
