@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
    <i class="fas fa-gamepad"></i> Add Game
</h1> <!-- Title moved outside the container -->

<div class="container mb-5" style="background-color: #000000; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); color: white;">
    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data"> <!-- Added enctype for file uploads -->
        @csrf
        <div class="form-group mb-4">
            <label for="title" class="form-label"><i class="fas fa-heading"></i> Title</label>
            <input type="text" class="form-control" id="title" name="title" required style="font-family: 'Space Mono', monospace;">
        </div>
        <div class="form-group mb-4">
            <label for="genre" class="form-label"><i class="fas fa-tag"></i> Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required style="font-family: 'Space Mono', monospace;">
        </div>
        <div class="form-group mb-4">
            <label for="price" class="form-label"><i class="fas fa-dollar-sign"></i> Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required style="font-family: 'Space Mono', monospace;">
        </div>
        
        <!-- Add Image Upload Field -->
        <div class="form-group mb-4">
            <label for="image" class="form-label"><i class="fas fa-image"></i> Game Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*"> <!-- File input for image -->
        </div>

        <div class="mt-4"> <!-- Add margin top to create space above the button -->
            <button type="submit" class="btn btn-block" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; transition: background-color 0.3s;">
                Create
            </button> <!-- Changed button color and font -->
        </div>
    </form>
</div>
@endsection
