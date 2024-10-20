@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
    <i class="fas fa-edit"></i> Edit Game
</h1>

<div class="container mb-5">
    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.8); color: white;"> <!-- Container styling -->
        <form action="{{ route('games.update', $game->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-4">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required style="border-radius: 5px;"/>
            </div>

            <div class="form-group mb-4">
                <label for="genre" class="font-weight-bold">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $game->genre }}" required style="border-radius: 5px;"/>
            </div>

            <div class="form-group mb-4">
                <label for="price" class="font-weight-bold">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $game->price }}" required style="border-radius: 5px;"/>
            </div>

            <div class="d-flex justify-content-between mt-4"> <!-- Flexbox for buttons -->
                <a href="{{ route('games.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <button type="submit" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                    <i class="fas fa-save"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection