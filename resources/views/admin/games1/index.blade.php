@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Game Lists</h1>

<div class="container mb-5">
   <!-- Search, Sort, and Filter Form -->
   <form action="{{ route('admin.games1.index') }}" method="GET" class="mb-4 d-flex flex-wrap align-items-center">
    <div class="input-group flex-grow-1 me-2">
        <input type="text" name="search" class="form-control" placeholder="Search for games..." aria-label="Search for games" value="{{ request()->input('search') }}" style="border-radius: 25px; border: 2px solid #FF204E; font-family: 'Space Mono', monospace;">
        <button class="btn" type="submit" style="border-radius: 25px; background-color: #FF204E; color: white; font-family: 'Space Mono', monospace; margin-left: 10px;"> <!-- Added margin-left here -->
            <i class="fas fa-search"></i>
        </button>
    </div>

    <div class="d-flex align-items-center mt-3"> <!-- Add margin-top here for spacing -->
        <select id="sort" name="sort" class="form-select me-2" onchange="this.form.submit()" style="max-width: 150px;">
            <option value="title" {{ request()->input('sort') == 'title' ? 'selected' : '' }}>Sort by Title</option>
            <option value="price" {{ request()->input('sort') == 'price' ? 'selected' : '' }}>Sort by Price</option>
        </select>
        <select name="genre" class="form-select me-2" onchange="this.form.submit()" style="max-width: 150px;">
            <option value="">All Genres</option>
            <option value="Action" {{ request()->input('genre') == 'Action' ? 'selected' : '' }}>Action</option>
            <option value="Adventure" {{ request()->input('genre') == 'Adventure' ? 'selected' : '' }}>Adventure</option>
            <option value="RPG" {{ request()->input('genre') == 'RPG' ? 'selected' : '' }}>RPG</option>
            <option value="Racing" {{ request()->input('genre') == 'Racing' ? 'selected' : '' }}>Racing</option>
            <option value="Open-World" {{ request()->input('genre') == 'Open-World' ? 'selected' : '' }}>Open-World</option>
            <option value="Sports" {{ request()->input('genre') == 'Sports' ? 'selected' : '' }}>Sports</option>
            <option value="Fighting Game" {{ request()->input('genre') == 'Fighting Game' ? 'selected' : '' }}>Fighting Game</option>
            <option value="FPS" {{ request()->input('genre') == 'FPS' ? 'selected' : '' }}>FPS</option>
            <!-- Add other genres as necessary -->
        </select>
        <a href="{{ route('admin.games1.index') }}" class="btn btn-secondary" style="padding: 10px 20px; background-color: #FF8F00; color:rgba(0, 0, 0, 0.7); font-size: 1em; border-radius: 25px; font-family: 'Space Mono', monospace; white-space: nowrap;">Clear Filters</a>
    </div>
</form>

    <!-- Add Games Button -->
    <a href="{{ route('admin.games1.create') }}" class="btn" style="background-color: #FF8F00; color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; margin-bottom: 20px;">Add Games</a>

    <!-- Search Feedback -->
    @if(isset($search) && $games->count())
        <p style="color: white;">{{ $games->count() }} game(s) found for "{{ $search }}".</p>
    @elseif(isset($search))
        <p style="color: white;">No games found for "{{ $search }}".</p>
    @endif

    <!-- Game Cards Grid -->
    <div class="row">
        @forelse($games as $game)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.9);">
                    <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->title }}</h5>
                        <p class="card-text"><strong>Genre:</strong> {{ $game->genre }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($game->price, 2) }}</p>
                        <div class="d-flex justify-content-between mt-2">
                            <a href="{{ route('admin.games1.show', $game->id) }}" class="btn" style="background-color: #FF204E; color: black; width: 32%;">View</a>
                            <a href="{{ route('admin.games1.edit', $game->id) }}" class="btn" style="background-color: #FF204E; color: black; width: 32%;">Edit</a>
                            <form action="{{ route('admin.games1.destroy', $game->id) }}" method="POST" style="display:inline; width: 32%;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color: black; color: white; width: 100%;">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p style="color: white;">No games found.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $games->links('pagination::bootstrap-4') }}
            </ul>
        </nav>
    </div>
</div>
@endsection
