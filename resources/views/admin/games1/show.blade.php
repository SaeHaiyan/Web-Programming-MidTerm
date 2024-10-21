@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Game Details
    </h1> <!-- Added icon to the title -->

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.7); color: white;"> <!-- Darker container for contrast -->
        <table class="table table-striped table-bordered mt-4 text-center"> <!-- Centered text -->
            <thead class="table-dark">
                <tr>
                    <th scope="col">Attribute</th> <!-- Changed column header -->
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $game->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $game->title }} <br>
                        <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}" />
                    </td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>{{ $game->genre }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $game->price }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('admin.games1.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">
            <i class="fas fa-arrow-left"></i> Back
        </a> <!-- Added icon to the button -->
    </div>
</div>
@endsection