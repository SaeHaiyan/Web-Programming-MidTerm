@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Game Details
    </h1>

    <!-- Main Card Layout -->
    <div class="card shadow-lg" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.7); color: white; max-width: 1000px; margin: auto;"> 
        <div class="card-body">
            
            <!-- Title and Image Section -->
            <div class="mb-4 text-center">
                <p class="card-text" style="font-family: 'Space Mono', monospace; font-size: 1.8rem; font-weight: bold;">
                    {{ $game->title }}
                </p>
                <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" class="img-fluid" style="max-width: 100%; border-radius: 10px;" />
            </div>

            <!-- Genre and Price Cards Section -->
            <div class="d-flex justify-content-between gap-3">
                
                <!-- Genre Card -->
                <div class="card bg-dark text-white" style="border-radius: 10px; width: 48%;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Press Start 2P', cursive; font-size: 1.2rem;">
                            <i class="fas fa-tag"></i> Genre:
                        </h5>
                        <p class="card-text" style="font-family: 'Space Mono', monospace; font-size: 1.5rem; font-weight: bold;">{{ $game->genre }}</p>
                    </div>
                </div>

                <!-- Price Card -->
                <div class="card bg-dark text-white" style="border-radius: 10px; width: 48%;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Press Start 2P', cursive; font-size: 1.2rem;">
                            <i class="fas fa-dollar-sign"></i> Price:
                        </h5>
                        <p class="card-text" style="font-family: 'Space Mono', monospace; font-size: 1.5rem; font-weight: bold;">${{ $game->price }}</p>
                    </div>
                </div>
            </div>

            <!-- Year and Description Cards Section -->
            <div class="d-flex justify-content-between gap-3 mt-3">
                
                <!-- Year Card -->
                <div class="card bg-dark text-white" style="border-radius: 10px; width: 48%;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Press Start 2P', cursive; font-size: 1.2rem;">
                            <i class="fas fa-calendar-alt"></i> Year:
                        </h5>
                        <p class="card-text" style="font-family: 'Space Mono', monospace; font-size: 1.5rem; font-weight: bold;">{{ $game->year }}</p>
                    </div>
                </div>

                <!-- Description Card -->
                <div class="card bg-dark text-white" style="border-radius: 10px; width: 48%;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Press Start 2P', cursive; font-size: 1.2rem;">
                            <i class="fas fa-align-left"></i> Description:
                        </h5>
                        <p class="card-text" style="font-family: 'Space Mono', monospace; font-size: 1rem; font-weight: bold; text-align: justify;">{{ $game->description }}</p> <!-- Adjusted text size for better readability -->
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-4">
                <a href="{{ route('admin.games1.index') }}" class="btn" style="background-color: #FF204E; color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
