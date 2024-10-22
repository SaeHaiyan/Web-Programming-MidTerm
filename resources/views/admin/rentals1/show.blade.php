@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Rental Details</h1>

<div class="container mt-5">
    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(0, 0, 0, 0.7);"> <!-- Main card container -->
        <div class="card-body text-white">
            <table class="table table-striped table-hover"> <!-- Added striped and hover effects -->
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
            
            <a href="{{ route('admin.rentals1.index') }}" class="btn" style="background-color: #FF8F00; color: black; font-family: 'Press Start 2P', cursive; width: 100%; padding: 15px; font-size: 20px; border-radius: 8px; margin-top: 20px;">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>
@endsection
