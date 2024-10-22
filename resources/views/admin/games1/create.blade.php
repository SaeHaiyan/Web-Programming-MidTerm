@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
    <i class="fas fa-gamepad"></i> Add Game
</h1> <!-- Title stays outside the card for emphasis -->

<div class="d-flex justify-content-center"> <!-- Center the card horizontally -->
    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(0, 0, 0, 0.85); color: white; max-width: 500px; width: 100%; padding: 20px;"> <!-- Card style -->
        <div class="card-body">
            <form action="{{ route('admin.games1.store') }}" method="POST" enctype="multipart/form-data"> <!-- Added enctype for file uploads -->
                @csrf
                <!-- Title input field -->
                <div class="form-group mb-4">
                    <label for="title" class="form-label"><i class="fas fa-heading"></i> Title</label>
                    <input type="text" class="form-control" id="title" name="title" required style="font-family: 'Space Mono', monospace;">
                </div>
                <!-- Genre input field -->
                <div class="form-group mb-4">
                    <label for="genre" class="form-label"><i class="fas fa-tag"></i> Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" required style="font-family: 'Space Mono', monospace;">
                </div>
                <!-- Price input field -->
                <div class="form-group mb-4">
                    <label for="price" class="form-label"><i class="fas fa-dollar-sign"></i> Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required style="font-family: 'Space Mono', monospace;">
                </div>
                <!-- Year input field -->
                <div class="form-group mb-4">
                    <label for="genre" class="form-label"><i class="fas fa-tag"></i> Genre</label>
                    <input type="number" class="form-control" id="genre" name="genre" required style="font-family: 'Space Mono', monospace;">
                </div>
                <!-- Image input field -->
                <div class="form-group mb-4">
                    <label for="image" class="form-label"><i class="fas fa-image"></i> Game Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>

                <!-- Back and Create buttons side by side -->
                <div class="d-flex justify-content-between mt-4">
                    <!-- Back button -->
                    <a href="{{ route('admin.games1.index') }}" class="btn" style="background-color: #FF8F00; color: black; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <!-- Create button -->
                    <button type="submit" class="btn" style="background-color: #FF204E; color: black; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-check"></i> Create
                    </button>
                </div> <!-- End of button group -->
            </form>
        </div>
    </div>
</div>
@endsection
