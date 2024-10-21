@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Rentals</h1>
<div class="container mb-5 p-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    <a href="{{ route('rentals.create') }}" class="btn" style="background-color:rgb(0, 255, 34); color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; margin-bottom: 20px;">Add Rentals</a>

    <table class="table table-striped table-bordered mt-3" style="background-color: #333; color: white; border-radius: 10px; overflow: hidden;">
        <thead class="thead-dark" style="background-color: #444;">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Game</th>
                <th>Price</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr style="background-color: #555;">
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->customer->name }}</td>
                    <td>{{ $rental->game->title }}</td>
                    <td>{{ $rental->game->price }}</td>
                    <td>{{ $rental->rental_date }}</td>
                    <td>{{ $rental->return_date }}</td>
                    <td>
                        <a href="{{ route('rentals.show', $rental->id) }}" class="btn" style="background-color:rgb(5, 130, 175); color: white;">View</a>
                        <a href="{{ route('rentals.edit', $rental->id) }}" class="btn" style="background-color: rgb(5, 130, 175); color: white;">Edit</a>
                        <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background-color: black; color: white;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection