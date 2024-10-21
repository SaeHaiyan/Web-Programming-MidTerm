@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 style="font-family: 'Press Start 2P', cursive; color: yellow;">Create Rental</h1>
    <div class="card mt-4"> <!-- Added card container -->
        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8);"> <!-- Card body for form padding -->
            <form action="{{ route('admin.rentals1.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="customer_id">Customer Name</label> <!-- Reverted to default text color -->
                    <select class="form-control" id="customer_id" name="customer_id" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="game_id">Game</label> <!-- Reverted to default text color -->
                    <select class="form-control" id="game_id" name="game_id" required>
                        @foreach($games as $game)
                            <option value="{{ $game->id }}">{{ $game->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rental_date">Rental Date</label> <!-- Reverted to default text color -->
                    <input type="date" class="form-control" id="rental_date" name="rental_date" required>
                </div>
                <div class="form-group">
                    <label for="rental_date">Return Date</label> <!-- Reverted to default text color -->
                    <input type="date" class="form-control" id="return_date" name="return_date" required>
                </div>
                <button type="submit" class="btn" style="background-color: rgb(5, 130, 175); color: white; font-family: 'Press Start 2P', cursive; width: 100%; padding: 15px; font-size: 20px; margin-top: 20px;">Create</button> <!-- Modified button styles -->
            </form>
        </div> <!-- End of card body -->
    </div> <!-- End of card -->
</div>
@endsection