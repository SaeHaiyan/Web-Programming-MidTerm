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
        width: 100%;
        padding: 20px;
        font-size: 20px;
        margin-bottom: 20px;
        font-family: 'Press Start 2P', cursive;
        display: flex;
        justify-content: center;
    }
    .space-mono {
        font-family: 'Space Mono', monospace; /* Apply Space Mono font */
    }
    .main-menu-header {
        font-family: 'Press Start 2P', cursive; 
        font-size: 48px;
        color:yellow; /* Change main menu text color to navy blue */
    }
    /* New styles for paragraph */
    .intro-paragraph {
        max-width: 600px; /* Limit the width of the paragraph */
        margin: 0 auto; /* Center the paragraph */
        margin-left: 20px; /* Add left margin to align with the image */
        line-height: 1.5; /* Increase line height for better readability */
        font-size: 16px; /* Keep the font size consistent */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card main-menu-card">
                <div class="card-header text-center main-menu-header">{{ __('Main Menu') }}</div>

                <div class="card-body d-flex">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-8 text-left space-mono">
                        <p style="font-size: 18px;">{{ __('Hi, welcome to Video Games Rental System!') }}</p>

                        <!-- Add an introduction image -->
                        <img src="https://media.wired.com/photos/5f7e325a8e38d8a7e74a9f1e/16:9/w_1576,h_886,c_limit/games_gear_libraries_939318912.jpg" alt="Welcome Image" class="img-fluid rounded mb-4" style="max-width: 80%;">

                        <!-- Add more text for a better introduction -->
                        <p class="intro-paragraph">We are committed to providing the best experience for managing your video game rental business. If you have any questions or need assistance, feel free to reach out to our support team.</p>
                    </div>

                    <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                        <a href="{{ route('rentals.index') }}" class="btn main-menu-btn" style="background-color: rgb(5, 130, 175); color: white;">Rentals</a>
                        <a href="{{ route('customers.index') }}" class="btn main-menu-btn" style="background-color: rgb(0, 255, 34); color: black;">Customers</a>
                        <a href="{{ route('games.index') }}" class="btn main-menu-btn" style="background-color:rgb(0, 255, 34); color: black;">Games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection