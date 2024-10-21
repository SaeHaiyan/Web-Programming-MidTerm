@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Game Lists</h1> 
<div class="container mb-5 p-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    <a href="{{ route('admin.games1.create') }}" class="btn btn-success" style="color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; margin-bottom: 20px;">Add Games</a>

    <table class="table table-striped table-bordered mt-3" style="background-color: white;">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }} <br>
                        <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" />
                    </td>
                    <td>{{ $game->genre }}</td>
                    <td>{{ $game->price }}</td>
                    <td>
                        <a href="{{ route('admin.games1.show', $game->id) }}" class="btn btn-info" style="color: white;">View</a>
                        <a href="{{ route('admin.games1.edit', $game->id) }}" class="btn btn-info" style="color: white;">Edit</a>
                        <form action="{{ route('admin.games1.destroy', $game->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="color: white;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection