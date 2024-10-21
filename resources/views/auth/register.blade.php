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
                <h2 class="text-2xl font-semibold text-gray-800 gaming-font">Register</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700 gaming-font"/>
                    <x-text-input id="name" class="form-input mt-1 block" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 gaming-font"/>
                    <x-text-input id="email" class="form-input mt-1 block" type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700 gaming-font"/>
        
                    <x-text-input id="password" class="form-input mt-1 block"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700 gaming-font"/>
        
                    <x-text-input id="password_confirmation" class="form-input mt-1 block"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <button type="submit" class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out gaming-font">
                        {{ __('Register') }}
                    </button>
                </div>

                <!-- Link to Register -->
                <div class="text-center mt-4">
                    <a class="text-sm text-indigo-600 hover:text-indigo-500 gaming-font" href="{{ route('login') }}">
                        Already have an Account?
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

{{-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700 gaming-font"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 gaming-font"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700 gaming-font"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700 gaming-font"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="text-sm text-indigo-600 hover:text-indigo-500 gaming-font">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
