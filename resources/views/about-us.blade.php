<!-- resources/views/about-us.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive;">About Us</h1>
    <div class="card mx-auto" style="max-width: 600px;"> <!-- Center the card and limit its width -->
        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8);">
            <img src="{{ asset('https://www.marvo-tech.com/cdn/shop/articles/chuck-fortner-LFVBohYmtgc-unsplash.jpg?v=1639391512') }}" alt="Gaming Image" class="img-fluid mb-4" style="border-radius: 10px;"> <!-- Add your image path -->
            <p style="font-family: 'Space Mono', monospace; color: black;">
                VGRS is your go-to gaming rental service. We provide access to the latest games and consoles at affordable prices. 
                Our mission is to enhance your gaming experience by offering a wide selection of titles and equipment.
            </p>
            <p style="font-family: 'Space Mono', monospace; color: black;">
                Join us in exploring the exciting world of gaming. Whether you’re a casual player or a hardcore gamer, we have something for everyone.
            </p>
        </div>
    </div>
</div>
@endsection
