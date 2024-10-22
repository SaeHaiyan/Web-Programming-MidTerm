@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        Edit User
    </h1> <!-- Title with gaming font and yellow color -->

    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.9); max-width: 400px; margin: auto;"> 
        <div class="card-body">
            <form action="{{ route('admin.customers1.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Input fields for the customer update -->
                <div class="form-group mb-4">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
                </div>
                <div class="form-group mb-4">
                    <label for="phone" class="font-weight-bold">Phone</label>
                    <input type="phone" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.customers1.index') }}" class="btn" style="background-color: #FF8F00; color: black; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn" style="background-color: #FF204E; color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div> <!-- End of card body -->
    </div> <!-- End of card -->
</div>


@endsection
