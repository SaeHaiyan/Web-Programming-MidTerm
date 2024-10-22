@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Rentals</h1>
<div class="container mb-5 p-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('customers.create') }}" class="btn btn-lg" style="background-color: #FF8F00; color: black; padding: 15px; font-family: 'Press Start 2P', cursive; width: 48%;">Add Customer</a>
        <a href="{{ route('rentals.create') }}" class="btn btn-lg" style="background-color: #FF204E; color: black; padding: 15px; font-family: 'Press Start 2P', cursive; width: 48%;">Add Rentals</a>
    </div>

    <table class="table table-hover table-bordered" style="background-color: rgba(255, 255, 255, 0.1); color: white; border-radius: 10px; overflow: hidden;">
        <thead class="thead-dark" style="background-color: rgba(0, 0, 0, 0.8);">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Game</th>
                <th>Price</th>
                <th>Rental Date</th>
                <th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr style="background-color: rgba(255, 255, 255, 0.05);">
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->customer->name }}</td>
                    <td>{{ $rental->game->title }}</td>
                    <td>${{ number_format($rental->game->price, 2) }}</td>
                    <td>{{ $rental->rental_date }}</td>
                    <td>{{ $rental->return_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
