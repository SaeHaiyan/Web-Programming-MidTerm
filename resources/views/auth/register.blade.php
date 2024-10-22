<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Video Game Rental System</title>
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
            <p class="mt-4 text-lg text-gray-300">Join us today and get access to an exclusive collection of video games!</p>
        </div>

        <!-- Right side: Register Card -->
        <div class="md:w-1/2 max-w-md w-full custom-card">
            <div class="text-center mb-6">
                <h2 class="text-2xl card-header gaming-font">Register</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name Input -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-100 gaming-font">Name</label>
                    <input id="name" type="text" class="form-input mt-1 block @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-100 gaming-font">Email Address</label>
                    <input id="email" type="email" class="form-input mt-1 block @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-100 gaming-font">Password</label>
                    <input id="password" type="password" class="form-input mt-1 block @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Input -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-100 gaming-font">Confirm Password</label>
                    <input id="password_confirmation" type="password" class="form-input mt-1 block @error('password_confirmation') border-red-500 @enderror" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit" class="w-full py-2 px-4 text-sm font-medium text-black btn-custom">
                        Register
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center">
                    <a class="text-xs text-red-600 hover:text-gray-500 gaming-font" href="{{ route('login') }}">
                        Already have an account? Login
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
