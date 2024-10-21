@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Rental Details</h1>

<div class="container mt-5">
    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.7); color: white;">
        <div class="card" style="border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <table class="table table-striped table-hover text-white"> <!-- Added striped and hover effects -->
                    <thead class="thead-dark">
                        <tr>
                            <th class="font-weight-bold">Detail</th>
                            <th class="font-weight-bold">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $rental->id }}</td>
                        </tr>
                        <tr>
                            <td>Customer Name</td>
                            <td>{{ $rental->customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Game</td>
                            <td>{{ $rental->game->title }}</td>
                        </tr>
                        <tr>
                            <td>Rental Date</td>
                            <td>{{ $rental->rental_date }}</td>
                        </tr>
                        <tr>
                            <td>Return Date</td>
                            <td>{{ $rental->return_date }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <a href="{{ route('admin.rentals1.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; font-family: 'Press Start 2P', cursive; width: 100%; padding: 15px; font-size: 20px; border-radius: 8px; margin-top: 20px;">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection