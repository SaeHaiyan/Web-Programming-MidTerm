@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Game Lists</h1> <!-- Changed title -->
<div class="container mb-5 p-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    {{-- <a href="{{ route('games.create') }}" class="btn" style="background-color:  rgb(0, 255, 34); color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; margin-bottom: 20px;">Add Games</a> <!-- Changed button color to red --> --}}

    <table class="table table-striped table-bordered mt-3" style="background-color: white;">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Genre</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>
                        <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" style="width: 150px; height: auto;"/>
                    </td>
                    <td>{{ $game->genre }}</td>
                    <td>{{ $game->price }}</td>
                    {{-- <td>
                        <a href="{{ route('games.show', $game->id) }}" class="btn" style="background-color: rgb(5, 130, 175); color: white;">View</a>
                        <a href="{{ route('games.edit', $game->id) }}" class="btn" style="background-color: rgb(5, 130, 175); color: white;">Edit</a>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background-color: black; color: white;">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection