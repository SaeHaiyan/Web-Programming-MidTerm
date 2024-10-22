@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Game Details
    </h1>

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.8); color: white;">
        <div class="text-center mb-4">
            <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" class="img-fluid" style="max-height: 300px; object-fit: cover; border-radius: 10px;">
            <h5 class="card-title mt-3" style="font-family: 'Press Start 2P', cursive; color: #aaa; font-size: 1.8rem;">{{ $game->title }}</h5>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.15); border-radius: 15px; border: none; padding: 15px; text-align: center;">
                    <h6 style="color: yellow; font-size: 1.5rem;">Genre</h6>
                    <p style="font-size: 2rem; color: rgb(200, 200, 200);">{{ $game->genre }}</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.15); border-radius: 15px; border: none; padding: 15px; text-align: center;">
                    <h6 style="color: yellow; font-size: 1.5rem;">Price</h6>
                    <p style="font-size: 2rem; color: rgb(200, 200, 200);">${{ number_format($game->price, 2) }}</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.15); border-radius: 15px; border: none; padding: 15px; text-align: center;">
                    <h6 style="color: yellow; font-size: 1.5rem;">Year Released</h6>
                    <p style="font-size: 2rem; color: rgb(200, 200, 200);">{{ $game->year }}</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.15); border-radius: 15px; border: none; padding: 15px; text-align: center;">
                    <h6 style="color: yellow; font-size: 1.5rem;">Price</h6>
                    <p style="font-size: 20px; color: rgb(200, 200, 200);">{{ $game->description }}</p>
                </div>
            </div>
        </div>

        <a href="{{ route('games.index') }}" class="btn mt-4" style="background-color: #FF204E; color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; font-size: 1.2rem;">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
@endsection
