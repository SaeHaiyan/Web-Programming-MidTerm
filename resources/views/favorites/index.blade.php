@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Favorite Games</h1>
<div class="container mb-5 p-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">

    <div class="row">
        @forelse($favorites as $game)
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Press Start 2P', cursive; color: #26355D;">{{ $game->title }}</h5>
                        <p class="card-text" style="font-family: 'Space Mono', monospace;">Genre: {{ $game->genre }}</p>
                        <p class="card-text" style="font-family: 'Space Mono', monospace;">Price: ${{ number_format($game->price, 2) }}</p>
                        <form action="{{ route('favorites.destroy', $game->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="width: 100%; border-radius: 25px;">
                                Remove from Favorites
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p style="color: white;">No favorite games found.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection
