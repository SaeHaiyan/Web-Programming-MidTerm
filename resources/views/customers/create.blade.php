@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
        <i class="fas fa-user-plus"></i> Create User
    </h1>

    <div class="card mx-auto" style="max-width: 600px;"> <!-- Center the card and limit its width -->
        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8);"> <!-- Card body for form padding -->
            <form action="{{ route('customers.store') }}" method="POST" onsubmit="return showSuccessMessage()">
                @csrf
                
                <div class="form-group mb-4">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required style="border-radius: 5px;" />
                </div>
                
                <div class="form-group mb-4">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required style="border-radius: 5px;" />
                </div>
                
                <div class="form-group mb-4">
                    <label for="phone" class="font-weight-bold">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required style="border-radius: 5px;" />
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('rentals.index') }}" class="btn" style="background-color: #FF204E; color: black; width: 48%; font-family: 'Press Start 2P', cursive; padding: 15px; font-size: 20px;">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn" style="background-color:#26355D; color: white; width: 48%; font-family: 'Press Start 2P', cursive; padding: 15px; font-size: 20px;">
                        <i class="fas fa-user-plus"></i> Create
                    </button>
                </div>
            </form>
        </div> <!-- End of card body -->
    </div> <!-- End of card -->
</div>

<script>
    function showSuccessMessage() {
        alert("Customer data successfully added!");
        return true; // Allow the form to submit
    }
</script>
@endsection
