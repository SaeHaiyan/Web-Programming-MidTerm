@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
    <i class="fas fa-edit"></i> Edit Game
</h1>

<div class="d-flex justify-content-center mb-5"> <!-- Flexbox to center the card -->
    <!-- Card layout for the form -->
    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(0, 0, 0, 0.8); color: white; max-width: 500px; width: 100%;"> <!-- Reduced card width for narrow style -->
        <div class="card-body">
            <form action="{{ route('admin.games1.update', $game->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="form-group mb-4">
                    <label for="title" class="font-weight-bold" style="font-family: 'Space Mono', monospace; color: #FFD700;">Title</label> <!-- Styled label -->
                    <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required style="border-radius: 10px;"/>
                </div>

                <!-- Genre Field -->
                <div class="form-group mb-4">
                    <label for="genre" class="font-weight-bold" style="font-family: 'Space Mono', monospace; color: #FFD700;">Genre</label> <!-- Styled label -->
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $game->genre }}" required style="border-radius: 10px;"/>
                </div>

                <!-- Price Field -->
                <div class="form-group mb-4">
                    <label for="price" class="font-weight-bold" style="font-family: 'Space Mono', monospace; color: #FFD700;">Price</label> <!-- Styled label -->
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $game->price }}" required style="border-radius: 10px;"/>
                </div>

                <!-- Image input field -->
                <div class="form-group mb-4">
                    <label for="image" class="form-label"><i class="fas fa-image"></i> Game Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>

                <!-- Buttons for Back and Update -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.games1.index') }}" class="btn" style="background-color: #FF204E; color: black; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn" style="background-color: #FF8F00; color: black; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
