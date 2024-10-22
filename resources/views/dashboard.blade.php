@extends('layouts.app')

@section('content')
<style>
    .main-menu-card {
        background: rgba(0, 0, 0, 0.7); /* Add a dark translucent background */
        color: white; /* Change text color to white */
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
        padding: 30px; /* Add padding to the card */
    }
    .main-menu-btn {
        padding: 10px 15px; /* Adjust padding */
        font-size: 14px; /* Resize font */
        margin-right: 10px; /* Space between buttons */
        font-family: 'Press Start 2P', cursive;
        display: flex;
        justify-content: center;
    }
    .space-mono {
        font-family: 'Space Mono', monospace; /* Apply Space Mono font */
    }
    .main-menu-header {
        font-family: 'Press Start 2P', cursive; 
        font-size: 48px; /* Keep the font size and style */
        color: yellow; /* Keep the color yellow */
    }
    .intro-paragraph {
        max-width: 600px; /* Limit the width of the paragraph */
        line-height: 1.5; /* Increase line height for better readability */
        font-size: 16px; /* Keep the font size consistent */
    }
    .text-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .button-group {
        display: flex; /* Arrange buttons horizontally */
        margin-top: 30px; /* Add margin to create space above the buttons */
    }
    .image-large {
        max-width: 100%; /* Ensure image is responsive */
        height: auto;
        width: 100%; /* Make the image take full width */
    }
    .main-content {
        padding-top: 100px; /* Increase top padding for content */
        padding-bottom: 100px; /* Increase bottom padding for content */
    }
</style>

<div class="container main-content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card main-menu-card">
                <div class="card-body d-flex">
                    <div class="col-md-7 text-left space-mono text-container">
                        <!-- New paragraph with header styling -->
                        <p class="main-menu-header">{{ __('Video Game Rental System') }}</p>

                        <!-- Intro paragraph -->
                        <p class="intro-paragraph">{{ __('We are committed to providing the best experience for managing your video game rental business. If you have any questions or need assistance, feel free to reach out to our support team.') }}</p>

                        <!-- Horizontal buttons below the paragraph -->
                        <div class="button-group">
                            <a href="{{ route('rentals.index') }}" class="btn main-menu-btn" style="background-color: #26355D; color: white;">Rentals</a>
                            {{-- <a href="{{ route('customers.index') }}" class="btn main-menu-btn" style="background-color: #EE66A6; color: black;">Customers</a> --}}
                            <a href="{{ route('games.index') }}" class="btn main-menu-btn" style="background-color:#FF8F00; color: black;">Games</a>
                        </div>
                    </div>

                    <!-- Larger image on the right side of the container -->
                    <div class="col-md-5 image-container">
                        <img src="https://media.wired.com/photos/5f7e325a8e38d8a7e74a9f1e/16:9/w_1576,h_886,c_limit/games_gear_libraries_939318912.jpg" alt="Welcome Image" class="img-fluid rounded mb-4 image-large">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
