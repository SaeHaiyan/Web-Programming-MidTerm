@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="font-family: 'Press Start 2P', cursive; color: yellow;">Create Rental</h1>
    <div class="card mx-auto" style="max-width: 600px;"> <!-- Center the card and limit its width -->
        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8);"> <!-- Card body for form padding -->
            <form action="{{ route('rentals.store') }}" method="POST" onsubmit="return showSuccessMessage()">
                @csrf
                <div class="form-group">
                    <label for="customer_id">Customer Name</label>
                    <select class="form-control" id="customer_id" name="customer_id" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="game_id">Game</label>
                    <select class="form-control" id="game_id" name="game_id" required>
                        @foreach($games as $game)
                            <option value="{{ $game->id }}">{{ $game->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rental_date">Rental Date</label>
                    <input type="date" class="form-control" id="rental_date" name="rental_date" required>
                </div>
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" required>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('rentals.index') }}" class="btn" style="background-color: #FF204E; color: black; width: 48%; font-family: 'Press Start 2P', cursive; padding: 15px; font-size: 20px;">Back</a>
                    <button type="submit" class="btn" style="background-color: #26355D; color: white; width: 48%; font-family: 'Press Start 2P', cursive; padding: 15px; font-size: 20px;">Create</button>
                </div>
            </form>
        </div> <!-- End of card body -->
    </div> <!-- End of card -->
</div>

<script>
    function showSuccessMessage() {
        alert("Rental data successfully added!");
        return true; // Allow the form to submit
    }
</script>
@endsection
