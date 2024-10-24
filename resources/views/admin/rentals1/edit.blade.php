@extends('layouts.admin')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Edit Rental</h1>

<div class="container mb-5">
    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(0, 0, 0, 0.7); max-width: 500px; margin: auto;"> <!-- Set max-width and center the card -->
        <div class="card-body text-white"> <!-- Card body for consistent styling -->
            <form action="{{ route('admin.rentals1.update', $rental->id) }}" method="POST" onsubmit="return showSuccessMessage()">
                @csrf
                @method('PUT') 
                
                <div class="form-group mb-4">
                    <label for="customer_id" class="font-weight-bold">Customer</label>
                    <select class="form-control" id="customer_id" name="customer_id" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" @if($customer->id == $rental->customer_id) selected @endif>{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-4">
                    <label for="game_id" class="font-weight-bold">Game</label>
                    <select class="form-control" id="game_id" name="game_id" required>
                        @foreach($games as $game)
                            <option value="{{ $game->id }}" @if($game->id == $rental->game_id) selected @endif>{{ $game->title }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-4">
                    <label for="rental_date" class="font-weight-bold">Rental Date</label>
                    <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ $rental->rental_date }}" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="return_date" class="font-weight-bold">Return Date</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $rental->return_date }}">
                </div>
                
                <div class="d-flex justify-content-between mt-4"> <!-- Flexbox for buttons -->
                    <a href="{{ route('admin.rentals1.index') }}" class="btn" style="background-color: #FF8F00; color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn" style="background-color: #FF204E; color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showSuccessMessage() {
        alert("Rental data successfully edited!");
        return true; // Allow the form to submit
    }
</script>
@endsection
