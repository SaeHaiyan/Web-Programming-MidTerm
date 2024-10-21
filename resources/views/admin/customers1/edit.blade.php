@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">Edit User</h1> <!-- Title with gaming font and yellow color -->

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.9);"> <!-- Container styling -->
        <form action="{{ route('admin.customers1.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Input fields for the customer update -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </div>
</div>
@endsection